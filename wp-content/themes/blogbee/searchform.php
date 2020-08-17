<?php
/**
 * Template for displaying search forms
 *
 * @package BlogBee
 */

?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label>
        <span class="screen-reader-text"><?php echo esc_html_x( 'Search for:', 'label', 'blogbee' ) ?></span>
        <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search ...', 'placeholder', 'blogbee' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'blogbee' ) ?>" />
    </label>
    <button type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'blogbee' ) ?>"><i class="fa fa-search"></i></button>
</form>