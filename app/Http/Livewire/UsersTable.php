<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UsersTable extends Component
{

    use WithPagination;

    public $perPage = 10;
    public $search = '';
    public $orderBy = 'id';
    public $orderAsc = true;
    public $showEditModal = true;

    /**
     * showEditModal
     * Show the form modal
     *
     * @return void
     */
    public function OpenshowEditModal()
    {
        $this->showEditModal = true;
    }
    
    /**
     * Render Component
     *
     * @return void
     */
    public function render()
    {
        return view('livewire.users-table', [
            'users' => User::search($this->search)
                ->with('roles')
                ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                ->paginate($this->perPage),
        ]);
    }
}
