@extends('Clients.Client')
@section('title')
    {{ $title }}
@endsection
@section('content')
    {{-- <h1>Trang home nef</h1> --}}
    <div style=" background: linear-gradient(rgba(127, 168, 209, 0.3) ,rgba(68, 158, 210, 0.8)); height: auto;
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
                        <h1 style=" font-size: 24px; "> DANH SÁCH BÁC SĨ</h1>

                    </div>
                    <div style="background-color: rgb(234, 235, 239); width: 1000px; border-radius:6px; margin:0 auto"
                        class="col-md-6">
                        <br>
                        <div id="right"
                            style="display: flex; background-color: #ffffff; width: 900px; height: 180px; margin: 0 auto; border-radius: 6px; overflow: auto;">

                            <div style="flex: 1; margin: 10px;">
                                <img style="width: 135px; height: 158px; border-radius: 6px;"
                                    src="https://www.fvhospital.com/wp-content/uploads/2017/05/BS-Khuc-Minh-Thuy.jpg">
                            </div>
                            <div style="flex: 2; margin-right: 30px ">
                                <h3 style="font-size: 18px; color: rgba(68, 158, 210, 0.8); margin-top:10px">
                                    Bác sĩ Phan Quỳnh Lan</h3>
                                <p><i class="fa-solid fa-graduation-cap"></i> Thạc sĩ, Bác sĩ</p>
                                <p style="width:700px;text-align: justify;"> Bác sĩ Phan Quỳnh Lan đã liên tục hoàn thành
                                    các khóa đào tạo nâng
                                    cao về đào tạo chuyên
                                    ngành về tai - mũi - họng và phẫu thuật đầu cổ tại các trường Đại học lớn ở Pháp.Hiện
                                    tại, ThS. BS Phan Quỳnh Lan đang giữ chức vụ là Trưởng khoa Liên chuyên khoa kiêm
                                    Trưởng đơn nguyên Tai - Mũi - Họng tại phòng khám ENT CARE CENTER.</p>
                            </div>
                        </div>



                        <br>


                        <div id="right"
                            style="display: flex; background-color: #ffffff; width: 900px; height: 180px; margin: 0 auto; border-radius: 6px; overflow: auto;">

                            <div style="flex: 1; margin: 10px;">
                                <img style="width: 135px; height: 158px; border-radius: 6px;"
                                    src="https://htmediagroup.vn/wp-content/uploads/2022/09/Anh-bac-si-nu-1-min.jpg">
                            </div>
                            <div style="flex: 2; margin-right: 30px ">
                                <h3 style="font-size: 18px; color: rgba(68, 158, 210, 0.8);margin-top:10px">
                                    Bác sĩ Văn Bội Ngọc
                                </h3>
                                <p><i class="fa-solid fa-graduation-cap"></i> Thạc sĩ, Bác sĩ</p>
                                <p style="width:700px;text-align: justify;">
                                    ThS. BS Văn Bội Ngọc đã có nhiều năm kinh nghiệm trong lĩnh vực Tai mũi họng.

                                    Hiện tại, ThS. BS Văn Bội Ngọc đang giữ chức vụ là Bác sĩ Tai mũi họng - Phòng khám ENT
                                    CARE CENTER.
                                </p>
                            </div>
                        </div>

                        <br>



                        <div id="right"
                            style="display: flex; background-color: #ffffff; width: 900px; height: 180px; margin: 0 auto; border-radius: 6px; overflow: auto;">

                            <div style="flex: 1; margin: 10px;">
                                <img style="width: 135px; height: 158px; border-radius: 6px;"
                                    src="https://htmediagroup.vn/wp-content/uploads/2023/03/Anh-bac-si-nam-8-min.jpg">
                            </div>
                            <div style="flex: 2; margin-right: 30px ">
                                <h3 style="font-size: 18px; color: rgba(68, 158, 210, 0.8);margin-top:10px">
                                    Bác sĩ Lê Tuấn Nhật Hoàng
                                </h3>
                                <p><i class="fa-solid fa-graduation-cap"></i> Thạc sĩ, Bác sĩ</p>
                                <p style="width:700px;text-align: justify;">
                                    BS Hoàng là thành viên của Hội Tai - Mũi - Họng các tỉnh phía Bắc, Hội Tai - Mũi - Họng
                                    Việt Nam.

                                    Hiện tại, ThS. BSNT Lê Tuấn Nhật Hoàng là Bác sĩ Tai - Mũi - Họng, khoa Liên chuyên
                                    khoa, Phòng khám ENT
                                    CARE CENTER.
                                </p>
                            </div>
                        </div>

                        <br>



                        <div id="right"
                            style="display: flex; background-color: #ffffff; width: 900px; height: 180px; margin: 0 auto; border-radius: 6px; overflow: auto;">

                            <div style="flex: 1; margin: 10px;">
                                <img style="width: 135px; height: 158px; border-radius: 6px;"
                                    src="https://honghunghospital.com.vn/wp-content/uploads/2020/05/41.-Phan-V%C4%83n-Ch%C3%AD-scaled.jpg">
                            </div>
                            <div style="flex: 2; margin-right: 30px ">
                                <h3 style="font-size: 18px; color: rgba(68, 158, 210, 0.8);margin-top:10px">
                                    Bác sĩ Nguyễn Văn Thái
                                </h3>
                                <p><i class="fa-solid fa-graduation-cap"></i> Thạc sĩ, Bác sĩ</p>
                                <p style="width:700px;text-align: justify;">
                                    Bác sĩ Nguyễn Văn Thái đã có hơn 20 năm kinh nghiệm trong lĩnh vực Tai mũi họng.

                                    Hiện tại, BSCK II Nguyễn Văn Thái đang giữ chức vụ là bác sĩ Tai mũi họng - Phòng khám
                                    ENT
                                    CARE CENTER.
                                </p>
                            </div>
                        </div>

                        <br>



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
@endsection






@section('css')
    #doctors:hover{
    border: 2px solid rgb(213, 210, 210);
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.4); /* Đổ bóng */
    }
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
