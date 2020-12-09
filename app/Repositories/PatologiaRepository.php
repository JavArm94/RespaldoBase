<?php

namespace App\Repositories;

use App\Models\Patologia;
use App\Repositories\BaseRepository;

/**
 * Class PatologiaRepository
 * @package App\Repositories
 * @version November 30, 2020, 5:04 pm UTC
*/

class PatologiaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombrePatologia'
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
        return Patologia::class;
    }
}
