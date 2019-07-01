<form role="search" method="get" class="header__searchbar-form" action="<?php echo esc_url( home_url( '/' ) ) ?>">
    <input type="search"  class="header__searchbar-input" placeholder="<?php echo __('Buscar...', TRANSDOMAIN); ?>" value="<?php echo get_search_query(); ?>" name="s">
    <button type="submit" id="header__searchbar-submit" class="header__searchbar-submit header__icon-submit"></button>
</form>