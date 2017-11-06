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

    <div id="inner-page">
       
       <div class="project-sidebar">
            <h3><?php echo $artist -> additional_fields['first_name']; ?> <?php echo $artist -> additional_fields['last_name']; ?></h3>
            
            <h2><?php echo $project -> post_title; ?></h2>

            <!-- PROJECT DESCRIPTION -->
            <p><?php echo $project -> post_content; ?></p>
            
            <h4><a href="<?php echo $artist -> permalink; ?>">View Artist Bio</a></h4>
        </div>
        
        <div class="project-content-container">
        
            <?php

            if ($project -> additional_fields['type'] == "Photography") {

                foreach ( $project -> additional_fields['images'] as $img ) {
                    echo    '<div class="one-thumbnail">
                            <a href="#"><img src="' . $img['image']['sizes']['medium'] . '" alt="'  . $img['image']['alt'] .'"></a>
                            </div>'; 
                }
            } else if ($project -> additional_fields['type'] == "Video") {
                echo "video goes here"; 
            }

            ?>
        
        <!-- END project-content-container -->
        </div>
        
        <div class="browse-options">
            <div class="back-button">
                <a href="<?php echo site_url(); ?>/project/">&larr; all projects</a>
            </div>
            <div class="back-button">
                <a href="<?php echo site_url(); ?>/artist/">all artists &rarr;</a>
            </div>
        </div>
        
    <!-- END inner-page -->
    </div>
	
 </main>


 <?php echo get_footer(); ?>
