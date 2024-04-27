<?php


namespace App\Models;
// băm pass


use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class admin  extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $primaryKey = 'Id_ad';
    protected $table = 'admin';

    protected $fillable = ['Id_ad', 'AD_Name', 'AD_Phone', 'AD_Email', 'AD_Password'];
    public static function authenticate($AD_Email, $AD_Password)
    {
        // Tìm người dùng trong cơ sở dữ liệu bằng số điện thoại
        $user = static::where('AD_Email', $AD_Email)->first();

        // Kiểm tra xem người dùng có tồn tại không và mật khẩu có khớp không
        if ($user && Hash::check($AD_Password, $user->AD_Password)) {
            // Nếu mật khẩu khớp, trả về người dùng
            return $user;
        } else {
            // Nếu mật khẩu không khớp hoặc người dùng không tồn tại, trả về null
            return null;
        }
    }
}
