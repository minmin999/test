<form action="<?php echo esc_url( home_url('/') );?>">
    <input name="s" value="<?php echo esc_attr( get_search_query() ); ?>" type="text" class="search-fld" placeholder="<?php esc_attr_e( 'Search Keyword here ...', 'fire-blog' ) ?>">
    <a href=""><i class="fa fa-search"></i></a>
</form>