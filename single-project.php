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
       
        <div class="single-project-main">
       
            <div class="project-sidebar">
                <h3><?php echo $artist -> additional_fields['first_name']; ?> <?php echo $artist -> additional_fields['last_name']; ?></h3>
                <h2><?php echo $project -> post_title; ?></h2>
                <!-- PROJECT DESCRIPTION -->
                <p><?php echo $project -> post_content; ?></p>
                <h4><a href="<?php echo $artist -> permalink; ?>">View Artist Bio</a></h4>
            </div>

            <div class="project-content-container">
               
               <?php
                
                foreach ( $project -> additional_fields['images'] as $img ) {
                            echo    '<a href="' . $img['image']['sizes']['large'] . '"' . 'data-lightbox="gallery1"' . '>
                                        <div class="one-thumbnail" style="background-image: url(' . $img['image']['sizes']['thumbnail'] . ')">
                                        </div>
                                    </a>'; 
                        }
                ?>
                
               
               <!-- For some reason this code did not work for me
               Trying to get this to print ONLY with the photography type -->
                <?php
                    //if ($project -> additional_fields['type'] == "Photography") {

                        //foreach ( $project -> additional_fields['images'] as $img ) {
                            //echo    '<div class="one-thumbnail">
                                    //<a href="#"><img src="' . $img['image']['sizes']['medium'] . '" alt="'  . $img['image']['alt'] .'"></a>
                                    //</div>'; 
                        //}
                    //} else if ($project -> additional_fields['type'] == "Video") {
                        //echo "video goes here"; 
                    //}
                ?>
            </div>
        
        <!-- END single-project-main -->
        </div>
        
        <div class="browse-options">
            <div class="home-button">
                <p><a href="<?php echo site_url(); ?>/project/">&larr; View all projects</a></p>
            </div>
            <div class="home-button">
                <p><a href="<?php echo site_url(); ?>/artist/">View all artists &rarr;</a></p>
            </div>
        </div>
        
    <!-- END inner-page -->
    </div>
	
 </main>


 <?php echo get_footer(); ?>
