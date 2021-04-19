<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Others extends Model
{
    use HasFactory;
    //Table name
    protected $table = 'others';
    //Primary key
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;
}
