<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class queue
 * @package App\Models
 * @version December 19, 2017, 5:48 pm UTC
 *
 * @property integer examination_id
 * @property integer patient_id
 * @property date start_date
 * @property date end_date
 * @property time start_time
 * @property time end_time
 */
class queue extends Model
{
    use SoftDeletes;

    public $table = 'queues';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'examination_id',
        'patient_id',
        'start_date',
        'end_date',
        'start_time',
        'end_time'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'examination_id' => 'integer',
        'patient_id' => 'integer',
        'start_date' => 'date',
        'end_date' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'examination_id' => 'required',
        'patient_id' => 'required',
        'start_date' => 'required',
        'end_date' => 'required',
        'start_time' => 'required',
        'end_time' => 'required'
    ];

    
}
