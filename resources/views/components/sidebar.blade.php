<?php
$menuitems = ["Login", "Main Menu", "Add Application"]; ?>

<div class="flex flex-col w-[95%] h-[95%] bg-gray-400 rounded-3xl">
    <div
        class="flex flex-col justify-between items-center h-[60%] bg-gray-200 rounded-3xl p-4 m-3"
    >
        <?php foreach ($menuitems as $item): ?>
            <x-menu-button :tag="$item" />
        <?php endforeach; ?>
    </div>
    <div
        class="flex flex-col justify-between items-center h-[40%] rounded-3xl p-4 m-3 bg-gray-200"
    >
        <p>Applications Made: 101</p>
        <p>Interviews Done: 2</p>
        <p>Further Steps: 4</p>
        <p>Applications Expiring: 24</p>
    </div>
</div>
