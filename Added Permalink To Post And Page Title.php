add_filter( 'genesis_post_title_output', 'ac_post_title_output', 15 );
    function ac_post_title_output( $title ) {
    if ( is_singular() )
        $title = sprintf( '<a href="%s" title="%s" rel="bookmark">%s</a>', get_permalink(), the_title_attribute( 'echo=0' ), apply_filters( 'genesis_post_title_text', $title ) );
    return $title;
}
