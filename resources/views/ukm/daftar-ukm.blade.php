@extends('layouts.main-ukm')

@section('container')\
<div class="container-fluid">
    <br><br><br><br><br>
    <h2 class="text-center">Status Pendaftar</h2>
    <div class="row justify-content-center">
        <div class="col-sm-4">
            <div class="mt-3">
                <h5>Jumlah Pendaftar</h5>
                <div class="progress">
                    <div class="progress-bar bg-warning" role="progressbar" aria-label="Info example"
                        style="width: 100%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">100</div>
                </div>
            </div>
            <div class="mt-3">
                <h5>Terima</h5>
                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" aria-label="Warning example"
                        style="width: 55%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">55</div>
                </div>
            </div>
            <div class="mt-3">
                <h5>Tolak</h5>
                <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" aria-label="Danger example"
                        style="width: 20%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">20</div>
                </div>
            </div>
            <div class="mt-3">
                <h5>Belum Dikonfirmasi</h5>
                <div class="progress">
                    <div class="progress-bar bg-secondary" role="progressbar" aria-label="Danger example"
                        style="width: 5%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">5</div>
                </div>
            </div>
        </div>
    </div>
    <!-- table -->
    <br><br><br>
    <h2 class="text-center">List Pendaftar</h2>
    <table class="table table-striped table-hover mt-5">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">NIM</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Alamat Lengkap</th>
                <th scope="col">Email</th>
                <th scope="col">No. HP</th>
                <th scope="col">KSM</th>
                <th scope="col">KHS</th>
                <th scope="col">CV</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <tr>
                <th scope="row">1</th>
                <td>Muhammad Ayyub Ramli</td>
                <td>1202201296</td>
                <td>S1 Sistem Informasi</td>
                <td>Laki - laki</td>
                <td>Komp. Perumahan Buah Batu Blok H No. 20</td>
                <td>mhyubr@gmail.com</td>
                <td>082304432424</td>
                <td><a class="text-decoration-none" href="#">KSM_AYYUB.pdf</a></td>
                <td><a class="text-decoration-none" href="#">KHS_AYYUB.pdf</a></td>
                <td><a class="text-decoration-none" href="#">CV_AYYUB.pdf</a></td>
                <td class="text-success">Diterima</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Ni Putu Putri Diah Utami</td>
                <td>1202200062</td>
                <td>S1 Sistem Informasi</td>
                <td>Perempuan</td>
                <td>Komp. Pesona Bali Blok A No. 22</td>
                <td>didiahputri@gmail.com</td>
                <td>081234567890</td>
                <td><a class="text-decoration-none" href="#">KSM_DIAH.pdf</a></td>
                <td><a class="text-decoration-none" href="#">KHS_DIAH.pdf</a></td>
                <td><a class="text-decoration-none" href="#">CV_DIAH.pdf</a></td>
                <td class="text-success">
                    <buttton class="btn btn-success">Terima</buttton>
                    <p></p>
                    <buttton class="btn btn-danger">Tolak</buttton>
                </td>
            </tr>
        </tbody>
    </table>
    <!-- table -->
</div>
@endsection