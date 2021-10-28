<?php

namespace App\Repositories;

use App\Models\Enrollment;
use App\Repositories\BaseRepository;

/**
 * Class EnrollmentRepository
 * @package App\Repositories
 * @version October 28, 2021, 2:53 pm UTC
*/

class EnrollmentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Firstname',
        'Lastname',
        'MI',
        'course',
        'year',
        'date of birth',
        'current address',
        'email address',
        'phone number'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Enrollment::class;
    }
}
