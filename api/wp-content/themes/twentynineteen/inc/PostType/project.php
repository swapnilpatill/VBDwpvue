<?php

require __DIR__ . '/vendor/autoload.php';
use PostTypes\PostType;

$projectOptions = [
    'show_in_rest'       => true,
    'rest_base'          => 'project',
    'rest_controller_class' => 'WP_REST_Posts_Controller',
];


$project = new PostType('project', $projectOptions);
$project->icon('dashicons-book-alt');
$project->taxonomy('projectcategory');
$project->taxonomy('projectPreference');
$project->taxonomy('post_tag');
$project->register();

$projectTaxOptions = [
    'name' => 'projectcategory',
    'singular' => 'Category',
    'plural' => 'Categories',
    'slug' => 'projectcategory'
];
// Create a genre taxonomy.
$projectcategory = new \PostTypes\Taxonomy($projectTaxOptions);

// Set options for the taxonomy.
$projectcategory->options([
    'hierarchical' => true,
    'show_in_rest' => true,
    'rest_base' => 'projectcategory',
    'rest_controller_class' => 'WP_REST_Terms_Controller'
]);

// Register the taxonomy to WordPress.
$projectcategory->register();

$preference = [
    'name' => 'projectPreference',
    'singular' => 'Preference',
    'plural' => 'Preferences',
    'slug' => 'projectPreference'
];

// Creae a tgenre taxonomy.
$projectPreference = new \PostTypes\Taxonomy($preference);

// Set options for the taxonomy.
$projectPreference->options( [
    'hierarchical' => true,
    'show_in_rest' => true,
    'rest_base' => 'projectPreference',
    'rest_controller_class' => 'WP_REST_Terms_Controller'
] );

// Register the taxonomy to WordPress.
$projectPreference->register();

add_filter( 'rest_endpoints', function( $endpoints ){

    if ( ! isset( $endpoints['/wp/v2/project'] ) ) {
        return $endpoints;
    }

    $endpoints['/wp/v2/project'][0]['args']['per_page']['minimum'] = 100;
    $endpoints['/wp/v2/project'][0]['args']['per_page']['default'] = 200;
    $endpoints['/wp/v2/project'][0]['args']['per_page']['maximum'] = 400;
    return $endpoints;
});

