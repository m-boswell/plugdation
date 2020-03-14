<?php


namespace Plugdation\tests\inc\hooks\proof;


use Plugdation\Plugdation\hooks\filters;

class FilterHooks implements filters
{

    public function filterExample( $content ) {

        $content = '<p>It has been decreed that hence forth:  </p>' .  $content . '<p> ...testing hook component  </p>';

        return $content;

    }

    /**
     * @inheritDoc
     */
    public function getFilters(): array
    {
        return array(
            'the_content' => ['filterExample']
        );
    }
}
