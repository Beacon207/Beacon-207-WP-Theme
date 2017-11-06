<?php
    /**
     * This is the template for displaying a single project.
     */

    // LOAD DATA FOR SELECTED PROJECT
    // ---
    // get_project() here is an example of a "model" function because it works directly with the "data model."
    // If we do this kind of thing correctly, as long as get_project() continues to return the same kind of data,
    // we can change what's happening under the hood of that function (how the data is stored etc.) without needing to change the template at all. 
    $project = get_project($post);
    $artist = $project -> artist;


    // if you want to print_r a PHP variable, throw it between comments to avoid throwing off your actual UI...
    echo '<!--';
    print_r($project);
    print_r($artist);
    echo '-->';


    // you can also output in javascript and use your developer tools to look at it...
    /*
    echo '  <script>
                console.log("project:");
                console.log(' . json_encode($project) . ');
                console.log("artist:");
                console.log(' . json_encode($artist) . ')
            </script>';
    */

    ///////////////////////////////////////////////////

    // RENDER THEME HEADER
    echo get_header();

    ///////////////////////////////////////////////////


    // here's an example HTML block that shows you how to fetch some different information from the data object returned 
    /*
    echo '  <div style="padding: 50px; border: solid 1px #ccc; margin: 50px;">
                <b>Artist Name:</b><br />' . $artist -> post_title . 
                '<br /><br /><b>Arist First Name:</b><br />' . $artist -> additional_fields['first_name'] . 
                '<br /><br /><b>Projects:</b><br />';
                foreach($artist -> projects as $project){
                    echo $project -> post_title . '<br />';
                }
    echo    '</div>';
    */
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
                        <a href="#"><img src="' . $img['image']['sizes']['thumbnail'] . '" alt="gallery thumbnail"></a>
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
                <a href="http://localhost/beaconmedia/project/">&larr; Back to all projects</a>
            </div>
            <div class="back-button">
                <a href="<?php echo $artist -> permalink; ?>">View Artist Bio</a>
            </div>
            <div class="back-button">
                <a href="http://localhost/beaconmedia/artist/">Back to all artists &rarr;</a>
            </div>
        </div>
    <!-- End inner page -->
    </div>
	
 </main>


 <?php echo get_footer(); ?>
