<?php


namespace Plugdation\hooks;

/**
 * Interface actions
 * @package Plugdation\hooks
 */
interface actions {

	/**
	 * Returns an array of actions that the object needs to be subscribed to.
	 *
	 * The array key is the name of the action hook. The value can be:
	 *
	 * * An array with the method name
	 * * An array with the method name and priority
	 * * An array with the method name, priority and number of accepted arguments
	 *
	 * For instance:
	 *
	 *  * array('action_name' => array('method_name'))
	 *  * array('action_name' => array('method_name', $priority))
	 *  * array('action_name' => array('method_name', $priority, $accepted_args))
	 *
	 * @return array
	 */
	public function getActions();
}
