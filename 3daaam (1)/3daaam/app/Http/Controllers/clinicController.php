<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateclinicRequest;
use App\Http\Requests\UpdateclinicRequest;
use App\Repositories\clinicRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class clinicController extends AppBaseController
{
    /** @var  clinicRepository */
    private $clinicRepository;

    public function __construct(clinicRepository $clinicRepo)
    {
        $this->clinicRepository = $clinicRepo;
    }

    /**
     * Display a listing of the clinic.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->clinicRepository->pushCriteria(new RequestCriteria($request));
        $clinics = $this->clinicRepository->all();

        return view('clinics.index')
            ->with('clinics', $clinics);
    }

    /**
     * Show the form for creating a new clinic.
     *
     * @return Response
     */
    public function create()
    {
        return view('clinics.create');
    }

    /**
     * Store a newly created clinic in storage.
     *
     * @param CreateclinicRequest $request
     *
     * @return Response
     */
    public function store(CreateclinicRequest $request)
    {
        $input = $request->all();

        $clinic = $this->clinicRepository->create($input);

        Flash::success('Clinic saved successfully.');

        return redirect(route('clinics.index'));
    }

    /**
     * Display the specified clinic.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $clinic = $this->clinicRepository->findWithoutFail($id);

        if (empty($clinic)) {
            Flash::error('Clinic not found');

            return redirect(route('clinics.index'));
        }

        return view('clinics.show')->with('clinic', $clinic);
    }

    /**
     * Show the form for editing the specified clinic.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $clinic = $this->clinicRepository->findWithoutFail($id);

        if (empty($clinic)) {
            Flash::error('Clinic not found');

            return redirect(route('clinics.index'));
        }

        return view('clinics.edit')->with('clinic', $clinic);
    }

    /**
     * Update the specified clinic in storage.
     *
     * @param  int              $id
     * @param UpdateclinicRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateclinicRequest $request)
    {
        $clinic = $this->clinicRepository->findWithoutFail($id);

        if (empty($clinic)) {
            Flash::error('Clinic not found');

            return redirect(route('clinics.index'));
        }

        $clinic = $this->clinicRepository->update($request->all(), $id);

        Flash::success('Clinic updated successfully.');

        return redirect(route('clinics.index'));
    }

    /**
     * Remove the specified clinic from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $clinic = $this->clinicRepository->findWithoutFail($id);

        if (empty($clinic)) {
            Flash::error('Clinic not found');

            return redirect(route('clinics.index'));
        }

        $this->clinicRepository->delete($id);

        Flash::success('Clinic deleted successfully.');

        return redirect(route('clinics.index'));
    }
}
