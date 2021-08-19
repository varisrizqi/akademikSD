<div class="col-md-4">
    <div class="card card-plain">
      <div class="card card-user">
        <div class="card-header">
          <h5 class="card-title ml-3">siswa</h5>
        </div>
        <div class="card-body pr-5 pl-5">
            <form action="{{route('kelas.create')}}" method="get" role="search">
                @csrf                        
                <div class="input-group no-border">
                    <input name="search" type="text" autocomplete="off" value="" class="form-control" placeholder="Cari...">
                    <div class="input-group-append">
                    <button class="input-group-text">
                        <i class="nc-icon nc-zoom-split"></i>
                    </button>
                    </div>
                </div>
            </form>
            <div class="table-responsive"> 
                <table class="table"> 
                    <thead class=" text-primary"> 
                        <tr>
                            <th> Nama </th> 
                            <th> Nipd </th>
                        </tr>
                    </thead> 
                    <tbody> 
                        @forelse ($siswa as $s)
                        <tr wire:click="addData({{$s}})" style="cursor: pointer;"> 
                            <td> {{ $s->nama }} </td> 
                            <td> {{ $s->nipd }} </td> 
                        </tr> 
                        @empty
                            <h3>data siswa tidak ada</h3>
                        @endforelse
                    </tbody>
                </table> 
            </div>
            {{ $siswa->links() }}
        </div>
      </div>
    </div>
  </div>
