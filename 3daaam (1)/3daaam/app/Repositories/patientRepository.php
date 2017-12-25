<?php

namespace App\Repositories;

use App\Models\patient;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class patientRepository
 * @package App\Repositories
 * @version December 12, 2017, 5:58 pm UTC
 *
 * @method patient findWithoutFail($id, $columns = ['*'])
 * @method patient find($id, $columns = ['*'])
 * @method patient first($columns = ['*'])
*/
class patientRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'ssn',
        'birthdate',
        'gender',
        'phone',
        'city',
        'address'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return patient::class;
    }
}
