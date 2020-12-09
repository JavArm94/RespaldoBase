<?php

namespace App\Repositories;

use App\Models\Usuario;
use App\Repositories\BaseRepository;

/**
 * Class UsuarioRepository
 * @package App\Repositories
 * @version November 30, 2020, 5:00 pm UTC
*/

class UsuarioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'legajo',
        'apellido',
        'nombreUsuario',
        'contrasenaUsuario',
        'fechaNacimiento',
        'direccion',
        'correoElectronico',
        'numeroDocumento',
        'estadoBaja',
        'idCargo',
        'idLocalidad',
        'idTipoDocumento',
        'idTipoUsuario',
        'idRol',
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
        return Usuario::class;
    }
}
