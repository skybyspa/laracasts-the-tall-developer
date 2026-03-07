<?php

use Livewire\Component;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;

new class extends Component
{
    public $roles = [];
    public string $type = 'all';
    public string $search = '';

    public function mount()
    {
        if ($this->type == "bookmarked")
        {
            $this->roles = Auth::user()->bookmarkedRoles()->get();
            return;
        }
        $this->roles = Role::all();
    }

    public function toggleBookmark($role_id)
    {
        Auth::user()->bookmarkedRoles()->toggle($role_id);
        if ($this->type == "bookmarked")
        {
            $this->roles = Auth::user()->bookmarkedRoles()->get();
        }
    }

    public function updatedSearch()
    {
        $query = Role::query();

        if($this->type == "bookmarked")
        {
            $query->whereAttachedTo(Auth::user());
        }

        if ($this->search)
        {
            $query->where(function($q) {
                $q->where('title', 'like', '%' . $this->search . '%')
                ->orWhere('company', 'like', '%' . $this->search . '%')
                ->orWhere('location', 'like', '%' . $this->search . '%')
                ->orWhere('type', 'like', '%' . $this->search . '%');
            });
        }
        
        $this->roles = $query->get();
    }
};
?>

<div>
    <input class="bg-white border border-zinc-300 mt-4 
                        rounded-md w-full px-5 py-2 shadow-xs
                        focus:outline-none focus:ring-2 focus:ring-amber-400" 
                type="text" 
                placeholder="Search for roles, companies and types..."
                wire:model.live.debounce.200ms="search"
        />

        @if($search)
        <p class="mt-4 text-sm text-amber-600">
            Showing results for {{  $search }}
        </p>
        @endif

        @foreach($roles as $role)
            <x-role :role="$role"></x-role>
        @endforeach

        <div 
        x-show="showToast"
        class="fixed bottom-5 right-5 px-2 py-1 
            bg-green-100 text-green-800 border-green-200 text-sm shadow rounded"
        x-text="message">
    </div>
</div>