<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatedoctorcategoryRequest;
use App\Http\Requests\UpdatedoctorcategoryRequest;
use App\Repositories\doctorcategoryRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Doctor;

class doctorcategoryController extends AppBaseController
{
    /** @var  doctorcategoryRepository */
    private $doctorcategoryRepository;

    public function __construct(doctorcategoryRepository $doctorcategoryRepo)
    {
        $this->doctorcategoryRepository = $doctorcategoryRepo;
    }

    /**
     * Display a listing of the doctorcategory.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->doctorcategoryRepository->pushCriteria(new RequestCriteria($request));
        $doctorcategories = $this->doctorcategoryRepository->all();

        return view('doctorcategories.index')
            ->with('doctorcategories', $doctorcategories);
    }

    /**
     * Show the form for creating a new doctorcategory.
     *
     * @return Response
     */
    public function create()
    {
		$doctors=Doctor::pluck('name','id');
        return view('doctorcategories.create',compact('doctors'));
    }

    /**
     * Store a newly created doctorcategory in storage.
     *
     * @param CreatedoctorcategoryRequest $request
     *
     * @return Response
     */
    public function store(CreatedoctorcategoryRequest $request)
    {
        $input = $request->all();

        $doctorcategory = $this->doctorcategoryRepository->create($input);

        Flash::success('Doctorcategory saved successfully.');

        return redirect(route('doctorcategories.index'));
    }

    /**
     * Display the specified doctorcategory.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $doctorcategory = $this->doctorcategoryRepository->findWithoutFail($id);

        if (empty($doctorcategory)) {
            Flash::error('Doctorcategory not found');

            return redirect(route('doctorcategories.index'));
        }

        return view('doctorcategories.show')->with('doctorcategory', $doctorcategory);
    }

    /**
     * Show the form for editing the specified doctorcategory.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $doctorcategory = $this->doctorcategoryRepository->findWithoutFail($id);

        if (empty($doctorcategory)) {
            Flash::error('Doctorcategory not found');

            return redirect(route('doctorcategories.index'));
        }

        return view('doctorcategories.edit')->with('doctorcategory', $doctorcategory);
    }

    /**
     * Update the specified doctorcategory in storage.
     *
     * @param  int              $id
     * @param UpdatedoctorcategoryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatedoctorcategoryRequest $request)
    {
        $doctorcategory = $this->doctorcategoryRepository->findWithoutFail($id);

        if (empty($doctorcategory)) {
            Flash::error('Doctorcategory not found');

            return redirect(route('doctorcategories.index'));
        }

        $doctorcategory = $this->doctorcategoryRepository->update($request->all(), $id);

        Flash::success('Doctorcategory updated successfully.');

        return redirect(route('doctorcategories.index'));
    }

    /**
     * Remove the specified doctorcategory from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $doctorcategory = $this->doctorcategoryRepository->findWithoutFail($id);

        if (empty($doctorcategory)) {
            Flash::error('Doctorcategory not found');

            return redirect(route('doctorcategories.index'));
        }

        $this->doctorcategoryRepository->delete($id);

        Flash::success('Doctorcategory deleted successfully.');

        return redirect(route('doctorcategories.index'));
    }
}
