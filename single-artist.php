<?php
    /**
     * This is the template for displaying a single artist.
     */
 
    // LOAD DATA FOR SELECTED ARTIST
    $artist = get_artist($post);
    echo "<!--";
    print_r($artist);
    echo "-->";
    

    extract( $artist -> additional_fields);

    // RENDER THEME HEADER
    echo get_header();

 ?>


 <!-- MAIN -->
 <main>
	<div id="inner-page" class="single-artist-main">
           
            <div class="single-artist-head">
                <h1><span class="artist-first-name"><?php echo $first_name; ?></span> 
                    <span class="artist-last-name"><?php echo $last_name; ?></span></h1>
                <div class="artist-medium">
                   <p><?php echo $preferred_medium; ?></p>
                </div>
                <div class="artist-location">
                    <p><span class="artist-city"><?php echo $location; ?></span></p>
                </div>
            </div>
            
            <div class="single-artist-about">
                <div class="single-artist-headshot">
                    <img src="<?php echo $additional_picture['url']; ?>">
                </div>
                <div class="single-artist-bio">
                   <h3>Biography</h3>
                    <div class="artist-bio"><?php  echo $artist -> content_filtered; ?></div>
                </div>
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
                        <?php
                            if($website){
                                echo    '<div class="artist-website">
                                            <a href="' . $website . '" target="_blank">' . $website . '</a>
                                        </div>';
                            }
                        ?>
                       
                        <!-- <div class="artist-social-icons">
                            <a href="#" target="_blank"><img src="img/001-twitter-sign.png"></a>
                        </div> -->
                    </div>
                </div>
                
                <div class="artist-main-interview">
                 
                    <?php 
                        if($interview){
                            echo    '<div class="artist-main-interview">
                                        <h3>Q&amp;A</h3>
                                        <div class="question-and-answer">' . $interview . '</div>
                                    </div>';
                        }
                    ?>
                    
                </div>

            </div>

            
            <div class="back-button">
                <a href="<?php echo site_url(); ?>artist/">&larr; Back to all artists</a>
            </div>

        <!-- End inner page -->
        </div>
 </main>


 <?php echo get_footer(); ?>
