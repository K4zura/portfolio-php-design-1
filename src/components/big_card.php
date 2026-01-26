<li class=" relative flex-1 flex flex-col justify-center gap-1 px-6 py-5 rounded-xl border-2 border-zinc-600 bg-zinc-800">
    <div class="flex justify-between items-center">
        <h3 class="text-2xl font-bold"><?= $card_title ?></h3>
        <p class="text-sm font-medium px-4 py-1.5 text-gray-200 bg-zinc-900 rounded-full"><?= $card_date ?></p>
    </div>
    <h4 class="text-xl font-medium text-yellow-400"><?= $card_place ?></h4>
    <p class="mt-4 text-gray-300"><?= $card_desc ?></p>

    <span class="absolute top-4 left-[-4.7rem] size-4 rounded-full bg-yellow-400"></span>
</li>