<?php
namespace App\core;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class View
{
    public static function view(string $view, array $data = []): string
    {
        extract($data);

        $file = __DIR__ . "/../view/{$view}.php";

        ob_start();
        require $file;
        return ob_get_clean();
    }

    public static function twigview(string $view, array $data = []): string
    {
        $loader = new FilesystemLoader(__DIR__ . '/../view');
        $twig = new Environment($loader);

        return $twig->render("{$view}.twig", $data);
    }

    public static function dashboard(string $view, array $data = []): string
    {
        extract($data);

        $file = __DIR__ . "/..//{$view}.php";

        ob_start();
        require $file;
        return ob_get_clean();
    }
}
