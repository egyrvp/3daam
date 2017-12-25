<?php

namespace App\Repositories;

use App\Models\doctorcategory;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class doctorcategoryRepository
 * @package App\Repositories
 * @version December 12, 2017, 8:37 pm UTC
 *
 * @method doctorcategory findWithoutFail($id, $columns = ['*'])
 * @method doctorcategory find($id, $columns = ['*'])
 * @method doctorcategory first($columns = ['*'])
*/
class doctorcategoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'doctor_id',
        'name',
        'duration'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return doctorcategory::class;
    }
}
