<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mansion extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'mansions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['project_name', 'user_name', 'user_id', 'status', 'm_data4', 'm_data5', 'm_data6', 'm_data7', 'm_data8', 'm_data9','user_name0', 'user_name1', 'user_name2', 'user_name3', 'user_name4', 'user_name5', 'user_name6', 'user_name7', 'user_name8', 'user_name9'];
    
    // Modelバインディング登録、関数名、単数に注意する
    public function user() 
    {
        return $this->belongsTo('App\User');
    }
    // Modelバインディング登録、関数名、単数に注意する
    public function images() 
    {
        return $this->hasMany('App\Image');
    }
}
