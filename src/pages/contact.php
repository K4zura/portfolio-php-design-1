<section id="contact" class="flex flex-col items-center justify-center gap-28 min-h-screen py-20">
    <h2 class="text-5xl font-bold px-4 py-2 border-b-8 border-yellow-400">Contacto</h2>

    <div class="relative flex gap-12 justify-between w-full px-24">
        <div class="flex-1 flex flex-col justify-center items-start gap-4">
            <h3 class="text-xl font-medium">Información de Contacto</h3> 
            <div class="flex flex-col items-start justify-start gap-3">
                <div class="flex gap-2 items-center justify-center">
                    <?php render_icon('linkedin', 'filled__icon'); ?>
                    <div class="flex flex-col gap-0 justify-center items-start">
                        <h4 class="text-xs text-zinc-300 font-medium">email</h4>
                        <p class="font-medium">johannbb0520@gmail.com</p>
                    </div>
                </div>
                <div class="flex gap-2 items-center justify-center">
                    <?php render_icon('linkedin', 'filled__icon'); ?>
                    <div class="flex flex-col gap-0 justify-center items-start">
                        <h4 class="text-xs text-zinc-300 font-medium">Ubicación</h4>
                        <p class="font-medium">Pereira, Risaralda</p>
                    </div>
                </div>
            </div>
            <h3 class="text-xl font-medium mt-4">Redes Sociales</h3>
            <div class="flex gap-4">
                <a href="">
                    <?php render_icon('linkedin', 'filled__icon'); ?>
                </a>
                <a href="">
                    <?php render_icon('github', 'filled__icon'); ?>
                </a>
            </div>
        </div>
        <form method="post" class="flex-1 flex flex-col justify-center items-center gap-4 bg-zinc-900 p-6 rounded-xl shadow-xl shadow-zinc-400">
            <input type="text" placeholder="Nombre" class="w-full p-2 border border-zinc-800 rounded outline-none focus:shadow-zinc-400 focus:shadow-sm">
            <input type="email" placeholder="Email" class="w-full p-2 border border-zinc-800 rounded outline-none focus:shadow-zinc-400 focus:shadow-sm">
            <textarea placeholder="Mensaje" class="w-full p-2 border border-zinc-800 rounded resize-none h-32 outline-none focus:shadow-zinc-400 focus:shadow-sm"></textarea>
            <button type="submit" class="w-full p-2 bg-yellow-400 rounded font-medium">Enviar</button>
        </form>
    </div>
</section>