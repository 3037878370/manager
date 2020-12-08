<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    // 表名
    public $table = 'member';
    // 主键
    public $primaryKey = 'member_id';
    // 允许批量操作的字段
    // public $fillable = ['username','password','truepass','truename','telephone','sex','salt','admin_group','area_id','area_id2','office_id','status','create_at','update_at'];
    // 不允许批量操作的字段
    public $guarded = [];
    // 是否维护创建时间和更新时间
    public $timestamps = true;
}
