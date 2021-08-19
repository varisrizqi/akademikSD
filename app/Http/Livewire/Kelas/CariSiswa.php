<?php

namespace App\Http\Livewire\Kelas;

use App\Models\Siswa;
use Livewire\Component;
use Livewire\WithPagination;

class CariSiswa extends Component
{
    use WithPagination;

    protected $listeners = ['lessData' => 'deleteData'];

    public $search = '', $data = [];

    public function mount($siswa = []){
        $this->data = $siswa;
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
    
    public function addData($value)
    {
        $this->emit('newUser', $value);
        return $this->data[] = $value;        
    }
    
    public function deleteData($id)
    {
        foreach ($this->data as $key => $user) {
            if ($user['id'] === $id) {
                unset($this->data[$key]);
            }
        }
    }

    public function cek()
    {
        dd($this->data);
    }

    public function paginationView()
    {
        return 'vendor.livewire.bootstrap';
    }

    public function render()
    {
        $id = [];
        foreach ($this->data as $value ) 
        {
            $id[] = $value['id'];
        }

        $siswa = Siswa::whereNotIn("id", $id)->where(function($query)
        {
            $query->Where('nama', 'like', '%'.$this->search.'%')
            ->orWhere('id', 'like', '%'.$this->search.'%');
        });

        return view('livewire.kelas.cari-siswa', ['siswa' =>  $siswa->paginate(5)]);
    }
}
