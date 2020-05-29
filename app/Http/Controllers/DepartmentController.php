<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;

class DepartmentController extends Controller
{
    /**
     * DepartmentController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $department = Department::orderBy('name')->paginate(10);
        return view("department.index", compact('department'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request,[ 'name' => 'required|max:30' ]);
        $department = new Department();
        $department->name = request('name');
        $department->save();

        return redirect("/department")->with("success", "Department Created Successfully");
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $department = Department::findOrFail($id);
        return view("department.show", compact('department'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $department = Department::findOrFail($id);
        return view("department.edit", compact('department'));
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id)
    {
        $department = Department::findOrFail($id);
        $department->name = request('name');
        $department->save(); //this will UPDATE the record with id=1

        return redirect("/department")->with("success", "Department Updated Successfully");
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $department = Department::findOrFail($id);
        $department->delete();

        return redirect("/department")->with("success", "Department Deleted Successfully");
    }
}
