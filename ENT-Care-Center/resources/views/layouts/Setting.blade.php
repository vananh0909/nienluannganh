@extends('Clients.Client')
@section('title')
    {{ $title }}
@endsection
@section('content')
    {{-- <h1>Trang home nef</h1> --}}
    <div style=" background: linear-gradient(rgba(127, 168, 209, 0.3) ,rgba(68, 158, 210, 0.8)); height: 728px;
        position: fixed;  top: 0; left: 0; bottom: 0; "
        class="col-md-1">
        @include('layouts.Sidebar')
    </div>
    <div style=" flex: 1;padding-left: 104px;" class="col-md-11">
        <header>
            @include('layouts.Header')
        </header>
        <main>

            <div class="row">
                <div class="col-md-8" style="background-color:rgb(234, 235, 239); margin-left: 6px">

                    <form style="margin: 0 auto">

                        <div style="text-align:center; margin-top: 6px; padding-bottom: 8px">
                            <h1 style=" font-size: 22px; "> CÀI ĐẶT TÀI KHOẢN</h1>

                        </div>


                        <div style=" width: 1000px; height:580px; border-radius:6px; margin:0 auto;  border: 1px solid rgb(154, 153, 153);"
                            class="col-md-6">


                            <div style="text-align:center;">
                                <img class="rounded-circle"
                                    style="width: 160px; height: 160px; margin-top:18px; margin-bottom: 12px"
                                    src="https://chungkhoantaichinh.vn/wp-content/uploads/2022/12/avatar-meo-cute-de-thuong-05.jpg">

                                <p style="font-weight:400; font-size: 18px; text-transform: uppercase;">Nguyễn Thị Vân Anh
                                </p>



                                <div style="padding-top: 14px;">

                                    <div style="width: 340px; float: left; margin-left: 150px;text-align:left">
                                        <label for="name" style="margin: 2px">Tên:</label>
                                        <input id="name" class="form-control" type="text"
                                            placeholder="Nguyễn Thị Vân Anh" aria-label=".form-control-lg example">
                                    </div>
                                    <div style="width: 340px; float: right; margin-right: 150px;text-align:left;">
                                        <label for="nghenghiep" style="margin: 2px">Nghề nghiệp:</label>
                                        <input id="nghenghiep" class="form-control" type="text" placeholder="Sinh viên"
                                            aria-label=".form-control-lg example">
                                    </div>
                                </div>



                                <div style="text-align: center; margin-top: 8px; margin-left: 150px; float:left">
                                    <div style="display: inline-block; text-align: left;">
                                        <label for="gioitinh"style="display: inline-block; vertical-align: top; ">Giới
                                            Tính:</label>

                                        <div style="display: inline-block; padding-top: 26px; margin-top: 3px; vertical-align: top;"
                                            class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">🧒🏻 Nam</label>
                                        </div>

                                        <div style="display: inline-block; padding-top: 26px; margin-top: 3px;vertical-align: top;"
                                            class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">👩🏻 Nữ</label>
                                        </div>
                                    </div>
                                </div>




                                <div
                                    style="width: 340px; float: right; margin-right: 150px;text-align:left;margin-top:0.5px">
                                    <label for="sdt" style="margin: 2px">Số điện thoại:</label>
                                    <input id="sdt" class="form-control" type="text" placeholder="0924546770"
                                        aria-label=".form-control-lg example">
                                </div>
                                <div style="width: 340px; float: left; margin-left: 150px;text-align:left; margin-top:2px">
                                    <label for="email" style="margin: 2px">Email:</label>
                                    <input id="email" class="form-control" type="text" placeholder="Vanh@gmail.com"
                                        aria-label=".form-control-lg example">
                                </div>

                                <div style="width: 340px; float: right; margin-right: 150px; text-align:left">
                                    <label for="dc" style="margin: 2px">Địa chỉ:</label>
                                    <input id="dc" class="form-control" type="text"
                                        placeholder="Đường Quản Trọng Hoàng, Hưng Lợi, Ninh Kiều, Cần Thơ"
                                        aria-label=".form-control-lg example">
                                </div>


                                <div style="width: 340px; float: left; margin-left: 150px; text-align:left">
                                    <label for="nganhang" style="margin: 2px">Ngân Hàng</label>
                                    <input id="nganhang" class="form-control" type="text" placeholder="Agribank"
                                        aria-label=".form-control-lg example">
                                </div>


                                <div style="width: 340px; float: right; margin-right: 150px; text-align:left">
                                    <label for="sotaikhoan" style="margin: 2px">Số tài khoản:</label>
                                    <input id="sotaikhoan" class="form-control" type="text" placeholder="700080009000"
                                        aria-label=".form-control-lg example">
                                </div>



                                <div style="padding-top: 20px; text-align:center; ">

                                    <a style="width:90px; float: left; margin-left: 396px ; margin-top: 27px"
                                        href="{{ route('User.Home') }}" type="button" class="btn btn-outline-secondary">
                                        Trở về </a>
                                    <a style="float: right; margin-right: 398px; margin-top: 26px"
                                        href="#"type="button" class="btn btn-info"> Cập nhật </a>

                                </div>






                    </form>



                </div>

                <br>

            </div>




    </div>
    <div class="col-md-3"
        style="background-color:#ffffff; width:356px; border-radius: 6px;margin-left:16px;margin-bottom:6px;height:642px;">
        @include('layouts.Right')
    </div>
    </div>


    </main>


    </div>



    </div>
@endsection




{{-- @section('css')
    .col-md-1{
    margin-right:34px;
    width:65px;
    }

    .header{
    height:60px;
    border-bottom-left-radius: 6px;
    border-bottom-right-radius: 6px;
    }

    .col-md-8{
    width: 1000px;
    margin-right:25px;
    border-radius: 6px;

    }

    footer{
    background-color:green;
    }
@endsection --}}
