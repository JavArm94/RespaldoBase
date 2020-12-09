<?php

namespace App\Repositories;

use App\Models\Familiar;
use App\Repositories\BaseRepository;

/**
 * Class FamiliarRepository
 * @package App\Repositories
 * @version November 30, 2020, 5:06 pm UTC
*/

class FamiliarRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'apellido',
        'nombres',
        'fechaNacimiento',
        'idUsuario',
        'idParentesco',
        'idGenero'
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
        return Familiar::class;
    }
}
