<?php

namespace App\Http\Controllers;

use session;
use Illuminate\Support\Facades\Auth;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// băm pass
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    private $customer;
    public $data = [];
    public function __construct()
    {
        $this->customer = new Users();
    }
    public function index()
    {
        $this->data['title'] = "TRANG CHỦ";


        return view("Home", $this->data);
    }

    public function lichkham()
    {
        $this->data['title'] = "ĐẶT LỊCH KHÁM";

        return view("layouts.lichkham", $this->data);
    }

    public function lichkham2()
    {
        $this->data['title'] = "ĐẶT LỊCH KHÁM";

        return view("layouts.lichkham2", $this->data);
    }

    public function lichkham3()
    {
        $this->data['title'] = "ĐẶT LỊCH KHÁM";

        return view("layouts.lichkham3", $this->data);
    }

    public function doctors()
    {
        $this->data['title'] = "DANH SÁCH BÁC SĨ";

        return view("layouts.doctors", $this->data);
    }

    public function dichvu()
    {
        $this->data['title'] = "GÓI DỊCH VỤ";

        return view("layouts.dichvu", $this->data);
    }

    public function Setting()
    {
        $this->data['title'] = 'CÀI ĐẶT TÀI KHOẢN';

        // $customerList = $this->customer->getAllUser();

        return view(
            "layouts.Setting",
            $this->data,
            // compact('customerList')
        );
    }

    public function editsetting()
    {
    }

    public function lichsukham()
    {
        $this->data['title'] = 'LỊCH SỬ KHÁM';


        return view("layouts.lichsukham", $this->data);
    }

    public function dangky(Request $request)
    {

        $dataInsert = [
            $request->CUS_Name,
            Hash::make($request->CUS_PASS),
            $request->CUS_Birthday,
            $request->CUS_Avatar,
            $request->CUS_Phone,
            $request->CUS_Email,
            $request->CUS_Address,
            $request->CUS_Gender,
            $request->CUS_Nganhang,
            $request->CUS_Stk,

        ];
        $this->customer->addCustomer($dataInsert);
        return back();
    }

    public function dangnhap()
    {
        $this->data['title'] = 'ĐĂNG NHẬP';


        return view("layouts.dangnhap", $this->data);
    }

    public function postdangnhap(Request $request)
    {
        // Lấy thông tin số điện thoại và mật khẩu từ request
        // Lấy mật khẩu người dùng nhập vào từ request
        $password = $request->input('CUS_PASS');

        // Tìm người dùng trong cơ sở dữ liệu bằng số điện thoại
        $user = Users::where('CUS_Phone', $request->input('CUS_Phone'))->first();

        // Kiểm tra xem người dùng có tồn tại và mật khẩu có khớp không
        if ($user && Hash::check($password, $user->CUS_PASS)) {
            // Nếu mật khẩu khớp, đăng nhập thành công
            return redirect()->route('User.lichkham');
        } else {
            // Nếu mật khẩu không khớp hoặc người dùng không tồn tại, đăng nhập thất bại
            return redirect()->route('User.Home');
        }
    }

    public function showPassword()
    {
        $showPassword = false; // hoặc true nếu muốn hiện mật khẩu ngay từ đầu
        return view("layouts.dangnhap", compact('showPassword'));
    }
}
