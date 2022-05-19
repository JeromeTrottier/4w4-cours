<?php /* Template Name: Atelier */ ?>
<?php get_header() ?>
<main class="site__main">
     <section class="atelier">
          <?php if (have_posts()) : the_post(); ?>
               <h1>Atelier : <?php the_title() ?></h1>
               <?php
               $image = get_field('image');
               if (!empty($image)) : ?>
                    <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
               <?php endif ?>
               <h3>Description de l'atelier</h3>
               <p>L'animateur de l'atelier : <span class="important"><?php the_field('animateur') ?></span></p>
               <p>L'atelier sera donné au local : <span class="important"><?php the_field('local_ou_se_deroulera_latelier') ?></span></p>
               <p><?php the_field('description_de_latelier') ?></p>

               <h3>Horaires et dates de l'atelier</h3>
               <p>Durée de chacune des séances est de <span class="important"><?php the_field('duree_dune_seance_datelier') ?> heures</span></p>
               <p>Date de début : <span class="important"><?php the_field('date_de_debut_de_latelier') ?></span></p>
               <p>Date de fin : <span class="important"><?php the_field('date_de_fin_de_latelier') ?></span></p>
               <p>La formation se donnera : <span class="important"><?php the_field('jours_de_la_semaine_de_latelier') ?></span></p>
               <p>L'horaire : De <span class="important"><?php the_field('heure_du_debut_de_latelier') ?></span> à <span class="important"><?php the_field('heure_de_fin') ?></span></p>
               <?php the_content() ?>
          <?php endif ?>
     </section>
</main>
<?php get_footer() ?>