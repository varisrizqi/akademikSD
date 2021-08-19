<?php

namespace App\Http\Livewire\Kelas;

use App\Models\Guru;
use App\Models\Kelas;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class CreateKelas extends Component
{
    public $siswa = [] ;
    public $data;
    protected $listeners = ['newUser' => 'addUser'];

    protected $rules = [
        'data.tahun_akademik' => 'required|date',
        'data.kelas' => 'required|string',
        'data.guru_id' => 'required|integer',
        'siswa' => 'required'
    ];

    public function addUser($value)
    {
        $this->siswa[] = $value;
    }

    public function lessUser($id)
    {    
        foreach ($this->siswa as $key => $s) {
            if ($s['id'] === $id) {
                unset($this->siswa[$key]);
            }
        }

        $this->emit('lessData', $id);
    }

    public function store()
    {
        $this->validate();

        $kelas = Kelas::create($this->data);

        $input = [];

        foreach($this->siswa as $s)
        {
            $input[] = [ 
                'kelas_id' => $kelas->id,
                'siswa_id' => $s['id'],
                'created_at' => now(),
                'updated_at' => now()
            ];
        }

        $hasil = DB::table('kelas_siswa')->insertOrIgnore($input);

        if ($hasil > 0) {
            session()->flash('message', 'Kelas baru berhasil di tambahkan');

            return Redirect::route('kelas');
        }

    }

    public function render()
    {
        $guru = Guru::all();
        return view('livewire.kelas.create-kelas', compact('guru'));
    }
}
