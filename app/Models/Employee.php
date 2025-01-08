<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    use HasFactory;
    protected $table = 'employees';
    public $incrementing = false;
    protected $primary_key = '';
    protected $fillable = [
        'employee_id',
        'name',
        'dept_id'
    ];

    public function department()
    {
        return $this->hasOne(Department::class, 'dept_id', 'dept_id');
    }
}
