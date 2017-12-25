<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class patient
 * @package App\Models
 * @version December 12, 2017, 5:58 pm UTC
 *
 * @property string name
 * @property string ssn
 * @property date birthdate
 * @property string gender
 * @property string phone
 * @property string city
 * @property string address
 */
class patient extends Model
{
    use SoftDeletes;

    public $table = 'patients';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'ssn',
        'birthdate',
        'gender',
        'phone',
        'city',
        'address'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'ssn' => 'string',
        'birthdate' => 'date',
        'gender' => 'string',
        'phone' => 'string',
        'city' => 'string',
        'address' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'ssn' => 'required',
        'birthdate' => 'required',
        'gender' => 'required',
        'phone' => 'required',
        'city' => 'required',
        'address' => 'required'
    ];

    
}
