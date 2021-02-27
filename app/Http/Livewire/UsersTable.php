<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;

class UsersTable extends Component
{
    use WithPagination;

    public $perPage = 10;
    public $search = '';
    public $orderBy = 'id';
    public $orderAsc = true;

    public $roles;
    public $showEditModal = false;

    public $userId;
    public $name;
    public $email;
    public $usert;
    public $urol;

    public function mount()
    {
        $this->roles = Role::all();
    }

    public function modelData()
    {
        return [
            'name' => $this->name,
            'email' => $this->email,
            'rol' => $this->urol,
        ];
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required',
            'rol' => 'required'
        ];
    }
    
    public function loadModel()
    {
        $usert = User::findOrFail($this->userId);
        $this->name = $usert->name;
        $this->email = $usert->email;
        if($usert->roles->count()){
            $this->urol = $usert->roles[0]->id;
        } else {
            $this->urol = 3;
        }
            
        
    }

    public function clearVars()
    {
        $this->reset();
    }

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
     * updateShowModal
     *
     * @param [type] $id
     * @return void
     */
    public function updateShowModal($id)
    {
        $this->userId = $id;
        $this->showEditModal = true;
        $this->loadModel(); 

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
