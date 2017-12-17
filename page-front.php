<?php
  /* Template Name: FP Template */

    // LOAD DATA FOR THE LIST OF ARTISTS
    $artists = get_artist_list();    
    usort($artists, function($a, $b){
        return $a -> menu_order < $b -> menu_order;
    });
    
    echo "<!--";
        print_r($artists);
    echo "-->";

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
        }
        .slide {
            height: 100%;
            width: 100%;
            background-position: center center;
            background-size: 100%;
        }

        @media screen and (max-width: 600px) {
            #slideshow_frame {
                height: 400px;
            }
        }

        @media screen and (max-width: 400px) {
            #slideshow_frame {
                height: 200px;
            }
        }

    </style>

    <script>

    </script>

    <div id="slideshow_wrap">

        <div id="slideshow_frame">
<!-- 
            <div class="slide" id="slide_img_1" style="background-image: url('/cmty/beacon media/admin/content/slideshow/1.jpg')"></div>
            <div class="slide" id="slide_img_2" style="display: none; background-image: url('/cmty/beacon media/admin/content/slideshow/2.jpg')"></div>
            <div class="slide" id="slide_img_2" style="display: none; background-image: url('/cmty/beacon media/admin/content/slideshow/3.jpg')"></div>
 -->

            <?php echo do_shortcode("[rev_slider slider1]"); ?>

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
