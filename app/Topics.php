<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topics extends Model
{
    //
    protected $primaryKey='topic_id';
    public $timestamps = false;
    public function discuss()
    {
        return $this->hasMany('App\Discuss', 'discuss_topic_id', 'topic_id');
    }
}
