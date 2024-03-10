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
                        <h1 style=" font-size: 22px; "> GÓI DỊCH VỤ</h1>

                    </div>


                    <div style="background-color: #ffffff; width: 1000px; border-radius:6px; margin:0 auto" class="col-md-6">


                        <div style=" margin-left:8px; margin-bottom: 20px; padding-top: 8px">

                            <div style="margin-top: 8px; display: inline-block;">
                                <div style="width: 540px; float: left; position: relative; margin-right:10px">

                                    <img style="width: 540px;  border-radius: 6px"
                                        src="{{ asset('images/img-nen/20210827_040655_503312_shutterstock_28616597.max-800x800.jpg') }}">

                                </div>

                                <a
                                    style="float: right; margin-right: 60px;  font-size:20px ; margin-bottom: 10px; font-weight:500">
                                    Gói khám sức khỏe
                                    tổng quát Cao cấp
                                </a>
                                <br>

                                <p style="padding: 10px;margin-top: 12px; font-size: 16px; text-align: justify;  ">
                                    Gói khám sức khỏe tổng quát Cao cấp 2021 mang lại giải pháp thăm khám toàn diện và sàng
                                    lọc một số bệnh lý ung thư như dạ dày, đại tràng ... với các bác sĩ, chuyên gia cao cấp
                                    tại Vinmec, từ đó có hướng xây dựng kế hoạch chăm sóc sức khoẻ.
                                </p>
                            </div>


                            <hr style="margin-right: 6px">

                            <div style="margin-top: 8px; display: inline-block; ">
                                <div style="width: 200px; float: left; position: relative; margin-right:10px">
                                    <img style="width: 200px; border-radius:6px; "
                                        src="{{ asset('images/img-nen/20210826_101055_041407_shutterstock_69874095.max-800x800.jpg') }}">

                                </div>

                                <a
                                    style="float: right; margin-right: 420px;  font-size:20px ; margin-bottom: 10px; font-weight:500">
                                    Gói khám sức khỏe tổng quát Nâng cao
                                </a>
                                <br>

                                <div
                                    style=" padding: 10px; margin-left: 10px;margin-top: 12px; font-size: 16px; text-align: justify;  ">
                                    <p>Gói khám sức khỏe tổng quát được thiết kế có tính khoa học và tính thực tiễn nhằm
                                        phát
                                        hiện sớm, can thiệp, điều trị kịp thời nhằm làm giảm đến mức tối thiểu những biến
                                        chứng
                                        của những bệnh hiểm nghèo đe dọa cuộc sống của bạn.
                                    </p>
                                </div>
                            </div>
                            <hr style="margin-right: 6px">


                            <div style="margin-top: 8px; display: inline-block; ">
                                <div style="width: 200px; float: left; position: relative; margin-right:10px">
                                    <img style="width: 200px; border-radius:6px; "
                                        src="{{ asset('images/img-nen/20210826_103319_815440_20395.max-800x800.jpg') }}">

                                </div>

                                <a
                                    style="float: right; margin-right: 428px;  font-size:20px ; margin-bottom: 10px; font-weight:500">
                                    Gói khám sức khỏe tổng quát cho Nữ
                                </a>
                                <br>

                                <div
                                    style=" padding: 10px; margin-left: 10px;margin-top: 12px; font-size: 16px; text-align: justify;  ">
                                    <p>
                                        Gói khám sức khỏe tổng quát Tiêu chuẩn Nữ < 40 tuổi được thực hiện bởi các bác sĩ
                                            chuyên môn giỏi, trình độ cao, giúp đánh giá chính xác về tình trạng sức khỏe
                                            chung đồng thời phát hiện sớm một số bệnh lý nguy hiểm </p>
                                </div>
                            </div>
                            <hr style="margin-right: 6px">


                            <div style="margin-top: 8px; display: inline-block; ">
                                <div style="width: 200px; float: left; position: relative; margin-right:10px">
                                    <img style="width: 200px; border-radius:6px; "
                                        src="{{ asset('images/img-nen/20190226_041618_396980_sk_td.max-800x800.png') }}">

                                </div>

                                <a
                                    style="float: right; margin-right: 420px;  font-size:20px ; margin-bottom: 10px; font-weight:500">
                                    Gói khám sức khỏe tổng quát cho Nam </a>
                                <br>

                                <div
                                    style=" padding: 10px; margin-left: 10px;margin-top: 12px; font-size: 16px; text-align: justify;  ">
                                    <p>Gói khám sức khoẻ tổng quát Tiêu chuẩn Nam < 40 được thực hiện bởi các bác sĩ chuyên
                                            môn giỏi, trình độ cao, giúp đánh giá chính xác về tình trạng sức khỏe chung
                                            đồng thời phát hiện sớm một số bệnh lý nguy hiểm </p>
                                </div>
                            </div>
                            <hr style="margin-right: 6px">




                            <div style="margin-top: 8px; display: inline-block; ">
                                <div style="width: 200px; float: left; position: relative; margin-right:10px">
                                    <img style="width: 200px; border-radius:6px; "
                                        src="{{ asset('images/img-nen/20190226_040214_944846_sktq_nhi.max-800x800.jpg') }}">

                                </div>

                                <a
                                    style="float: right; margin-right: 430px;  font-size:20px ; margin-bottom: 10px; font-weight:500">
                                    Gói khám sức khỏe tổng quát Trẻ em </a>
                                <br>

                                <div
                                    style=" padding: 10px; margin-left: 10px;margin-top: 12px; font-size: 16px; text-align: justify;  ">
                                    <p>Với gói khám sức khoẻ tổng quát trẻ em, bé yêu của bạn sẽ được khám toàn diện kết hợp
                                        với chẩn đoán bằng hình ảnh, giúp bạn kiểm tra tổng thể sức khỏe cho bé, sàng lọc
                                        triệu chứng để sớm phát hiện và điều trị nếu cần.
                                    </p>
                                </div>
                            </div>
                            <hr style="margin-right: 6px">



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
