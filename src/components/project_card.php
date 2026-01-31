<article class="flex flex-col overflow-hidden items-center justify-between rounded-lg border-2 border-zinc-600 bg-zinc-800">
    <picture class="w-full aspect-video bg-black">

    </picture>

    <div class="w-full flex-1 flex flex-col justify-between p-4 gap-3">
        <div class="flex justify-between items-center gap-8">
            <h2 class="text-balance text-xl font-semibold"><?= $project['name'] ?></h2>
            <div class="flex justify-items-end items-start gap-3 text-sm font-medium h-full">
               <a href="" class="">
                    <?php render_icon('github', 'size-8 p-2 rounded-full shadow-md shadow-yellow-400 hover:-translate-y-1 transition-all duration-300 ease-in-out'); ?>
               </a> 
               <a href="">
                    <?php render_icon('link', 'size-8 p-2 rounded-full shadow-md shadow-yellow-400 hover:-translate-y-1 transition-all duration-300 ease-in-out'); ?>
               </a> 
            </div>
        </div>
        <p class="text-sm">
            <?= $project['desc'] ?>
        </p>
        <ul class="flex justify-start items-center gap-2 w-full">
            <?php foreach ( $project['skills'] as $skill ) : ?>
                <li class="px-3 py-1 rounded-full bg-zinc-950 text-sm font-medium">
                    <?= $skill ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</article>