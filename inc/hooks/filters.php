<?php


namespace Plugdation\Plugdation\hooks;

/**
 * Interface filters
 * @package Plugdation\Plugdation\hooks
 */
interface filters {

	/**
	 * Returns an array of filters that the object needs to be subscribed to.
	 *
	 * The array key is the name of the filter hook. The value can be:
	 *
	 *  * An array with the method name
	 *  * An array with the method name and priority
	 *  * An array with the method name, priority and number of accepted arguments
	 *
	 * For instance:
	 *
	 *  * array('filter_name' => array('method_name'))
	 *  * array('filter_name' => array('method_name', $priority))
	 *  * array('filter_name' => array('method_name', $priority, $accepted_args))
	 *
	 * @return array
	 */
	public function getFilters(): array;

}
