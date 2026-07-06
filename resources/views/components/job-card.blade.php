@props (["company", "status", "date"])

<div
    class="flex flex-row p-4 w-full bg-blue-300 rounded-2xl justify-between text-start"
>
    <div class="w-[25%] text-start">{{ $company }}</div>
    <div class="w-[25%] text-center">{{ $status }}</div>
    <div class="w-[25%] text-center">{{ $date }}</div>
    <div class="w-[25%] text-end">Edit</div>
</div>
