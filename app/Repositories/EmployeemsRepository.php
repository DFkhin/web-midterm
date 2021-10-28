<?php

namespace App\Repositories;

use App\Models\Employeems;
use App\Repositories\BaseRepository;

/**
 * Class EmployeemsRepository
 * @package App\Repositories
 * @version October 28, 2021, 7:20 am UTC
*/

class EmployeemsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'lastname',
        'firstname',
        'middlename',
        'address',
        'city_id',
        'state_id',
        'country_id',
        'zip',
        'age',
        'birthdate',
        'date_hired',
        'department_id',
        'division_id',
        'picture'
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
        return Employeems::class;
    }
}
