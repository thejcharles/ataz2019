<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Training extends Model
{
  use SoftDeletes;

  public $timestamps = true;
  protected $fillable = ['location','dates', 'start', 'end', 'event', 'event_type', 'description',
    'other_info', 'contact', 'contact_email', 'link', 'contact_phone', 'updated_by', 'updated_at', 'created_at'];
  protected $dates = ['deleted_at'];

}
