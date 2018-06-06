<?php
/**
 * OStore Demo Import Options 
 * Demo Import File 
 */
function ostore_import_files() {
    return array(
      array(
        'import_file_name'           => 'Default',
        'categories'                 => array( 'Ecommerce','Fashion'),
        'import_file_url'            => 'http://demo.themerelic.com/demo-import/ostore/default/all-content.xml',
        'import_widget_file_url'     => 'http://demo.themerelic.com/demo-import/ostore/default/widget.wie',
        'import_customizer_file_url' => 'http://demo.themerelic.com/demo-import/ostore/default/customizer.dat',
        
        'import_preview_image_url'   => 'https://themerelic.com/wp-content/uploads/2017/09/schreenshort.png',
        'import_notice'              => __( 'After you import this demo, you will have to setup the slider separately.', 'ostore' ),
        'preview_url'                => 'http://demo.themerelic.com/ostore/',
      ),
      array(
        'import_file_name'           => 'Default',
        'categories'                 => array( 'Ecommerce','Fashion'),
        'import_file_url'            => 'http://demo.themerelic.com/demo-import/ostore/default/all-content.xml',
        'import_widget_file_url'     => 'http://demo.themerelic.com/demo-import/ostore/default/widget.wie',
        'import_customizer_file_url' => 'http://demo.themerelic.com/demo-import/ostore/default/customizer.dat',
        
        'import_preview_image_url'   => 'https://themerelic.com/wp-content/uploads/2017/09/schreenshort.png',
        'import_notice'              => __( 'After you import this demo, you will have to setup the slider separately.', 'ostore' ),
        'preview_url'                => 'http://demo.themerelic.com/ostore/',
      ),
    );
  }
  add_filter( 'pt-ocdi/import_files', 'ostore_import_files' );