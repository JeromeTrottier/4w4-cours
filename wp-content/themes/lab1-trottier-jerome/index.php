<?php get_header(); ?>
<h1>
    Vive Wordpress
</h1>
<?php
if (have_posts()) :
    while (have_posts()) : ?>
        <article>
            <?php
            the_post();
            the_title('<h2>', '</h2>');
            the_content('<p>', '</p>');
            ?>
        </article>
<?php
    endwhile;
endif;
?>
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur minus voluptatibus mollitia. Excepturi laborum quae explicabo perferendis, aperiam dolorum, hic, minus culpa vel officiis doloremque blanditiis molestias porro praesentium architecto!</p>
<?php get_footer(); ?>