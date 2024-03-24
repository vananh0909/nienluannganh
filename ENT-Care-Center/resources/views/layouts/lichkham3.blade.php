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
                    <div style="text-align:center; margin-top: 6px; padding-bottom: 8px">
                        <h1 style=" font-size: 24px; "> ĐĂNG KÝ LỊCH KHÁM </h1>

                    </div>


                    <div style="background-color: #ffffff; width: 1000px; height:584px; border-radius:6px; margin:0 auto"
                        class="col-md-6">
                        <div style=" margin-left:8px; padding-top: 4px">
                            <p style=" display: inline; color:rgb(86, 86, 86); font-size: 18px; font-weight:bold;">
                                Bước 3/3
                                :
                            </p>
                            <p style=" margin-top:6px; display: inline; font-size: 18px">Xác nhận đặt lịch khám</p>
                            <hr style="margin-left:-8px; color:#a1a1a1">
                            <h2 style="font-size:18px; font-weight:bold; color:rgb(77, 141, 197)"> Dịch vụ </h2>
                            <div style=" margin-top: 10px">
                                <p style="font-size:16px; display: inline-block; margin-right:60px"> Hình thức : </p>
                                <p style="font-size:16px; display: inline-block;"> Khám trực tiếp tại phòng khám </p>
                            </div>


                            <h2 style="font-size:18px; font-weight:bold; color:rgb(77, 141, 197)"> Khách hàng</h2>
                            <div style=" margin-top: 10px;font-size:16px;">

                                <p style="display: inline-block; margin-right:104px"> Tên : </p>
                                <p style="display: inline-block;"> Nguyễn Thị Vân Anh </p>

                                <div>
                                    <p style="display: inline-block; margin-right:64px"> Giới Tính : </p>
                                    <p style="display: inline-block;"> Nữ</p>
                                </div>

                                <div>
                                    <p style="display: inline-block; margin-right:58px"> Ngày sinh : </p>
                                    <p style="display: inline-block;"> 09-10-2002 </p>
                                </div>

                                <div>
                                    <p style="display: inline-block; margin-right:36px"> Số điện thoại : </p>
                                    <p style="display: inline-block;"> 0924546770 </p>
                                </div>

                                <div>
                                    <p style="display: inline-block; margin-right:50px"> Lý do khám : </p>
                                    <p style="display: inline-block;"> mmmmmmmmmmmmmmmmmmmmmmmmmmmmm </p>
                                </div>
                            </div>

                            <h2 style="font-size:18px; font-weight:bold; color:rgb(77, 141, 197)"> Bác Sĩ </h2>
                            <div style=" margin-top: 10px">
                                <p style="font-size:16px; display: inline-block; margin-right:104px"> Tên : </p>
                                <p style="font-size:16px; display: inline-block;"> Nguyễn Mai Anh </p>

                                <div>

                                    <p style="font-size:16px; display: inline-block; margin-right:24px"> Thời gian khám:
                                    </p>
                                    <p style="font-size:16px; display: inline-block;">08:00</p>

                                </div>

                                <div>
                                    <p style="font-size:16px; display: inline-block; margin-right:82px">Địa chỉ:</p>
                                    <p style="font-size:16px; display: inline-block;">Xuân Khánh, Ninh Kiều, Cần Thơ</p>
                                </div>


                            </div>
                            <div style=" text-align:center ">

                                <a style="width:82px; margin-right:10px" href="{{ route('User.lichkham2') }}"
                                    class="btn btn-outline-secondary">
                                    Trở lại</a>
                                <a href="{{ route('User.lichkham3') }}" class="btn btn-info"> Xác nhận </a>

                            </div>


                        </div>

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




@section('css')
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
@endsection
