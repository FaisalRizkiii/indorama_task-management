<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $employees = [
            [
                'employee_id' => 'IT001',
                'name' => 'Bayu',
                'dept_id' => 'IT'
            ],
            [
                'employee_id' => 'IT002',
                'name' => 'Buya',
                'dept_id' => 'IT'
            ]
        ];

        foreach ($employees as $employee){
            Employee::create($employee);
        }
    }
}
