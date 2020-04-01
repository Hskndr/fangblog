<?php get_header(); ?>
<section id="main">

    <section id="articles_list">
        <!-- MOSTRAR NOMBRE DE LA CATEGORIA -->
        <h2 id="cat_name"><?php single_cat_title( $prefix = '', $display = true ); ?></h2>
        <!-- INCLUIR DINAMICAMENTE LAS ENTRADAS -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article>
                <!-- MODIFICAR DINAMICAMENTE LAS IMAGENES -->
                <div class="thumb">
                    <a href="<?php the_permalink(); ?>">
                        <?php if ( has_post_thumbnail() ) {
                            the_post_thumbnail('list_articles_thumbs');
                        } ?>
                    </a>
                </div>

                <!-- <img src="https://loremflickr.com/300/200" alt="" class="thumb">-->

                <!-- MODIFICAR DINAMICAMENTE LAS ENTRADAS y el link -->
                <hgroup><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></hgroup>
                <!-- MODIFICAR DINAMICAMENTE LAS Fechas y Categorias -->
                <div class="date"><?php the_date(); ?> en <span><?php the_category(); ?> </span></div>
                <!-- MODIFICAR DINAMICAMENTE texto de entradas -->
                <div class="extract"> <?php the_excerpt(); ?> </div>
            </article>
        <?php endwhile; else: ?>
            <h1> No se encontraron Articulos </h1>
        <?php endif; ?>
        <!-- MODIFICAR DINAMICAMENTE Los botones -->
        <div id="pagination">
            <p><?php next_posts_link('<-Post Siguientes'); ?>
                <?php previous_posts_link('Post Anteriores->'); ?> </p>
        </div>
    </section>

    <?php get_sidebar(); ?>
</section>
<?php get_footer(); ?>

<!--
History
https://www.youtube.com/watch?v=sr96OUdWD4w&list=PLhSj3UTs2_yUwYp_ueyulofOhRBKYa4j-&index=16
min 14:34
-->

