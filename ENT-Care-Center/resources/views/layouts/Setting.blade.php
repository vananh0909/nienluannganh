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
                        <h1 style=" font-size: 22px; "> CÀI ĐẶT TÀI KHOẢN</h1>

                    </div>


                    <div style=" width: 1000px; border-radius:6px; margin:0 auto;  border: 1px solid rgb(90, 85, 85);"
                        class="col-md-6">


                        <div style="text-align:center;">
                            <img class="rounded-circle"
                                style="width: 160px; height: 160px; margin-top:18px; margin-bottom: 12px"
                                src="https://chungkhoantaichinh.vn/wp-content/uploads/2022/12/avatar-meo-cute-de-thuong-05.jpg">

                            <p style="font-weight:400; font-size: 18px; text-transform: uppercase;">Nguyễn Thị Vân Anh</p>

                            <form style="margin: 0 auto">

                                <div style="padding-top: 10px;">
                                    <input style="width: 360px;margin: 0 auto;" class="form-control" type="text"
                                        placeholder='Nguyễn Thị Vân Anh' aria-label=".form-control-lg example">

                                </div>

                                <div style="text-align: center;">
                                    <div style="display: inline-block; padding-top: 10px;"
                                        class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">🧒🏻 Nam</label>
                                    </div>

                                    <div style="display: inline-block; padding-top: 10px;"
                                        class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">👩🏻 Nữ</label>
                                    </div>
                                </div>


                                <div style="padding-top: 10px">
                                    <input style="width: 360px; margin: 0 auto" class="form-control" type="text"
                                        id="lich" placeholder='09-10-2002' aria-label=".form-control-lg example">

                                </div>

                                <div style="padding-top: 10px">
                                    <input style="width: 360px; margin: 0 auto" class="form-control" type="text"
                                        placeholder='0924546770' aria-label=".form-control-lg example">

                                </div>

                                <div style="padding-top: 10px">


                                    <input style="width: 360px; margin: 0 auto" class="form-control" type="text"
                                        placeholder='vananh@gmail.com' aria-label=".form-control-lg example">

                                </div>

                                <div style="padding-top: 10px">


                                    <input style="width: 360px; margin: 0 auto" class="form-control" type="text"
                                        placeholder='Quản Trọng Hoàng, Hưng Lợi, Ninh Kiều, Cần Thơ'
                                        aria-label=".form-control-lg example">

                                </div>


                                <div style="padding-top: 20px; text-align:center ">

                                    <a href="{{ route('User.Home') }}" style="margin-right:10px" type="button"
                                        class="btn btn-outline-secondary">
                                        Quay
                                        lại</a>
                                    <a href="#"type="button" class="btn btn-info"> Cập nhật </a>

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
