
<form action="{{ route('adminLogout') }}" method="POST">
    @csrf
    @method('post')
    <button type="submit">adminLogout</button>
</form>
<form action="{{ route('siswaLogout') }}" method="POST">
    @csrf
    @method('post')
    <button type="submit">siswaLogout</button>
</form>
<form action="{{ route('siswaLogout') }}" method="POST">
    @csrf
    @method('post')
    <button type="submit">siswaLogout</button>
</form>
@if (Auth::check())
    login
@endif