<?php

namespace App\Repositories;

use App\Models\TipoCertificado;
use App\Repositories\BaseRepository;

/**
 * Class TipoCertificadoRepository
 * @package App\Repositories
 * @version November 30, 2020, 5:05 pm UTC
*/

class TipoCertificadoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tipoCertificado',
        'ctdFaltasAnualesJustificadas',
        'solicitaFamiliar',
        'diasPresentacionVencimiento'
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
        return TipoCertificado::class;
    }
}
