<div class="col-md-8">
    <div class="card card-plain">
      <div class="card card-user">
        <div class="card-header">
          <h5 class="card-title ml-2">Tambah Kelas</h5>
        </div>
        <div class="card-body pr-5 pl-5">
          <form method="POST" wire:submit.prevent="store">
            @csrf
            @method('POST')
            @if ($errors->any())
              <div class="row">
                  <div class="alert alert-danger pr-5" style="width: 100%;">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="mt-2 mb-2">Peringatan !</h4>
                    @foreach ($errors->all() as $error)
                      {{ $error }} | 
                    @endforeach
                </div>
              </div>
            @endif
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Tahun akademik
                <input name="tahun_akademik" wire:model.defer="data.tahun_akademik" type="date" class="form-control" placeholder="" value="" required>
              </div>
              <div class="form-group">
                <label>Kelas
                <input name="kelas" wire:model.defer="data.kelas" type="text" class="form-control" placeholder="" value="" required>
              </div>
              <div class="form-group">
                <label for="guru">Wali kelas</label>
                <select class="form-control" id="guru" name="guru_id" wire:model.defer="data.guru_id" required>
                    <option selected>pilih...</option>
                  @forelse ($guru as $data)
                    <option value="{{ $data->id }}">{{$data->nama}} ( NIP : {{$data->NIP}} )</option>
                  @empty
                    <option disabled >belum ada data guru</option>
                  @endforelse
                </select>
              </div>
              <button type="submit" class="btn btn-primary" >Simpan</button>
            </div>
            <div class="col-md-6">
              <div class="card @error('siswa') border-danger @enderror">
                <div class="card-body mx-auto" style="height: 240px;">
                  @forelse ($siswa as $s)
                    <div style="display: inline-block; border" class="mr-1 mb-2 small rounded border p-1">
                        <span>{{$s['nama']}}</span>
                        <span style="cursor: pointer;" class="p-1" wire:click='lessUser({{$s['id']}})'>&times;</span>
                    </div>
                    @empty
                    <div style="top: 50%; position:relative;" class="@error('siswa') text-danger @enderror">Siswa belum di masukan
                    </div>                 
                    @endforelse
                </div>
              </div>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
</div>