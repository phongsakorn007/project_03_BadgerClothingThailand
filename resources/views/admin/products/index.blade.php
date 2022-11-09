@extends('layouts.back-end.master')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <h5 class="card-header">Products</h5>
        <div class="table-responsive text-nowrap">
            <a href="{{ route('products.create') }}" class="btn btn-success mx-3"><i class='bx bxs-plus-circle'></i> เพิ่มข้อมูล</a>
          <table class="table mt-4">
            <thead class="table-dark">
              <tr>
                <th>No</th>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Category</th>
                <th>Images</th>
                <th>Created_at</th>
                <th>Updated_at</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              @foreach ($products as $item)
             <tr>
              <td>{{$products ->firstItem()+$loop->index}}</td>
              <td>{{$item->name}}</td>
              <td>{{$item->price}}</td>
              <td>{{$item->description}}</td>
              <td>{{$item->categories->name}}</td>
              <td><img src="{{ asset('admin/upload/product/'.$item->image)}}" width="100px" height="80px" alt=""></td>
              <td>{{$item->created_at}}</td>
              <td>{{$item->updated_at}}</td>
              <td>
                <a href="{{ route('products.edit',$item->product_id)}}"><i class='bx bxs-edit'></i></a>
                <a href="{{ route('products.delete',$item->product_id)}}"><i class='bx bxs-trash'></i></a>
              </td>
             </tr>
             @endforeach
            </tbody>
          </table>
        </div>
      </div>
      {{$products->links('pagination::bootstrap-5')}}
    </div>
@endsection