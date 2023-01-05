@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-sm-5 mt-5">
                <form class="d-flex mt-5" role="search">
                    <input class="form-control me-2" type="search" placeholder="UKM name or keywords..." aria-label="Search">
                    <button class="btn btn-danger" type="submit">Search</button>
                </form>
            </div>
        </div>
        {{-- card --}}
        <div class="row text-center mt-5 justify-content-center">
            <div class="col-sm-4 mt-5">
                <div class="card mx-auto" style="width: 18rem; height: 30rem;">
                    <img src="{{ asset('asset/img/astacala.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">ASTACALA</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of the card's content.</p>
                        <a href="ukm-astacala.html" class="btn btn-danger">Lihat UKM</a>
                    </div>
                </div>
            </div>
        </div>
        {{-- card --}}
    </div>
@endsection
