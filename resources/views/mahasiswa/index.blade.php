@extends('layout.main')

@section('title', 'Daftar Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Daftar Mahasiswa</h1>

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Nim</th>
                        <th scope="col">Email</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Ferry iqbal rhamdani</td>
                        <td>A11.2016.09634</td>
                        <td>rhamdani128@gmail.com</td>
                        <td>Teknik Informatika</td>
                        <td>
                            <a href="" class="badge badge-success">Ubah</a> | <a href="" class="badge badge-danger">Hapus</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection