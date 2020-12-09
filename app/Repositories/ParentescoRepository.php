<?php

namespace App\Repositories;

use App\Models\Parentesco;
use App\Repositories\BaseRepository;

/**
 * Class ParentescoRepository
 * @package App\Repositories
 * @version November 30, 2020, 5:06 pm UTC
*/

class ParentescoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombreParentesco'
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
        return Parentesco::class;
    }
}
