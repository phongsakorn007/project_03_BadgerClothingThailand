@extends('layouts.back-end.master')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <h5 class="card-header">Abouts</h5>
        <div class="table-responsive text-nowrap">
            <a href="{{ route('abouts.create') }}" class="btn btn-success mx-3"><i class='bx bxs-plus-circle'></i> เพิ่มข้อมูล</a>
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
              @foreach ($abouts as $item)๋
             <tr>
              <td>{{$abouts ->firstItem()+$loop->index}}</td>
              <td>{{$item->name}}</td>
              <td>{{$item->detail}}</td>
              <td><img src="{{ asset('admin/upload/abouts/'.$item->image)}}" width="100px" height="80px" alt=""></td>
              <td>{{$item->created_at}}</td>
              <td>{{$item->updated_at}}</td>
              <td>
                <a href="{{ route('abouts.edit',$item->id)}}"><i class='bx bxs-edit'></i></a>
                <a href="{{ route('abouts.delete',$item->id)}}"><i class='bx bxs-trash'></i></a>
              </td>
             </tr>
             @endforeach
            </tbody>
          </table>
        </div>
      </div>
      {{$abouts->links('pagination::bootstrap-5')}}
    </div>
@endsection