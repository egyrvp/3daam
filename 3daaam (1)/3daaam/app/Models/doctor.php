<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class doctor
 * @package App\Models
 * @version December 12, 2017, 6:38 pm UTC
 *
 * @property string name
 * @property date birthdate
 * @property string ssn
 * @property string gender
 * @property string address
 * @property string phone
 * @property string email
 * @property string department
 * @property string specialty
 * @property string degree
 */
class doctor extends Model
{
    use SoftDeletes;

    public $table = 'doctors';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'birthdate',
        'ssn',
        'gender',
        'address',
        'phone',
        'email',
        'department',
        'specialty',
        'degree'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'birthdate' => 'date',
        'ssn' => 'string',
        'gender' => 'string',
        'address' => 'string',
        'phone' => 'string',
        'email' => 'string',
        'department' => 'string',
        'specialty' => 'string',
        'degree' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'birthdate' => 'required',
        'ssn' => 'required',
        'gender' => 'required',
        'address' => 'required',
        'phone' => 'required',
        'department' => 'required',
        'specialty' => 'required',
        'degree' => 'required'
    ];
public function doctorclinic(){
	return $this->hasMany('App\Models\doctorclinic');
} 
public function doctorcategory(){
return $this->hasMany('App\Models\doctorcategory');
}

    
}
