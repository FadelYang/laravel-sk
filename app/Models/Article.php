<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    // digunakan untuk mengaktifkan fitur soft delete
    // use softDeletes;

    // public $timestamps = false;
    protected $guarded = ['id'];
}
