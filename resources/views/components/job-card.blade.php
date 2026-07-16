@props (["app"])

<?php
$time = $app->updated_at ?? $app->created_at;
?>

<div
    class="flex flex-row p-4 w-full bg-blue-300 rounded-2xl justify-between text-start"
>
    <div class="w-[25%] text-start">{{ $app->company }}</div>
    <div class="w-[25%] text-center">{{ $app->status }}</div>
    <div class="w-[25%] text-center">{{ $time }}</div>
    <div class="w-[25%] text-end">Edit</div>
</div>
