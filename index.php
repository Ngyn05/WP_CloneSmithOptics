<?php get_header(); ?>
<main id="MainContent" class="content-for-layout focus-none" role="main" tabindex="-1">
    <div class="page-width section-template--padding" style="max-width: 1200px; margin: 40px auto; padding: 0 20px;">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h1 class="main-page-title page-title h0"><?php the_title(); ?></h1>
            <div class="rte"><?php the_content(); ?></div>
        <?php endwhile; endif; ?>
    </div>
</main>
<?php get_footer(); ?>