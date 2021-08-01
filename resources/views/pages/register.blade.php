@extends('layouts.default')
@section('content')
<div class="container custom-login">
  <div class="row">
    <div class="col-sm-4 offset-sm-4">
      <form action="register" method="POST">
        @csrf
        <div class="mb-3">
          <div class="mb-3">
            <label for="exampleInputName" class="form-label">Username</label>
            <input type="text" class="form-control" 
            name="name"
            id="exampleInputName">
          </div>
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1"
          name="email"
          aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" 
          name="password"
          id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
      </form>
    </div>
  </div>
</div>
@endsection