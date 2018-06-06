<?php
/**
 * Class to add meta box for page and post.
 *
 * @package Switty
 */

// Do if is admin only.
if ( is_admin() ) {
    add_action( 'load-post.php', 'switty_meta_box_first_func' );
    add_action( 'load-post-new.php', 'switty_meta_box_first_func' );
}

/**
 * Calls the class on the post edit screen.
 */
function switty_meta_box_first_func() {
    new Switty_Meta_Box_Main_Class();
}
 
/**
 * The Class.
 */
class Switty_Meta_Box_Main_Class {
 
    /**
     * Hook into the appropriate actions when the class is constructed.
     */
    public function __construct() {
        add_action( 'add_meta_boxes', array( $this, 'add_meta_box' ) );
        add_action( 'save_post',      array( $this, 'save' ) );
    }
 
    /**
     * Adds the meta box container.
     */
    public function add_meta_box( $post_type ) {
        // Limit meta box to certain post types.
        $post_types = array( 'post', 'page' );
 
        if ( in_array( $post_type, $post_types ) ) {
            add_meta_box(
                'switty_meta_box_cntnr',
                __( 'Switty Options for this Page / Post', 'switty' ),
                array( $this, 'render_meta_box_content' ),
                $post_type,
                'advanced',
                'high'
            );
        }
    }

     /**
     * Render Meta Box content.
     *
     * @param WP_Post $post The post object.
     */
    public function render_meta_box_content( $post ) {
 
        // Add an nonce field so we can check for it later.
        wp_nonce_field( 'switty_meta_bx_key', 'switty_meta_bx_key_nonce' );
 
        // Use get_post_meta to retrieve an existing value from the database.
        $show_hide_hdr_img_value = get_post_meta( $post->ID, '_switty_show_hide_hdr_img', true );

        $show_hide_ftr_wdgt_value = get_post_meta( $post->ID, '_switty_show_hide_ftr_wdgt', true );
 
        // Display the form, using the current value for show hide header image.
        ?>
        <p>
        <label for="show_hide_hrd_img">
            <?php _e( 'Wants to hide header image? ', 'switty' ); ?>
        </label>
        <input type="checkbox" id="show_hide_hrd_img" name="show_hide_hdr_img_val" <?php checked( $show_hide_hdr_img_value, 'on' ); ?> />
        </p>
        <?php

        // Display the form, using the current value for show hide footer widgets.
        ?>
        <p>
        <label for="show_hide_ftr_wdgt">
            <?php _e( 'Wants to hide Footer Widgets? ', 'switty' ); ?>
        </label>
        <input type="checkbox" id="show_hide_ftr_wdgt" name="show_hide_ftr_wdgt_val" <?php checked( $show_hide_ftr_wdgt_value, 'on' ); ?> />
        </p>
        <?php
    }
 
    /**
     * Save the meta when the post is saved.
     *
     * @param int $post_id The ID of the post being saved.
     */
    public function save( $post_id ) {
 
        /*
         * We need to verify this came from the our screen and with proper authorization,
         * because save_post can be triggered at other times.
         */
 
        // Check if our nonce is set.
        if ( ! isset( $_POST['switty_meta_bx_key_nonce'] ) ) {
            return $post_id;
        }
 
        $nonce = wp_unslash( $_POST['switty_meta_bx_key_nonce'] );
 
        // Verify that the nonce is valid.
        if ( ! wp_verify_nonce( $nonce, 'switty_meta_bx_key' ) ) {
            return $post_id;
        }
 
        /*
         * If this is an autosave, our form has not been submitted,
         * so we don't want to do anything.
         */
        if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
            return $post_id;
        }
 
        // Check the user's permissions.
        if ( 'page' == $_POST['post_type'] ) {
            if ( ! current_user_can( 'edit_page', $post_id ) ) {
                return $post_id;
            }
        } else {
            if ( ! current_user_can( 'edit_post', $post_id ) ) {
                return $post_id;
            }
        }
 
        /* OK, it's safe for us to save the data now. */
 
        // Sanitize the user input for show hide hdr img.
        $show_hide_hdr_img_val = ( isset( $_POST['show_hide_hdr_img_val'] ) && 'on' === $_POST['show_hide_hdr_img_val'] ) ? 'on' : 'off';

        // Sanitize the user input for show hide ftr wdgt.
        $show_hide_ftr_wdgt_val = ( isset( $_POST['show_hide_ftr_wdgt_val'] ) && 'on' === $_POST['show_hide_ftr_wdgt_val'] ) ? 'on' : 'off';
 
        // Update the meta field for show hide hdr img.
        update_post_meta( $post_id, '_switty_show_hide_hdr_img', $show_hide_hdr_img_val );

        // Update the meta field for show hide footer widgets.
        update_post_meta( $post_id, '_switty_show_hide_ftr_wdgt', $show_hide_ftr_wdgt_val );

    }

}
