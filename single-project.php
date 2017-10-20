<?php
/**
 * This is the template for displaying a single project.
 */
 echo get_header();
 ?>


 <!-- MAIN -->
 <main>
 
 <!-- I kept this here because the file by this name was already created, and this code was in it: -->
	<?php
		if ( have_posts() ) {
			while ( have_posts() ) {

				the_post();

				echo '<h1>' . get_the_title() . '</h1>';
				the_content();

			}
		}
	?>

    <main>
    
        <div id="inner-page" class="single-project-main">
            <div class="single-project-head">
                <div class="single-project-artist">
                    <h2><span class="single-project-artist-first">Dean</span> <span class="single-project-artist-last">Thomas</span></h2>
                </div>
                <div class="single-project-title">
                    <h1>Butterbeer: Wizards Love It</h1>
                </div>
            </div>
            <div class="single-project-description">
                <p>Aliquam neque nisi, porttitor et orci cursus, varius scelerisque purus. Pellentesque nunc dui, ultricies ut suscipit vitae, feugiat sed felis. Mauris odio ipsum, interdum id mauris at, fermentum euismod ex. Suspendisse rhoncus vel orci id dignissim. Nunc dapibus eu nunc nec sodales. Duis sollicitudin libero id ante suscipit, sed tempor elit sagittis. Nulla pharetra nisi ac nisl convallis facilisis. Maecenas ipsum sapien, vestibulum at libero quis, ornare vestibulum ante. Duis vel eleifend nisi, vitae convallis tortor. Sed efficitur turpis ac molestie sodales. Donec faucibus elementum justo.</p>
            </div>
            <div class="single-project-section">
               <!-- TWO COLUMNS IF IMAGES (is this possible?) -->
               <div class="project-with-thumbnails">
                   <p>Click thumbnails to enlarge</p>
                    <div class="thumbnails-display">
                        <div class="one-thumbnail">
                            <a href="#"><img src="img/img_placeholder.jpg" alt="gallery thumbnail"></a>
                        </div>
                        <div class="one-thumbnail">
                            <a href="#"><img src="img/img_placeholder2.jpeg" alt="gallery thumbnail"></a>
                        </div>
                        <div class="one-thumbnail">
                            <a href="#"><img src="img/img_placeholder.jpg" alt="gallery thumbnail"></a>
                        </div>
                        <div class="one-thumbnail">
                            <a href="#"><img src="img/img_placeholder2.jpeg" alt="gallery thumbnail"></a>
                        </div>
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
            
            <div class="project-comments">
                <!-- Not sure if Max still wants this...but I am assuming there is a plugin for comments, and that I do not need to hand code it! -->
            </div>
            
            <div class="project-browse-options">
                <div class="back-button">
                    <a href="all-projects.html">&larr; Back to all projects</a>
                </div>
                <div class="back-button">
                    <a href="single-artist.html">View Artist Page</a>
                </div>
                <div class="back-button">
                    <a href="all-artists.html">Back to all artists &rarr;</a>
                </div>
            </div>
        <!-- End inner page -->
        </div>
	
	
 </main>


 <?php echo get_footer(); ?>
