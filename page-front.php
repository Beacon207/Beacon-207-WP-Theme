<?php
  /* Template Name: FP Template */

    // LOAD DATA FOR THE LIST OF ARTISTS
    $artists = get_artist_list();
    

    // HOME PAGE CONFIGURATION
    $hp_config = get_fields($post -> ID);
    $featured_artist = get_artist($hp_config["featured_artist"]);

    echo get_header();
?>


<!-- MAIN -->
<main class="home-wrap">
    
    
    <?php
        extract((array) $featured_artist);


        echo '  <div class="home-featured" style="background-image: url(\'' . $hp_config['featured_image']['sizes']['large'] . '\')">
                    <div class="browse-button feature-button">
                        <a href="' . $permalink . '">
                            <p>' . $additional_fields['first_name'] . " " . $additional_fields['last_name'] . '</p>
                        </a>
                    </div>
                </div>';
            
    ?>
    
    <!--
    <div class="tagline">
        <h1>Innovate &amp; Collaborate</h1>   
    </div>
    -->
    
    <div class="home-intro">
        <div class="home-intro-text">
           <div class="tagline">
                <h1>Innovate &amp; Collaborate</h1>   
            </div>
            <div class="intro-paragraph">
                
                <?php the_post(); ?>
                <!-- If there's an excerpt, output it here -->
                <?php 
                    $c = $post -> post_content;
                    $m = substr($c, 0, strpos($c, "<!--more-->"));
                    if($m) echo '<p>' . $m . '</p>';  
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
