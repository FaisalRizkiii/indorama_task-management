<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $departments = [
            [
                'dept_id' => 'IT',
                'name' => 'Information and Technology'
            ],
            [
                'dept_id' => 'PS',
                'name' => 'Purchase and Store'
            ],
            [
                'dept_id' => 'WHS',
                'name' => 'Warhouse'
            ],
            [
                'dept_id' => 'OP',
                'name' => 'Operation'
            ],
            [
                'dept_id' => 'FA',
                'name' => 'Finance and Accounting'
            ],
            [
                'dept_id' => 'MNT',
                'name' => 'Maintenance'
            ],
            [
                'dept_id' => 'QAQC',
                'name' => 'Quality Assesment and Quality Control'
            ],
            [
                'dept_id' => 'HSE',
                'name' => 'Health, Safety, Environment'
            ],
            [
                'dept_id' => 'LOG',
                'name' => 'Logistic'
            ],
            [
                'dept_id' => 'HRD/GA',
                'name' => 'Human Resource Development and General Affair'
            ],
            [
                'dept_id' => 'TS',
                'name' => 'Technical Service'
            ],
        ];

        foreach($departments as $department){
            Department::create($department);
        }
    }
}
