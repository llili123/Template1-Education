<?php get_header() ?>
<div id="preloader">
    <div class="spinner">
        <div class="cube"></div>
        <div class="cube"></div>
        <div class="cube"></div>
        <div class="cube"></div>
        <div class="cube"></div>
        <div class="cube"></div>
        <div class="cube"></div>
        <div class="cube"></div>
        <div class="cube"></div>
    </div>
</div>

<section id="home">
    <div data-velocity="-.3" class="home-parallax"></div>
    <div class="home-overlay"></div>
    <div class="welcome-text">
        <div class="container">
            <h2 class="wow animated fadeInDown">We Are Awesome</h2>
            <p class="wow animated fadeInUp">Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer</p>
            <div class="social-bookmark animated bounceInLeft">
                <a class="animated fadeInDown" href=""><i class="fa fa-facebook-square"></i></a>
                <a href=""><i class="fa fa-twitter-square"></i></a>
                <a href=""><i class="fa fa-linkedin-square"></i></a>
                <a href=""><i class="fa fa-google-plus-square"></i></a>
                <a href=""><i class="fa fa-youtube-square"></i></a>
                <a href=""><i class="fa fa-instagram"></i></a>
                <a href=""><i class="fa fa-flickr"></i></a>
            </div>
        </div>
    </div>
</section>

<nav id="navigation">
    <div class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">培训教育类<span>模板</span></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#home">首页</a></li>
                    <li><a href="#about">关于我们</a></li>
                    <li><a href="#features">业务范围</a></li>
                    <li><a href="#portfolio">教学环境</a></li>
                    <li><a href="#testimonials">师资团队</a></li>
                    <li><a href="#our-team">学员风采</a></li>
                    <li><a href="#pricing">课程介紹</a></li>
                    <li><a href="#blog">媒体报道</a></li>
                    <li><a href="#contact">联系我们</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-6 wow animated fadeInUp">
                <h2 class="page-title">基本乐理基础训练芭蕾舞民间舞舞蹈艺术概论</h2>
                <p>调研结果大中小学从事舞蹈艺术大类中排名第21位。截止到2016年12月24日，3000位舞蹈学专业毕业生的平均薪资为4800元左右，其中应届毕业生工资平均为3500元，0-2年工资3814元，3-5年工资5615元，10年以上工资8600元，社会培训机构平均6-7年工资12499元，8-10年工资18600元。就业前景比较好的城市有：北京、上海、广州、深圳、武汉、杭州、成都、苏州、东莞、天津。</p>
                <p>研结果表明，大中小学校需要舞蹈教育专业毕业大中小学名第21位。截止到2016年12月24日，3000位舞蹈学专业毕业生的平均薪资为4800元左右，其中办学模式，是时代发展和学校艺术教育、会教、会创编，有的地区还要兼任音乐课教学任务。为此，以舞蹈技能和师范性相整合生不仅会跳、会教、会创编，有的地区还要兼任音乐课教学任务。为此，以舞蹈技能和师范</p>
            </div>
            <div class="col-md-6 wow animated fadeInUp">
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/img/demo-images/about.jpg" alt="" />
            </div>
        </div>
    </div>
</section>
<section id="features" class="section-padding">
    <div data-velocity="-.1" class="features-bg"></div>
    <div class="container">
        <div class="row">
            <?php
            $latest_cat_post = new WP_Query(array('category_name' => 'jiaoyu01-yewufanwei', 'posts_per_page' => 9));
            if ($latest_cat_post->have_posts()) : while ($latest_cat_post->have_posts()) : $latest_cat_post->the_post();
                    ?>
                <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
                <div class="col-md-4 col-sm-6 wow animated fadeInLeft" data-wow-duration="700ms" data-wow-delay="100ms">
                    <div class="features-item">
                        <i class="fa fa-rocket"></i>
                        <h2><?php the_title(); ?></h2>
                        <p class="yewufanwei-content">
                            <?php the_content(); ?> </p>
                    </div>
                </div>
                <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>
