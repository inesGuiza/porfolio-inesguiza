<nav id="menu-ines" class="global-nav js-open">
    <ul class="global-nav__list">
        <li>
            <a href="./">HOME</a>
        </li>
        <li>
            <a href="./">WORKS</a>
        </li>
        <li>
            <a href="./">BLOG</a>
        </li>
        <li>
            <a href="./">ABOUT</a>
        </li>
        <li>
            <a class="js-contact" href="./">CONTACT</a>
        </li>
    </ul>
    <?php
        wp_nav_menu([
          'menu_class' => '',
          'theme-location' => 'main-menu',
          'container' => ''
          ]);
          ?>
</nav>