<?php

namespace App\Repositories;

use App\Models\Certificado;
use App\Repositories\BaseRepository;

/**
 * Class CertificadoRepository
 * @package App\Repositories
 * @version November 30, 2020, 5:06 pm UTC
*/

class CertificadoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'diasDeAusencia',
        'lugar',
        'numeroComprobante',
        'fechaVencimiento',
        'fechaCertificado',
        'imagen',
        'estadoCertificado',
        'idUsuarioCertificado',
        'idPatologia',
        'idMedico',
        'idTipoCertificado',
        'idFamiliar'
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
        return Certificado::class;
    }
}
