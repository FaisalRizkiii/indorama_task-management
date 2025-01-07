<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    use HasFactory;
    protected $table = 'employee';
    public $incrementing = false;
    protected $primary_key = '';
    protected $fillable = [
        'employee_id',
        'head_id',
        'name'
    ];

}