<section id="portfolio" class="section-padding">
    <div class="container">
        <div class="row wow animated fadeInDown">
            <div class="col-md-12 text-center hero-title">
                <i class="fa fa-plane"></i>
                <h2 class="page-title">教学环境</h2>
                <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI. Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 wow animated fadeInUp">
                <ul class="portfolio-filters text-center">
                    <li class="filter active" data-filter="*">All</li>
                    <li class="filter" data-filter=".design">教室</li>
                    <li class="filter" data-filter=".html">排练厅</li>
                    <li class="filter" data-filter=".wordpress">休息室</li>
                    <li class="filter" data-filter=".seo">宿舍</li>
                </ul>
                <div id="portfolio_list" class="row">
                    <?php
                    $latest_cat_post = new WP_Query(array('category_name' => 'jiaoxuehuanjing', 'tag' => 'jiaoshi'));
                    if ($latest_cat_post->have_posts()) : while ($latest_cat_post->have_posts()) : $latest_cat_post->the_post();
                            ?>
                        <?php if (has_post_thumbnail($post->ID)): ?>
                        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
                        <div class="col-sm-4 col-xs-12 pitem design">
                            <div class="portfolio_item">
                                <img class="img-responsive" src="<?php echo $image[0]; ?>" alt="" />
                                <div class="portfolio-detail">
                                    <div class="portfolio-overlay"></div>
                                    <a href="<?php echo $image[0]; ?>" data-litebox-group="myGallery" class="litebox"></a>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php
                        endwhile;
                    endif;
                    ?>
                            <?php
                    $latest_cat_post = new WP_Query(array('category_name' => 'jiaoxuehuanjing', 'tag' => 'pailianting'));
                    if ($latest_cat_post->have_posts()) : while ($latest_cat_post->have_posts()) : $latest_cat_post->the_post();
                            ?>
                                <?php if (has_post_thumbnail($post->ID)): ?>
                                <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
                                <div class="col-sm-4 col-xs-12 pitem html">
                                    <div class="portfolio_item">
                                        <img class="img-responsive" src="<?php echo $image[0]; ?>" alt="" />
                                        <div class="portfolio-detail">
                                            <div class="portfolio-overlay"></div>
                                            <a href="<?php echo $image[0]; ?>" data-litebox-group="myGallery" class="litebox"></a>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php
                        endwhile;
                    endif;
                    ?>
                                    <?php
                    $latest_cat_post = new WP_Query(array('category_name' => 'jiaoxuehuanjing', 'tag' => 'xiuxishi'));
                    if ($latest_cat_post->have_posts()) : while ($latest_cat_post->have_posts()) : $latest_cat_post->the_post();
                            ?>
                                        <?php if (has_post_thumbnail($post->ID)): ?>
                                        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
                                        <div class="col-sm-4 col-xs-12 pitem wordpress">
                                            <div class="portfolio_item">
                                                <img class="img-responsive" src="<?php echo $image[0]; ?>" alt="" />
                                                <div class="portfolio-detail">
                                                    <div class="portfolio-overlay"></div>
                                                    <a href="<?php echo $image[0]; ?>" data-litebox-group="myGallery" class="litebox"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endif; ?>
                                        <?php
                        endwhile;
                    endif;
                    ?>
                                            <?php
                    $latest_cat_post = new WP_Query(array('category_name' => 'jiaoxuehuanjing', 'tag' => 'sushe'));
                    if ($latest_cat_post->have_posts()) : while ($latest_cat_post->have_posts()) : $latest_cat_post->the_post();
                            ?>
                                                <?php if (has_post_thumbnail($post->ID)): ?>
                                                <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
                                                <div class="col-sm-4 col-xs-12 pitem seo">
                                                    <div class="portfolio_item">
                                                        <img class="img-responsive" src="<?php echo $image[0]; ?>" alt="" />
                                                        <div class="portfolio-detail">
                                                            <div class="portfolio-overlay"></div>
                                                            <a href="<?php echo $image[0]; ?>" data-litebox-group="myGallery" class="litebox"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php endif; ?>
                                                <?php
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="testimonials" class="section-padding">
    <div class="container">
        <div class="row wow animated fadeInDown">
            <div class="col-md-12 text-center hero-title">
                <i class="fa fa-quote-left"></i>
                <h2 class="page-title">师资团队</h2>
                <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI. Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. </p>
            </div>
        </div>
        <div class="row wow animated fadeInUp">
            <div class="testimonial_section">
                <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
                    <ul class="clients-list" role="tablist">
                        <?php
                        $latest_cat_post = new WP_Query(array('category_name' => 'shizi', 'tag' => 'active', 'posts_per_page' => 1));
                        if ($latest_cat_post->have_posts()) : while ($latest_cat_post->have_posts()) : $latest_cat_post->the_post();
                                ?>
                            <?php if (has_post_thumbnail($post->ID)): ?>
                            <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
                            <li style="width:50%;">
                                <a data-toggle="tab" href="#client-<?php the_ID(); ?>"><img src="<?php echo $image[0]; ?>" alt=""  /></a>
                            </li>
                            <?php endif; ?>
                            <?php
                            endwhile;
                        endif;
                        ?>
                                <?php
                        $latest_cat_post = new WP_Query(array('category_name' => 'shizi', 'tag' => 'noactive', 'posts_per_page' => 11));
                        if ($latest_cat_post->have_posts()) : while ($latest_cat_post->have_posts()) : $latest_cat_post->the_post();
                                ?>
                                    <?php if (has_post_thumbnail($post->ID)): ?>
                                    <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
                                    <li style="width:50%;">
                                        <a data-toggle="tab" href="#client-<?php the_ID(); ?>"><img src="<?php echo $image[0]; ?>" alt=""  /></a>
                                    </li>
                                    <?php endif; ?>
                                    <?php
                            endwhile;
                        endif;
                        ?>
                    </ul>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12">
                    <div class="client-testimonials-list">
                        <?php
                        $latest_cat_post = new WP_Query(array('category_name' => 'shizi', 'tag' => 'active', 'posts_per_page' => 12));
                        if ($latest_cat_post->have_posts()) : while ($latest_cat_post->have_posts()) : $latest_cat_post->the_post();
                                ?>
                            <?php if (has_post_thumbnail($post->ID)): ?>
                            <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
                            <div id="client-<?php the_ID(); ?>" class="single-testimonial tab-pane fade in active">
                                <h2><?php the_title(); ?></h2>
                                <p>
                                    <?php the_content(); ?> </p>
                                <div class="client-info">
                                    <h2>Jennifer Toyen</h2>
                                    <p>Artist</p>
                                </div>
                            </div>
                            <?php endif; ?>
                            <?php
                            endwhile;
                        endif;
                        ?>
                                <?php
                        $latest_cat_post = new WP_Query(array('category_name' => 'shizi', 'tag' => 'noactive', 'posts_per_page' => 11));
                        if ($latest_cat_post->have_posts()) : while ($latest_cat_post->have_posts()) : $latest_cat_post->the_post();
                                ?>
                                    <?php if (has_post_thumbnail($post->ID)): ?>
                                    <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
                                    <div id="client-<?php the_ID(); ?>" class="single-testimonial tab-pane fade in ">
                                        <h2><?php the_title(); ?></h2>
                                        <p>
                                            <?php the_content(); ?> </p>
                                        <div class="client-info">
                                            <h2>Jennifer Toyen</h2>
                                            <p>Artist</p>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php endwhile;
