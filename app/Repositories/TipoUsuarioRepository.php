<?php

namespace App\Repositories;

use App\Models\TipoUsuario;
use App\Repositories\BaseRepository;

/**
 * Class TipoUsuarioRepository
 * @package App\Repositories
 * @version November 30, 2020, 5:04 pm UTC
*/

class TipoUsuarioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tipoDeUsuario'
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
        return TipoUsuario::class;
    }
}
