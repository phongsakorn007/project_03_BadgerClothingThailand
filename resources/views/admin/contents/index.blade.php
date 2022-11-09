@extends('layouts.back-end.master')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <h5 class="card-header">Contents</h5>
        <div class="table-responsive text-nowrap">
            <a href="{{ route('contents.create') }}" class="btn btn-success mx-3"><i class='bx bxs-plus-circle'></i> เพิ่มข้อมูล</a>
          <table class="table mt-4">
            <thead class="table-dark">
              <tr>
                <th>No</th>
                <th>Name</th>
                <th>Detail</th>
                <th>Images</th>
                <th>Created_at</th>
                <th>Updated_at</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
             @foreach ($contents as $item)
             <tr>
              <td>{{$contents ->firstItem()+$loop->index}}</td>
              <td>{{$item->name}}</td>
              <td>{{$item->detail}}</td>
              <td><img src="{{ asset('admin/upload/contents/'.$item->image)}}" width="100px" height="80px" alt=""></td>
              <td>{{$item->created_at}}</td>
              <td>{{$item->updated_at}}</td>
              <td>
                <a href="{{ route('contents.edit',$item->id)}}"><i class='bx bxs-edit'></i></a>
                <a href="{{ route('contents.delete',$item->id)}}"><i class='bx bxs-trash'></i></a>
              </td>
             </tr>
             @endforeach
            </tbody>
          </table>
        </div>
      </div>
      {{$contents->links('pagination::bootstrap-5')}}
    </div>
@endsection