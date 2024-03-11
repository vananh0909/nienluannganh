<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public $data = [];

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
        $this->data['title'] = "CÀI ĐẶT TÀI KHOẢN";

        return view("layouts.Setting", $this->data);
    }
}
