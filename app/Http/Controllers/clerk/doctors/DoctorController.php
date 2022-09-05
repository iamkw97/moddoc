<?php

namespace App\Http\Controllers\clerk\doctors;

use App\Http\Controllers\Controller;
use App\Models\clerk\doctors\Doctor;
use App\Models\clerk\doctors\DoctorFields;
use App\Models\clerk\doctors\DoctorStatus;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /*
|++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
| start doctor registration form
|++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
*/
    public function startRegisterDoctor()
    {
        return view('clerk.doctors.register-doctor');
    }
    /*
|++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
| store doctor registration data
|++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
*/
    public function storeRegisterDoctor(Request $request)
    {
        $validated = $request->validate([

            'doc_name' => 'required|max:255',
            'doc_nic'  => ['required', 'regex:/^([0-9]{9}[x|X|v|V]|[0-9]{12})$/m'],
            'doc_sex' => 'required',
            'doc_email' => 'required',
            'doc_phone' => 'required',
            'doc_birthday' => 'required',
            'doc_field' => 'required',
            'doc_status' => 'required',
            'doc_working_branch' => 'required',
            'doc_office_address' => 'required',
            'doc_personal_address' => 'required',
            'doc_about' => 'required',
        ]);

        if ($request->doc_sex == 'Male') {
            $doc_sex = 'Male';
        } else {
            $doc_sex = 'Female';
        }

        // if ($request->doc_field == 'Male') {
        //     $doc_field = 'Male';
        // } else {
        //     $doc_field = 'Female';
        // }

        // if ($request->doc_status == 'Male') {
        //     $doc_status = 'Male';
        // } else {
        //     $doc_status = 'Female';
        // }

        // if ($request->doc_working_branch == 'Male') {
        //     $doc_working_branch = 'Male';
        // } else {
        //     $doc_working_branch = 'Female';
        // }

        $doc_field = $request->doc_field;
        $doc_status = $request->doc_status;
        $doc_working_branch = $request->doc_working_branch;

        if ($validated);


        // Doctor------------------------------------------------------
        $doc_description = 'doc-001';

        $doctor = new Doctor();

        $doctor->doc_description = $doc_description;
        $doctor->doc_name = $request->doc_name;
        $doctor->doc_nic = $request->doc_nic;
        $doctor->doc_sex = $doc_sex;
        $doctor->doc_email = $request->doc_email;
        $doctor->doc_phone = $request->doc_phone;
        $doctor->doc_birthday = $request->doc_birthday;

        $doctor->doc_field = $doc_field;
        $doctor->doc_status = $doc_status;
        $doctor->doc_working_branch = $doc_working_branch;

        $doctor->doc_office_address = $request->doc_office_address;
        $doctor->doc_personal_address = $request->doc_personal_address;
        $doctor->doc_about = $request->doc_about;

        $doctor->save();

        // doc_field ------------------------------------------------------

        $doc_id = Doctor::orderBy('doc_id', 'desc')->first()->doc_id;

        $field_description = 'doc-001';
        $doctor_field = new DoctorFields();
        $doctor_field->field_description = $field_description;
        $doctor_field->field_name = $doc_field;
        $doctor_field->doc_id = $doc_id;
        $doctor_field->save();

        // doc_status ------------------------------------------------------
        $status_description = 'doc-001';
        $doctor_status = new DoctorStatus();
        $doctor_status->status_description = $status_description;
        $doctor_status->status_name = $doc_status;
        $doctor_status->doc_id = $doc_id;
        $doctor_status->save();

        // doc_status ------------------------------------------------------
        // $branch_description = 'doc-001';
        // $doctor_branch = new DoctorStatus();
        // $doctor_branch->branch_description = $branch_description;
        // $doctor_branch->branch_name = $doc_working_branch;
        // $doctor_branch->doc_id = $doc_id;
        // $doctor_branch->save();

        return back();
    }
    /*
|++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
| start all doctors list
|++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
*/
    public function startListDoctors()
    {
        $doctors = Doctor::all();

        return view('clerk.doctors.list-doctor', compact('doctors'));
    }
}
