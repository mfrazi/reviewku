<form method="post" action="{{ route('login.post') }}">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="username"></label>
        <input name="username" type="text" class="form-control" id="username"/>
    </div>
    <div class="form-group">
        <label for="password"></label>
        <input name="password" type="password" class="form-control" id="password"/>
    </div>
    <button type="submit">Login</button>
</form>