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
   
   <?php
    
    echo do_shortcode("[rev_slider slider1]");
    
    ?>
    
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
