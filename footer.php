<footer class="l-footer p-footer">

            <ul class="p-footer__index">

                <li class="p-footer__item c-index-item">
                    <a href="#"><?php wp_nav_menu( array( 'theme_location' => 'footer_nav' ) ); ?></a>
                </li>

                
            </ul>

            <p class="p-footer__copyright c-copyright"><?php bloginfo( 'name' ); ?>2022</p>
        </footer>

        <script src="js/index.js"></script>

        <?php wp_footer(); ?>
        
    </body>
</html>
