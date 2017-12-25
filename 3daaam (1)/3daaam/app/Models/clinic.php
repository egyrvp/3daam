<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class clinic
 * @package App\Models
 * @version December 12, 2017, 6:19 pm UTC
 *
 * @property string name
 * @property string address
 * @property string phone
 * @property string mobile
 * @property string email
 */
class clinic extends Model
{
    use SoftDeletes;

    public $table = 'clinics';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'address',
        'phone',
        'mobile',
        'email'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'address' => 'string',
        'phone' => 'string',
        'mobile' => 'string',
        'email' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'address' => 'required',
        'phone' => 'required'
    ];
public function doctorclinic(){
	return $this->hasMany('App\Models\doctorclinic');
} 
    
}
