@extends('layouts.main')
@section('content')
    
<div class="container">
     <!-- Page Heading -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Slider</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"></a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="/slider-create" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Gambar</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($data as $item)
                        <tr>
                            <td>{{ $loop->iteration}}</td>
                            <td>{{ $item->title }}</td>
                            <td><img src="{{ asset('storage/image/'.$item->image)}}" alt="" width="60" class="image-fluid"></td>
                            <td>  
                                <a href="/slider-edit/{{ $item->id }}" class="btn btn-success">Update</a>
                                <a href="/slider-delete/{{ $item->id }}" class="btn btn-danger" onclick="confirm('Yakin mau di hapus?')">Delete</a>
                            </td>
                        </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center">Data Masih Kosong</td>
                            </tr>
                        @endforelse
                </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection