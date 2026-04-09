@props([
    'title' => 'Título padrão'
])

<div class="bg-white p-2">
    <div class="text-black font-bold uppercase p-2">
        {{ $title }}
    </div>
    <div class="text-lg text-red-500 font-bold bg-red-50 p-2 border-2 border-red-300 ">
        {{ $slot }}
    </div>
</div>
