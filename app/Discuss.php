<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discuss extends Model
{   
    protected $table='discuss';
    protected $primaryKey='discuss_id';
    protected $fillable = array('discuss_name', 'discuss_user_id',
                                 'discuss_topic_id','discuss_status',
                                 'discuss_content','discuss_title');
    public function answers()
    {
        return $this->hasMany('App\Answers', 'answer_discuss_id', 'discuss_id');
    }
    
    public function users()
    {
        return $this->belongsTo('App\Users', 'discuss_user_id', 'user_id');
    }
    public function topics()
    {
        return $this->belongsTo('App\Topics', 'discuss_topic_id', 'topic_id');
    }
}

