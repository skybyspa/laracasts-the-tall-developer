<x-layouts::app>
    <main 
    x-data="{showToast: false, message: ''}"
    class="p-8">
        <h1 class="font-bold text-4xl text-amber-600">Talenta</h1>
        <p class="mt-1 text-zinc-500">Discover roles worth your time</p>

        <livewire:roles-list type="all" />

    </main>
</x-layouts.app>
