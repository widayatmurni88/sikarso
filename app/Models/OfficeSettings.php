<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfficeSettings extends Model
{
    //use HasFactory;
    protected $table = 'office_settings';
    protected $fillable = ['name_set', 'value'];
}
