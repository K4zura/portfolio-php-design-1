<?php
$menu_project = [
    [
        'name'=> 'E-commerce Landing',
        'desc'=> 'Landing page para una tienda online con diseño moderno y responsive. Incluye catálogo de productos y carrito de compras básico.',
        'skills' => [ 'PHP', 'HTML', 'Tailwind CSS' ],
    ],
    [
        'name'=> 'Task Manager App',
        'desc'=> 'Aplicación de gestión de tareas con funcionalidades CRUD, filtrado y persistencia local.',
        'skills' => [ 'PHP', 'HTML', 'Tailwind CSS' ],
    ],
    [
        'name'=> 'Weather Dashboard',
        'desc'=> 'Dashboard meteorológico que consume una API externa para mostrar el clima actual y pronóstico.',
        'skills' => [ 'PHP', 'HTML', 'Tailwind CSS' ],
    ],
]
?>

<section id="skills" class="flex flex-col items-center justify-center gap-28 min-h-screen py-20">
    <h2 class="text-5xl font-bold px-4 py-2 border-b-8 border-yellow-400">Proyectos</h2>

    <div class="relative grid grid-cols-3 auto-rows-fr gap-8 w-full h-full">
        <?php 
        foreach ($menu_project as $project):
            require SRC . '/components/project_card.php';
        endforeach;
        ?>
    </div>
</section