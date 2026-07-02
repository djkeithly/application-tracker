<?php
$menuitems = ["Login", "Main Menu", "Add Application"]; ?>

<div class="flex flex-col w-[95%] h-[95%] bg-gray-400 rounded-3xl">
    <?php foreach ($menuitems as $item): ?> 
        <div> 
            <?php echo $item; ?>
        </div>
    <?php endforeach; ?>
</div>