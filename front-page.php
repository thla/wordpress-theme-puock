<?php get_header() ?>
    <?php if(pk_get_option('index_mode')!='company'): ?>
        <div class="front-hero height-100">

        <div class="container h-100 d-flex flex-column align-items-center justify-content-center text-center">
            <img class="church-img" alt="church" />
            <div class="h3 fs-3 mt-3 text-white">Evangelische Kirchengemeinden</div>
            <div class="display-4 font-weight-bold text-uppercase text-white">Heidelsheim-Helmsheim</div>
            <div class="arrow bounce">
              <a class="czs-angle-down-l h2 font-weight-bold text-light text-decoration-none" href="#blog"></a>
            </div>
            </div>
            </div>

    <div id="content" class="mt15 container">
        <?php get_template_part('ad/global','top') ?>
        <div class="row row-cols-1">
            <div class="col-lg-<?php pk_hide_sidebar_out('12','8') ?> col-md-12 <?php pk_open_box_animated('animated fadeInLeft') ?> ">
                <?php if(isset($paged) && $paged<=1): ?>
                    <div class="<?php pk_open_box_animated('animated fadeInLeft') ?>">
                        <?php get_template_part('templates/module','banners') ?>
                    </div>
                <?php endif; ?>
                <div class="<?php pk_open_box_animated('animated fadeInLeft') ?>
                <?php echo pk_post_style_list() ? '':'pr-0 pl-0' ?>">
                    <div>
                        <?php get_template_part('templates/module','posts') ?>
                    </div>
                </div>
            </div>
            <?php get_sidebar() ?>
        </div>

        <?php get_template_part('templates/module','cms') ?>

        <?php get_template_part('templates/module','links') ?>

        <?php get_template_part('ad/global','bottom') ?>
    </div>

    <?php else: get_template_part('templates/page','company'); endif; ?>



<?php get_footer() ?>
