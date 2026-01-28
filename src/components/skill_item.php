<li class="flex flex-col justify-center items-center gap-2 w-full">
    <div class="w-full flex justify-between items-center">
        <p class="text-sm font-medium"><?= $skill['name'] ?></p>
        <p class="text-xs font-medium px-3 py-1 rounded-full bg-zinc-900"><?= $skill['percent'] ?></p>
    </div>
    <div class="flex justify-start items-center h-2 w-full rounded-full overflow-hidden bg-zinc-600">
        <div class="h-full w-[<?= $skill['percent'] ?>] bg-yellow-400"></div>
    </div>
</li>