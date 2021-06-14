
<form action="{{ route('adminLogout') }}" method="POST">
    @csrf
    @method('post')
    <button type="submit">adminLogout</button>
</form>
{{ dd(Auth::guard('admin')->user()) }}
@if (Auth::check())
    login
@endif