endif;
?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="parallax_1">
    <div data-velocity="-.3" class="parallax-bg"></div>
    <div class="parallax-overlay"></div>
    <div class="container">
        <div class="row wow animated fadeInDown">
            <div class="col-md-12">
                <div class="call_to_action text-center">
                    <h2 class="page-title">Our awesome call to action title goes here!</h2>
                    <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI. Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas.</p>
                    <a href="" class="btn btn-filled">Buy It Now</a>
                    <a href="" class="btn btn-bordered">See WP Version</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="our-team" class="section-padding">
    <div class="container">
        <div class="row wow animated fadeInDown">
            <div class="col-md-12 text-center hero-title">
                <i class="fa fa-user"></i>
                <h2 class="page-title">学员风采</h2>
                <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI. Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. </p>
            </div>
        </div>
        <div class="row wow animated fadeInUp">
            <?php
            $latest_cat_post = new WP_Query(array('category_name' => 'xueyuanfengcai', 'tag' => '', 'posts_per_page' => 11));
            if ($latest_cat_post->have_posts()) : while ($latest_cat_post->have_posts()) : $latest_cat_post->the_post();
                    ?>
                <?php if (has_post_thumbnail($post->ID)): ?>
                <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
                <div class="col-sm-4">
                    <div class="team-item">
                        <a href="<?php the_permalink(); ?>"><img src="<?php echo $image[0]; ?>" alt=""  /></a>
                        <h2><?php the_title() ?></h2>
                        <h4 class="xueyuan"><?php the_excerpt(); ?></h4>
                        <p class="xueyuanjieshao">
                            <?php the_content(); ?> </p>
                        <div class="social-profile">
                            <a href=""><i class="fa fa-facebook-square"></i></a>
                            <a href=""><i class="fa fa-twitter-square"></i></a>
                            <a href=""><i class="fa fa-linkedin-square"></i></a>
                            <a href=""><i class="fa fa-google-plus-square"></i></a>
                            <a href=""><i class="fa fa-youtube-square"></i></a>
                            <a href=""><i class="fa fa-instagram"></i></a>
                            <a href=""><i class="fa fa-flickr"></i></a>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <?php endwhile;
