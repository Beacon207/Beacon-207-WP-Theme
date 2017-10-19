<?php
/**
 * This is the template for displaying a single artist.
 */
 echo get_header();
 ?>


 <!-- MAIN -->
 <main>
	<div id="inner-page" class="single-artist-main">
           
            <div class="single-artist-head">
                <h1><span class="artist-first-name">Dave</span> <span class="artist-last-name">Richards</span></h1>
                <div class="artist-medium">
                   <p>Photographer</p>
                </div>
                <div class="artist-location">
                    <p><span class="artist-city">Portland</span>, <span class="artist-state">Maine</span></p>
                </div>
            </div>
            
            <div class="single-artist-about">
                <div class="single-artist-headshot">
                    <img src="img/img_placeholder.jpg" alt="artist headshot">
                </div>
                <div class="single-artist-bio">
                   <h3>Biography</h3>
                    <div class="artist-bio"><p>Fusce quis pharetra risus, a faucibus ligula. Aenean condimentum, arcu et aliquam vestibulum, mauris velit feugiat leo, vel tempor mauris metus eget dui. Quisque eget posuere sem, ac congue sem. Vivamus porta, nisi pellentesque cursus vehicula, mauris enim auctor augue, tempor ultricies libero orci vitae eros. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed porttitor ante sed nisi aliquet, nec tempor nibh aliquam. Vivamus porta, nisi pellentesque cursus vehicula, mauris enim auctor augue, tempor ultricies libero orci vitae eros. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed porttitor ante sed nisi aliquet, nec tempor nibh aliquam. Mauris porttitor, lorem vitae eleifend tempor, purus est facilisis orci, id aliquam quam felis at neque.</p></div>
                </div>
            </div>

            <div class="artist-more"> 
                <div class="artist-sidebar">
                    <div class="artist-project-links">
                        <h3>Browse Featured</h3>
                        <ul class="browse-artist-projects">
                            <li><a href="#">Name of Project Here</a></li>
                            <li><a href="#">Name of Project Here</a></li>
                        </ul>
                    </div>
                    <div class="artist-contact">
                        <h3>Connect</h3>
                        <div class="artist-website">
                            <a href="#" target="_blank">www.daveswebsite.com</a>
                        </div>
                        <div class="artist-social-icons">
                            <a href="#" target="_blank"><img src="img/001-twitter-sign.png"></a>
                        </div>
                    </div>
                </div>
                <div class="artist-main-interview">
                    <h3>Q&amp;A</h3>
                    <div class="question-and-answer">
                        <div class="artist-question"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit?</p></div>
                        <div class="artist-answer"><p>Sed vel est in nulla pretium posuere non sit amet augue. In hac habitasse platea dictumst. Proin felis nulla, dapibus ut lorem vel, placerat ultrices lorem. Integer mattis augue facilisis erat tincidunt, convallis tristique tellus commodo. Aliquam erat volutpat.</p></div>
                    </div>
                    <div class="question-and-answer">
                        <div class="artist-question"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit?</p></div>
                        <div class="artist-answer"><p>Quisque eget posuere sem, ac congue sem. Vivamus porta, nisi pellentesque cursus vehicula, mauris enim auctor augue, tempor ultricies libero orci vitae eros. Sed vel est in nulla pretium posuere non sit amet augue. In hac habitasse platea dictumst. Proin felis nulla, dapibus ut lorem vel, placerat ultrices lorem. Integer mattis augue facilisis erat tincidunt, convallis tristique tellus commodo. Aliquam erat volutpat.</p></div>
                    </div>
                    <div class="question-and-answer">
                        <div class="artist-question"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit?</p></div>
                        <div class="artist-answer"><p>Sed vel est in nulla pretium posuere non sit amet augue. In hac habitasse platea dictumst. Proin felis nulla, dapibus ut lorem vel, placerat ultrices lorem. Integer mattis augue facilisis erat tincidunt, convallis tristique tellus commodo. Aliquam erat volutpat.</p></div>
                    </div>
                </div>
            </div>

            
            <div class="back-button">
                <a href="all-artists.html">&larr; Back to all artists</a>
            </div>

        <!-- End inner page -->
        </div>
 </main>


 <?php echo get_footer(); ?>
