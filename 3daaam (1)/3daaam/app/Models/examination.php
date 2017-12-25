<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class examination
 * @package App\Models
 * @version December 17, 2017, 12:16 pm UTC
 *
 * @property integer patient_id
 * @property integer doctorclinic_id
 * @property date start_date
 * @property date end_date
 * @property time start_time
 * @property time end_time
 * @property time actual_start_time
 * @property time actual_end_time
 * @property string status
 */
class examination extends Model
{
    use SoftDeletes;

    public $table = 'examinations';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'patient_id',
        'doctorclinic_id',
        'start_date',
        'end_date',
        'start_time',
        'end_time',
        'actual_start_time',
        'actual_end_time',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'patient_id' => 'integer',
        'doctorclinic_id' => 'integer',
        'start_date' => 'date',
        'end_date' => 'date',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'patient_id' => 'required',
        'doctorclinic_id' => 'required',
        'start_date' => 'required',
        'end_date' => 'required',
        'start_time' => 'required',
        'end_time' => 'required'
    ];

    
}
