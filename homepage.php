<?php /* Template Name: homepage
*/ ?>
<!--Header-->
<?php get_header(); ?>

<section id="cover">
            <div class="container">
                
                    <div class="cover-text align-middle">
                        <img src="<?php bloginfo('template_directory'); ?>/images/hthlogo_md.png"><br>
                        Help The Homeless Worldwide fully believes in their journey and knows with the help of mankind, they can achieve their goal of <br><strong>helping the homeless worldwide.</strong>
                        
                        <a href="donate" class="btn btn-large btn-yellow">DONATE</a>
                    </div>
                <div class="cover-text"></div>
        
            
                
            </div>
        </section>
        
        <div style="display:table; width: 100%;">
        <div class="homeless-face">
        <h2 id="hthtext">HELP THE HOMELESS<BR>WORLDWIDE</h2>
        </div>
        </div>
            <section id="main-info">
            <div class="container">
            <h2>Helping those in need is a way of life</h2>
                <p>It is a part of human nature to look out for one another, but in some cases, help is not readily available and sometimes there is not enough help.</p>
                <p>Help The Homeless Worldwide wants to change that by helping those who are in need which will also include other organizations that are under funded across the globe. Help The Homeless Worldwide fully believes in their journey and knows with the help of mankind, they can achieve their goal of helping the homeless worldwide.</p>
                <p>Without the help from others, the homeless population will continue to grow leaving many people with nothing, including children regardless of their story. This is not how life is supposed to be, we are here together, as one and we should help one another the same as we help ourselves. Help The Homeless Worldwide asks that you come be apart of their amazing journey.</p>
            </div>
                </section>
<!--Footer-->
<?php get_footer(); ?>
<script type="text/javascript">
        
$(function() {
    var hthtext = $("#hthtext");
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
    
        if (scroll >= 200) {
            hthtext.addClass('h2-expand');
        } else {
            hthtext.removeClass('h2-expand');
        }
    });
});
        </script>
