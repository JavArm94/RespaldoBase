<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNotificacionRequest;
use App\Http\Requests\UpdateNotificacionRequest;
use App\Repositories\NotificacionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class NotificacionController extends AppBaseController
{
    /** @var  NotificacionRepository */
    private $notificacionRepository;

    public function __construct(NotificacionRepository $notificacionRepo)
    {
        $this->notificacionRepository = $notificacionRepo;
    }

    /**
     * Display a listing of the Notificacion.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $notificacions = $this->notificacionRepository->all();

        return view('notificacions.index')
            ->with('notificacions', $notificacions);
    }

    /**
     * Show the form for creating a new Notificacion.
     *
     * @return Response
     */
    public function create()
    {
        return view('notificacions.create');
    }

    /**
     * Store a newly created Notificacion in storage.
     *
     * @param CreateNotificacionRequest $request
     *
     * @return Response
     */
    public function store(CreateNotificacionRequest $request)
    {
        $input = $request->all();

        $notificacion = $this->notificacionRepository->create($input);

        Flash::success('Notificacion saved successfully.');

        return redirect(route('notificacions.index'));
    }

    /**
     * Display the specified Notificacion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $notificacion = $this->notificacionRepository->find($id);

        if (empty($notificacion)) {
            Flash::error('Notificacion not found');

            return redirect(route('notificacions.index'));
        }

        return view('notificacions.show')->with('notificacion', $notificacion);
    }

    /**
     * Show the form for editing the specified Notificacion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $notificacion = $this->notificacionRepository->find($id);

        if (empty($notificacion)) {
            Flash::error('Notificacion not found');

            return redirect(route('notificacions.index'));
        }

        return view('notificacions.edit')->with('notificacion', $notificacion);
    }

    /**
     * Update the specified Notificacion in storage.
     *
     * @param int $id
     * @param UpdateNotificacionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateNotificacionRequest $request)
    {
        $notificacion = $this->notificacionRepository->find($id);

        if (empty($notificacion)) {
            Flash::error('Notificacion not found');

            return redirect(route('notificacions.index'));
        }

        $notificacion = $this->notificacionRepository->update($request->all(), $id);

        Flash::success('Notificacion updated successfully.');

        return redirect(route('notificacions.index'));
    }

    /**
     * Remove the specified Notificacion from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $notificacion = $this->notificacionRepository->find($id);

        if (empty($notificacion)) {
            Flash::error('Notificacion not found');

            return redirect(route('notificacions.index'));
        }

        $this->notificacionRepository->delete($id);

        Flash::success('Notificacion deleted successfully.');

        return redirect(route('notificacions.index'));
    }
}
