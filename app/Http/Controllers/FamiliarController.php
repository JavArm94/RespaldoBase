<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFamiliarRequest;
use App\Http\Requests\UpdateFamiliarRequest;
use App\Repositories\FamiliarRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class FamiliarController extends AppBaseController
{
    /** @var  FamiliarRepository */
    private $familiarRepository;

    public function __construct(FamiliarRepository $familiarRepo)
    {
        $this->familiarRepository = $familiarRepo;
    }

    /**
     * Display a listing of the Familiar.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $familiars = $this->familiarRepository->all();

        return view('familiars.index')
            ->with('familiars', $familiars);
    }

    /**
     * Show the form for creating a new Familiar.
     *
     * @return Response
     */
    public function create()
    {
        return view('familiars.create');
    }

    /**
     * Store a newly created Familiar in storage.
     *
     * @param CreateFamiliarRequest $request
     *
     * @return Response
     */
    public function store(CreateFamiliarRequest $request)
    {
        $input = $request->all();

        $familiar = $this->familiarRepository->create($input);

        Flash::success('Familiar saved successfully.');

        return redirect(route('familiars.index'));
    }

    /**
     * Display the specified Familiar.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $familiar = $this->familiarRepository->find($id);

        if (empty($familiar)) {
            Flash::error('Familiar not found');

            return redirect(route('familiars.index'));
        }

        return view('familiars.show')->with('familiar', $familiar);
    }

    /**
     * Show the form for editing the specified Familiar.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $familiar = $this->familiarRepository->find($id);

        if (empty($familiar)) {
            Flash::error('Familiar not found');

            return redirect(route('familiars.index'));
        }

        return view('familiars.edit')->with('familiar', $familiar);
    }

    /**
     * Update the specified Familiar in storage.
     *
     * @param int $id
     * @param UpdateFamiliarRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFamiliarRequest $request)
    {
        $familiar = $this->familiarRepository->find($id);

        if (empty($familiar)) {
            Flash::error('Familiar not found');

            return redirect(route('familiars.index'));
        }

        $familiar = $this->familiarRepository->update($request->all(), $id);

        Flash::success('Familiar updated successfully.');

        return redirect(route('familiars.index'));
    }

    /**
     * Remove the specified Familiar from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $familiar = $this->familiarRepository->find($id);

        if (empty($familiar)) {
            Flash::error('Familiar not found');

            return redirect(route('familiars.index'));
        }

        $this->familiarRepository->delete($id);

        Flash::success('Familiar deleted successfully.');

        return redirect(route('familiars.index'));
    }
}
