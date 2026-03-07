<x-layouts::app>
    <main 
    x-data="{showToast: false, message: ''}"
    class="p-8">
        <h1 class="font-bold text-4xl text-amber-600">Bookmarks</h1>
        <p class="mt-1 text-zinc-500">Revisit your favorite roles</p>

        <livewire:roles-list type="bookmarked"/>
        </div>
    </main>
</x-layouts::app>