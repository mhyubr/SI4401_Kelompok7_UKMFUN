@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row text-center mt-5 justify-content-center">
            <div class="col-sm-12 mb-5 mt-5">
                <img class="mt-5" src="{{ asset('asset/img/ukm-fun-black.png') }}" alt="ukm-fun" width="50%">
            </div>
            <div class="row text-center mt-5 justify-content-center">
                {{-- card --}}
                <div class="col-sm-4 mt-5">
                    <div class="card mx-auto" style="width: 18rem; height: 30rem;">
                        <img src="{{ asset('asset/img/imabest.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">IMABEST</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-danger">Lihat UKM</a>
                        </div>
                    </div>
                </div>
                {{-- card --}}
            </div>
        </div>
    </div>
@endsection
