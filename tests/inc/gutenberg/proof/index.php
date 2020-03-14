<?php

namespace Plugdation\tests\inc\gutenberg\proof;
include __DIR__ . './sample1/index.php';
include __DIR__ . './dynamicSample1/index.php';
include __DIR__ . './glob/index.php';








add_filter( 'block_categories', __NAMESPACE__ . DIRECTORY_SEPARATOR . 'plugdationTestBlockCategories' );

function plugdationTestBlockCategories( $categories ) {
    return array_merge(
        $categories,
        array(
            array(
                'slug' => 'plugdation-test',
                'title' => __( 'Plugdation Test Blocks', 'plugdation' ),
                'icon'  => 'wordpress',
            ),
        )
    );
}
