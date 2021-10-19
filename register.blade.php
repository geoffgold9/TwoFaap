@extends('templates.main')

@section('content')
<h1>Register</h1>
<form>
  <div class="form-group">
    <label for="name" class="form-label">Name</label>
    <input name ="name" type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter email">
    @error('name')
    <span class="invalid-feedback" role="alert">
        {{$message}}
</span>
    @enderror
  </div>
  <div class="form-group">
    <label for="email" class="form-label">Email address</label>
    <input name="email" type="email" class="form-control" id="email" placeholder="Password">
    @error('email')
    <span class="invalid-feedback" role="alert">
        {{$message}}
</span>
    @enderror  
</div>
  <div class="form-group">
    <input name ="password" type="password" class="form-check-input" id="password">
    <label  for="password" class="form-label">Password</label>
    @error('password')
    <span class="invalid-feedback" role="alert">
        {{$message}}
</span>
    @enderror
  </div>
  
</form>
@endsection