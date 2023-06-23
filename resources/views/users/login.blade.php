@extends('layouts.layout')
@section('content')
<div class="content-wrapper p-2 m-5 ">
    <h1 class="text-center">Login</h1>
    <p class="text-center">Login Your account For Post Jobs</p>
    <!-- Content Header (Page header) -->
    <section class="content-header ">
        <div class="container col-lg-5  " >
            <div class="row mb-2 ">
            <!-- jquery validation -->
            <div class="card card-primary ">
              <!-- form start -->
              <form action="/users/authenticate" method="POST">
                @csrf
                <div class="mb-3 mt-3">
                  <label for="email" class="form-label">Email:</label>
                  <input type="email" value="{{ old('email') }}" class="form-control" id="email" placeholder="Enter email" name="email">
                  @error('email')
                  <p class=" text-danger text-danger " style="font-size: 12px">{{ $message }}</p>
               @enderror
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password:</label>
                  <input type="password" value="{{ old('password') }}" class="form-control" id="pwd" placeholder="Enter password" name="password">
                  @error('password')
                  <p class=" text-danger text-danger " style="font-size: 12px">{{ $message }}</p>
               @enderror
                </div>

                <button type="submit" class="btn btn-primary ">LogIn</button>
                <div class="mt-3 d-flex"><p>Don't have you an acount?</p><a href="/register">SignUp</a></div>
              </form>            </div>
            <!-- /.card -->
            </div>
        </div>

    </section>
</div>
@endsection
