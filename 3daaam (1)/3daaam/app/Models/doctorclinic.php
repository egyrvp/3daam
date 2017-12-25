<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class doctorclinic
 * @package App\Models
 * @version December 12, 2017, 6:58 pm UTC
 *
 * @property integer doctor_id
 * @property integer clinic_id
 */
class doctorclinic extends Model
{
    use SoftDeletes;

    public $table = 'doctorclinics';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'doctor_id',
        'clinic_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'doctor_id' => 'integer',
        'clinic_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'doctor_id' => 'required',
        'clinic_id' => 'required'
    ];
public function doctor(){
	return $this->hasOne('App\Models\Doctor','id');
}
  

public function clinic(){
	return $this->hasOne('App\Models\Clinic','id');
}  
}
