<?php 
    
    /**
     * This is the template for displaying a list of artists.
     */
 
    // LOAD DATA FOR THE LIST OF ARTISTS
    $artists = get_artist_list();


    // RENDER THEME HEADER
    echo get_header(); 
    
?>


 <!-- MAIN -->

    <main>
    
        <div id="inner-page">
             
            <div class="inner-main">
                <div class="inner-head">
                    <h2>Browse Artists</h2>
                    <!--<hr/>-->
                    <p>Sorted alphabetically by last name</p>
                </div>
                
                <div class="archive-artist-list">     
                    <?php 
                        foreach($artists as $artist){
                            extract($artist-> additional_fields);

                            echo  '<div class="one-artist">
                                        <a href="' . $artist -> permalink . '">
                                        <img src="' . $artist -> image_paths['medium'] . '">
                                        <p>' . $first_name . '</p>
                                        <p class="one-artist-last">' . $last_name . '</p></a>
                                    </div>';
                        }
                    ?>
                </div>
            <!-- END archive-main -->    
            </div>
        
          

        <!-- End inner page -->
        </div>

    </main>
    
    
   <?php echo get_footer(); ?>