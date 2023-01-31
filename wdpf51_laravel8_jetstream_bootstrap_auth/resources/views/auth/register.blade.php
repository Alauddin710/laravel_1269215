@extends('layouts.app')
@section('title', 'Register Page')
@section('content')
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-6">
      <br>
      {{-- Showing errors --}}
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      {{-- Showing errors --}}
      <h1>Registration Form</h1>
      <form method="post" action="{{ route('register') }}">
        @csrf
        <!-- Email input -->
        <div class="form-outline mb-4">
          <input type="text" name="name" id="name" class="form-control" />
          <label class="form-label" for="name">Name</label>
        </div>
        <div class="form-outline mb-4">
          <input type="text" name="email" id="email" class="form-control" />
          <label class="form-label" for="email">Email address</label>
          @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">
          <input type="password" name="password" id="form2Example2" class="form-control" />
          <label class="form-label" for="form2Example2">Password</label>
        </div>
        <div class="form-outline mb-4">
          <input type="password" name="password_confirmation" id="form2Example2" class="form-control" />
          <label class="form-label" for="password_confirmation">Password Confirm</label>
        </div>
        <!-- 2 column grid layout for inline styling -->
        <div class="row mb-4">
          <div class="col">
            <!-- Simple link -->
            <a href="#!">Forgot password?</a>
          </div>
        </div>

        <!-- Submit button -->
        <button class="btn btn-primary btn-block mb-4">Register</button>
        <!-- Register buttons -->
        <div class="text-center">
          <p>Not a member? <a href="{{ route('register') }}">Register</a></p>
          <p>or sign up with:</p>
          <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-facebook-f"></i>
          </button>

          <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-google"></i>
          </button>

          <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-twitter"></i>
          </button>

          <button class="btn btn-link btn-floating mx-1">
            <i class="fab fa-github"></i>
          </button>
        </div>
      </form>
    </div>
  </div>

@endsection
