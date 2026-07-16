{{-- Home/Dash --}}
{{-- First Page user will see, should be blank upon start and prompt a login that will be acessable on layout page --}}
{{-- Should the user be logged in, then they will be able to see what this page has to offer --}}

<x-layout>
    <x-slot:title>
        Dash
    </x-slot:title>

    <div class="w-full mx-auto flex flex-col items-center">
        {{-- First we need to have the sort areas and information as to what column is what --}}
        <div
            class="flex flex-row m-3 w-full p-2 bg-amber-400 rounded-2xl justify-between"
        >
            <div class="w-[25%] text-start">Application</div>
            <div class="w-[25%] text-center">Status</div>
            <div class="w-[25%] text-center">Last Modified</div>
            <div class="w-[25%] text-end">Action</div>
        </div>
        <div class="w-full flex flex-col gap-4">
            <?php foreach ($applications as $app): ?>
                <div class="flex flex-row justify-between w-full">
                    <x-job-card :app="$app" />
                </div>
                <? endforeach ?>
        </div>
    </div>
</x-layout>
