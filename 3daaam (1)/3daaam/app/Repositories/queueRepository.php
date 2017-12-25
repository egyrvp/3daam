<?php

namespace App\Repositories;

use App\Models\queue;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class queueRepository
 * @package App\Repositories
 * @version December 19, 2017, 5:48 pm UTC
 *
 * @method queue findWithoutFail($id, $columns = ['*'])
 * @method queue find($id, $columns = ['*'])
 * @method queue first($columns = ['*'])
*/
class queueRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'examination_id',
        'patient_id',
        'start_date',
        'end_date',
        'start_time',
        'end_time'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return queue::class;
    }
}
