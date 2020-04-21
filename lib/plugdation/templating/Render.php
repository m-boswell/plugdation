<?php


namespace Plugdation\templating;

/**
 * Class Render
 * @package Plugdation\templating
 */
abstract class Render implements markup {

	/**
	 * Returns HTML markup
	 * @return string
	 */
	abstract public function getMarkup(): string;

	/**
	 * echoes out HTML Markup
	 * @return void
	 */
	public function render(): void {

		echo $this->getMarkup();

	}
}