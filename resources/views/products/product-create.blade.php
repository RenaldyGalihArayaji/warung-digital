@extends('layouts.main')
@section('content')
    <div class="container">
        <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Product</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"></a>
    </div>
    <div class="card shadow mb-4 p-2 mx-5">
        <form class="p-4" method="post" action="/product-add">
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label">Name Product</label>
              <input type="text" class="form-control " name="name" id="name" >
            </div>
            <div class="mb-3">
                <label for="category_id" class="form-label">category </label>
                <input type="text" class="form-control" name="category_id" id="category_id" >
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" name="price" id="price" >
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="text" class="form-control" name="harga" id="harga" >
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Gambar</label>
                <input type="file" class="form-control" name="image" id="image" >
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
          </form>
    </div>
    </div>

    
@endsection