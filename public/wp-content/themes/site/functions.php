<?php

/**
 * Initial theme setup
 */

// Theme support
add_theme_support('title-tag');
add_theme_support('post-thumbnails');

// // Theme post types
// require_once('models/article.php');
// require_once('models/press.php');

// Setup the navigation menu areas
function site_menu_locations()
{
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'site'),
        'footer'  => esc_html__('Footer Menu', 'site'),
    ));
}
add_action('init', 'site_menu_locations');

/**
 * Get the page meta
 *
 * @return string
 */
function metaTags()
{
    $title = get_field('meta_title') ?: get_the_title();
    $description = get_field('meta_description');
    $image = get_field('meta_image');

    $tags = "<meta property='og:title' content='".$title."'/>
		<meta property='og:description' content='".$description."'/>
		<meta property='og:image' content='".$image['url']."'/>";

    return $tags;
}

// Elements style options page
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'Elements',
        'menu_title' => 'Elements',
        'menu_slug'  => 'theme-elements',
        'capability' => 'edit_posts',
        'redirect' 	 => false,
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Press',
        'menu_title' => 'Press',
        'parent_slug' => 'theme-elements',
        'post_id' => 'press',
    ));

    acf_add_options_sub_page(array(
        'page_title'  => 'Blog',
        'menu_title'  => 'Blog',
        'parent_slug' => 'theme-elements',
        'post_id' => 'blog',
    ));
}

// disable default menu items
function site_remove_admin_menus()
{
    remove_menu_page('edit-comments.php');
}
add_action('admin_menu', 'site_remove_admin_menus');

// Webpack script and style
function site_webpack_assets()
{
    wp_enqueue_style('app', (new Bkwld\Benchpress\Webpack)->assetUrl('app.css'), null, null, false);
    wp_enqueue_script('app', (new Bkwld\Benchpress\Webpack)->assetUrl('app.js'), null, null, true);
}
add_action('wp_enqueue_scripts', 'site_webpack_assets');

// Setup pug helper.  It expects a path relative to the views directory with no
// file extension
if (!is_admin()) {
    $pug = new Pug\Pug([
        'prettyprint' => true,
        'extension' => '.pug',
        'expressionLanguage' => 'php',
        'cache' => __DIR__.'/tmp',
        'basedir' => __DIR__.'/views/',
        'doctype' => 'html',
    ]);
}
function pug($path, $vars = [])
{
    global $pug;
    return $pug->render(__DIR__.'/views/'.$path.'.pug', $vars);
}

// Shorthand to get the URL of a file in the assets directory
function asset($path)
{
    return get_template_directory_uri().'/assets/'.$path;
}

/**
 * Get the poster image
 *
 * @param  string|array $asset $asset The name of a custom fields field or an WP image
 * @return string
 */
function posterImg($asset)
{
    $asset = getAsset($asset);
    return $asset['sizes']['poster'];
}

/**
 * Return the aspect ratio of an image as a string
 *
 * @param  string|array $asset The name of a custom fields field or an WP image
 * @return string Like '200:100'
 */
function aspectImg($asset)
{
    $asset = getAsset($asset);
    return $asset['width'].':'.$asset['height'];
}

/**
 * Take the key of an image field and generate breakpoints for vue-visual
 *
 * @param  string|array $asset The name of a custom fields field or an WP image
 * @param  integer $offset Positive for smaller images, negative for bigger
 * @return string  HTMLEntitied vue-visual breakpoint array
 */
function visualImgs($asset, $offset = 0)
{
    $asset = getAsset($asset);

    // Create mapping
    $config = [
        '420' => $asset['sizes']['xs'],
        '768' => $asset['sizes']['s'],
        '1024' => $asset['sizes']['m'],
        '1366' => $asset['sizes']['l'],
        '1920' => $asset['sizes']['xl'],
    ];

    // If positive, use the smaller part of the breaks with the
    if ($offset > 0) {
        $keys = array_slice(array_values($config), $offset);
        $vals = array_slice(array_values($config), 0, -1 * $offset);
        $config = array_combine($keys, $vals);

        // Or do the opposite
    } elseif ($config < 0) {
        $keys = array_slice(array_values($config), 0, $offset);
        $vals = array_slice(array_values($config), $offset);
        $config = array_combine($keys, $vals);
    }

    // Return config
    return json_encode($config);
}


/**
 * Get the asset object
 *
 * @param  string|array $asset The name of a custom fields field or an WP image
 * @return array
 */
function getAsset($asset)
{
    if (is_string($asset)) {
        $asset = get_sub_field($asset) ?: get_field($asset);
    }
    return $asset;
}


/*****************************************
 * IMAGES
 *****************************************/

// Custom image sizes
// Multiplied the originals by 1.5 to keep crispness on retina screens
add_image_size('xl', 2880, 2880);
add_image_size('l', 2049, 2049);
add_image_size('m', 1536, 1536);
add_image_size('s', 1152, 1152);
add_image_size('xs', 630, 630);
add_image_size('icon', 192, 192);
add_image_size('poster', 16, 16);

function custom_pagination($custom_query)
{
    $total_pages = $custom_query->max_num_pages;
    $big = 999999999; // need an unlikely integer

    if ($total_pages > 1) {
        $current_page = max(1, get_query_var('paged'));

        echo paginate_links(array(
      'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
      'format' => '?paged=%#%',
      'current' => $current_page,
      'total' => $total_pages,
            'prev_text' => __('&laquo;'),
        'next_text' => __('&raquo;')
    ));
    }
}
