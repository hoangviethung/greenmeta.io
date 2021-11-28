<?php

/**
 * Template Name: Home Page
 */
    ?>
<?php get_header(); ?>
<section class="hero-banner-section">
    <div class="image-wrapper">
        <?php
            $hero_banner_image = get_field("image_hero_banner");
            if (!empty($hero_banner_image)) : ?>
        <img src="<?php echo esc_url($hero_banner_image['url']); ?>"
            alt="<?php echo esc_attr($hero_banner_image['alt']); ?>"
            width="<?php echo esc_attr($hero_banner_image['width']); ?>"
            height="<?php echo esc_attr($hero_banner_image['height']); ?>" />
        <?php endif; ?>
    </div>
</section>
<section id="home-about" class="home-about">
    <?php
        $home_about_content = get_field("home_about_content");
        $home_about_title = $home_about_content['title'];
        $home_about_desc = $home_about_content['desc'];
        $home_about_image = $home_about_content['image']
    ?>
    <div class="container">
        <div class="about-wrapper">
            <div class="about-content">
                <h2>
                    <?php echo($home_about_title) ?>
                </h2>
                <p><?php echo($home_about_desc) ?></p>
            </div>
            <div class="about-image">
                <?php
                    if (!empty($home_about_image)) : ?>
                <img src="<?php echo esc_url($home_about_image['url']); ?>"
                    alt="<?php echo esc_attr($home_about_image['alt']); ?>"
                    width="<?php echo esc_attr($home_about_image['width']); ?>"
                    height="<?php echo esc_attr($home_about_image['height']); ?>" />
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<section id="home-features" class="home-features">
    <?php
        $home_feature_title_image = get_field("home_feature_title_image");
        $home_features_content = get_field("home_features_content");
        $home_features_title = $home_features_content['title'];
        $home_features_desc = $home_features_content['desc'];
        $home_features_image = $home_features_content['image'];
        $home_features_link = $home_features_content['link'];
    ?>
    <div class="container">
        <div class="section-title-image">
            <?php
                if (!empty($home_feature_title_image)) : ?>
            <img src="<?php echo esc_url($home_feature_title_image['url']); ?>"
                alt="<?php echo esc_attr($home_feature_title_image['alt']); ?>"
                width="<?php echo esc_attr($home_feature_title_image['width']); ?>"
                height="<?php echo esc_attr($home_feature_title_image['height']); ?>" />
            <?php endif; ?>
        </div>
        <div class="features-wrapper">
            <div class="features-image">
                <?php
                    if (!empty($home_features_image)) : ?>
                <img src="<?php echo esc_url($home_features_image['url']); ?>"
                    alt="<?php echo esc_attr($home_features_image['alt']); ?>"
                    width="<?php echo esc_attr($home_features_image['width']); ?>"
                    height="<?php echo esc_attr($home_features_image['height']); ?>" />
                <?php endif; ?>
            </div>
            <div class="features-content">
                <h2>
                    <?php echo($home_features_title) ?>
                </h2>
                <p><?php echo($home_features_desc) ?></p>
                <?php
                    if ($home_features_link) :
                    $link_url = $home_features_link['url'];
                    $link_title = $home_features_link['title'];
                    $link_target = $home_features_link['target'] ? $home_features_link['target'] : '_self';
                ?>
                <div class="content-action">
                    <a class="bt bt--primary" href="<?php echo esc_url($link_url); ?>"
                        target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="feature-items">
            <?php
            // Check rows exists.
            if (have_rows('home_features_items')) :
                // Loop through rows.
                while (have_rows('home_features_items')) : the_row();
                    // Load sub field value.
                    $title = get_sub_field('title');
                    $desc = get_sub_field('desc');
                    $image = get_sub_field('image');
                    $logo = get_sub_field('logo');
                    $link = get_sub_field('link');
                    // Do something...
            ?>
            <div class="feature__item">
                <?php if(!empty($image)): ?>
                <div class="image">
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"
                        width="<?php echo esc_attr($image['width']); ?>"
                        height="<?php echo esc_attr($image['height']); ?>" />
                </div>
                <div class="desc">
                    <h3><?php echo($title) ?></h3>
                    <p><?php echo($desc) ?></p>
                </div>
                <?php endif; ?>
                <?php
                    if ($link) :
                    $link_url  = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <div class="action">
                    <a class="bt bt--primary" href="<?php echo esc_url($link_url); ?>"
                        target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                </div>
                <?php endif; ?>
            </div>
            <?php
                // End loop.
                endwhile;
            // No value.
            else :
            // Do something...
            endif;
            ?>
        </div>
    </div>
