<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About_Model extends Model
{
    protected $table="about";
    protected $fillable=['about_title','about_des','about_image'];
}
