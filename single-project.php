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
       
       <div class="project-sidebar">
            <div class="single-project-head">
                <div class="single-project-artist">
                    <h3><span class="single-project-artist-first"><?php echo $artist -> additional_fields['first_name']; ?></span>

                      <span class="single-project-artist-last"><?php echo $artist -> additional_fields['last_name']; ?></span></h3>
                </div>
                <div class="single-project-title">
                    <h2><?php echo $project -> post_title; ?></h2>
                </div>
            </div>

            <div class="single-project-description">
                <p><?php echo $project -> post_content; ?></p>
            </div>
            
            <h4>Click Thumbnails to enlarge &rarr;</h4>
        </div>
        
        <div class="project-content-container">
        
        <?php
        
        if ($project -> additional_fields['type'] == "Photography") {
                       
                    foreach ( $project -> additional_fields['images'] as $img ) {
                        echo    '<div class="one-thumbnail">
                                <img src="' . $img['image']['sizes']['medium'] . '" alt="'  . $img['image']['alt'] .'">
                                </div>'; 
                    }
        }
        
        ?>
        
        <!-- end project-content-container -->
        </div>
        
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
