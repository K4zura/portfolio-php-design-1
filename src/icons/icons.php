<?php 
function render_icon($name, $classes = '') {
    // Definir la ruta del archivo
    $file = SRC . "/icons/{$name}.php";
    
    // Verificamos si existe
    if (file_exists($file)) {
        // Pasamos la variable $class al archivo incluido
        $class = $classes;
        include $file;
    } else {
        echo "";
    }
}