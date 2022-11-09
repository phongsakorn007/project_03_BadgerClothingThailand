@extends('layouts.back-end.master')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-12">
          <div class="card mb-9">
            <h5 class="card-header">Abouts</h5>
            <div class="card-body">
              <div>
                <form action="{{ route('abouts.update',$abouts->id) }}"method="post">
                  @csrf
                <label for="defaultFormControlInput" class="form-label">Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="defaultFormControlInput"
                  placeholder="กรุณากรอกชื่อสินค้า"
                  aria-describedby="defaultFormControlHelp"
                  name="name" value="{{$abouts->name}}"
                />

                
                <label for="defaultFormControlInput" class="form-label">Detail</label>
                <input
                  type="text"
                  class="form-control"
                  id="defaultFormControlInput"
                  placeholder="กรุณากรอกรายละเอียดสินค้า"
                  aria-describedby="defaultFormControlHelp"
                  name="detail" value="{{$abouts->detail}}"
                />

                <label for="defaultFormControlInput" class="form-label">Images</label>
                  <div class="input-group">
                    <input type="file" class="form-control" id="inputGroupFile02" />
                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                  </div>

                  <Button type="submit" value="บันทึก" class="btn btn-primary mt-3">บันทึก</Button>
                  <a href="{{ route('abouts.index') }}" class="btn btn-danger mt-3 mx-2">ย้อนกลับ</a>
                </form>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
@endsection