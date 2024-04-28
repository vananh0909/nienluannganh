<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class admin extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $primaryKey = 'Id_ad';
    protected $table = 'admin';
    protected $fillable = ['Id_ad', 'AD_Name', 'AD_Phone', 'AD_Email', 'AD_Password'];

    /**
     * Xác thực người dùng bằng email và mật khẩu.
     *
     * @param string $AD_Email
     * @param string $AD_Password
     * @return admin|null
     */
    public static function authenticate($AD_Email, $AD_Password)
    {
        $admin = static::where('AD_Email', $AD_Email)->first();
        // dd($admin);
        if ($admin && Hash::check($AD_Password, $admin->AD_Password)) {
            return $admin;
        } else {
            return null;
        }
    }
}