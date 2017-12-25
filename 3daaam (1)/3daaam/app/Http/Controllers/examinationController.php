<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateexaminationRequest;
use App\Http\Requests\UpdateexaminationRequest;
use App\Repositories\examinationRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\examination;

class examinationController extends AppBaseController
{
    /** @var  examinationRepository */
    private $examinationRepository;

    public function __construct(examinationRepository $examinationRepo)
    {
        $this->examinationRepository = $examinationRepo;
    }

    /**
     * Display a listing of the examination.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->examinationRepository->pushCriteria(new RequestCriteria($request));
		        $examinations = $this->examinationRepository->all();
		/*
		$examinations = Examination::where('start_date', '2017-12-20')->get();
		*/


        return view('examinations.index')
            ->with('examinations', $examinations);
    }
    /**
     * Show the form for creating a new examination.
     *
     * @return Response
     */
    public function create()
    {
        return view('examinations.create');
    }

    /**
     * Store a newly created examination in storage.
     *
     * @param CreateexaminationRequest $request
     *
     * @return Response
     */
    public function store(CreateexaminationRequest $request)
    {
        $input = $request->all();

        $examination = $this->examinationRepository->create($input);

        Flash::success('Examination saved successfully.');

        return redirect(route('examinations.index'));
    }

    /**
     * Display the specified examination.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $examination = $this->examinationRepository->findWithoutFail($id);

        if (empty($examination)) {
            Flash::error('Examination not found');

            return redirect(route('examinations.index'));
        }

        return view('examinations.show')->with('examination', $examination);
    }

    /**
     * Show the form for editing the specified examination.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $examination = $this->examinationRepository->findWithoutFail($id);

        if (empty($examination)) {
            Flash::error('Examination not found');

            return redirect(route('examinations.index'));
        }

        return view('examinations.edit')->with('examination', $examination);
    }

    /**
     * Update the specified examination in storage.
     *
     * @param  int              $id
     * @param UpdateexaminationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateexaminationRequest $request)
    {
        $examination = $this->examinationRepository->findWithoutFail($id);

        if (empty($examination)) {
            Flash::error('Examination not found');

            return redirect(route('examinations.index'));
        }

        $examination = $this->examinationRepository->update($request->all(), $id);

        Flash::success('Examination updated successfully.');

        return redirect(route('examinations.index'));
    }

    /**
     * Remove the specified examination from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $examination = $this->examinationRepository->findWithoutFail($id);

        if (empty($examination)) {
            Flash::error('Examination not found');

            return redirect(route('examinations.index'));
        }

        $this->examinationRepository->delete($id);

        Flash::success('Examination deleted successfully.');

        return redirect(route('examinations.index'));
    }
}
