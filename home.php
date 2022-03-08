<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>
        <h2 class="font-style font-style__advantages description__style">
            Our common works
        </h2>
        <div class="contentBlock contentBlock__center">
            <div class="advantages">
                <div class="columns">


                <?php
global $post;

$myposts = get_posts([ 
	'numberposts' => -1,
]);

if( $myposts ){
	foreach( $myposts as $post ){
		setup_postdata( $post );
		?>
            <div class="description-container">
                <div class="frame frame__margin">
                    <div class="frame-text">
                        <h2 class="font-style heading__style-middle">
                            <?php the_title(); ?>
                        </h2>
                        <div class="font-style-mimi-description font-style-mimi-description__padding">
                            <?php the_content(); ?>
                        </div>
                    </div>                        
                    <div class="img-dlock-frame">
                        <!-- <img class="img-frame" src="<?php bloginfo('template_url'); ?>/assets/img/fr1.jpeg" alt=""> -->
                        <?php the_post_thumbnail(
                            array(300,300),
                            array(
                                'class'=>'img-frame'
                            )


                        ); ?>
                    </div>
                </div>
            </div>
		<?php 
	}
} 

wp_reset_postdata(); // Сбрасываем $post
?>

                    




                </div>
            </div>
        </div>



        <div class="contentBlock element-animation contentBlock__center">
            <div class="columns">
                <div class="double-pic">
                    <div class="contentBlock__center img-medium img-medium__relative">
                        
                        <img class="img-medium" src="<?php the_field('sub_largepic'); ?>" alt="">
                        <img class="img-inner-mini img-inner-mini__position" src="<?php the_field('sub_minipic'); ?>" alt="">
                    </div>
                </div>
                <div class="description-container">
                    <h2 class="font-style heading__style">
                        <?php the_field('sub_title'); ?>
                    </h2>
                    <h3 class="font-style-mimi-description font-style-mimi-description__margin">
                        <?php the_field('sub_minititle'); ?>
                    </h3>
                    <div class="font-style description__style">
                        <?php the_field('sub_description'); ?>
                    </div>
                </div>
            </div>
        </div>



        <div class="contentBlock60">
            <h3 class="font-style heading__style">
                Tell us about yourself
            </h3>
            <h4 class="font-style-mimi-description font-style-mimi-description__margin">
                Fill in the form below and we will contact you to discuss your appointment.
            </h4>
            <div class="block-form">
                <div class="two-blocks">
                    <input type="text" class="my-input two-blocks__margin" value="" placeholder="name" name="name">
                    <input type="tel" class="my-input two-blocks__margin" value="" placeholder="phone" name="phone">
                </div>
                <div class="two-blocks">
                    <input type="text" class="my-input two-blocks__margin" value="" placeholder="mail" name="mail">
                    <select tabindex="10" value="select" class="my-input two-blocks__margin" name="select">
                        <option value="get">get a service</option>
                        <option value="advice">professional advice</option>
                        <option value="date">set a date</option>
                        <option selected value="select">select a service</option>
                    </select>
                </div>
                <div class="two-blocks">
                    <input type="textarea" class="my-textarea two-blocks__margin" value="" placeholder="" name="mail">
                </div>
                <div class="two-blocks">
                    <a href="" class="double-border-button">Send</a>
                </div>
            </div>
        </div> 
        <?php get_footer(); ?>