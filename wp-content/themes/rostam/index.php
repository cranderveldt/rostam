<?php get_header(); ?>
<section id="content" role="main">
<div class="banner title-banner blog">
<h1 class="h1">Rostam Wall</h1>
</div>
<p class="preamble">Welcome to the Rostam Wall. This is a place for thought, discussion, and debate. The purpose of the Wall is to educate, as well as leave our readers in a state of inquiry.</p>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php comments_template(); ?>
<?php endwhile; endif; ?>
<?php get_template_part( 'nav', 'below' ); ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>