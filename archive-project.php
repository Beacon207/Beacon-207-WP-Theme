<?php 

    /**
     * This is the template for displaying a list of projects.
     **/

 
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
           
            <div class="inner-main">
                <div class="inner-head">
                    <h2>Browse Projects</h2>
                    <!--<hr/>-->
                    <p>Click to view entire body of work</p>
                </div> 

                <div class="archive-project-list">
                    <?php
                        foreach($projects as $project) {
                            extract((array) $project);
                            echo '  <a href="' . $guid . '" class="single-project-container">
                                        <div>
                                            <img src="' . $featured_image['medium'] . '" alt="Project image" class="image">
                                            <div class="overlay">
                                                <div class="overlay-text">
                                                    <div class="overlay-text-artist">' . $artist -> post_title . '</div>
                                                    <div class="overlay-text-project">' . $post_title . '</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a> ';
                            }
                    ?>
                </div>
            
            <!-- END archive-main --> 
            </div>
            
            <div class="browse-options">
                <div class="browse-button">
                    <p><a href="<?php echo site_url(); ?>/artist/">&larr; View All Artists</a></p>
                </div>
            </div>
              
        <!-- End inner page -->
        </div>

    </main>
    
<?php echo get_footer(); ?>
