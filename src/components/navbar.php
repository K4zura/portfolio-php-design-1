<?php
$menu_links = [
    ['route' => 'hero', 'title' => 'Inicio'],
    ['route' => 'about', 'title' => 'Sobre Mi'],
    ['route' => 'experience', 'title' => 'Educacion'],
    ['route' => 'skills', 'title' => 'Hablidades'],
    ['route' => 'projects', 'title' => 'Proyectos'],
    ['route' => 'contact', 'title' => 'Contacto'],
];

$page = basename($_SERVER['PHP_SELF']);
?>
<nav class="fixed flex justify-center items-center gap-8 bottom-4 bg-zinc-700 px-6 py-3 rounded-xl shadow-md shadow-zinc-400">
    <ul class="flex justify-center items-start gap-2 pb-1">
        <?php foreach ($menu_links as $link): ?>
            <li class="linkmenu relative group flex flex-col items-center justify-center">
                <a href="#<?= $link['route']; ?>" class="flex justify-center items-center gap-2 px-4 py-2 text-sm font-semibold rounded-lg hover:bg-yellow-400 hover:text-gray-900 group-[.active]:bg-yellow-400 group-[.active]:text-gray-900 transition-colors duration-300">
                    <?php render_icon($link['route'], 'w-4 h-4'); ?>
                    <?= $link['title']; ?>
                </a>
                <span class="opacity-anim absolute -bottom-3 size-2 rounded-full bg-yellow-400 hidden group-[.active]:block">
                </span>
            </li>
        <?php endforeach ?>
    </ul>
</nav>