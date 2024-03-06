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
                                Bước 1/3
                                :
                            </p>
                            <p style=" margin-top:5px; display: inline; font-size: 18px">Chọn thông tin lịch khám</p>

                            <hr style="margin-left:-8px; color:#a1a1a1">

                        </div>

                        <select class="form-select" style=" width: 400px; margin: 0 auto; padding: 6px"
                            aria-label="Default select example">
                            <option selected> Chọn bác sĩ khám</option>
                            <option value="1">Nguyen Minh Tuan</option>
                            <option value="2">Nguyen Thanh Son</option>
                            <option value="3">Nguyen Mai Anh</option>
                        </select>

                        <div style="margin: 10px">
                            <p> Thời gian khám</p>
                            <p> Ngày khám (*)</p>
                            <div style="text-align:center; margin:12px">
                                <button style="margin-right: 8px" type="button" class="btn btn-light">24/2</button>
                                <button style="margin-right: 8px" type="button" class="btn btn-light">25-2</button>
                                <button style="margin-right: 8px" type="button" class="btn btn-light">26/2</button>
                                <button type="button" class="btn btn-light"><i class="fa-solid fa-plus"></i></button>
                            </div>
                            <p>Giờ khám (*)</p>

                            <div style="text-align:center; margin:12px">
                                <button style="margin-right: 8px; margin-bottom:4px" type="button"
                                    class="btn btn-light">08:00</button>
                                <button style="margin-right: 8px; margin-bottom:4px" type="button"
                                    class="btn btn-light">08:30</button>
                                <button style="margin-right: 8px; margin-bottom:4px" type="button"
                                    class="btn btn-light">09:00</button>
                                <button style="margin-right: 8px; margin-bottom:4px" type="button"
                                    class="btn btn-light">09:30</button>
                                <button style="margin-right: 8px; margin-bottom:4px" type="button"
                                    class="btn btn-light">10:00</button>
                                <button style="margin-right: 8px; margin-bottom:8px" type="button"
                                    class="btn btn-light">10:30</button>
                                <button style="margin-right: 8px; margin-bottom:8px" type="button"
                                    class="btn btn-light">11:00</button>
                                <button style="margin-right: 8px; margin-bottom:8px" type="button"
                                    class="btn btn-light">13:00</button>
                                <button style="margin-right: 8px; margin-bottom:8px" type="button"
                                    class="btn btn-light">13:30</button>
                                <button style="margin-right: 8px; margin-bottom:8px" type="button"
                                    class="btn btn-light">14:00</button>
                                <button style="margin-right: 8px; margin-bottom:8px" type="button"
                                    class="btn btn-light">14:30</button>
                                <button style="margin-right: 8px; margin-bottom:8px" type="button"
                                    class="btn btn-light">15:00</button>
                                <button style="margin-right: 8px; margin-bottom:8px" type="button"
                                    class="btn btn-light">15:30</button>
                                <button style="margin-right: 8px; margin-bottom:8px" type="button"
                                    class="btn btn-light">16:00</button>
                                <button style="margin-right: 8px; margin-bottom:8px" type="button"
                                    class="btn btn-light">16:30</button>


                            </div>

                            <p style="font-size:12px; font-weight:bold; color:rgb(86, 86, 86); margin-top: 14px"> Lưu ý:
                                Thời
                                gian khám trên
                                chỉ là thời gian dự
                                kiến, tổng đài sẽ liên hệ xác nhận thời gian
                                khám chính xác tới quý khách sau khi quý khách đặt hẹn</p>
                            <div style="text-align:center">
                                <a href="{{ route('User.lichkham2') }}" style=" margin-top: 18px" type="button"
                                    class="btn btn-info">Tiếp tục</a>
                            </div>

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
