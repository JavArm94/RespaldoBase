<?php

namespace App\Repositories;

use App\Models\NotificacionCertificado;
use App\Repositories\BaseRepository;

/**
 * Class NotificacionCertificadoRepository
 * @package App\Repositories
 * @version November 30, 2020, 5:08 pm UTC
*/

class NotificacionCertificadoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idCertificado',
        'idNotificacion'
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
        return NotificacionCertificado::class;
    }
}
