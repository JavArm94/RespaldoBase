<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGeneroRequest;
use App\Http\Requests\UpdateGeneroRequest;
use App\Repositories\GeneroRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class GeneroController extends AppBaseController
{
    /** @var  GeneroRepository */
    private $generoRepository;

    public function __construct(GeneroRepository $generoRepo)
    {
        $this->generoRepository = $generoRepo;
    }

    /**
     * Display a listing of the Genero.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $generos = $this->generoRepository->all();

        return view('generos.index')
            ->with('generos', $generos);
    }

    /**
     * Show the form for creating a new Genero.
     *
     * @return Response
     */
    public function create()
    {
        return view('generos.create');
    }

    /**
     * Store a newly created Genero in storage.
     *
     * @param CreateGeneroRequest $request
     *
     * @return Response
     */
    public function store(CreateGeneroRequest $request)
    {
        $input = $request->all();

        $genero = $this->generoRepository->create($input);

        Flash::success('Genero saved successfully.');

        return redirect(route('generos.index'));
    }

    /**
     * Display the specified Genero.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $genero = $this->generoRepository->find($id);

        if (empty($genero)) {
            Flash::error('Genero not found');

            return redirect(route('generos.index'));
        }

        return view('generos.show')->with('genero', $genero);
    }

    /**
     * Show the form for editing the specified Genero.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $genero = $this->generoRepository->find($id);

        if (empty($genero)) {
            Flash::error('Genero not found');

            return redirect(route('generos.index'));
        }

        return view('generos.edit')->with('genero', $genero);
    }

    /**
     * Update the specified Genero in storage.
     *
     * @param int $id
     * @param UpdateGeneroRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGeneroRequest $request)
    {
        $genero = $this->generoRepository->find($id);

        if (empty($genero)) {
            Flash::error('Genero not found');

            return redirect(route('generos.index'));
        }

        $genero = $this->generoRepository->update($request->all(), $id);

        Flash::success('Genero updated successfully.');

        return redirect(route('generos.index'));
    }

    /**
     * Remove the specified Genero from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $genero = $this->generoRepository->find($id);

        if (empty($genero)) {
            Flash::error('Genero not found');

            return redirect(route('generos.index'));
        }

        $this->generoRepository->delete($id);

        Flash::success('Genero deleted successfully.');

        return redirect(route('generos.index'));
    }
}
