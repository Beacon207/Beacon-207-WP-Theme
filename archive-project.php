<?php 

    /**
     * This is the template for displaying a list of projects.
     */
 
    // LOAD DATA FOR THE LIST OF PROJECTS
    $projects = get_project_list();
    echo "<!--";
    print_r($projects);
    echo "-->";


    // RENDER THEME HEADER
    echo get_header(); 

?>


    <!-- MAIN -->

    <main>
    
        <div id="inner-page">
            <div id="inner-head">
                <h1>Artist Collections</h1>
            </div>
                
            
            <div id="main-projects">
              
            <?php
                
                foreach($projects as $project) {

                    $html = $project -> thumbnail;
                    $doc = new DOMDocument();
                    $doc->loadHTML($html);
                    $xpath = new DOMXPath($doc);
                    $src = $xpath->evaluate("string(//img/@src)");
                    
                    echo ' <a href="' . $project -> guid . '" class="single-project-container">            <div>
                                <img img src="' . $src . '" alt="Project image" class="image">
                                    <div class="overlay">
                                        <div class="overlay-text">
                                            <div class="overlay-text-artist">' . $project -> artist . '</div>
                                            <div class="overlay-text-project">' . $project -> post_title . '</div>
                                        </div>
                                    </div>
                                </div></a> ';
                    
                }
                
            ?>
               
                <!--<a href="#" class="single-project-container"><div>
                    <img img src="img/img_placeholder.jpg" alt="Project image" class="image">
                    <div class="overlay">
                        <div class="overlay-text">
                            <div class="overlay-text-artist">John Doe</div>
                            <div class="overlay-text-project">Name of Collection</div>
                        </div>
                    </div>
                </div></a>-->
            </div>
           
            <div class="back-button">
                <a href="http://localhost/beaconmedia/artist/">&larr; View All Artists</a>
            </div>
              
        <!-- End inner page -->
        </div>

    </main>
    
<?php echo get_footer(); ?>
