<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model
{
  protected $table = 'articles';

  protected $fillable = [
    'user_id', 'content' , 'live', 'post_on'
  ];

  // protected $guarded = ['id'];

  protected $dates = ['post_on'];

  public function setLiveAttribute ($value)
  {
    $this->attributes['live'] = (boolean)($value);
  }

  public function getShortContentAttribute()
  {
    return substr($this->content, 0, random_int(60, 150))."...";
  }

  public function setPostOnAttriburte($value) {
    $this->attributes['post_on'] = Carbon::parse($value);
  }
}
