<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEmployee_salaryRequest;
use App\Http\Requests\UpdateEmployee_salaryRequest;
use App\Repositories\Employee_salaryRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Employee_salaryController extends AppBaseController
{
    /** @var  Employee_salaryRepository */
    private $employeeSalaryRepository;

    public function __construct(Employee_salaryRepository $employeeSalaryRepo)
    {
        $this->employeeSalaryRepository = $employeeSalaryRepo;
    }

    /**
     * Display a listing of the Employee_salary.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $employeeSalaries = $this->employeeSalaryRepository->all();

        return view('employee_salaries.index')
            ->with('employeeSalaries', $employeeSalaries);
    }

    /**
     * Show the form for creating a new Employee_salary.
     *
     * @return Response
     */
    public function create()
    {
        return view('employee_salaries.create');
    }

    /**
     * Store a newly created Employee_salary in storage.
     *
     * @param CreateEmployee_salaryRequest $request
     *
     * @return Response
     */
    public function store(CreateEmployee_salaryRequest $request)
    {
        $input = $request->all();

        $employeeSalary = $this->employeeSalaryRepository->create($input);

        Flash::success('Employee Salary saved successfully.');

        return redirect(route('employeeSalaries.index'));
    }

    /**
     * Display the specified Employee_salary.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $employeeSalary = $this->employeeSalaryRepository->find($id);

        if (empty($employeeSalary)) {
            Flash::error('Employee Salary not found');

            return redirect(route('employeeSalaries.index'));
        }

        return view('employee_salaries.show')->with('employeeSalary', $employeeSalary);
    }

    /**
     * Show the form for editing the specified Employee_salary.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $employeeSalary = $this->employeeSalaryRepository->find($id);

        if (empty($employeeSalary)) {
            Flash::error('Employee Salary not found');

            return redirect(route('employeeSalaries.index'));
        }

        return view('employee_salaries.edit')->with('employeeSalary', $employeeSalary);
    }

    /**
     * Update the specified Employee_salary in storage.
     *
     * @param int $id
     * @param UpdateEmployee_salaryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEmployee_salaryRequest $request)
    {
        $employeeSalary = $this->employeeSalaryRepository->find($id);

        if (empty($employeeSalary)) {
            Flash::error('Employee Salary not found');

            return redirect(route('employeeSalaries.index'));
        }

        $employeeSalary = $this->employeeSalaryRepository->update($request->all(), $id);

        Flash::success('Employee Salary updated successfully.');

        return redirect(route('employeeSalaries.index'));
    }

    /**
     * Remove the specified Employee_salary from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $employeeSalary = $this->employeeSalaryRepository->find($id);

        if (empty($employeeSalary)) {
            Flash::error('Employee Salary not found');

            return redirect(route('employeeSalaries.index'));
        }

        $this->employeeSalaryRepository->delete($id);

        Flash::success('Employee Salary deleted successfully.');

        return redirect(route('employeeSalaries.index'));
    }
}
