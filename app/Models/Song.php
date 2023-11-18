<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
	use HasFactory;
	//add fillable fields corresponding to
	//database columns
	protected $fillable=['title', 'artist'];
}
