<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatequeueRequest;
use App\Http\Requests\UpdatequeueRequest;
use App\Repositories\queueRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class queueController extends AppBaseController
{
    /** @var  queueRepository */
    private $queueRepository;

    public function __construct(queueRepository $queueRepo)
    {
        $this->queueRepository = $queueRepo;
    }

    /**
     * Display a listing of the queue.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->queueRepository->pushCriteria(new RequestCriteria($request));
        $queues = $this->queueRepository->all();

        return view('queues.index')
            ->with('queues', $queues);
    }

    /**
     * Show the form for creating a new queue.
     *
     * @return Response
     */
    public function create()
    {
        return view('queues.create');
    }

    /**
     * Store a newly created queue in storage.
     *
     * @param CreatequeueRequest $request
     *
     * @return Response
     */
    public function store(CreatequeueRequest $request)
    {
        $input = $request->all();

        $queue = $this->queueRepository->create($input);

        Flash::success('Queue saved successfully.');

        return redirect(route('queues.index'));
    }

    /**
     * Display the specified queue.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $queue = $this->queueRepository->findWithoutFail($id);

        if (empty($queue)) {
            Flash::error('Queue not found');

            return redirect(route('queues.index'));
        }

        return view('queues.show')->with('queue', $queue);
    }

    /**
     * Show the form for editing the specified queue.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $queue = $this->queueRepository->findWithoutFail($id);

        if (empty($queue)) {
            Flash::error('Queue not found');

            return redirect(route('queues.index'));
        }

        return view('queues.edit')->with('queue', $queue);
    }

    /**
     * Update the specified queue in storage.
     *
     * @param  int              $id
     * @param UpdatequeueRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatequeueRequest $request)
    {
        $queue = $this->queueRepository->findWithoutFail($id);

        if (empty($queue)) {
            Flash::error('Queue not found');

            return redirect(route('queues.index'));
        }

        $queue = $this->queueRepository->update($request->all(), $id);

        Flash::success('Queue updated successfully.');

        return redirect(route('queues.index'));
    }

    /**
     * Remove the specified queue from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $queue = $this->queueRepository->findWithoutFail($id);

        if (empty($queue)) {
            Flash::error('Queue not found');

            return redirect(route('queues.index'));
        }

        $this->queueRepository->delete($id);

        Flash::success('Queue deleted successfully.');

        return redirect(route('queues.index'));
    }
}
