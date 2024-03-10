<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public $data = [];

    public function index()
    {
        $this->data['title'] = "Trang chủ";

        return view("Home", $this->data);
    }

    public function lichkham()
    {
        $this->data['title'] = "Đặt lịch khám";

        return view("layouts.lichkham", $this->data);
    }

    public function lichkham2()
    {
        $this->data['title'] = "Đặt lịch khám";

        return view("layouts.lichkham2", $this->data);
    }

    public function lichkham3()
    {
        $this->data['title'] = "Đặt lịch khám";

        return view("layouts.lichkham3", $this->data);
    }

    public function doctors()
    {
        $this->data['title'] = "Danh sách bác sĩ";

        return view("layouts.doctors", $this->data);
    }

    public function dichvu()
    {
        $this->data['title'] = "Gói dịch vụ";

        return view("layouts.dichvu", $this->data);
    }

    public function Setting()
    {
        $this->data['title'] = "Cài đặt tài khoản";

        return view("layouts.Setting", $this->data);
    }
}
