<?php

namespace App\Repositories;

use App\Models\Genero;
use App\Repositories\BaseRepository;

/**
 * Class GeneroRepository
 * @package App\Repositories
 * @version November 30, 2020, 5:04 pm UTC
*/

class GeneroRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'genero'
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
        return Genero::class;
    }
}
