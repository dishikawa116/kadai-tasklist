<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tasklist extends Model
{
  protected $fillable =
        ['status', 'user_id','content'];
    
        public function user()
    {
        return $this->belongsTo(User::class);
    }
}
