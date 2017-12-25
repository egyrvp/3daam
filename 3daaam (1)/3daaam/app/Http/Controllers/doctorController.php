<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatedoctorRequest;
use App\Http\Requests\UpdatedoctorRequest;
use App\Repositories\doctorRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class doctorController extends AppBaseController
{
    /** @var  doctorRepository */
    private $doctorRepository;

    public function __construct(doctorRepository $doctorRepo)
    {
        $this->doctorRepository = $doctorRepo;
    }

    /**
     * Display a listing of the doctor.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->doctorRepository->pushCriteria(new RequestCriteria($request));
        $doctors = $this->doctorRepository->all();

        return view('doctors.index')
            ->with('doctors', $doctors);
    }

    /**
     * Show the form for creating a new doctor.
     *
     * @return Response
     */
    public function create()
    {
        return view('doctors.create');
    }

    /**
     * Store a newly created doctor in storage.
     *
     * @param CreatedoctorRequest $request
     *
     * @return Response
     */
    public function store(CreatedoctorRequest $request)
    {
        $input = $request->all();

        $doctor = $this->doctorRepository->create($input);

        Flash::success('Doctor saved successfully.');

        return redirect(route('doctors.index'));
    }

    /**
     * Display the specified doctor.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $doctor = $this->doctorRepository->findWithoutFail($id);

        if (empty($doctor)) {
            Flash::error('Doctor not found');

            return redirect(route('doctors.index'));
        }

        return view('doctors.show')->with('doctor', $doctor);
    }

    /**
     * Show the form for editing the specified doctor.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $doctor = $this->doctorRepository->findWithoutFail($id);

        if (empty($doctor)) {
            Flash::error('Doctor not found');

            return redirect(route('doctors.index'));
        }

        return view('doctors.edit')->with('doctor', $doctor);
    }

    /**
     * Update the specified doctor in storage.
     *
     * @param  int              $id
     * @param UpdatedoctorRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatedoctorRequest $request)
    {
        $doctor = $this->doctorRepository->findWithoutFail($id);

        if (empty($doctor)) {
            Flash::error('Doctor not found');

            return redirect(route('doctors.index'));
        }

        $doctor = $this->doctorRepository->update($request->all(), $id);

        Flash::success('Doctor updated successfully.');

        return redirect(route('doctors.index'));
    }

    /**
     * Remove the specified doctor from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $doctor = $this->doctorRepository->findWithoutFail($id);

        if (empty($doctor)) {
            Flash::error('Doctor not found');

            return redirect(route('doctors.index'));
        }

        $this->doctorRepository->delete($id);

        Flash::success('Doctor deleted successfully.');

        return redirect(route('doctors.index'));
    }
}
