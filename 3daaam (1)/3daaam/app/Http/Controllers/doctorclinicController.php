<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatedoctorclinicRequest;
use App\Http\Requests\UpdatedoctorclinicRequest;
use App\Repositories\doctorclinicRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\doctor;
use App\Models\clinic;


class doctorclinicController extends AppBaseController
{
    /** @var  doctorclinicRepository */
    private $doctorclinicRepository;

    public function __construct(doctorclinicRepository $doctorclinicRepo)
    {
        $this->doctorclinicRepository = $doctorclinicRepo;
    }

    /**
     * Display a listing of the doctorclinic.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->doctorclinicRepository->pushCriteria(new RequestCriteria($request));
        $doctorclinics = $this->doctorclinicRepository->all();

        return view('doctorclinics.index')
            ->with('doctorclinics', $doctorclinics);
    }

    /**
     * Show the form for creating a new doctorclinic.
     *
     * @return Response
     */
    public function create()
    {
		$doctors = doctor::pluck('name','id');
		$clinics = clinic::pluck('name','id');
        return view('doctorclinics.create',compact('doctors'),compact('clinics'));
    }

    /**
     * Store a newly created doctorclinic in storage.
     *
     * @param CreatedoctorclinicRequest $request
     *
     * @return Response
     */
    public function store(CreatedoctorclinicRequest $request)
    {
        $input = $request->all();

        $doctorclinic = $this->doctorclinicRepository->create($input);

        Flash::success('Doctorclinic saved successfully.');

        return redirect(route('doctorclinics.index'));
    }

    /**
     * Display the specified doctorclinic.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $doctorclinic = $this->doctorclinicRepository->findWithoutFail($id);

        if (empty($doctorclinic)) {
            Flash::error('Doctorclinic not found');

            return redirect(route('doctorclinics.index'));
        }

        return view('doctorclinics.show')->with('doctorclinic', $doctorclinic);
    }

    /**
     * Show the form for editing the specified doctorclinic.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $doctorclinic = $this->doctorclinicRepository->findWithoutFail($id);

        if (empty($doctorclinic)) {
            Flash::error('Doctorclinic not found');

            return redirect(route('doctorclinics.index'));
        }

        return view('doctorclinics.edit')->with('doctorclinic', $doctorclinic);
    }

    /**
     * Update the specified doctorclinic in storage.
     *
     * @param  int              $id
     * @param UpdatedoctorclinicRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatedoctorclinicRequest $request)
    {
        $doctorclinic = $this->doctorclinicRepository->findWithoutFail($id);

        if (empty($doctorclinic)) {
            Flash::error('Doctorclinic not found');

            return redirect(route('doctorclinics.index'));
        }

        $doctorclinic = $this->doctorclinicRepository->update($request->all(), $id);

        Flash::success('Doctorclinic updated successfully.');

        return redirect(route('doctorclinics.index'));
    }

    /**
     * Remove the specified doctorclinic from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $doctorclinic = $this->doctorclinicRepository->findWithoutFail($id);

        if (empty($doctorclinic)) {
            Flash::error('Doctorclinic not found');

            return redirect(route('doctorclinics.index'));
        }

        $this->doctorclinicRepository->delete($id);

        Flash::success('Doctorclinic deleted successfully.');

        return redirect(route('doctorclinics.index'));
    }
}
