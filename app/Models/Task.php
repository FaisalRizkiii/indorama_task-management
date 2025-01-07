<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    use HasFactory;
    protected $table = 'task';
    public $incrementing = false;
    protected $primary_key = 'task_id';
    protected $fillable = [
        'task_id',
        
    ];
}
