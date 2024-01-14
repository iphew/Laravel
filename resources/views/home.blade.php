@extends('layouts.default')

@section('title', 'Homepage')

@section('content')
    <!-- general form elements -->
    <div class="card card-primary container-sm">
        <div class="card-header">
            <h3 class="card-title">FORM</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form>
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">ชื่อ</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">นามสกุล</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">วัน/เดือน/ปีเกิด</label>
                    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Enter">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">อายุ</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter">
                </div>
                <div class="d-flex">
                    <div class="form-group">
                        <label for="exampleInputPassword1">เพศ</label>
                        <div class="d-flex">
                            <div class="d-flex">
                                <input type="radio" class="form-control" id="exampleInputPassword1">
                                <label for="">ชาย</label>
                            </div>
                            <div class="d-flex">
                                <input type="radio" class="form-control" id="exampleInputPassword1">
                                <label for="">หญิง</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">รูป</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">ที่อยู่</label>
                    <textarea class="form-control" id="exampleInputPassword1" placeholder="Enter"></textarea>
                </div>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        สีที่ชอบ
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">แดง</li>
                        <li><a class="dropdown-item" href="#">น้ำเงิน</li>
                        <li><a class="dropdown-item" href="#">เหลือง</li>
                    </ul>
                </div>
                <div class="d-flex">
                    <div class="form-group">
                        <label for="exampleInputPassword1">แนวเพลงที่ชอบ</label>
                        <div class="d-flex">
                            <div class="d-flex">
                                <input type="radio" class="form-control" id="exampleInputPassword1">
                                <label for="">เพื่อชีวิต</label>
                            </div>
                            <div class="d-flex">
                                <input type="radio" class="form-control" id="exampleInputPassword1">
                                <label for="">ลูกทุ่ง</label>
                            </div>
                            <div class="d-flex">
                                <input type="radio" class="form-control" id="exampleInputPassword1">
                                <label for="">อื่นๆ</label>
                            </div>{{--  --}}
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">ยินยอมให้เก็บข้อมูล</label>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="d-flex justify-content-between">
                <div class="card-footer">
                    <button type="submit" class="btn btn-secondary">Reset</button>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>

        </form>
    </div>
    <!-- /.card -->
@endsection
