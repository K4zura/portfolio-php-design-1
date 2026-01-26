<?php
$items_card = [
    ['title'=> 'Ingeniería en Sistemas / Informática',
        'place'=> 'Universidad Ejemplo', 
        'description'=> 'Cursando los últimos semestres con enfoque en desarrollo de software y bases de datos.',
        'date' => '2020 - Presente'],
    ['title'=> 'Certificación en React',
        'place'=> 'Plataforma Online', 
        'description'=> 'Curso completo de React incluyendo hooks, context, y patrones avanzados.',
        'date' => '2024'],
    ['title'=> 'Desarrollo Web Full Stack',
        'place'=> 'Bootcamp / Curso Intensivo', 
        'description'=> 'Formación intensiva en desarrollo frontend y backend con tecnologías modernas.',
        'date' => '2024'],
]
?>

<section id="experience" class="flex flex-col items-center justify-center gap-28 min-h-screen py-20">
    <h2 class="text-5xl font-bold px-4 py-2 border-b-8 border-yellow-400">Educacion</h2>

    <ul class="flex flex-col justify-center gap-6 w-full max-w-[800px] px-16 py-4 border-l-2 border-zinc-500">
        <?php 
        foreach ($items_card as $item):
            $card_title = $item['title'];
            $card_place = $item['place'];
            $card_desc = $item['description'];
            $card_date = $item['date'];
            require SRC . '/components/big_card.php';
        endforeach
        ?>
    </ul>
</section>