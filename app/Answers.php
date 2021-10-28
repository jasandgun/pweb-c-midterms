<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answers extends Model
{
    //
    protected $table='answers';
    protected $primaryKey='answer_id';
    protected $fillable = array('answer_user_id','answer_discuss_id','answer_content','answer_status');
    
    public function discuss()
    {
        return $this->belongsTo('App\Discuss', 'answer_discuss_id', 'discuss_id');
    }
    public function users()
    {
        return $this->belongsTo('App\Users', 'answer_user_id', 'user_id');
    }
}
