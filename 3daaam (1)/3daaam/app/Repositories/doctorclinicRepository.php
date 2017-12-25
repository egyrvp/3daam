<?php

namespace App\Repositories;

use App\Models\doctorclinic;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class doctorclinicRepository
 * @package App\Repositories
 * @version December 12, 2017, 6:58 pm UTC
 *
 * @method doctorclinic findWithoutFail($id, $columns = ['*'])
 * @method doctorclinic find($id, $columns = ['*'])
 * @method doctorclinic first($columns = ['*'])
*/
class doctorclinicRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'doctor_id',
        'clinic_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return doctorclinic::class;
    }
}
