<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAuditoriaCertificadoRequest;
use App\Http\Requests\UpdateAuditoriaCertificadoRequest;
use App\Repositories\AuditoriaCertificadoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class AuditoriaCertificadoController extends AppBaseController
{
    /** @var  AuditoriaCertificadoRepository */
    private $auditoriaCertificadoRepository;

    public function __construct(AuditoriaCertificadoRepository $auditoriaCertificadoRepo)
    {
        $this->auditoriaCertificadoRepository = $auditoriaCertificadoRepo;
    }

    /**
     * Display a listing of the AuditoriaCertificado.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $auditoriaCertificados = $this->auditoriaCertificadoRepository->all();

        return view('auditoria_certificados.index')
            ->with('auditoriaCertificados', $auditoriaCertificados);
    }

    /**
     * Show the form for creating a new AuditoriaCertificado.
     *
     * @return Response
     */
    public function create()
    {
        return view('auditoria_certificados.create');
    }

    /**
     * Store a newly created AuditoriaCertificado in storage.
     *
     * @param CreateAuditoriaCertificadoRequest $request
     *
     * @return Response
     */
    public function store(CreateAuditoriaCertificadoRequest $request)
    {
        $input = $request->all();

        $auditoriaCertificado = $this->auditoriaCertificadoRepository->create($input);

        Flash::success('Auditoria Certificado saved successfully.');

        return redirect(route('auditoriaCertificados.index'));
    }

    /**
     * Display the specified AuditoriaCertificado.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $auditoriaCertificado = $this->auditoriaCertificadoRepository->find($id);

        if (empty($auditoriaCertificado)) {
            Flash::error('Auditoria Certificado not found');

            return redirect(route('auditoriaCertificados.index'));
        }

        return view('auditoria_certificados.show')->with('auditoriaCertificado', $auditoriaCertificado);
    }

    /**
     * Show the form for editing the specified AuditoriaCertificado.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $auditoriaCertificado = $this->auditoriaCertificadoRepository->find($id);

        if (empty($auditoriaCertificado)) {
            Flash::error('Auditoria Certificado not found');

            return redirect(route('auditoriaCertificados.index'));
        }

        return view('auditoria_certificados.edit')->with('auditoriaCertificado', $auditoriaCertificado);
    }

    /**
     * Update the specified AuditoriaCertificado in storage.
     *
     * @param int $id
     * @param UpdateAuditoriaCertificadoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAuditoriaCertificadoRequest $request)
    {
        $auditoriaCertificado = $this->auditoriaCertificadoRepository->find($id);

        if (empty($auditoriaCertificado)) {
            Flash::error('Auditoria Certificado not found');

            return redirect(route('auditoriaCertificados.index'));
        }

        $auditoriaCertificado = $this->auditoriaCertificadoRepository->update($request->all(), $id);

        Flash::success('Auditoria Certificado updated successfully.');

        return redirect(route('auditoriaCertificados.index'));
    }

    /**
     * Remove the specified AuditoriaCertificado from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $auditoriaCertificado = $this->auditoriaCertificadoRepository->find($id);

        if (empty($auditoriaCertificado)) {
            Flash::error('Auditoria Certificado not found');

            return redirect(route('auditoriaCertificados.index'));
        }

        $this->auditoriaCertificadoRepository->delete($id);

        Flash::success('Auditoria Certificado deleted successfully.');

        return redirect(route('auditoriaCertificados.index'));
    }
}
