<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Carbon\Carbon;
use App\Enums\Role;

use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'account',
        'name',
        'email',
        'password',
        'api_token_status',
        'gender',
        'date_of_birth',
        'environment',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function get_age($date_of_birth){

        if(empty($date_of_birth)){
            return "";
        }

        return Carbon::parse($date_of_birth)->age;
    }

    public function status($status)
    {
        if($status){
            return "Active";
        }

        return "Disabled";

    }

    public function text_class($text)
    {
        if($text == '0'){
            return "text-danger";
        }

        if($text == 'TEST'){
            return "text-warning";
        }

        if($text == 'PRODUCTION'){
            return "text-success";
        }

        if($text == '1'){
            return "text-success";
        }

        if($text == Role::Client){
            return "text-info";
        }

        if($text == Role::Admin){
            return "text-success";
        }

        if($text == Role::SuperAdmin){
            return "text-danger";
        }

        if($text == '1'){
            return "text-success";
        }

        return "";
    }

    public function getJWTIdentifier(){
        return $this->getKey();
    }

    public function getJWTCustomClaims(){
        return [];
    }
}
