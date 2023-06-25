<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- Navigation-->

    <?php get_template_part('includes/header'); ?>

    <?php if (have_posts()): ?>
        <?php while (have_posts()):
            the_post(); ?>
            <?php
            $eyecatch = get__eyecatch_width_default();
            ?>
            <!-- Page Header-->
            <header class="masthead" style="background-image: url('<?php echo $eyecatch[0] ?>')">
                <div class="container position-relative px-4 px-lg-5">
                    <div class="row gx-4 gx-lg-5 justify-content-center">
                        <div class="col-md-10 col-lg-8 col-xl-7">
                            <div class="page-heading">
                                <h1>
                                    <?php the_title(); ?>
                                </h1>
                                <span class="subheading">This is what I do.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Main Content-->
            <main class="mb-4">
                <div class="container px-4 px-lg-5">
                    <div class="row gx-4 gx-lg-5 justify-content-center">
                        <div class="col-md-10 col-lg-8 col-xl-7">
                            <?php the_content(); ?>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe nostrum ullam eveniet pariatur
                                voluptates odit, fuga atque ea nobis sit soluta odio, adipisci quas excepturi maxime quae totam
                                ducimus consectetur?</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius praesentium recusandae illo eaque
                                architecto error, repellendus iusto reprehenderit, doloribus, minus sunt. Numquam at quae
                                voluptatum in officia voluptas voluptatibus, minus!</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequuntur magnam, excepturi
                                aliquid ex itaque esse est vero natus quae optio aperiam soluta voluptatibus corporis atque iste
                                neque sit tempora!</p>
                        </div>
                    </div>
                </div>
            </main>
        <?php endwhile; ?>
    <?php endif; ?>
    <svg xmlns="http://www.w3.org/2000/svg" width="300" height="300" viewBox="0 0 300 300">
        <!-- シェルティの体 -->
        <circle cx="150" cy="150" r="100" fill="#f2d5af" />

        <!-- シェルティの耳 -->
        <polygon points="80,120 120,80 120,180" fill="#7f5741" />
        <polygon points="220,120 180,80 180,180" fill="#7f5741" />

        <!-- シェルティの目 -->
        <circle cx="120" cy="150" r="10" fill="#000000" />
        <circle cx="180" cy="150" r="10" fill="#000000" />

        <!-- シェルティの鼻 -->
        <circle cx="150" cy="180" r="5" fill="#000000" />

        <!-- シェルティの口 -->
        <path d="M120,200 Q150,220 180,200" fill="none" stroke="#000000" stroke-width="3" />

        <!-- シェルティの尾 -->
        <path d="M40,150 Q70,130 70,170" fill="none" stroke="#7f5741" stroke-width="5" />
    </svg>
    <!-- Footer-->
    <!-- Footer-->
    <?php get_template_part('includes/footer'); ?>
    <?php get_footer(); ?>

</body>

</html>