<?php

namespace App\Http\Livewire;

use App\Models\Guru;
use App\Models\Kelas;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class EditKelas extends Component
{
    public $siswa , $siswaOld, $search = '';
    public $data ;

    protected $listeners = ['newUser' => 'addUser'];

    public function mount($kelas)
    {
        $this->data['id'] = $kelas->id;
        $this->data['tahun_akademik'] = $kelas->tahun_akademik;
        $this->data['kelas'] = $kelas->kelas;
        $this->data['guru_id'] = $kelas->guru_id;
        $this->siswa = $kelas->siswa->toArray();
        $this->siswaOld = $kelas->siswa->toArray();

    }

    public function addUser($value)
    {
        $this->siswa[] = $value;
    }

    public function lessUser($id)
    {    
        foreach ($this->siswa as $key => $user) {
            if ($user['id'] === $id) {
                unset($this->siswa[$key]);
            }
        }

        $this->emit('lessData', $id);
    }

    public function clearSearch()
    {
        $this->search = '';
        $this->updatingSearch();
    }

    public function updateKelas()
    {
        $this->validate([
            'data.tahun_akademik' => "required|string",
            'data.kelas' => 'required|string',
            'data.guru_id' => 'required|numeric',
            'siswa' => 'required'
        ]);

        $kelas = Kelas::where('id', $this->data['id'])->update([
            'tahun_akademik' => $this->data['tahun_akademik'],
            'kelas' => $this->data['kelas'],
            'guru_id' => $this->data['guru_id'],
        ]);

        foreach($this->siswa as $s)
        {
            $input[] = [ 
                'kelas_id' => $this->data['id'],
                'siswa_id' => $s['id'],
                'created_at' => now(),
                'updated_at' => now()
            ];
        }

        $deleteUser = [];

        foreach($this->siswaOld as $siswaOld ){

            foreach ($this->siswa as $s) {

                if ($siswaOld['id'] != $s['id']) {

                    if (!isset($deleteUser[$siswaOld['id']])) {
                        $deleteUser[$siswaOld['id']] = $siswaOld ;
                        DB::table('kelas_siswa')->where('siswa_id', $siswaOld['id'])->where('kelas_id', $this->data['id'])->delete();
                    }
                }
            }
        }
        
        $hasil = DB::table('kelas_siswa')->insertOrIgnore($input);

        session()->flash('status', 'Group successfully updated.');

        return Redirect::route('kelas');
    }

    public function render()
    { 
        $guru = Guru::all();
        return view('livewire.edit-kelas', compact('guru'));
    }
}
