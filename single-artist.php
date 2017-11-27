<?php
    /**
     * This is the template for displaying a single artist.
     */
 
    // LOAD DATA FOR SELECTED ARTIST
    $artist = get_artist($post);
    extract( $artist -> additional_fields);

    // RENDER THEME HEADER
    echo get_header();

 ?>


 <!-- MAIN -->
 <main>
	<div id="inner-page">
          
        <div class="single-artist-main">
           
            
            <!-- SIEBAR -->
            <div class="single-artist-sidebar">

                <div class="single-artist-head">
                    <h2><span class="artist-first-name"><?php echo $first_name; ?></span> <?php echo $last_name; ?></h2>
                    <p><?php echo $preferred_medium; ?></p>
                    <p><?php echo $location; ?></p>
                </div>

                <div class="single-artist-headshot">
                    <img src="<?php echo $additional_picture['sizes']['medium']; ?>">
                </div>
                
                <?php
                    if($website){
                        echo    '<h4>Connect</h4>
                                <div class="artist-website">
                                    <a href="' . $website . '" target="_blank">' . $website . '</a>
                                </div>';
                    }
                ?>
            </div>
            
            <div class="single-artist-more"> 
                 <div class="photo-gallery">
                    <?php
                        
                        foreach ( $images as $img ) {
                            echo    '<a href="' . $img['image']['sizes']['large'] . '" data-lightbox="gallery1">
                                        <img class="one-thumbnail" src="' . $img['image']['sizes']['thumbnail'] . '" />
                                    </a>'; 
                        }
                        
                    ?>
                    <div style="clear: both;"></div>
                </div>

                <?php

                    if($youtube_url){

                        $video_path = explode("?v=", $youtube_url)[1];
                        $video_id = explode("&", $video_path)[0];

                        if(!$video_id) echo "<h1>Invalid Youtube URL</h1>";
                        else {
                            echo '<iframe   width="100%" height="400px" 
                                        src="https://www.youtube.com/embed/' . $video_id . '" 
                                        frameborder="0" gesture="media" allowfullscreen></iframe>';
                        }

                        

                    }
                ?>


                <div class="artist-bio">
                    <h3>Bio</h3>
                    <div><?php echo $artist -> content_filtered; ?></div>
                </div>
                <div class="artist-interview">
                    <?php 
                        if($interview){
                            echo '<h3>Q&amp;A</h3>
                                    <div>' . $interview . '</div>';
                        }
                    ?>
                </div>
            </div>
            
        <!-- END single-artist-main -->
        </div>
            
        <div class="browse-options">
            <div class="browse-button">
                <p><a href="<?php echo site_url(); ?>/artist/">&larr; View all artists</a></p>
            </div>
        </div>
            
    <!-- END inner page -->
    </div>
 </main>


 <?php echo get_footer(); ?>
