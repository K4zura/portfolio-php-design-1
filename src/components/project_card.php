<article class="flex flex-col overflow-hidden rounded-lg border-4 border-zinc-600 bg-zinc-800">
    <picture class="w-full h-2/5 flex-1 bg-black">

    </picture>

    <div class="w-full flex-1 p-4 gap-3">
        <div class="flex justify-between items-center">
            <h2 class="text-xl font-semibold"><?= $project['name'] ?></h2>
            <div class="flex justify-items-end items-center gap-2 text-sm font-medium">
               <a href="">
                    <?php render_icon('github', 'size-4 rounded-full bg-zinc-950'); ?>
               </a> 
               <a href="">
                    <?php render_icon('github', 'size-4 rounded-full bg-zinc-950'); ?>
               </a> 
            </div>
        </div>
        <p class="text-lg font-medium">
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