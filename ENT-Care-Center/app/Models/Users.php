<?php

namespace App\Models;

use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Users extends Model
{

    use HasFactory;

    protected $table = 'customer';

    public function getAllUser()
    {
        $customer = DB::select('SELECT * FROM customer WHERE CUS_Id > ?', [0]);
        return $customer;
    }

    public function addCustomer($data)
    {
        DB::insert('INSERT INTO customer (CUS_Name, CUS_PASS, CUS_Birthday, CUS_Avatar, CUS_Phone, CUS_Email, CUS_Address, CUS_Gender, CUS_Nganhang, CUS_Stk) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', $data);
    }

    public static function authenticate($CUS_Phone, $CUS_PASS)
    {
        // Tìm người dùng trong cơ sở dữ liệu bằng số điện thoại
        $user = static::where('CUS_Phone', $CUS_Phone)->first();

        // Kiểm tra xem người dùng có tồn tại không và mật khẩu có khớp không
        if ($user && Hash::check($CUS_PASS, $user->CUS_PASS)) {
            // Nếu mật khẩu khớp, trả về người dùng
            return $user;
        } else {
            // Nếu mật khẩu không khớp hoặc người dùng không tồn tại, trả về null
            return null;
        }
    }
}
