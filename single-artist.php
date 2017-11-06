<?php
    /**
     * This is the template for displaying a single artist.
     */
 
    // LOAD DATA FOR SELECTED ARTIST
    $artist = get_artist($post);
    echo "<!--";
    print_r($artist);
    echo "-->";
    
    //For the Artist Header
    $artist_first = $artist -> additional_fields['first_name'];
    $artist_last = $artist -> additional_fields['last_name'];
    $artist_medium = $artist -> additional_fields['preferred_medium'];
    $artist_location = $artist -> additional_fields['location'];

    //Artist Main Page
    $artist_headshot = $artist -> additional_fields['additional_picture']['url'];
    $artist_bio = $artist -> content_filtered;
    $artist_interview = $artist -> additional_fields['interview'];


    // RENDER THEME HEADER
    echo get_header();

 ?>


 <!-- MAIN -->
 <main>
	<div id="inner-page" class="single-artist-main">
           
            <div class="single-artist-head">
                <h2><span class="artist-first-name"><?php echo $artist_first; ?></span> <?php echo $artist_last; ?></h2>
                <p><?php echo $artist_medium; ?></p>
                <p><?php echo $artist_location; ?></p>
            </div>
            
            <?php
                
                if ($artist_headshot == "" || $artist_headshot == null) {
                    echo '<div class="single-artist-about">
                            <div class="single-artist-bio-only">
                                <h3>Biography</h3>
                                <div>' . $artist_bio . '</div>
                            </div>
                        </div>';
                } else {
                    echo '<div class="single-artist-about">
                            <div class="single-artist-headshot">
                                <img src="' . $artist_headshot . '">
                            </div>
                            <div class="single-artist-bio">
                                <h3>Biography</h3>
                                <div>' . $artist_bio . '</div>
                            </div>
                        </div>';
                }   
        
            ?>

            <div class="artist-more"> 
                <div class="artist-sidebar">
                    <div class="artist-project-links">
                        <h4>Browse Artist Collections</h4>
                        <ul class="browse-artist-projects">
                           
                        <?php
                            foreach($artist -> projects as $project) {
                                echo '<li>
                                    <a href="' . $project -> guid . '">' . $project -> post_title . '</a>
                                    </li>';
                            } 
                        ?>
                           
                        </ul>
                    </div>
                    <div class="artist-contact">
                        <h4>Connect</h4>
                        <div class="artist-website">
                            <a href="#" target="_blank"><?php echo $artist -> additional_fields['website']; ?></a>
                        </div>
                        <!-- Social Icons -->
                        <!--<div class="artist-social-icons">
                            <a href="#" target="_blank"><img src="img/001-twitter-sign.png"></a>
                        </div>-->
                    </div>
                </div>
                
                <div class="artist-main-interview">
                 
                 <?php
                  
                  if ($artist_interview == "" || $artist_interview == null) {
                      
                      echo "<div></div>";
                      
                  } else {
                      
                      echo '<h3>Q&amp;A</h3>
                            <div class="question-and-answer">' . $artist_interview . '</div>';
                  }
                      
                ?>
                    
                </div>
            </div>
            
            <div class="back-button">
                <a href="http://localhost/beaconmedia/artist/">&larr; Back to all artists</a>
            </div>

        <!-- End inner page -->
        </div>
 </main>


 <?php echo get_footer(); ?>
