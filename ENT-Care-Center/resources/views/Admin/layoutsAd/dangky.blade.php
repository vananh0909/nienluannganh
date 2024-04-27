@extends('Admin.Clients.ClientAd')
@section('title')
    {{ $title }}
@endsection
@section('content')
    @if (session('status'))
        <div style="padding-top:60px">
            <h4 style="width: 300px; height:10px; margin: 0 auto;font-size:18px; text-align:center; padding-bottom:40px;"
                class="alert alert-success">
                {{ session('status') }}</h4>
        </div>
    @endif
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <form method="POST" action="{{ route('Admin.postdangky') }}"
            style="border-radius:6px; border: 1px solid #ccc; height: 400px; width: 500px">
            @CSRF

            <div style="margin-top: 35px">
                <h1 style="font-size:16px; text-align:center">ĐĂNG KÝ TRANG QUẢN TRỊ</h1>
            </div>


            <div style="margin-left: 40px; margin-top: 60px;">
                <div class="row g-3 align-items-center mb-3">
                    <div class="col-3">
                        <label for="inputPassword6" class="col-form-label">Họ Tên: </label>
                    </div>
                    <div class="col-7">
                        <input type="text" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline"
                            name="AD_Name" required>
                    </div>
                </div>
                <div class="row g-3 align-items-center mb-3">
                    <div class="col-3">
                        <label for="inputPassword6" class="col-form-label">Điện Thoại: </label>
                    </div>
                    <div class="col-7">
                        <input type="text" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline"
                            name="AD_Phone" required>
                    </div>
                </div>
                <div class="row g-3 align-items-center mb-3">
                    <div class="col-3">
                        <label for="inputPassword6" class="col-form-label">Email:</label>
                    </div>
                    <div class="col-7">
                        <input type="email" class="form-control" id="exampleFormControlInput1"
                            aria-describedby="passwordHelpInline" name="AD_Email" required>
                    </div>
                </div>

                <div class="row g-3 align-items-center mb-3">
                    <div class="col-3">
                        <label for="inputPassword6" class="col-form-label" name="AD_Password">Password</label>
                    </div>
                    <div class="col-7">
                        <input type="password" id="inputPassword6" class="form-control"
                            aria-describedby="passwordHelpInline" required>
                    </div>
                </div>

                <div class="row justify-content-end">
                    <div class="col-8">
                        <button type="submit" style="margin-left: 26px" class="btn btn-light">Đăng Ký</button>
                    </div>
                    <div>
                        <p style="font-size:13px; margin-left:130px; margin-top: 10px"> Bạn đã có tài khoản? <a
                                href="{{ route('Admin.dangnhap') }}">Đăng Nhập</a></p>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
