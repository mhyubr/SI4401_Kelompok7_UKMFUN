@extends('layouts.login')

@section('container')
<div class="container">
    <div class="ukm-fun row text-center">
      <div class="col">
        <img src="{{ asset('asset/img/ukm-fun.png') }}" class="my-1" alt="ukm-fun">
      </div>
    </div>
    <div class="row justify-content-center mt-5">
      <div class="card" style="width: 25rem;">
        <div class="card-body">
          <h1 class="card-title text-center">Login</h1>
          @if (session()->has('LoginGagal'))
          <div class="alert alert-danger" role="alert">
            {{ session('LoginGagal') }}
          </div>
          @endif
          <form action="/login" method="POST">
            @csrf
            <div class="mb-3">
              <label for="email" class="form-label">Email SSO</label>
              <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" autofocus required>
            </div>
            <div class="mb-3">  
              <label for="password" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="password" required>
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Ingat Saya</label>
            </div>
            <div class="d-grid mb-3">
              <button type="submit" class="btn btn-danger" href="">Login</button>
            </div>
            <a class="text-danger text-decoration-none" href="https://igracias.telkomuniversity.ac.id/">Lupa Password?</a>
            <br><br>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>
@endsection