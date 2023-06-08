@extends('layouts.main')
@section('content')
    
<div class="container">
     <!-- Page Heading -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Daftar Product</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"></a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="/product-add" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Gambar</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Harga</th>
                            <th>acttion</th>
                        </tr>
                    </thead>
                    <tbody>
                    @forelse ($daftarProduk as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><img src="{{ $item->image }}" alt="" width="60" class="img-thumbnail rounded"></td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->category_id }}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->harga }}</td>
                        <td>
                            <a href="" class="btn btn-success">Update</a>
                            <a href="" class="btn btn-danger">Delete</a>
                            <a href="" class="btn btn-warning">Detail</a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3" class="text-center">Data Masih Kosong</td>
                    </tr>
                    @endforelse
                </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection