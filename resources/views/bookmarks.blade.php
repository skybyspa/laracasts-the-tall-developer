<x-layouts::app>
    <main 
    x-data="{showToast: false, message: ''}"
    class="p-8">
        <h1 class="font-bold text-4xl text-amber-600">Bookmarks</h1>
        <p class="mt-1 text-zinc-500">Revisit your favorite roles</p>

               <input class="bg-white border border-zinc-300 mt-4 
                        rounded-md w-full px-5 py-2 shadow-xs
                        focus:outline-none focus:ring-2 focus:ring-amber-400" 
                type="text" 
                placeholder="Search for roles, companies and types..."
        />

        @foreach($roles as $role)
            <x-role :role="$role"></x-role>
        @endforeach

        <div 
        x-show="showToast"
        class="fixed bottom-5 right-5 px-2 py-1 
            bg-green-100 text-green-800 border-green-200 text-sm shadow rounded"
        x-text="message">
        </div>
    </main>
</x-layouts::app>