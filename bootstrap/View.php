<?php

namespace Bootstrap;

class View
{
	 /**
     * Render a view file
     *
     * @param string $view  The view file
     * @param array $args  Associative array of data to display in the view (optional)
     *
     * @return void
     */
    public static function render($view, $args = [])
    {
        extract($args, EXTR_SKIP);

        $file = "../resources/views/$view";

        if (is_readable($file)) {
            require $file;
        } else {
            throw new \Exception("$file not found");
        }
    }
}