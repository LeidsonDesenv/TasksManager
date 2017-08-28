<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Task extends Model
{
    protected $fillable  = ['name' , 'description', 'archive_names' , 'priority', 'user_id' ];
    public function author(){
        return $this->belongsTo("App\User", "user_id");
    } 
}
