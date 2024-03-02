<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;
use Symfony\Component\DomCrawler\Crawler;

class GenerateResourceControllers extends Command
{
    protected $signature = 'generate:resource-controllers';
    protected $description = 'Generate resource controllers based on web routes';

    public function handle()
    {
        // Load and parse the web file
        $webFilePath = base_path('routes/web.php');
        $webFileContent = file_get_contents($webFilePath);
        // You would need a parser that can understand Laravel route syntax,
        // perhaps using regex or a PHP code parser library.

        // Extract routes and their associated methods
        $routes = $this->parseRoutes($webFileContent);

        foreach ($routes as $route) {
            // Check if the controller exists
            $controllerName = ucfirst(Str::camel($route['controller']));
            // $controllerName = ucfirst(Str::camel($route['controller'])) . 'Controller';
            $controllerPath = app_path("Http/Controllers/{$controllerName}.php");

            if (!file_exists($controllerPath)) {
                // Generate a new controller with Artisan command
                $this->call('make:controller', [
                    'name' => $controllerName,
                    '--resource' => true,
                ]);
            }

            // Add or update methods in the controller file
            $this->addOrUpdateControllerMethods($controllerPath, $route);
        }

        $this->info('Resource controllers have been generated/updated successfully.');
    }

    private function parseRoutes($webFileContent)
    {
        $routes = [];
        // Assuming your routes are defined as Route::get('uri', [Controller::class, 'method'])->name('name');
        $pattern = "/Route::get\(['\"](.+)['\"], \[(.+)::class, '(.+)'\]\)->name\(['\"](.+)['\"]\);/";

        if (preg_match_all($pattern, $webFileContent, $matches, PREG_SET_ORDER)) {
            foreach ($matches as $match) {
                // Make sure to check that all expected parts of the route definition are present
                if (count($match) === 5) {
                    $routes[] = [
                        'uri' => $match[1],
                        'controller' => $match[2],
                        'method' => $match[3],
                        'name' => $match[4],
                    ];
                }
            }
        }

        return $routes;
    }



    private function addOrUpdateControllerMethods($controllerPath, $route)
    {
        // Read the current content of the controller file
        $controllerContent = file_get_contents($controllerPath);

        // Use the method from the route as the method name in the controller
        $methodName = $route['method'];
        $viewName = $route['name'];

        // Create the method code
        $methodCode = "\n    public function $methodName()\n    {\n        return view('$viewName');\n    }\n";

        // Check if the method already exists
        if (strpos($controllerContent, "function $methodName") === false) {
            // Method does not exist, append the new method
            // Find the position of the last closing brace of the class
            $lastBracePos = strrpos($controllerContent, '}');

            // Insert the new method before the last closing brace of the class
            if ($lastBracePos !== false) {
                $controllerContent = substr_replace($controllerContent, $methodCode, $lastBracePos, 0);
            }
        } else {
            // Method already exists, you might want to update it instead
            // You can implement logic to replace the existing method here
            // For simplicity, this example does not replace existing methods
        }

        // Save the updated content back to the controller file
        file_put_contents($controllerPath, $controllerContent);
    }
}
