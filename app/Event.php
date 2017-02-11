<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
  protected $table = 'my_events'; // you may change this to your name table
  public $timestamps = false; // set true if you are using created_at and updated_at
  protected $primaryKey = 'my_id'; // the default is id

}
