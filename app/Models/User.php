<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $primaryKey = 'login';
    public $incrementing = false;
    protected $guarded = [];
    protected $table = 'users';
    protected $keyType = 'string';
    public $timestamps = false;
    protected $attributes = [
        'email' => ' ',
        'dealer' => ' ',
        'server_n' => ' ',
        'notice' => ' ',
        'skype' => ' ',
        'icq' => ' ',
        'refer' => ' ',
        'packet_group' => ' ',
        'time_till' => ' ',
        'time_from' => 0,
    ];
    protected $casts = [
        'confirmed' => 'boolean',
    ];
    protected function getUserPacketAttribute()
    {
        return DB::table('user_packet_groups')->where('login', $this->login)->get();
    }
}
