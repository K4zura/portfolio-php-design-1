<?php
$items_card = [
    ['number'=> '1+','name'=> 'Años de Experiencia'],
    ['number'=> '2+','name'=> 'Proyectos'],
    ['number'=> '5+','name'=> 'Tecnologías'],
    ['number'=> '∞','name'=> 'Pasión por Aprender'],
]
?>


<section id="about" class="flex flex-col items-center justify-center gap-28 min-h-screen py-20">
    <h2 class="text-5xl font-bold px-4 py-2 border-b-8 border-yellow-400">Sobre Mi</h2>

    <div class="relative flex gap-12 justify-between">
        <div class="flex-1 flex flex-col justify-center gap-12">
            <p class="text-xl text-gray-200">
                Soy un aprendiz apasionado que está construyendo su futuro en el mundo de la tecnología. Aunque aún no tengo experiencia laboral profesional, mi determinación y curiosidad me impulsan a aprender constantemente.</br></br>

                A través de mi formación en la Universidad y el SENA, he desarrollado una base sólida en programación y estoy ansioso por aplicar estos conocimientos en proyectos reales.</br></br>

                Busco oportunidades donde pueda contribuir, aprender de profesionales experimentados y seguir creciendo como desarrollador.
            </p>
            <ul class="flex-1 flex items-center justify-between gap-3">
                <?php 
                foreach ($items_card as $item): 
                    $number_card = $item['number'];
                    $text_card = $item['name'];
                    require SRC . '/components/small_card.php';
                endforeach
                ?>
            </ul>
        </div>
        <ul class="flex-1 grid grid-cols-2 grid-rows-2 gap-4">
            <li class="flex flex-col items-center justify-center gap-1 px-6 py-3 h-full rounded-xl border-2 border-zinc-600 bg-zinc-900">
                <p class="text-xl text-balance self-start font-semibold text-yellow-400">Código Limpio</p>
                <p class="text-sm text-pretty text-gray-300">Comprometido con escribir código legible y mantenible</p>
            </li>
            <li class="flex flex-col items-center justify-center gap-1 px-6 py-3 h-full rounded-xl border-2 border-zinc-600 bg-zinc-900">
                <p class="text-xl text-balance self-start font-semibold text-yellow-400">Aprendizaje Continuo</p>
                <p class="text-sm text-pretty text-gray-300">Siempre explorando nuevas tecnologías y metodologías</p>
            </li>
            <li class="flex flex-col items-center justify-center gap-1 px-6 h-full rounded-xl border-2 border-zinc-600 bg-zinc-900">
                <p class="text-xl text-balance self-start font-semibold text-yellow-400">Orientado a Resultados</p>
                <p class="text-sm text-pretty text-gray-300">Enfocado en entregar soluciones que generen valor</p>
            </li>
            <li class="flex flex-col items-center justify-center gap-1 px-6 py-3 h-full rounded-xl border-2 border-zinc-600 bg-zinc-900">
                <p class="text-xl text-balance self-start font-semibold text-yellow-400">Trabajo en Equipo</p>
                <p class="text-sm text-pretty text-gray-300">Colaborativo y con buenas habilidades de comunicación</p>
            </li>
        </ul>
    </div>
</section>