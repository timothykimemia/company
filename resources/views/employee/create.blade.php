@extends("layouts.main")

@section("content")

    <div class="page-header">
        <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-home"></i>
                </span>New Employee
        </h3>
    </div>

    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('employee.create') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="name">Fullname</label>
                                <input required type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="department"><b>Department</b></label>
                                <select required id="department" class="form-control" name="department">
                                    <option selected disabled>Choose...</option>
                                    @foreach($department AS $args)
                                        <option value = "{{$args->name}}" >{{$args->name}}</option>
                                    @endforeach;
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="location"><b>Address</b></label>
                                <input required type="text" class="form-control" id="location" placeholder="1234 Main St" name="location" value="{{ old('location') }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="location"><b>Address</b></label>
                                <input required type="text" class="form-control" id="location" placeholder="1234 Main St" name="location" value="{{ old('location') }}">
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="telephone"><b>Telephone</b></label>
                                <input name="telephone" required type="number" class="form-control" id="telephone" value="{{ old('telephone') }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="salary"><b>Salary</b></label>
                                <input name="salary" required type="number" class="form-control" id="salary" value="{{ old('salary') }}">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="Job_grade"><b>Internal Job Grade</b></label>
                                <input name="Job_grade" required type="value" class="form-control" id="Job_grade" value="{{ old('Job_grade') }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="paterson_grade"><b>Paterson Grade</b></label>
                                <input name="paterson_grade" required type="value" class="form-control" id="paterson_grade" value="{{ old('paterson_grade') }}">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="min_salary"><b>Minimum Basic Salary</b></label>
                                <input name="min_salary" required type="number" class="form-control" id="min_salary" value="{{ old('min_salary') }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="max_salary"><b>Maximum Basic Salary</b></label>
                                <input name="max_salary" required type="number" class="form-control" id="max_salary" value="{{ old('max_salary') }}">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="salary_pm"><b>Actual Basic Salary (p.m) per incumbent</b></label>
                                <input name="salary_pm" required type="value" class="form-control" id="salary_pm" value="{{ old('salary_pm') }}">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="transport_allowance"><b>Car/Transport Allowance</b></label>
                                <input name="transport_allowance" required type="number" class="form-control" id="transport_allowance" value="{{ old('transport_allowance') }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="accomodation_allowance"><b>House/Accomodation Allowance</b></label>
                                <input name="accomodation_allowance" required type="number" class="form-control" id="accomodation_allowance" value="{{ old('accomodation_allowance') }}">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="entertainment_allowance"><b>Entertainment allowance</b></label>
                                <input name="entertainment_allowance" required type="number" class="form-control" id="entertainment_allowance" value="{{ old('entertainment_allowance') }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="lunch_allowance"><b>Meal/lunch allowance</b></label>
                                <input name="lunch_allowance" required type="number" class="form-control" id="lunch_allowance" value="{{ old('lunch_allowance') }}">
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="cash_allowance"><b>Other cash allowance</b></label>
                                <input name="cash_allowance" required type="value" class="form-control" id="cash_allowance" value="{{ old('cash_allowance') }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="amount"><b>Amount</b></label>
                                <input name="amount" required type="number" class="form-control" id="amount" value="{{ old('amount') }}">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="allowancepaid"><b>Actual taxable acting allowance paid by employer</b></label>
                                <input name="allowancepaid" required type="number" class="form-control" id="allowancepaid" value="{{ old('allowancepaid') }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="taxperdiem"><b>Actual taxable per diem paid by employer</b></label>
                                <input name="taxperdiem" required type="number" class="form-control" id="taxperdiem" value="{{ old('taxperdiem') }}">
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="benefits_payed"><b>Actual taxable benefit paid by employer<b></label>
                                <input name="benefits_payed" required type="number" class="form-control" id="benefits_payed" value="{{ old('benefits_payed') }}">
                            </div>
                            <div class="form-group col-md-4">

                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label><b> Choose Photo / Passport (Optional)</b></label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile" name="cover_image">
                                    <label class="custom-file-label" for="customFile">Choose</label>
                                </div>
                            </div>
                        </div> <br>
                        <button type="submit" class="btn btn-primary">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
