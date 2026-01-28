<?php
$menu_area = [
    [
        'name'=> 'Frontend',
        'skills' => [
            ['name' => 'HTML', 'percent' => '77%'],
            ['name' => 'CSS', 'percent' => '90%'],
            ['name' => 'Tailwind CSS', 'percent' => '63%']
        ]
    ],
    [
        'name'=> 'Backend',
        'skills' => [
            ['name' => 'PHP', 'percent' => '65%'],
            ['name' => 'Node.JS', 'percent' => '47%'],
        ]
    ],
    [
        'name'=> 'Herramientas',
        'skills' => [
            ['name' => 'Git', 'percent' => '74%'],
            ['name' => 'Github', 'percent' => '82%'],
            ['name' => 'Vscode', 'percent' => '60%'],
        ]
    ],
    [
        'name'=> 'Soft Skills',
        'skills' => [
            ['name' => 'Trabajo en Equipo', 'percent' => '90%'],
            ['name' => 'Comunicación', 'percent' => '72%'],
            ['name' => 'Resolución de problemas', 'percent' => '93%'],
            ['name' => 'Adaptabilidad', 'percent' => '85%'],
        ]
    ],
]
?>

<section id="skills" class="flex flex-col items-center justify-center gap-28 min-h-screen py-20">
    <h2 class="text-5xl font-bold px-4 py-2 border-b-8 border-yellow-400">Habilidades</h2>

    <div class="relative grid grid-cols-2 grid-rows-2 gap-8 w-full h-full">
        <?php 
        foreach ($menu_area as $area):
            require SRC . '/components/article_skill.php';
        endforeach;
        ?>
    </div>
</section>