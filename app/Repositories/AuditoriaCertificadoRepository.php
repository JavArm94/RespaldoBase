<?php

namespace App\Repositories;

use App\Models\AuditoriaCertificado;
use App\Repositories\BaseRepository;

/**
 * Class AuditoriaCertificadoRepository
 * @package App\Repositories
 * @version November 30, 2020, 5:07 pm UTC
*/

class AuditoriaCertificadoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fechaModificacion',
        'horaModificacion',
        'tipoModificacion',
        'diasDeAusencia',
        'numeroComprobante',
        'fechaVencimiento',
        'fechaCertificado',
        'imagen',
        'estadoCerficado',
        'idUsuarioCertificado',
        'idUsuarioQueModifica',
        'idPatologia',
        'idMedico',
        'idTipoCertificado',
        'idFamiliar',
        'idCertificado'
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
        return AuditoriaCertificado::class;
    }
}