endif; ?>
        </div>
    </div>
</section>
<section id="pricing" class="section-padding">
    <div class="container">
        <div class="row wow animated fadeInDown">
            <div class="col-md-12 text-center hero-title">
                <i class="fa fa-usd"></i>
                <h2 class="page-title">课程介绍</h2>
                <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI. Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. </p>
            </div>
            <!--hero title end-->
        </div>
        <div class="row price-list wow animated fadeInUp">
            <?php
            $latest_cat_post = new WP_Query(array('category_name' => 'kechengjieshao'));
            if ($latest_cat_post->have_posts()) : while ($latest_cat_post->have_posts()) : $latest_cat_post->the_post();
                    ?>
                <div class="col-md-3 col-sm-6  popular">
                    <div class="price-title">
                        <h4><?php the_title();?></h4>
                    </div>
                    <div class="plan-price">
                        <h2><?php the_excerpt();?></h2>
                    </div>
                    <?php the_content();?>
                    <div class="plan-link">
                        <a class="btn btn-bordered" href="#">Buy Now</a>
                    </div>
                </div>
                <?php endwhile;
endif; ?>
        </div>
    </div>
</section>
<section id="project-count" class="section-padding">
    <div data-velocity="-.3" class="parallax-bg"></div>
    <div class="parallax-overlay"></div>
    <div class="container">
        <div class="row wow animated fadeInDown">
            <div class="col-md-4 col-sm-4">
                <div class="single-count">
                    <i class="fa fa-plane"></i>
                    <h2><span class="counter">3450</span></h2>
                    <p>Projects complete</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="single-count">
                    <i class="fa fa-user"></i>
                    <h2><span class="counter">345</span>+</h2>
                    <p>Happy Clients</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="single-count">
                    <i class="fa fa-clock-o"></i>
                    <h2><span class="counter">6000</span></h2>
                    <p>Working Hours</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="partners" class="section-padding">
    <div class="container">
        <div class="row wow animated fadeInDown">
            <div class="col-md-12 text-center hero-title">
                <i class="fa fa-bomb"></i>
                <h2 class="page-title">合作伙伴</h2>
                <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI. Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. </p>
            </div>
            <!--hero title end-->
        </div>
        <div class="row wow animated fadeInUp">
            <div class="col-md-12">
                <div class="partner-list">
                    <?php
            $latest_cat_post = new WP_Query(array('category_name' => 'parner'));
            if ($latest_cat_post->have_posts()) : while ($latest_cat_post->have_posts()) : $latest_cat_post->the_post();
                    ?>
                        <?php if (has_post_thumbnail($post->ID)): ?>
                        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
                        <div class="single-partner">
                            <img class="img-responsive" src="<?php echo $image[0]; ?>" alt="" />
                        </div>
                        <?php endif; ?>
                        <?php endwhile;
endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="call-to-action">
    <div class="container">
        <div class="row wow animated fadeInDown">
            <div class="col-md-12">
                <div class="cta-content">
                    <h2>Collaboratively administrate empowered markets via plug-and-play networks.</h2>
                    <a href="">Learn more</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="blog" class="section-padding">
    <div class="container">
        <div class="row wow animated fadeInDown">
            <div class="col-md-12 text-center hero-title">
                <i class="fa fa-edit"></i>
                <h2 class="page-title">媒体报道</h2>
                <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI. Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. </p>
            </div>
        </div>
        <div class="row blog-list wow animated fadeInUp">
            <?php
            $latest_cat_post = new WP_Query(array('category_name' => 'meitibaodao', 'tag' => '', 'posts_per_page' => 4));
            if ($latest_cat_post->have_posts()) : while ($latest_cat_post->have_posts()) : $latest_cat_post->the_post();
                    ?>
                <?php if (has_post_thumbnail($post->ID)): ?>
                <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
                <div class="col-md-4 col-sm-4">
                    <div class="single-blog">
                        <div class="featured-content">
                            <img class="img-responsive" src="<?php echo $image[0]; ?>" alt="" />
                            <div class="portfolio-detail">
                                <div class="portfolio-overlay"></div>
                                <a href="<?php echo $image[0]; ?>" data-litebox-group="myGallery" class="litebox"></a>
                            </div>
                        </div>
                        <h2><?php the_title() ?></h2>
                        <span><?php the_excerpt(); ?></span>
                        <p class="mediap">
                            <?php the_content(); ?> </p>
                        <p><a href="" class="btn btn-bordered">Read more</a></p>
                    </div>
                </div>
                <?php endif; ?>
                <?php endwhile;
endif; ?>
        </div>
    </div>
</section>
<section id="contact" class="section-padding">
    <div class="container">
        <div class="row wow animated fadeInDown">
            <div class="col-md-12 text-center hero-title">
                <i class="fa fa-envelope"></i>
                <h2 class="page-title">联系我们</h2>
                <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI. Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. </p>
            </div>
        </div>
        <div class="row contact-form wow animated fadeInUp">
            <div class="col-md-7">
                <iframe src=" <?php bloginfo('template_directory'); ?>/map.html" scrolling="no" style="width:90%;height:300px;border: 
                        2px solid #57bddb;"></iframe>
            </div>
            <div class="col-md-5">
                <div class="address-info">
                    <h3>Our Office</h3>
                    <p><i class="fa fa-map-marker"></i> Address: 302012 Jaipur Name, City Name</p>
                    <p><i class="fa fa-phone"></i> Phone: (141) 456-7890</p>
                    <p><i class="fa fa-envelope"></i> Email: support@quick.com</p>
                    <p><strong>Monday - Friday : </strong> 9:30 Am - 5:30 Pm</p>
                    <p><strong>Saturday - Sunday: </strong> Closed</p>
                </div>
                <div class="address-info">
                    <h3>Elsewhere</h3>
                    <ul class="list-inline social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer();?>