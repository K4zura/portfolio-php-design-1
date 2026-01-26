<section id="hero" class="flex justify-between items-center gap-20 min-h-screen py-20">
    <picture class="flex-1 flex justify-center relative max-w-96 rounded-full">
        <img src="assets/images/fotopuerco.jpg" alt="profile image" class="w-full h-auto rounded-full aspect-square object-center object-cover">
        <a href="" class="absolute -bottom-2 px-4 py-1 bg-yellow-400 rounded-lg text-zinc-800 font-medium">
            Disponible
        </a>
    </picture>
    <div class="flex-1 flex flex-col items-start justify-center gap-3">
        <h2 class="text-6xl font-bold">Brandon Barbosa Bonilla</h2>
        <h3 class="text-4xl font-semibold text-yellow-400">Desarrollador de Software</h3>
        <p class="text-xl font-medium text-gray-200">
            Construyendo soluciones digitales con pasión, creatividad y un enfoque constante en el aprendizaje continuo.
        </p>
        <div class="flex gap-4">
            <a href="">
                <?php render_icon('linkedin', 'filled__icon'); ?>
            </a>
            <a href="">
                <?php render_icon('github', 'filled__icon'); ?>
            </a>
            <a href="">
                <?php render_icon('email', 'filled__icon'); ?>
            </a>
        </div>
        <div class="flex gap-6 mt-4">
            <button class="border-4 border-gray-400 text-lg font-medium rounded-xl w-44 py-1.5 hover:border-yellow-400 hover:text-yellow-400 transition-colors duration-200">Ver mi trabajo</button>
            <button class="bg-gray-400 text-zinc-700 text-lg font-medium rounded-xl w-44 py-1.5 hover:bg-yellow-400 transition-colors duration-200">Contactar</button>
        </div>
    </div>
</section>