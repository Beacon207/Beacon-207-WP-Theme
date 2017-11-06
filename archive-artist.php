<?php 
    
    /**
     * This is the template for displaying a list of artists.
     */
 
    // LOAD DATA FOR THE LIST OF ARTISTS
    $artists = get_artist_list();


    // THE SORT CAN (AND PROBABLY SHOULD) HAPPEN IN THE MODEL, BUT HERE'S WHAT IT LOOKS LIKE
    usort($artists, function($a, $b){
        return $a -> additional_fields['first_name'] > $b -> additional_fields['first_name'];
    });


    echo '<!--';
    print_r($artists);
    echo '-->';

    // RENDER THEME HEADER
    echo get_header(); 
    
?>


 <!-- MAIN -->

    <main>
    
        <div id="inner-page" class="all-artists-main">
           
        <div class="archive-head">
            <h1>Browse Artists</h1>
            <p>sorted alphabetically by last name</p>
        </div>      
                                
        <div class="all-artists-main"> 
          
            <?php 

                foreach($artists as $artist){
                    extract($artist-> additional_fields);
                    
                    if ( $additional_picture == "" || $additional_picture == null) {
                    
                        
                    }
                    
                    echo  '<div class="one-artist">
                                <a href="' . $artist -> permalink . '">
                                <img src="' . $additional_picture['url'] . '">
                                <p class="one-artist-first">' . $first_name . '</p>
                                <p class="one-artist-last">' . $last_name . '</p></a>
                            </div>';
                }
                   
            ?>
           
            
        </div>
        
        <div class="back-button">
            <a href="<?php echo site_url(); ?>/project/">&larr; View All Collections</a>
        </div>

        <!-- End inner page -->
        </div>

    </main>
    
    
   <?php echo get_footer(); ?>