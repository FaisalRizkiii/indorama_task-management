<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;

class Department extends Model
{
    //
    use HasFactory;
    protected $table = 'departments';
    public $incrementing = false;
    protected $primary_key = 'dept_id';
    protected $fillable = [
        'dept_id',
        'name',
        'head_id'
    ];

    public function employee()
    {
        return $this->hasMany(Employee::class, 'dept_id', 'dept_id');
    }

    
}
