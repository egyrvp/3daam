<?php

namespace App\Repositories;

use App\Models\doctor;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class doctorRepository
 * @package App\Repositories
 * @version December 12, 2017, 6:38 pm UTC
 *
 * @method doctor findWithoutFail($id, $columns = ['*'])
 * @method doctor find($id, $columns = ['*'])
 * @method doctor first($columns = ['*'])
*/
class doctorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return doctor::class;
    }
}
