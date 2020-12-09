<?php

namespace App\Repositories;

use App\Models\Notificacion;
use App\Repositories\BaseRepository;

/**
 * Class NotificacionRepository
 * @package App\Repositories
 * @version November 30, 2020, 5:07 pm UTC
*/

class NotificacionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'informacion',
        'tipoNotificacion',
        'fecha',
        'hora',
        'fechaNotificacion',
        'idTipoUsuarioDestinatario',
        'idUsuarioDestinatario'
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
        return Notificacion::class;
    }
}
