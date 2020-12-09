<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePatologiaRequest;
use App\Http\Requests\UpdatePatologiaRequest;
use App\Repositories\PatologiaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class PatologiaController extends AppBaseController
{
    /** @var  PatologiaRepository */
    private $patologiaRepository;

    public function __construct(PatologiaRepository $patologiaRepo)
    {
        $this->patologiaRepository = $patologiaRepo;
    }

    /**
     * Display a listing of the Patologia.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $patologias = $this->patologiaRepository->all();

        return view('patologias.index')
            ->with('patologias', $patologias);
    }

    /**
     * Show the form for creating a new Patologia.
     *
     * @return Response
     */
    public function create()
    {
        return view('patologias.create');
    }

    /**
     * Store a newly created Patologia in storage.
     *
     * @param CreatePatologiaRequest $request
     *
     * @return Response
     */
    public function store(CreatePatologiaRequest $request)
    {
        $input = $request->all();

        $patologia = $this->patologiaRepository->create($input);

        Flash::success('Patologia saved successfully.');

        return redirect(route('patologias.index'));
    }

    /**
     * Display the specified Patologia.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $patologia = $this->patologiaRepository->find($id);

        if (empty($patologia)) {
            Flash::error('Patologia not found');

            return redirect(route('patologias.index'));
        }

        return view('patologias.show')->with('patologia', $patologia);
    }

    /**
     * Show the form for editing the specified Patologia.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $patologia = $this->patologiaRepository->find($id);

        if (empty($patologia)) {
            Flash::error('Patologia not found');

            return redirect(route('patologias.index'));
        }

        return view('patologias.edit')->with('patologia', $patologia);
    }

    /**
     * Update the specified Patologia in storage.
     *
     * @param int $id
     * @param UpdatePatologiaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePatologiaRequest $request)
    {
        $patologia = $this->patologiaRepository->find($id);

        if (empty($patologia)) {
            Flash::error('Patologia not found');

            return redirect(route('patologias.index'));
        }

        $patologia = $this->patologiaRepository->update($request->all(), $id);

        Flash::success('Patologia updated successfully.');

        return redirect(route('patologias.index'));
    }

    /**
     * Remove the specified Patologia from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $patologia = $this->patologiaRepository->find($id);

        if (empty($patologia)) {
            Flash::error('Patologia not found');

            return redirect(route('patologias.index'));
        }

        $this->patologiaRepository->delete($id);

        Flash::success('Patologia deleted successfully.');

        return redirect(route('patologias.index'));
    }
}
