<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'student';
	public $timestamps = false;
	protected $fillable = ['first_name', 'last_name'];
}