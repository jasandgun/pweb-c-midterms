<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    //
    
    protected $fillable = ['user_name','user_email','user_password','user_description','user_image'];
    protected $primaryKey='user_id';
    // public $timestamps = false;
    public function answers()
    {
        return $this->hasMany('App\Answers', 'answer_user_id','user_id');
    }
    public function discuss()
    {
        return $this->hasMany('App\Discuss', 'discuss_user_id', 'user_id');
    }

    
}
