<article class="h-full w-full flex flex-col gap-5 px-5 py-8 rounded-lg shadow-lg shadow-zinc-400 bg-zinc-800">
    <div class="flex items-center justify-start gap-2 w-full">
        <span class="size-3 rounded-full bg-yellow-400"></span>
        <h2 class="text-2xl font-semibold"><?= $area['name'] ?></h2>
    </div>
    <ol class="w-full flex flex-col gap-4 justify-start items-center">
        <?php 
        foreach ($area['skills'] as $skill):
            require SRC . '/components/skill_item.php';
        endforeach;
        ?>
    </ol>
</article>