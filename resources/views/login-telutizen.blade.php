@extends('layouts.main')

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
          <p class="card-title text-center">as Telutizen</p>
          <form action="home.html" method="POST">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email SSO</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Ingat Saya</label>
            </div>
            <div class="d-grid mb-3">
              <button type="submit" class="btn btn-danger" href="">Login</button>
            </div>
            <a class="text-danger text-decoration-none" href="">Lupa Password?</a>
            <br><br>
            <div class="text-center">
              Login sebagai UKM? <a class="text-danger text-decoration-none" href="/login-ukm">Login</a>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>
@endsection