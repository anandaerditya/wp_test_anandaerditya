<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php print get_bloginfo('title'); ?></title>

    <?php wp_head(); ?>
</head>
<body>
    <?php print get_template_part('components/header'); ?> 

    <div class="post">
        <?php
        $args = [
            'post_status' => 'publish',
            'order_by' => 'date',
            'order' => 'DESC'
        ];

        $post = new WP_Query($args);
        ?>
        <ul>
            <?php
            while($post->have_posts()):
                the_post();
            ?>
            <li><p><?php print the_title(); ?></p></li>
            <?php
            endwhile;
            ?>
        </ul>
    </div>

    
    <?php print get_template_part('components/footer'); ?>
    <?php wp_footer(); ?>
</body>
</html>