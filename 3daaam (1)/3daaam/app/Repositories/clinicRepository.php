<?php

namespace App\Repositories;

use App\Models\clinic;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class clinicRepository
 * @package App\Repositories
 * @version December 12, 2017, 6:19 pm UTC
 *
 * @method clinic findWithoutFail($id, $columns = ['*'])
 * @method clinic find($id, $columns = ['*'])
 * @method clinic first($columns = ['*'])
*/
class clinicRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'address',
        'phone',
        'mobile',
        'email'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return clinic::class;
    }
}
