@extends('layouts.back-end.master')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-12">
          <div class="card mb-9">
            <h5 class="card-header">Categories</h5>
            <div class="card-body">
              <div>
                <form action="{{ route('categories.update',$categories->category_id) }}"method="post">
                  @csrf
                <label for="defaultFormControlInput" class="form-label">Name</label>
                <input
                  type="text"
                  class="form-control" name="name" value="{{$categories->name}}"
                  id="defaultFormControlInput"
                  placeholder="กรุณากรอกประเภทสินค้า"
                  aria-describedby="defaultFormControlHelp"
                />
                <Button type="submit" value="บันทึก" class="btn btn-primary mt-3">บันทึก</Button>
                <a href="{{ route('categories.index') }}" class="btn btn-danger mt-3 mx-2">ย้อนกลับ</a>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection