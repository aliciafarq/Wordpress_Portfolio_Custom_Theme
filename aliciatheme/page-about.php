<!-- Header Template -->
<?php get_header(); ?>

TEST

<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div class="site_header">
      <h3 class=" mb-0">Alicia Farquharson</h3>

    </div id="topnavbarcontainer" class="container-fluid">
      <nav id="topnavbar" class="nav topnav justify-content-end">
        <div>

      <ul class="navbar">
        <li><a href="./index.html">Home</a></li>
        <li><a href="./gallery.html">Gallery</a></li>
        <li><a href="./about.html">About</a></li>
        <li><a href="./contact.html">Contact</a></li>
      </ul>

      </nav>

      <?php
        $args = array(
          'theme_location' => 'primary'
        );
        wp_nav_menu($args);
       ?>

<!-- main section -->
<section class="container mainarea">
  <?php
    while (have_posts()) {
      the_post(); ?>
    <h1><?php the_title(); ?></h1>
      <?php the_content();
    }
  ?>
</section>





<!-- Footer template file -->
<?php get_footer(); ?>
