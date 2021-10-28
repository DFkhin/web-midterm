<?php

namespace App\Repositories;

use App\Models\Employee_salary;
use App\Repositories\BaseRepository;

/**
 * Class Employee_salaryRepository
 * @package App\Repositories
 * @version October 28, 2021, 7:34 am UTC
*/

class Employee_salaryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'employee_id',
        'salary'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Employee_salary::class;
    }
}
