
<?php get_header(); ?>


<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div class="site_header">
      <h3 class=" mb-0">Alicia Farquharson</h3>

    </div id="topnavbarcontainer" class="container-fluid">
      <nav id="topnavbar" class="nav topnav justify-content-end">

        <div class="navbar">
          <?php
            $args = array(
              'theme_location' => 'primary'
            );
            wp_nav_menu($args);
           ?>
         </div>

      <!-- <ul class="navbar">
        <li><a href="./index.html">Home</a></li>
        <li><a href="./gallery.html">Gallery</a></li>
        <li><a href="./about.html">About</a></li>
        <li><a href="./contact.html">Contact</a></li>
      </ul> -->

      </nav>




       <!-- // $args = array(
       //   'category_name' => 'about'
       // );
       //
       // $aboutpost = new WP_Query($args);
       //
       // if($aboutpost->have_posts()){
       //   while($aboutpost->have_posts()){
       //     $aboutpost->the_post();
// wp_reset_postdata(); -->




  </header>

  <main class="">
    <!-- <h1>Cover your page.</h1>
    <p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
    <p class="lead">
      <a href="#" class="btn btn-lg btn-secondary fw-bold border-white bg-white">Learn more</a>
    </p> -->
    <img src="<?php echo get_template_directory_uri(); ?>/assets/AF_Logo.png" alt="AF_Logo" class="logo" >
    <video id="background-video" autoplay muted poster="" playsinline>
    <source src="<?php echo get_template_directory_uri(); ?>/assets/glitter.mp4" type="video/mp4">
  </video>
  </main>

    <!-- <footer>
      <div class="footer_left text-white">
        <p>&copy; 2021 AF Studios</p>
      </div>
      <div class="footer_right">
        <h5>Thanks for Visiting!</h5>
        <p class="text-white">I'm so happy you stopped by. <br>
          Your time is truly appreciated.
        </p>
      </div>
    </footer>
  </div> -->
    <!-- CSS only -->

  <!-- <body> -->
      <!-- <header>
          <div class="header_left">
              <img src="./assets/AF_Logo.png" alt="AF Logo">
          </div>
          <div class="header_right">
              <p>Design | Illustration | Photography</p>
              <br>
              <p>Orlando, FL</p>
              <br>
              <p>myemail@email.com</p>
          </div>

      </header>

      <section>
        <div class="subheader">
          <h2>Welcome</h2>
        </div>

        <nav>
          <div>

        <ul class="navbar">
          <li><a href="./index.html">Home</a></li>
          <li><a href="./gallery.html">Gallery</a></li>
          <li><a href="./about.html">About</a></li>
          <li><a href="./contact.html">Contact</a></li>
        </ul>

          </div>
        </nav>

       </section>
      <main>

      </main>

      <footer>
        <div class="footer_left">
          <p>&copy; 2021 AF Studios</p>
        </div>
        <div class="footer_right">
          <h5>Thanks for Visiting!</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </footer> -->

      <!-- JavaScript Bundle with Popper -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->

  <!-- </body> -->

<?php get_footer(); ?>
