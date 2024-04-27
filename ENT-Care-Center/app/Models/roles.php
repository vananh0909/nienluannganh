<?php

namespace App\Models;

use Session;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class roles extends Model
{
    use HasFactory;
    use HasRoles;
    protected $table = 'roles';
    public $timestamps = false;
    protected $primaryKey = 'id';
    // Khai báo tên bảng trong cơ sở dữ liệu

    // Khai báo các trường có thể gán (mass assignment)
    protected $fillable = ['name'];
    //quyền thuộc nhiều Admin và ngược lại

}
