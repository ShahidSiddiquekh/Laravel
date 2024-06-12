@extends ('master');
@section("content")
<div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
  <form class="w-50">
    <div class="mb-3">
      <label for="inputEmail" class="form-label">Email</label>
      <input type="email" class="form-control" id="inputEmail">
    </div>
    <div class="mb-3">
      <label for="inputPassword" class="form-label">Password</label>
      <input type="password" class="form-control" id="inputPassword">
    </div>
    <div class="mb-3">
      <button type="submit" class="btn btn-primary w-100">Submit</button>
    </div>
  </form>
</div>

@endsection