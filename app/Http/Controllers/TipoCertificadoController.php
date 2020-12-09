<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTipoCertificadoRequest;
use App\Http\Requests\UpdateTipoCertificadoRequest;
use App\Repositories\TipoCertificadoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class TipoCertificadoController extends AppBaseController
{
    /** @var  TipoCertificadoRepository */
    private $tipoCertificadoRepository;

    public function __construct(TipoCertificadoRepository $tipoCertificadoRepo)
    {
        $this->tipoCertificadoRepository = $tipoCertificadoRepo;
    }

    /**
     * Display a listing of the TipoCertificado.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tipoCertificados = $this->tipoCertificadoRepository->all();

        return view('tipo_certificados.index')
            ->with('tipoCertificados', $tipoCertificados);
    }

    /**
     * Show the form for creating a new TipoCertificado.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipo_certificados.create');
    }

    /**
     * Store a newly created TipoCertificado in storage.
     *
     * @param CreateTipoCertificadoRequest $request
     *
     * @return Response
     */
    public function store(CreateTipoCertificadoRequest $request)
    {
        $input = $request->all();

        $tipoCertificado = $this->tipoCertificadoRepository->create($input);

        Flash::success('Tipo Certificado saved successfully.');

        return redirect(route('tipoCertificados.index'));
    }

    /**
     * Display the specified TipoCertificado.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoCertificado = $this->tipoCertificadoRepository->find($id);

        if (empty($tipoCertificado)) {
            Flash::error('Tipo Certificado not found');

            return redirect(route('tipoCertificados.index'));
        }

        return view('tipo_certificados.show')->with('tipoCertificado', $tipoCertificado);
    }

    /**
     * Show the form for editing the specified TipoCertificado.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoCertificado = $this->tipoCertificadoRepository->find($id);

        if (empty($tipoCertificado)) {
            Flash::error('Tipo Certificado not found');

            return redirect(route('tipoCertificados.index'));
        }

        return view('tipo_certificados.edit')->with('tipoCertificado', $tipoCertificado);
    }

    /**
     * Update the specified TipoCertificado in storage.
     *
     * @param int $id
     * @param UpdateTipoCertificadoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipoCertificadoRequest $request)
    {
        $tipoCertificado = $this->tipoCertificadoRepository->find($id);

        if (empty($tipoCertificado)) {
            Flash::error('Tipo Certificado not found');

            return redirect(route('tipoCertificados.index'));
        }

        $tipoCertificado = $this->tipoCertificadoRepository->update($request->all(), $id);

        Flash::success('Tipo Certificado updated successfully.');

        return redirect(route('tipoCertificados.index'));
    }

    /**
     * Remove the specified TipoCertificado from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoCertificado = $this->tipoCertificadoRepository->find($id);

        if (empty($tipoCertificado)) {
            Flash::error('Tipo Certificado not found');

            return redirect(route('tipoCertificados.index'));
        }

        $this->tipoCertificadoRepository->delete($id);

        Flash::success('Tipo Certificado deleted successfully.');

        return redirect(route('tipoCertificados.index'));
    }
}
