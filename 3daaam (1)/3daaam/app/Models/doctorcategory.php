<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class doctorcategory
 * @package App\Models
 * @version December 12, 2017, 8:37 pm UTC
 *
 * @property integer doctor_id
 * @property string name
 * @property time duration
 */
class doctorcategory extends Model
{
    use SoftDeletes;

    public $table = 'doctorcategories';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'doctor_id',
        'name',
        'duration'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'doctor_id' => 'integer',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'doctor_id' => 'required',
        'name' => 'required',
        'duration' => 'required'
    ];
	public function doctor(){
return $this->hasOne('App\Models\doctor','id');
}

    
}
