<?php
namespace app\core;
class View
{
    /**
     * @throws \Exception
     */
    private static function render(string $view) : string{
        $view_path = __DIR__ . "/../views/{$view}.php";
        ob_start();
        if(!file_exists($view_path)) {
            throw new \Exception("view not found (404)");
        }

        include $view_path;
        return ob_get_clean();
    }
    public static function make(string $view) : string {
        return self::render($view);
    }
}