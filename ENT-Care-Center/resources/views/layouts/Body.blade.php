<div class="row">
    <div class="col-md-8" style="background-color:rgb(234, 235, 239)">
        <!-- Nội dung của lớp col-md-8 -->
        <div class="row">
            <div class="col-md-8" style="height:200px; padding: 0; margin-left:8px;">
                <img style="width:100%; border-radius:6px" src="{{ asset('images/img-nen/ENT Care Center.png') }}">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-8" style="background-color:#ffffff;  height:110px;margin-left:8px; display: flex;">

                <div style="width:300px;margin-left:18px">
                    <a style="text-decoration:none ; font-size:20px; color:rgb(86, 86, 86);">
                        <i style="font-size:40px; margin-top:32px; margin-left:46px; color:rgb(47, 47, 197)"
                            class="fa-regular fa-calendar-plus"></i> Lịch hẹn
                    </a>
                </div>

                <div
                    style="width: 0.3px; height: 60px; background-color: rgb(212, 212, 212); float: right;  margin-top:26px;">
                </div>

                <div style="width:300px; margin-left: 18px;">
                    <a style="font-size:20px; color:rgb(86, 86, 86);">
                        <i style="text-decoration:none ; font-size:40px;margin-top:32px; margin-left:46px; color: rgb(205, 30, 30)"
                            class="fa-solid fa-file-circle-exclamation"></i> Giải quyết khẩn cấp

                    </a>
                </div>

                <div
                    style="width: 0.3px; height: 60px; background-color: rgb(212, 212, 212); float: right;  margin-top:26px;">
                </div>

                <div style="width:300px; margin-left: 18px;">
                    <a href="{{ route('User.doctors') }}"
                        style="text-decoration:none ; font-size:20px; color:rgb(86, 86, 86); ">
                        <i style="font-size:40px; margin-top:32px; margin-left:46px; color:rgb(86, 85, 85)"
                            class="fa-solid fa-user-doctor"></i> Danh sách bác sĩ
                    </a>
                </div>
            </div>
        </div>

        <br>
        <div class="row">
            <div style="margin-left:72px; color:rgb(86, 86, 86); font-weight:bold">
                <p style="font-size: 16px;">Bác sĩ trực hôm nay
                    <i style="margin-left:638px; cursor: pointer;" class="fa-solid fa-arrow-right"></i>
                </p>

            </div>
            <div class="col-md-3" id="dr"
                style="background-color:#ffffff;  height:212px; margin-right:30px; margin-left:80px;border-radius: 6px; ">
                <img style="width:90px; height:80px; margin-top:24px; margin-left:66px; border-radius: 6px;"
                    src="https://ttgdtxphuquoc.edu.vn/hinh-anh-bac-si-nu-dep/imager_6_6391_700.jpg">
                <div style="text-align:center; margin-top:8px; color:rgb(86, 86, 86);">
                    <h1 style="font-size:18px"> Dr. Nguyen Minh Tuan</h1>
                    <p style="font-size:14px;margin-top:2px">Tai-Mũi-Họng</p>
                </div>

                <hr>
                <h1 style="text-align:center;font-size:12px;color:rgb(86, 86, 86); margin-top:-4px">
                    <i class="fa-regular fa-clock"></i>
                    Từ 08:00 đến 11:00
                </h1>

            </div>



            <div class="col-md-3" id="dr"
                style="background-color:#ffffff; height:212px; margin-right:30px;border-radius: 6px;">
                <img style="width:90px; height:80px; margin-top:24px; margin-left:66px; border-radius: 6px;"
                    src="https://honghunghospital.com.vn/wp-content/uploads/2020/05/41.-Phan-V%C4%83n-Ch%C3%AD-scaled.jpg">
                <div style="text-align:center; margin-top:8px; color:rgb(86, 86, 86);">
                    <h1 style="font-size:18px"> Dr. Nguyen Thanh Son</h1>
                    <p style="font-size:14px;margin-top:2px">Tai-Mũi-Họng</p>
                </div>

                <hr>
                <h1 style="text-align:center;font-size:12px;color:rgb(86, 86, 86); margin-top:-4px">
                    <i class="fa-regular fa-clock"></i>
                    Từ 13:00 đến 17:00
                </h1>
            </div>



            <div class="col-md-3" id="dr" style="background-color:#ffffff;  height:212px;border-radius: 6px;">
                <img style="width:90px; height:80px; margin-top:24px; margin-left:66px; border-radius: 6px;"
                    src="https://hthaostudio.com/wp-content/uploads/2022/08/Anh-profile-bac-si-nu-min.jpg.webp">
                <div style="text-align:center; margin-top:8px; color:rgb(86, 86, 86);">
                    <h1 style="font-size:18px"> Dr. Nguyen Mai Anh</h1>
                    <p style="font-size:14px;margin-top:2px">Tai-Mũi-Họng</p>
                </div>

                <hr>
                <h1 style="text-align:center;font-size:12px;color:rgb(86, 86, 86); margin-top:-4px">
                    <i class="fa-regular fa-clock"></i>
                    Từ 08:00 đến 11:00
                </h1>

            </div>
        </div>
    </div>
    <div class="col-md-3"
        style="background-color:#ffffff; width:356px; border-radius: 6px;margin-left:16px;margin-bottom:6px;height:640px;">
        @include('layouts.Right')
    </div>
</div>
