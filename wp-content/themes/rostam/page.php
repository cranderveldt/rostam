<?php get_header(); ?>
<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header class="header">
<h1 class="entry-title"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
</header>
<section class="entry-content">

  <header class="home-header">
    <div class="fixed">
      <div class="branding">
        <a href="/" class="home-logo">Rostam Law</a>
        <p>Innovative Legal Practice</p>
      </div>
      <div class="tagline">
        <h2>Rethinking Legal Services</h2>
      </div>
    </div>
  </header>
  <section class="page-thumbs">
    <div class="row slim-row">
      <div class="col-sm-5th">
        <a href="/who-we-are" class="img who-we-are">
          <h3>Who We Are</h3>
        </a>
      </div>
      <div class="col-sm-5th">
        <a href="/what-we-do" class="img what-we-do">
          <h3>What We Do</h3>
        </a>
      </div>
      <div class="col-sm-5th">
        <a href="/attorneys" class="img attorneys">
          <h3>People</h3>
        </a>
      </div>
      <div class="col-sm-5th">
        <a href="/contact" class="img contact">
          <h3>Contact</h3>
        </a>
      </div>
      <div class="col-sm-5th">
        <a href="/blog" class="img blog">
          <h3>Blog</h3>
        </a>
      </div>
    </div>
  </section>
<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
<?php the_content(); ?>
<div class="entry-links"><?php wp_link_pages(); ?></div>
</section>
</article>
<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
<?php endwhile; endif; ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>