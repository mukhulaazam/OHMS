@extends('back-end.layouts.master')
@section('brad-title','In Patient list')
@section('content')
    <div class="breadcrumb-area d-flex justify-content-between">
        <span class="h4 text-bold ">Doctor List</span>
        <button href="#" class="btn btn-primary btn-sm float-right"  data-toggle="modal" data-target="#staticBackdrop">Add Patient</button>
    </div>

    <table id="dataTableView" class="table table-striped table-bordered" style="width:100%">
        <thead>
        <tr>
            <th>Sl No.</th>
            <th>Name</th>
            <th>E-mail</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Degree</th>
            <th>Department</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
{{--        @forelse($doc as $d)--}}
{{--            <tr>--}}
{{--                <td>{{$loop->index+1}}</td>--}}
{{--                <td>{{$d->name}}</td>--}}
{{--                <td>{{$d->email}}</td>--}}
{{--                <td>{{$d->phone}}</td>--}}
{{--                <td>{{$d->address}}</td>--}}
{{--                <td>{{$d->degree}}</td>--}}
{{--                <td>{{$d->department->name}}</td>--}}
{{--                <td>--}}
{{--                    <a href="#" class="btn btn-warning btn-sm"><span class="bx bxs-edit-alt"></span></a>--}}
{{--                    <a href="#" class="btn btn-danger btn-sm"><span class="bx bxs-trash-alt"></span></a>--}}
{{--                </td>--}}
{{--                @empty--}}
{{--                    <td>Sorry! No Department found</td>--}}
{{--            </tr>--}}
{{--        @endforelse--}}
        </tbody>

    </table>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">In Patient Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="col-md-12">
                                <div class="form-group col-md-12">
                                    <label for="in_p_name"><b>Patient Name</b></label>
                                    <div>
                                        <input type="text" class="form-control" id="in_p_name" name="in_p_name" placeholder="Patient Name"/>
                                        <span id="in_p_name_error"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group col-md-8">
                                    <label for="in_p_name"><b>Guardian Name</b></label>
                                    <div>
                                        <input type="text" class="form-control" id="in_p_guardian_name" name="in_p_guardian_name" placeholder="Patient Name"/>
                                        <span id="in_p_guardian_name_error"></span>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="in_p_phone"><b>Guardian Phone</b></label>
                                    <div>
                                        <input type="text" class="form-control" id="in_p_guardian_phone" name="in_p_guardian_phone" type="text" placeholder="Phone"/>
                                        <span id="in_p_guardian_phone_error"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group col-md-3">
                                    <label><b>Gender</b></label>
                                    <div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" class="radio" name="in_p_sex" value="Male"> Male
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" class="radio" name="in_p_sex" value="Female"> Female
                                            </label>
                                        </div>
                                        <span id="in_p_sex_error"></span>
                                    </div>
                                </div>

                                <div class="form-group col-md-2">
                                    <label for="in_p_age"><b>Age</b></label>
                                    <div>
                                        <input type="text" class="form-control" id="in_p_age" name="in_p_age" placeholder="Age"/>
                                        <span id="in_p_age_error"></span>
                                    </div>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="in_p_phone"><b>Phone</b></label>
                                    <div>
                                        <input type="text" class="form-control" id="in_p_phone" name="in_p_phone" type="text" placeholder="Phone"/>
                                        <span id="in_p_phone_error"></span>
                                    </div>
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="in_p_blood"><b>Blood Group</b></label>
                                    <div>
                                        <select class="form-control" id="in_p_blood" name="in_p_blood">
                                            <option selected hidden>Choose</option>
                                            <option value="A+"> A+ </option>
                                            <option value="A-"> A- </option>
                                            <option value="B+"> B+ </option>
                                            <option value="B-"> B- </option>
                                            <option value="AB+"> AB+ </option>
                                            <option value="AB-"> AB- </option>
                                            <option value="O+"> O+ </option>
                                            <option value="O-"> O- </option>
                                        </select>
                                        <span id="in_p_blood_error"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group col-md-3">
                                    <label for="in_p_height"><b>Height</b></label>
                                    <div>
                                        <input type="text" class="form-control" id="in_p_height" name="in_p_height" placeholder="Height"/>
                                        <span id="in_p_height_error"></span>
                                    </div>
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="in_p_weight"><b>Weight</b></label>
                                    <div>
                                        <input type="text" class="form-control" id="in_p_weight" name="in_p_weight" placeholder="Weight"/>
                                        <span id="in_p_weight_error"></span>
                                    </div>
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="in_p_bp"><b>BP</b></label>
                                    <div>
                                        <input type="text" class="form-control" id="in_p_bp" name="in_p_bp" placeholder="BP"/>
                                        <span id="in_p_bp_error"></span>
                                    </div>
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="in_p_symptoms"><b>Symptoms</b></label>
                                    <div>
                                        <input type="text" class="form-control" id="in_p_symptoms" name="in_p_symptoms" placeholder="Symptoms"/>
                                        <span id="in_p_symptoms_error"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group col-md-12">
                                    <label for="in_p_address"><b>Address</b></label>
                                    <div>
                                        <textarea rows="1" class="form-control" id="in_p_address" placeholder="Address" name="in_p_address"></textarea>
                                        <span id="in_p_address_error"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="in_p_note"><b>Note</b></label>
                                <div>
                                    <textarea rows="2" class="form-control" id="in_p_note" name="in_p_note" placeholder="Note"></textarea>
                                    <span id="in_p_note_error"></span>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-4" style="background: #f4f4f4;">
                            <div class="form-group col-md-12">
                                <label for="in_p_admission_date"><b>Admission Date</b></label>
                                <div>
                                    <input class="form-control" id="in_p_admission_date" placeholder="Admission Date" name="in_p_admission_date"/>
                                    <span id="in_p_admission_date_error"></span>
                                </div>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="in_p_case"><b>Case</b></label>
                                <div>
                                    <input type="text" class="form-control" id="in_p_case" name="in_p_case" placeholder="Patient Case"/>
                                    <span id="in_p_case_error"></span>
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="in_p_casualty"><b>Casualty</b></label>
                                <div>
                                    <select class="form-control" id="in_p_casualty" name="in_p_casualty">
                                        <option value="no">No</option>
                                        <option value="yes">Yes</option>
                                    </select>
                                    <span id="in_p_casualty_error"></span>
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="in_p_old_patient"><b>Old Patient</b></label>
                                <div>
                                    <select class="form-control" id="in_p_old_patient" name="in_p_old_patient">
                                        <option value="no">No</option>
                                        <option value="yes">Yes</option>
                                    </select>
                                    <span id="in_p_old_patient_error"></span>
                                </div>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="in_p_reference"><b>Reference</b></label>
                                <div>
                                    <input class="form-control" id="in_p_reference" name="in_p_reference"/>
                                    <span id="in_p_reference_error"></span>
                                </div>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="in_p_doc_id"><b>Doctor</b></label>
                                <div>
                                    <select class="form-control" id="in_p_doc_id" name="in_p_doc_id">
                                        <option selected hidden>-----Choose Doctor-----</option>
{{--                                        @foreach($doctors as $value)--}}
{{--                                            <option value="{{$value->doc_id}}">{{$value->doc_name}}</option>--}}
{{--                                        @endforeach--}}
                                    </select>
                                    <span id="in_p_doc_id_error"></span>
                                </div>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="in_p_bed_category_id"><b>Bed Category</b></label>
                                <div>
                                    <select class="form-control" id="in_p_bed_category_id" name="in_p_bed_category_id">
                                        <option selected hidden>Category</option>
{{--                                        @foreach($bed_categorys as $bed_category)--}}
{{--                                            <option value="{{$bed_category->bed_category_id}}">{{$bed_category->bed_category_name}}</option>--}}
{{--                                        @endforeach--}}
                                    </select>
                                    <span id="in_p_bed_category_id_error"></span>
                                </div>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="in_p_bed_id"><b>Bed</b></label>
                                <div>
                                    <select class="form-control" id="in_p_bed_id" name="in_p_bed_id">
                                        <option selected hidden>Bed</option>
                                    </select>
                                    <span id="in_p_bed_id_error"></span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                </div>
            </div>
        </div>
    </div>
@endsection

