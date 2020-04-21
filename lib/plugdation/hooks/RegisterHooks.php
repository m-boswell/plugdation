<?php


namespace Plugdation\Plugdation\hooks;

/**
 * Class RegisterHooks
 * * Mediator for registering wordpress hooks (actions and filters).
 *
 * @see https://codex.wordpress.org/Plugin_API
 * @see https://developer.wordpress.org/plugins/
 * @package Plugdation\Plugdation\hooks
 */
class RegisterHooks {

    /**
     * Registers an object with the WordPress Plugin API.
     *
     * @param mixed $object
     */
    public function register($object) {
        if ($object instanceof actions) {
            $this->registerActions($object);
        }
        if ($object instanceof filters) {
            $this->registerFilters($object);
        }
    }

	/**
	 * Register an object with a specific action hook.
	 *
	 * @param actions $object
	 * @param string  $action_name
	 * @param array   $arguments
	 */
	private function registerAction( actions $object, string $action_name, array $arguments ) {
		if (!isset($arguments[0])) { return; }
		add_action($action_name, array($object, $arguments[0]), $arguments[1] ?? 10, $arguments[2] ?? 1);
	}

	/**
	 * Registers an object with all its action hooks.
	 *
	 * @param actions $object
	 */
	private function registerActions(actions $object) {
		foreach ($object->getActions() as $action_name => $arguments) {
			$this->registerAction($object, $action_name, $arguments);
		}
	}

	/**
	 * Register an object with a specific filter hook.
	 *
	 * @param   filters   $object
	 * @param   string    $filter_name
	 * @param   array     $arguments
	 */
	private function registerFilter( filters $object, string $filter_name, array $arguments ) {
		if (!isset($arguments[0])) { return; }
		add_filter($filter_name, array($object, $arguments[0]), $arguments[1] ?? 10, $arguments[2] ?? 1);
	}

	/**
	 * Registers an object with all its filter hooks.
	 *
	 * @param filters $object
	 */
	private function registerFilters(filters $object) {
		foreach ($object->getFilters() as $filter_name => $arguments) {
			$this->registerFilter($object, $filter_name, $arguments);
		}
	}


}
