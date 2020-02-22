<?php
include __DIR__ . './sample1/index.php';
include __DIR__ . './dynamicSample1/index.php';









add_filter( 'block_categories', 'plugdationTestBlockCategories' );

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
