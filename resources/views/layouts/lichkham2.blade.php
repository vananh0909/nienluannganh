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
                        <h1 style=" font-size: 24px; "> Đăng ký lịch khám </h1>

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
                            <form style="padding-top: 16px;   margin: 0 auto">

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

                                <div style="padding-top: 20px; text-align:center ">

                                    <a href="{{ route('User.lichkham') }}" style="margin-right:10px" type="button"
                                        class="btn btn-outline-secondary">
                                        Quay
                                        lại</a>
                                    <a href="{{ route('User.lichkham3') }}"type="button" class="btn btn-info"> Tiếp tục </a>

                                </div>






                            </form>

                        </div>


                    </div>


                </div>

                <div class="col-md-3"
                    style="background-color:#ffffff; width:356px; border-radius: 6px;margin-left:16px;margin-bottom:6px">
                    <iframe style="margin-left:2px; margin-top: 4px"
                        src="https://calendar.google.com/calendar/embed?height=280&wkst=1&ctz=Asia%2FHo_Chi_Minh&bgcolor=%23ffffff&showNav=0&showTitle=0&showPrint=0&showTabs=0&showTz=0&src=YW5oYjIwMTQ4MTRAc3R1ZGVudC5jdHUuZWR1LnZu&src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&src=Y19jbGFzc3Jvb21iYjE0NzY0ZkBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&src=Y19jbGFzc3Jvb21iOGE3ZDViZEBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&src=Y19jbGFzc3Jvb21mZmM4MWZhMEBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&src=Y19jbGFzc3Jvb20zNzhkYjBiZEBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&src=Y19jbGFzc3Jvb21mNTUxOWY3OUBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&src=Y19jbGFzc3Jvb20xMTJjMjZkY0Bncm91cC5jYWxlbmRhci5nb29nbGUuY29t&src=Y19jbGFzc3Jvb201NmM0NWM3NUBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&src=Y19jbGFzc3Jvb21mNmJmYjVhMkBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&src=Y19jbGFzc3Jvb20yMzgwYTlhZUBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&src=Y19jbGFzc3Jvb20zMzVlNjhjYUBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&src=Y19jbGFzc3Jvb202OTRkZGE0YkBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&src=Y19jbGFzc3Jvb201MzcxZTQxNkBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&color=%23039BE5&color=%2333B679&color=%23202124&color=%230047a8&color=%23007b83&color=%23137333&color=%230047a8&color=%230047a8&color=%23202124&color=%230047a8&color=%23202124&color=%230B8043&color=%23c26401&color=%230047a8&color=%23007b83&color=%23202124"
                        width="330" height="240" frameborder="0" scrolling="no">
                    </iframe>
                    <hr>
                    <div>
                        <p style="font-size:14px; color:rgb(86, 86, 86);">
                            <i class="fa-solid fa-bell"></i>
                            Thông báo mới

                        </p>
                    </div>
                    <div class="alert alert-light" style="box-shadow: 0 2px 4px rgba(105, 105, 105, 0.2)" role="alert">
                        TBao 1
                    </div>
                    <div class="alert alert-light" style="box-shadow: 0 2px 4px rgba(105, 105, 105, 0.2)" role="alert">
                        TBao 2
                    </div>
                    <div class="alert alert-light" style="box-shadow: 0 2px 4px rgba(105, 105, 105, 0.2)" role="alert">
                        TBao 3
                    </div>
                    <div class="alert alert-light" style="box-shadow: 0 2px 4px rgba(105, 105, 105, 0.2)"role="alert">
                        TBao 4
                    </div>
                    <div style="text-align: center; color:rgb(86, 86, 86);">
                        <i style="padding:0" class="fa-solid fa-ellipsis"></i>
                    </div>
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
