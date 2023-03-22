@extends('login_register.login_register')
@section('container')

<div class="register">

    <h1>Registration Form</h1>
    <form method="POST" action="/register">
        @csrf
        <div class=" mb-3 form-floating">
            {{-- <label for="name" >Name</label> --}}
            <input type="text" required value="{{old('name')}}" class="form-control ronded-top  @error('name')is-invalid @enderror" id="name" name="name" placeholder="Name">
        @error('name')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
        </div>

        <div class="mb-3">
            {{-- <label for="username" class="form-label">User Name</label> --}}
            <input type="text" required value="{{old('username')}}" class="form-control ronded-top  @error('username')is-invalid @enderror" id="username" name="username"placeholder="username">
            @error('username')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
        </div>

        <div class="mb-3">
            {{-- <label for="nik" class="form-label">nik</label> --}}
            <input type="text"required value="{{old('nik')}}"  class="form-control ronded-top  @error('nik')is-invalid @enderror" id="username" name="nik" placeholder="nik">
            @error('nik')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
        </div>

        <div class="mb-3">
            {{-- <label for="email" class="form-label">Email</label> --}}
            <input type="email" required value="{{old('email')}}" class="form-control ronded-top  @error('email')is-invalid @enderror" id="email" name="email" placeholder="email">
            @error('email')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
        </div>

        <div class="mb-3">
            {{-- <label for="password" class="form-label">Password</label> --}}
            <input type="password"  class="form-control ronded-top  @error('password')is-invalid @enderror" id="password" name="password" placeholder="password">
            @error('password')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
        </div>

        <a class="registericon" href="/login">
            <img src="img/login.png" alt="login">
            <p class="href_login">Login</p>
        </a>
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-primary">reset</button>
    </form>
</div>
@endsection