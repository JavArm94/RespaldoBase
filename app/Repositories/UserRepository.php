<?php

namespace App\Repositories;

use App\Models\user;
use App\Repositories\BaseRepository;

/**
 * Class userRepository
 * @package App\Repositories
 * @version December 1, 2020, 5:28 pm UTC
*/

class userRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'legajo',
        'apellido',
        'email',
        'email_verified_at',
        'nombreUsuario',
        'password',
        'remember_token',
        'fechaNacimiento',
        'direccion',
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
        return user::class;
    }
}
