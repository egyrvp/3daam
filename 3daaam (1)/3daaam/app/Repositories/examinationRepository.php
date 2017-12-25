<?php

namespace App\Repositories;

use App\Models\examination;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class examinationRepository
 * @package App\Repositories
 * @version December 17, 2017, 12:16 pm UTC
 *
 * @method examination findWithoutFail($id, $columns = ['*'])
 * @method examination find($id, $columns = ['*'])
 * @method examination first($columns = ['*'])
*/
class examinationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'patient_id',
        'doctorclinic_id',
        'start_date',
        'end_date',
        'start_time',
        'end_time',
        'actual_start_time',
        'actual_end_time',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return examination::class;
    }
}
