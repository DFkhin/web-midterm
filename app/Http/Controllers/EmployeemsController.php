<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEmployeemsRequest;
use App\Http\Requests\UpdateEmployeemsRequest;
use App\Repositories\EmployeemsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class EmployeemsController extends AppBaseController
{
    /** @var  EmployeemsRepository */
    private $employeemsRepository;

    public function __construct(EmployeemsRepository $employeemsRepo)
    {
        $this->employeemsRepository = $employeemsRepo;
    }

    /**
     * Display a listing of the Employeems.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $employeems = $this->employeemsRepository->all();

        return view('employeems.index')
            ->with('employeems', $employeems);
    }

    /**
     * Show the form for creating a new Employeems.
     *
     * @return Response
     */
    public function create()
    {
        return view('employeems.create');
    }

    /**
     * Store a newly created Employeems in storage.
     *
     * @param CreateEmployeemsRequest $request
     *
     * @return Response
     */
    public function store(CreateEmployeemsRequest $request)
    {
        $input = $request->all();

        $employeems = $this->employeemsRepository->create($input);

        Flash::success('Employeems saved successfully.');

        return redirect(route('employeems.index'));
    }

    /**
     * Display the specified Employeems.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $employeems = $this->employeemsRepository->find($id);

        if (empty($employeems)) {
            Flash::error('Employeems not found');

            return redirect(route('employeems.index'));
        }

        return view('employeems.show')->with('employeems', $employeems);
    }

    /**
     * Show the form for editing the specified Employeems.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $employeems = $this->employeemsRepository->find($id);

        if (empty($employeems)) {
            Flash::error('Employeems not found');

            return redirect(route('employeems.index'));
        }

        return view('employeems.edit')->with('employeems', $employeems);
    }

    /**
     * Update the specified Employeems in storage.
     *
     * @param int $id
     * @param UpdateEmployeemsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEmployeemsRequest $request)
    {
        $employeems = $this->employeemsRepository->find($id);

        if (empty($employeems)) {
            Flash::error('Employeems not found');

            return redirect(route('employeems.index'));
        }

        $employeems = $this->employeemsRepository->update($request->all(), $id);

        Flash::success('Employeems updated successfully.');

        return redirect(route('employeems.index'));
    }

    /**
     * Remove the specified Employeems from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $employeems = $this->employeemsRepository->find($id);

        if (empty($employeems)) {
            Flash::error('Employeems not found');

            return redirect(route('employeems.index'));
        }

        $this->employeemsRepository->delete($id);

        Flash::success('Employeems deleted successfully.');

        return redirect(route('employeems.index'));
    }
}
