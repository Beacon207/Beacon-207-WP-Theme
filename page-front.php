<?php
  /* Template Name: Front Page */

  echo get_header();
?>


<!-- MAIN -->
<main>
   <div id="home-feature" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/example/sample_stock4.jpeg');">
        <div id="home-feature-artist">
            <p id="artist-name">John Doe</p>
            <p id="artist-word">"Hipster Shit" photo series</p>
        </div>
    </div>

    <div id="tagline-main">
        <div class="tagline">
            <h1>Innovate &amp; Collaborate</h1>
        </div>
    </div>

    <div id="view-more-main">Click to View<br>Featured Portfolios</div>
    <div id="arrow">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/down_arrow.png" alt="down arrow">
    </div>

    <div id="featured-works">
        <div class="home-featured-item">
            <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/example/sample_home_gallery1.JPG" alt="money and sex"></a>
        </div>
        <div class="home-featured-item">
            <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/example/sample_home_gallery2.png" alt="collage and birds"></a>
        </div>
        <div class="home-featured-item">
            <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/example/sample_home_gallery3.png" alt="a women illustration"></a>
        </div>
    </div>

    <div id="portfolio">
        <h2><a href="#">Browse All Portfolios</a></h2>
    </div>
</main>


<?php echo get_footer(); ?>
