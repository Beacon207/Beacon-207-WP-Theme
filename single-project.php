<?php
    /**
     * This is the template for displaying a single project.
     */

    $project = get_project($post);
    $artist = $project -> artist;


    echo '<!--';
    print_r($project);
    print_r($artist);
    echo '-->';


    // RENDER THEME HEADER
    echo get_header();

 ?>


<!-- MAIN --> 
<main>

    <div id="inner-page" class="single-project-main">
        <div class="single-project-head">
            <div class="single-project-artist">
                <h2><span class="single-project-artist-first"><?php echo $artist -> additional_fields['first_name']; ?></span>
                
                  <span class="single-project-artist-last"><?php echo $artist -> additional_fields['last_name']; ?></span></h2>
            </div>
            <div class="single-project-title">
                <h1><?php echo $project -> post_title; ?></h1>
            </div>
        </div>
        <div class="single-project-description">
            <p><?php echo $project -> post_content; ?></p>
        </div>
        <div class="single-project-section">
           <!-- TWO COLUMNS IF IMAGES (is this possible?) -->
           <div class="project-with-thumbnails">
               <p>Click thumbnails to enlarge</p>
                <div class="thumbnails-display">
                   
                   <?php 
                    
                        foreach ( $project -> additional_fields['images'] as $img ) {
                            echo ' <div class="one-thumbnail">
                        <a href="#"><img src="' . $img['image']['sizes']['thumbnail'] . '" alt="'  . $img['image']['alt'] .'"></a>
                    </div> '; 
                        }
                    
                    ?>

                </div>
            </div>
            <div class="single-project-image-lg">
               <!-- Max mentioned that he wanted people to be able to click through photos. My idea was that you can click on any of the small thumbnails, which will then pop up as the main image here...not sure if that is possible! -->
                <img src="img/img_placeholder2.jpeg" alt="image title">
            </div>
           
            <!-- ONE COLUMN IF VIDEO (is this possible?) -->
            <!-- <div class="project-with-video">
                <iframe width="420" height="345" src="https://www.youtube.com/embed/XGSy3_Czz8k">
                </iframe>
            </div> -->
        </div>
        
        <!--<div class="project-comments">
            Not sure if Max still wants this...but I am assuming there is a plugin for comments, and that I do not need to hand code it!
        </div>-->
        
        <div class="project-browse-options">
            <div class="back-button">
                <a href="<?php echo site_url(); ?>/project/">&larr; Back to all projects</a>
            </div>
            <div class="back-button">
                <a href="<?php echo $artist -> permalink; ?>">View Artist Bio</a>
            </div>
            <div class="back-button">
                <a href="<?php echo site_url(); ?>/artist/">Back to all artists &rarr;</a>
            </div>
        </div>
    <!-- End inner page -->
    </div>
	
 </main>


 <?php echo get_footer(); ?>
