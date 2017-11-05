<?php
    /**
     * This is the template for displaying a single artist.
     */
 
    // LOAD DATA FOR SELECTED ARTIST
    $artist = get_artist($post);
    print_r($artist);


    // RENDER THEME HEADER
    echo get_header();

 ?>


 <!-- MAIN -->
 <main>
	<div id="inner-page" class="single-artist-main">
           
            <div class="single-artist-head">
                <h1><span class="artist-first-name"><?php echo $artist -> additional_fields['first_name']; ?></span> 
                    <span class="artist-last-name"><?php echo $artist -> additional_fields['last_name']; ?></span></h1>
                <div class="artist-medium">
                   <p><?php echo $artist -> additional_fields['preferred_medium']; ?></p>
                </div>
                <div class="artist-location">
                    <p><span class="artist-city"><?php echo $artist -> additional_fields['location']; ?></span></p>
                </div>
            </div>
            
            <div class="single-artist-about">
                <div class="single-artist-headshot">
                    <img src="<?php echo $artist -> additional_fields['additional_picture']['url']; ?>">
                </div>
                <div class="single-artist-bio">
                   <h3>Biography</h3>
                    <div class="artist-bio"><?php  echo $artist -> content_filtered; ?></div>
                </div>
            </div>

            <div class="artist-more"> 
                <div class="artist-sidebar">
                    <div class="artist-project-links">
                        <h3>Browse Featured</h3>
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
                        <h3>Connect</h3>
                        <div class="artist-website">
                            <a href="#" target="_blank"><?php echo $artist -> additional_fields['website']; ?></a>
                        </div>
                        <div class="artist-social-icons">
                            <a href="#" target="_blank"><img src="img/001-twitter-sign.png"></a>
                        </div>
                    </div>
                </div>
                <div class="artist-main-interview">
                    <h3>Q&amp;A</h3>
                    <div class="question-and-answer">
                        <?php echo $artist -> additional_fields['interview']; ?>
                    </div>
                </div>
            </div>

            
            <div class="back-button">
                <a href="#">&larr; Back to all artists</a>
            </div>

        <!-- End inner page -->
        </div>
 </main>


 <?php echo get_footer(); ?>
