@extends('Admin.Clients.ClientAd')
@section('title')
    {{ $title }}
@endsection
@section('content')
    <div style="text-align: center;padding-top: 76px">
        <h1 style="font-size:24px ; ">XIN VUI LÒNG ĐĂNG NHẬP ĐỂ VÀO TRANG QUẢN TRỊ</h1>
    </div>
    <div
        style="background-color: rgb(234, 235, 239); width: 500px; height:520px; border-radius:6px; margin:0 auto; border: 1px solid rgb(154, 153, 153);">
        @if (session('status'))
            <div style="padding-top:60px">
                <h4 style="width: 300px; height:10px; margin: 0 auto;font-size:18px; text-align:center; padding-bottom:40px;"
                    class="alert alert-success">
                    {{ session('status') }}</h4>
            </div>
        @endif
        <div style="text-align: center">
            <img style="width: 200px" src="{{ asset('images/img-nen/logo.png') }}">
        </div>
        <form method="POST" action="{{ route('Admin.login') }}">
            @csrf
            <div style="margin: 20px 40px 10px 40px">
                <label for="sodienthoai" class="form-label">Email (<span style="color:red">*</span>)</label>

                <input type="email" class="form-control" id="exampleFormControlInput1"
                    aria-describedby="passwordHelpInline" name="AD_Email" required>

            </div>

            <div style="margin-left: 40px; margin-right: 40px">
                <label for="inputPassword5" class="form-label">Mật Khẩu (<span style="color:red">*</span>)</label>
                <div class="input-group">
                    <input type="password" type="password" id="inputPassword5" class="form-control"
                        aria-describedby="passwordHelpBlock" name="AD_Password" required>
                    <button type="button" id="togglePassword" class="btn btn-light"><i id="eyeIcon"
                            class="fa-regular fa-eye"></i></button>

                    <script>
                        document.getElementById('togglePassword').addEventListener('click', function() {
                            var passwordInput = document.getElementById('inputPassword5');
                            var eyeIcon = document.getElementById('eyeIcon');

                            if (passwordInput.type === "password") {
                                passwordInput.type = "text";
                                eyeIcon.className = "fa-solid fa-eye-slash";
                            } else {
                                passwordInput.type = "password";
                                eyeIcon.className = "fa-regular fa-eye";
                            }
                        });
                    </script>

                </div>
            </div>


            <div style="text-align: center; margin-top: 34px">
                <button type="submit" class="btn btn-info">Đăng Nhập</button>
            </div>
            <div>
                <p style="font-size:13px; margin-left:166px; margin-top: 50px">Bạn chưa có tài khoản? <a
                        href="{{ route('Admin.dangky') }}">Đăng ký</a></p>
            </div>
        </form>

    </div>
    <br>
    <br>
    <br>
    <br>
@endsection
