<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Employeems
 * @package App\Models
 * @version October 28, 2021, 7:20 am UTC
 *
 * @property string $lastname
 * @property string $firstname
 * @property string $middlename
 * @property string $address
 * @property integer $city_id
 * @property integer $state_id
 * @property integer $country_id
 * @property string $zip
 * @property integer $age
 * @property string $birthdate
 * @property string $date_hired
 * @property integer $department_id
 * @property integer $division_id
 * @property string $picture
 */
class Employeems extends Model
{
   // use SoftDeletes;

    use HasFactory;

    public $table = 'employeems';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'lastname' => 'string',
        'firstname' => 'string',
        'middlename' => 'string',
        'address' => 'string',
        'city_id' => 'integer',
        'state_id' => 'integer',
        'country_id' => 'integer',
        'zip' => 'string',
        'age' => 'integer',
        'birthdate' => 'date',
        'date_hired' => 'date',
        'department_id' => 'integer',
        'division_id' => 'integer',
        'picture' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'lastname' => 'required|string|max:60',
        'firstname' => 'required|string|max:60',
        'middlename' => 'required|string|max:60',
        'address' => 'required|string|max:120',
        'city_id' => 'required|integer',
        'state_id' => 'required|integer',
        'country_id' => 'required|integer',
        'zip' => 'required|string|max:10',
        'age' => 'required|integer',
        'birthdate' => 'required',
        'date_hired' => 'required',
        'department_id' => 'required|integer',
        'division_id' => 'required|integer',
        'picture' => 'required|string|max:60',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
