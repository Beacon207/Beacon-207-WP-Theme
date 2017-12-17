<?php
  /* Template Name: FP Template */

    // LOAD DATA FOR THE LIST OF ARTISTS
    $artists = get_artist_list();    
    usort($artists, function($a, $b){
        return $a -> menu_order < $b -> menu_order;
    });


    // GET SLIDESHOW
    $meta = get_fields($page -> ID);
    $slides = array();
    foreach($meta['slideshow'] as $slide){
        $slides[] = $slide['image']['sizes']['large'];
    }

    
    echo get_header();
?>


<!-- MAIN -->
<main class="home-wrap">
   

    <style>
        #slideshow_wrap {
            padding: 30px 0;
            background: black;
        }
        #slideshow_frame {
            height: 600px;
            max-width: 1000px;
            margin: auto;
            position: relative;
        }
   
        .slide {
            height: 100%;
            width: 100%;
            background-position: center center;
            background-size: cover;
            position: absolute;
            top: 0; left: 0;
            display: none;
            z-index: 0;
        }

        .slide:first-child {
            display: block;
            z-index: 1;
        }


        #rev_slider_1_1_wrapper {
            width: 100% !important;
        }

        @media screen and (max-width: 600px) {
            #slideshow_wrap { 
                padding-top: 10px;
            }
            #slideshow_frame {
                height: 400px;
            }
        }

        @media screen and (max-width: 400px) {
            #slideshow_frame {
                height: 300px;
            }
            .home-intro {
                padding: 10px 0 50px;
            }
    
        }

    </style>

    <script>
        var img_count = <?php echo count($slides); ?>;
        var transition = 600;
        var delay = 3000;
        var index = 0;


        function iterate(){

            // set your DOM pointers
            var current_slide = $('#slide_img_' + index);


            // get next slide
            index = (index == img_count - 1) ? 0 : index + 1;
            var next_slide = $('#slide_img_' + index);


            // display the next slide (in the back)
            next_slide.show();


            // fade out the top one, and revise layering order
            current_slide.fadeOut(600, function(){
                current_slide.css({"z-index" : 0 });
                next_slide.css({"z-index" : 1 });
            });


            // cue the next transition
            setTimeout("iterate()", delay);

        }


        // kick it off
        $(function(){
            setTimeout("iterate()", delay);
        })
    </script>

    <div id="slideshow_wrap">

        <div id="slideshow_frame">

            <?php 
                foreach($slides as $k => $s){
                    echo '<div class="slide" id="slide_img_' . $k . '" style="background-image: url(\'' . $s . '\')"></div>';
                }
            ?>

        </div>
    </div>

    
    <div class="home-intro">
        <div class="home-intro-text">
           <div class="tagline">
                <h1>Maine's Creative Collective</h1>   
            </div>
            <div class="intro-paragraph">
                
                <?php
                    the_post();
                ?>
                <?php the_content(null, true); ?>
                
            </div>
            <div class="browse-button">
                <p><a href="<?php echo site_url(); ?>/our-mission/">Our Mission</a></p>
            </div>
        </div>
    </div>
    
    <div class="home-featured-secondary">
        <div class="latest-works">
            <div class="line"></div>
            <div>
                <h2>Latest Works</h2>
            </div>
            <div class="line"></div>
        </div>
        
        <div class="featured-works">
            
            <?php
                $i = 0;
                foreach($artists as $artist) {
                    extract((array) $artist);
                    if ($i < 3) {
                        echo '  <div class="home-featured-item"><a href="' . $permalink . '">
                                    <img src="' . $image_paths['medium'] . '" alt="Project image">
                                    <p>' . $additional_fields['first_name'] . '</p>
                                    <p class="one-artist-last">' . $additional_fields['last_name'] . '</p>
                                </a></div> ';
                        $i++;
                    }
                }
            ?>
            
        </div>
        
        <div class="browse-button">
            <p><a href="<?php echo site_url(); ?>/artist/">Browse All</a></p>
        </div>
    </div>
    
</main>


<?php echo get_footer(); ?>
