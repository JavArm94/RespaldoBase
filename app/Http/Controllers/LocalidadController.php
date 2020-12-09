<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLocalidadRequest;
use App\Http\Requests\UpdateLocalidadRequest;
use App\Repositories\LocalidadRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class LocalidadController extends AppBaseController
{
    /** @var  LocalidadRepository */
    private $localidadRepository;

    public function __construct(LocalidadRepository $localidadRepo)
    {
        $this->localidadRepository = $localidadRepo;
    }

    /**
     * Display a listing of the Localidad.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $localidads = $this->localidadRepository->all();

        return view('localidads.index')
            ->with('localidads', $localidads);
    }

    /**
     * Show the form for creating a new Localidad.
     *
     * @return Response
     */
    public function create()
    {
        return view('localidads.create');
    }

    /**
     * Store a newly created Localidad in storage.
     *
     * @param CreateLocalidadRequest $request
     *
     * @return Response
     */
    public function store(CreateLocalidadRequest $request)
    {
        $input = $request->all();

        $localidad = $this->localidadRepository->create($input);

        Flash::success('Localidad saved successfully.');

        return redirect(route('localidads.index'));
    }

    /**
     * Display the specified Localidad.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $localidad = $this->localidadRepository->find($id);

        if (empty($localidad)) {
            Flash::error('Localidad not found');

            return redirect(route('localidads.index'));
        }

        return view('localidads.show')->with('localidad', $localidad);
    }

    /**
     * Show the form for editing the specified Localidad.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $localidad = $this->localidadRepository->find($id);

        if (empty($localidad)) {
            Flash::error('Localidad not found');

            return redirect(route('localidads.index'));
        }

        return view('localidads.edit')->with('localidad', $localidad);
    }

    /**
     * Update the specified Localidad in storage.
     *
     * @param int $id
     * @param UpdateLocalidadRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLocalidadRequest $request)
    {
        $localidad = $this->localidadRepository->find($id);

        if (empty($localidad)) {
            Flash::error('Localidad not found');

            return redirect(route('localidads.index'));
        }

        $localidad = $this->localidadRepository->update($request->all(), $id);

        Flash::success('Localidad updated successfully.');

        return redirect(route('localidads.index'));
    }

 


    /**
     * Remove the specified Localidad from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $localidad = $this->localidadRepository->find($id);

        if (empty($localidad)) {
            Flash::error('Localidad not found');

            return redirect(route('localidads.index'));
        }

        $this->localidadRepository->delete($id);

        Flash::success('Localidad deleted successfully.');

        return redirect(route('localidads.index'));
    }
}
