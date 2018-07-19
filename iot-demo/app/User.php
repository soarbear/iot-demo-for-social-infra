<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];
    
    // Modelバインディング登録、関数名、単数に注意する
    public function buildings() 
    {
        return $this->hasMany('App\Building');
    }
    // Modelバインディング登録、関数名、単数に注意する
    public function houses() 
    {
        return $this->hasMany('App\House');
    }
    // Modelバインディング登録、関数名、単数に注意する
    public function mansions() 
    {
        return $this->hasMany('App\Mansion');
    }
}
