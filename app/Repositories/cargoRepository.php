<?php

namespace App\Repositories;

use App\Models\Cargo;
use App\Repositories\BaseRepository;

/**
 * Class CargoRepository
 * @package App\Repositories
 * @version November 30, 2020, 5:02 pm UTC
*/

class CargoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombreCargo'
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
        return Cargo::class;
    }
}
