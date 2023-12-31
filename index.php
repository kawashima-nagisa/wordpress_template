<!DOCTYPE html>
<html lang="en">

<head>
    <?php get_header(); ?>
</head>

<body>
    <?php get_template_part('includes/header'); ?>

    <!-- Page Header-->
    <header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="site-heading">
                        <h1>Clean Blog
                            <?php echo date('n') ?>
                        </h1>
                        <span class="subheading">A Blog Theme by Start Bootstrap</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <?php $lists = have_posts(); ?>
                <?php if ($lists): ?>

                    <!-- Post preview-->
                    <?php while (have_posts()):
                        the_post(); ?>
                        <div class="post-preview">
                            <a href="<?php the_permalink(); ?>">
                                <h2 class="post-title">


                                    <?php $title = the_title('🔸', '❌', false); ?>
                                    <?php the_title(); ?>
                                </h2>
                                <h3 class="post-subtitle">
                                    <?php the_excerpt(); ?>
                                </h3>
                            </a>
                            <p class="post-meta">
                                Posted by
                                <?php echo str_replace('body', 'hoge', $title); ?>
                                <a href=">">
                                    <?php the_author(); ?>
                                </a>

                                <?php the_time(get_option('date_format')); ?>
                            </p>
                        </div>
                        <!-- Divider-->
                        <hr class="my-4" />
                    <?php endwhile; ?>

                    <!-- Pager-->
                    <!-- <div class="d-flex justify-content-end mb-4">
                        <a class="btn btn-primary text-uppercase" href="#">新しい記事へ ←</a>
                    </div> -->

                    <!-- <a class="btn btn-primary text-uppercase" href="#">
                        古い記事へ →</a> -->
                    <?php
                    $link = get_previous_posts_link('新しい記事へ→');
                    // var_dump($link);
                    if ($link) {
                        $link = str_replace('<a', '<a class="btn btn-primary text-uppercase"', $link);
                        echo $link;

                    }
                    ?>
                    <?php
                    $link = get_next_posts_link('古い記事へ→');
                    // var_dump($link);
                    if ($link) {
                        $link = str_replace('<a', '<a class="btn btn-primary text-uppercase"', $link);
                        echo $link;

                    }
                    ?>
                </div>
            <?php else: ?>
                <p>記事が見つかりませんでした</p>
            <?php endif; ?>
        </div>
    </div>
    </div>


</body>
<?php get_template_part('includes/footer'); ?>

<?php get_footer(); ?>

</html>