</section>
<section id="home-tokenomics" class="home-tokenomics">
    <?php
        $home_tokenomics_title_image = get_field("home_tokenomics_title_image");
        $home_tokenomics_image = get_field("home_tokenomics_image");
    ?>
    <div class="container">
        <div class="section-title-image">
            <?php
                if (!empty($home_tokenomics_title_image)) : ?>
            <img src="<?php echo esc_url($home_tokenomics_title_image['url']); ?>"
                alt="<?php echo esc_attr($home_tokenomics_title_image['alt']); ?>"
                width="<?php echo esc_attr($home_tokenomics_title_image['width']); ?>"
                height="<?php echo esc_attr($home_tokenomics_title_image['height']); ?>" />
            <?php endif; ?>
        </div>
        <div class="tokenomics-values">
            <ul>
                <?php
            // Check rows exists.
            if (have_rows('home_tokenomics_values')) :
                // Loop through rows.
                while (have_rows('home_tokenomics_values')) : the_row();
                    // Load sub field value.
                    $label = get_sub_field('label');
                    $value = get_sub_field('value');
                    // Do something...
            ?>
                <li>
                    <p class="label"><?php echo($label) ?></p>
                    <p class="value"><?php echo($value) ?></p>
                </li>
                <?php
                // End loop.
                endwhile;
            // No value.
            else :
            // Do something...
            endif;
            ?>
            </ul>
        </div>
        <div class="tokenomics-image">
            <?php
                if (!empty($home_tokenomics_image)) : ?>
            <img src="<?php echo esc_url($home_tokenomics_image['url']); ?>"
                alt="<?php echo esc_attr($home_tokenomics_image['alt']); ?>"
                width="<?php echo esc_attr($home_tokenomics_image['width']); ?>"
                height="<?php echo esc_attr($home_tokenomics_image['height']); ?>" />
            <?php endif; ?>
        </div>
    </div>
</section>
<section id="home-grmt-token" class="home-grmt-token">
    <?php
        $home_grmt_token_title = get_field("home_grmt_token_title");
        $home_grmt_token_image = get_field("home_grmt_token_image");
        $home_grmt_token_content = get_field("home_grmt_token_content");
        $home_tokenomics_call_to_action = get_field("home_tokenomics_call_to_action");
    ?>
    <div class="container">
        <div class="section-title">
            <h2> <?php echo($home_grmt_token_title) ?></h2>
        </div>
        <div class="home-grmt-token-content">
            <?php echo($home_grmt_token_content) ?>
        </div>
        <div class="home-grmt-token-image">
            <?php
                if (!empty($home_grmt_token_image)) : ?>
            <img src="<?php echo esc_url($home_grmt_token_image['url']); ?>"
                alt="<?php echo esc_attr($home_grmt_token_image['alt']); ?>"
                width="<?php echo esc_attr($home_grmt_token_image['width']); ?>"
                height="<?php echo esc_attr($home_grmt_token_image['height']); ?>" />
            <?php endif; ?>
        </div>
        <div class="home-grmt-token-call-to-action">
            <p><?php echo($home_tokenomics_call_to_action['desc'])?></p>
            <?php
                    if ($home_tokenomics_call_to_action['link']) :
                    $link_url  = $home_tokenomics_call_to_action['link']['url'];
                    $link_title = $home_tokenomics_call_to_action['link']['title'];
                    $link_target = $home_tokenomics_call_to_action['link']['target'] ? $home_tokenomics_call_to_action['link']['target'] : '_self';
                ?>
            <a class="bt bt--primary" href="<?php echo esc_url($link_url); ?>"
                target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>