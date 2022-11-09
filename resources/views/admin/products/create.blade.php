@extends('layouts.back-end.master')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-12">
          <div class="card mb-9">
            <h5 class="card-header">Products</h5>
            <div class="card-body">
              <div>
                <form action="{{ route('products.insert') }}" method="post" enctype="multipart/form-data">
                  @csrf
                <label for="defaultFormControlInput" class="form-label">Name</label>
                <input
                  type="text"
                  class="form-control" name="name"
                  id="defaultFormControlInput"
                  placeholder="กรุณากรอกชื่อสินค้า"
                  aria-describedby="defaultFormControlHelp"
                />

                
                <label for="defaultFormControlInput" class="form-label">Price</label>
                <input
                  type="text"
                  class="form-control" name="price"
                  id="defaultFormControlInput"
                  placeholder="กรุณากรอกราคาสินค้า"
                  aria-describedby="defaultFormControlHelp"
                />

                <label for="defaultFormControlInput" class="form-label">Description</label>
                <input
                  type="text"
                  class="form-control" name="description"
                  id="defaultFormControlInput"
                  placeholder="กรุณากรอกคำอธิบายเอียดสินค้า"
                  aria-describedby="defaultFormControlHelp"
                />

                <label for="defaultFormControlInput" class="form-label">Category</label>
                <select class="form-select" name="category_id" aria-label="Default select example">
                  <option selected>เลือกประเภทสินค้า</option>
@foreach ($categories as $item)
                  <option value="{{ $item->category_id }}">{{ $item->name }}</option>
   @endforeach  
                </select>


                <label for="defaultFormControlInput" class="form-label">Images</label>
                  <div class="input-group">
                    <input type="file" class="form-control" id="inputGroupFile02" name="image" />
                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                  </div>

                  <Button type="submit" value="บันทึก" class="btn btn-primary mt-3">บันทึก</Button>
                  <a href="{{ route('products.index') }}" class="btn btn-danger mt-3 mx-2">ย้อนกลับ</a>
                  </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection