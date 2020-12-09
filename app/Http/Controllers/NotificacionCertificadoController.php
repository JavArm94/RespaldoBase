<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNotificacionCertificadoRequest;
use App\Http\Requests\UpdateNotificacionCertificadoRequest;
use App\Repositories\NotificacionCertificadoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class NotificacionCertificadoController extends AppBaseController
{
    /** @var  NotificacionCertificadoRepository */
    private $notificacionCertificadoRepository;

    public function __construct(NotificacionCertificadoRepository $notificacionCertificadoRepo)
    {
        $this->notificacionCertificadoRepository = $notificacionCertificadoRepo;
    }

    /**
     * Display a listing of the NotificacionCertificado.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $notificacionCertificados = $this->notificacionCertificadoRepository->all();

        return view('notificacion_certificados.index')
            ->with('notificacionCertificados', $notificacionCertificados);
    }

    /**
     * Show the form for creating a new NotificacionCertificado.
     *
     * @return Response
     */
    public function create()
    {
        return view('notificacion_certificados.create');
    }

    /**
     * Store a newly created NotificacionCertificado in storage.
     *
     * @param CreateNotificacionCertificadoRequest $request
     *
     * @return Response
     */
    public function store(CreateNotificacionCertificadoRequest $request)
    {
        $input = $request->all();

        $notificacionCertificado = $this->notificacionCertificadoRepository->create($input);

        Flash::success('Notificacion Certificado saved successfully.');

        return redirect(route('notificacionCertificados.index'));
    }

    /**
     * Display the specified NotificacionCertificado.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $notificacionCertificado = $this->notificacionCertificadoRepository->find($id);

        if (empty($notificacionCertificado)) {
            Flash::error('Notificacion Certificado not found');

            return redirect(route('notificacionCertificados.index'));
        }

        return view('notificacion_certificados.show')->with('notificacionCertificado', $notificacionCertificado);
    }

    /**
     * Show the form for editing the specified NotificacionCertificado.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $notificacionCertificado = $this->notificacionCertificadoRepository->find($id);

        if (empty($notificacionCertificado)) {
            Flash::error('Notificacion Certificado not found');

            return redirect(route('notificacionCertificados.index'));
        }

        return view('notificacion_certificados.edit')->with('notificacionCertificado', $notificacionCertificado);
    }

    /**
     * Update the specified NotificacionCertificado in storage.
     *
     * @param int $id
     * @param UpdateNotificacionCertificadoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateNotificacionCertificadoRequest $request)
    {
        $notificacionCertificado = $this->notificacionCertificadoRepository->find($id);

        if (empty($notificacionCertificado)) {
            Flash::error('Notificacion Certificado not found');

            return redirect(route('notificacionCertificados.index'));
        }

        $notificacionCertificado = $this->notificacionCertificadoRepository->update($request->all(), $id);

        Flash::success('Notificacion Certificado updated successfully.');

        return redirect(route('notificacionCertificados.index'));
    }

    /**
     * Remove the specified NotificacionCertificado from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $notificacionCertificado = $this->notificacionCertificadoRepository->find($id);

        if (empty($notificacionCertificado)) {
            Flash::error('Notificacion Certificado not found');

            return redirect(route('notificacionCertificados.index'));
        }

        $this->notificacionCertificadoRepository->delete($id);

        Flash::success('Notificacion Certificado deleted successfully.');

        return redirect(route('notificacionCertificados.index'));
    }
}
