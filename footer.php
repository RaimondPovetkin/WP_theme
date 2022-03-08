        <footer class="footer">
            <div class="block-form footer__margin">
                <div class="footer-blocks">
                    <a href="<?php the_field('instagram-link'); ?>">
                        <img class="img-mini" src="<?php bloginfo('template_url'); ?>/assets/img/in3.svg" alt="">
                    </a>
                    <a href="<?php the_field('vk-link'); ?>">
                        <img class="img-mini" src="<?php bloginfo('template_url'); ?>/assets/img/vk.svg" alt="">
                    </a>
                    <a href="<?php the_field('youtube-link'); ?>">
                        <img class="img-mini" src="<?php bloginfo('template_url'); ?>/assets/img/you.svg" alt="">
                    </a>
                </div>
                <div class="rights">
                    ©  2022 All Rights Reserved
                </div>
            </div>
        </footer> 

        <?php wp_footer(); ?>
    </body>
</html>