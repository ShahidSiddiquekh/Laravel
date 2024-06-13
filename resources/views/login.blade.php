@extends('master')
@section('content')
<div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    <form class="w-50" action="/login" method="POST">
        <div class="mb-3">
            @csrf
            <label for="inputEmail" class="form-label">Email address</label>
            <input type="email" class="form-control" id="inputEmail" name="email">
        </div>
        <div class="mb-3">
            <label for="inputPassword" class="form-label">Password</label>
            <input type="password" class="form-control" id="inputPassword" name="password">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </div>
    </form>
</div>
@endsection
