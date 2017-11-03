<?php 
    
    /**
     * This is the template for displaying a list of artists.
     */
 
    // LOAD DATA FOR THE LIST OF ARTISTS
    $artists = get_artist_list();
    print_r($artists);


    // RENDER THEME HEADER
    echo get_header(); 
    
?>


 <!-- MAIN -->

    <main>
    
        <div id="inner-page" class="all-artists-main">
           
        <div class="all-artists-head">
            <h1>Browse Artists</h1>
            <p>&#40;sorted alphabetically by last name&#41;</p>
        </div>      
                                
        <div class="all-artists-main"> 
          
        <!-- Using a for loop to print out the correct number of artists with headshots to the page -->
        <!-- UNSURE OF HOW TO SORT BY ALPHA? -->         
           <?php 
            for ($i = 0; $i < count($artists); $i++) {
            ?>
               <div class="one-artist">
                    <img src="<?php echo $artists[$i] -> additional_fields['additional_picture']['url']; ?>">    
                    <p class="one-artist-first"><?php echo $artists[$i] -> additional_fields['first_name']; ?></p>
                    <p class="one-artist-last"><?php echo $artists[$i] -> additional_fields['last_name']; ?></p> 
                </div>
            <?php
            }
            ?>
           
            <!-- ORIGINAL CODE BLOCK BEFORE PHP
            <div class="one-artist">
                <img src="img/img_placeholder.jpg" alt="artist headshot">
                <p class="one-artist-first">Remus</p>
                <p class="one-artist-last">Lupin</p>
            </div>
            -->
            
        </div>
        
        <div class="back-button">
            <a href="all-projects.html">&larr; View All Projects</a>
        </div>

        <!-- End inner page -->
        </div>

    </main>
    
    
   <?php echo get_footer(); ?>