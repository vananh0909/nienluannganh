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
                        <h1 style=" font-size: 24px; "> ĐĂNG KÍ LỊCH KHÁM </h1>

                    </div>


                    <div style="background-color: #ffffff; width: 1000px; height:584px; border-radius:6px; margin:0 auto"
                        class="col-md-6">
                        <div style=" margin-left:8px; margin-bottom: 20px; padding-top: 4px">
                            <p
                                style=" margin-top:5px; display: inline; color:rgb(86, 86, 86); font-size: 18px; font-weight:bold;">
                                Bước 2/3
                                :
                            </p>
                            <p style=" margin-top:6px; display: inline; font-size: 18px"> Nhập thông tin người khám</p>
                            <hr style="margin-left:-8px; color:#a1a1a1">
                            <form style="padding-top: 16px;   margin: 0 auto; ">

                                <div style="padding-top: 20px;">
                                    <input style="width: 365px;margin: 0 auto;" class="form-control" type="text"
                                        placeholder='Họ và tên (*)' aria-label=".form-control-lg example">

                                </div>

                                <div style="text-align: center;">
                                    <div style="display: inline-block; padding-top: 20px;"
                                        class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">🧒🏻 Nam</label>
                                    </div>

                                    <div style="display: inline-block; padding-top: 20px;"
                                        class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">👩🏻 Nữ</label>
                                    </div>
                                </div>


                                <div style="padding-top: 20px">
                                    <input style="width: 365px; margin: 0 auto" class="form-control" type="text"
                                        id="lich" placeholder='Ngày sinh (*)' aria-label=".form-control-lg example">

                                </div>

                                <div style="padding-top: 20px">
                                    <input style="width: 365px; margin: 0 auto" class="form-control" type="text"
                                        placeholder='Số điện thoại (*)' aria-label=".form-control-lg example">

                                </div>

                                <div style="padding-top: 20px">


                                    <input style="width: 365px; margin: 0 auto" class="form-control" type="text"
                                        placeholder=' Để lại gmail nhận thông tin lịch hẹn (*)'
                                        aria-label=".form-control-lg example">

                                </div>

                                <div style="padding-top: 20px">
                                    <textarea style="width: 365px; margin: 0 auto" class="form-control" id="exampleFormControlTextarea1" rows="3"
                                        placeholder='Vui lòng mô tả rõ triệu chứng của bạn và nhu cầu thăm khám (*)'></textarea>

                                </div>

                                <div style="padding-top: 10px; text-align:center ">

                                    <a style="width:82px; margin-right:10px" href="{{ route('User.lichkham') }}"
                                        class="btn btn-outline-secondary">Trở lại</a>
                                    <a href="{{ route('User.lichkham3') }}" class="btn btn-info">Tiếp tục</a>

                                </div>






                            </form>

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

@section('js')
    <script>
        // Kích hoạt Bootstrap Datepicker
        $(document).ready(function() {
            $('#lich').datepicker({
                format: 'dd/mm/yyyy', // Định dạng ngày tháng
                autoclose: true // Tự đóng datepicker sau khi chọn
            });
        });
    </script>
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
