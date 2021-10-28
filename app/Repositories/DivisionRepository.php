<?php

namespace App\Repositories;

use App\Models\Division;
use App\Repositories\BaseRepository;

/**
 * Class DivisionRepository
 * @package App\Repositories
 * @version October 28, 2021, 7:50 am UTC
*/

class DivisionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
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
        return Division::class;
    }
}
