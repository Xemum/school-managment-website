<?php
// Define a constant DS (Directory Separator) to use the appropriate directory separator for the current operating system
define("DS", DIRECTORY_SEPARATOR);

// Define the root path of the application
// dirname(__DIR__) gets the parent directory of the current file's directory
// Appending DS concatenates the directory separator to the path
define("ROOT_PATH", dirname(__DIR__) . DS);

// Define paths for different parts of the application
define("APP", ROOT_PATH . 'app' . DS);
define("CORE", APP . 'Core' . DS);
define("CONFIG", APP . 'Config' . DS);
define("CONTROLLERS", APP . 'Controllers' . DS);
define("MODELS", APP . 'Models' . DS);
define("VIEWS", APP . 'Views' . DS);

// Require configuration files
$configFile = CONFIG . 'config.php';
require (CONFIG . 'helpers.php');
if (file_exists($configFile)) {
      require $configFile;
} else {
      die("Configuration file not found: $configFile");
}
// Autoload all classes
// Create an array of directories to include in the include_path
$modules = [
      ROOT_PATH,
      APP,
      CORE,
      VIEWS,
      CONTROLLERS,
      MODELS,
      CONFIG
];

// Set the include_path to the current include_path plus the directories in $modules
set_include_path(get_include_path() . PATH_SEPARATOR . implode(PATH_SEPARATOR, $modules));
// Register the autoloader function
spl_autoload_register('spl_autoload', false);
new App();
