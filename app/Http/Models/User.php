<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 用户信息
 * Class User
 * @package App\Http\Models
 */
class User extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $fillable = [
        'username',
        'password',
        'port',
        'passwd',
        'transfer_enable',
        'u',
        'd',
        't',
        'enable',
        'method',
        'custom_method',
        'protocol',
        'protocol_param',
        'obfs',
        'obfs_param',
        'wechat',
        'qq',
        'usage',
        'pay_way',
        'balance',
        'enable_time',
        'expire_time',
        'remark',
        'is_admin',
        'reg_ip'
    ];
}