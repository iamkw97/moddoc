@extends('layouts.app-cl')

@section('content')
    {{-- breadcrumb starts --}}
    <div class="pagetitle fixed row">
        <nav class="col">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Home</a></li>
                <li class="breadcrumb-item">Doctor</li>
                <li class="breadcrumb-item active">Register</li>
            </ol>
        </nav>
        <h1 class=" col d-flex justify-content-end">Register</h1>
    </div>
    {{-- breadcrumb ends --}}
    <section class="section">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Multi Columns Form</h5>

                <!-- Multi Columns Form -->
                <form class="row g-3" method="POST" action="{{ route('store.register-doctor') }}"
                    enctype="multipart/form-data">
                    @csrf
                    {{-- full name starts --}}
                    <div class="form-group col-md-12">
                        <label for="doc_name"><b>
                                <h6>1. Name in Full <span style="color:#ff0000">*</span></h6>
                            </b></label>
                        <input type="text"
                            class="form-control border-info border-2  @error('doc_name') is-invalid @enderror"
                            id="doc_name" name="doc_name" placeholder="Enter full name" value="{{ old('doc_name') }}"
                            autocomplete="doc_name" autofocus>
                        @error('doc_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    {{-- full name ends --}}
                    {{-- nic starts --}}
                    <div class="form-group col-md-6">
                        <label for="doc_nic"><b>
                                <h6>2. NIC <span style="color:#ff0000">*</span></h6>
                            </b></label>
                        <input type="text"
                            class="form-control border-info border-2  @error('doc_nic') is-invalid @enderror" id="doc_nic"
                            name="doc_nic" placeholder="Enter NIC" value="{{ old('doc_nic') }}" autocomplete="doc_nic"
                            autofocus>
                        @error('doc_nic')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    {{-- nic  ends --}}
                    {{-- doc_email starts --}}
                    <div class="form-group col-md-6">
                        <label for="doc_email"><b>
                                <h6>3. Email <span style="color:#ff0000">*</span></h6>
                            </b></label>
                        <input type="email"
                            class="form-control border-info border-2  @error('doc_email') is-invalid @enderror"
                            id="doc_email" name="doc_email" placeholder="Enter email" value="{{ old('doc_email') }}"
                            autocomplete="doc_email" autofocus>
                        @error('doc_email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    {{-- doc_email  ends --}}
                    {{-- doc_phone starts --}}
                    <div class="form-group col-md-6">
                        <label for="doc_phone"><b>
                                <h6>4. Phone <span style="color:#ff0000">*</span></h6>
                            </b></label>
                        <input type="number"
                            class="form-control border-info border-2  @error('doc_phone') is-invalid @enderror"
                            id="doc_phone" name="doc_phone" placeholder="Enter phone" value="{{ old('doc_phone') }}"
                            autocomplete="doc_phone" autofocus>
                        @error('doc_phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    {{-- doc_phone  ends --}}
                    {{-- doc_birthday starts --}}
                    <div class="form-group col-md-3">
                        <label for="doc_birthday"><b>
                                <h6>5. Birthday <span style="color:#ff0000">*</span></h6>
                            </b></label>
                        <input type="date"
                            class="form-control border-info border-2  @error('doc_birthday') is-invalid @enderror"
                            id="doc_birthday" name="doc_birthday" placeholder="Enter phone"
                            value="{{ old('doc_birthday') }}" autocomplete="doc_birthday" autofocus>
                        @error('doc_birthday')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    {{-- doc_birthday  ends --}}
                    {{-- doc_sex starts --}}
                    <div class="form-group col-md-3">
                        <fieldset class="form-group">
                            <label for="doc_sex"><b>
                                    <h6>6. Sex <span style="color:#ff0000">*</span></h6>
                                </b></label>
                            <select class="form-select border-info border-2 @error('doc_sex') is-invalid @enderror"
                                name="doc_sex" value="{{ $doctor->doc_sex ?? '' }}" id="doc_sex"
                                value="{{ old('doc_sex') }}" autocomplete="doc_sex" autofocus>
                                <option selected disabled>--select--</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                            @error('doc_sex')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </fieldset>
                    </div>
                    {{-- doc_sex  ends --}}
                    {{-- doc_field starts --}}
                    <div class="form-group col-md-4">
                        <fieldset class="form-group">
                            <label for="doc_field"><b>
                                    <h6>7. Area <span style="color:#ff0000">*</span></h6>
                                </b></label>
                            <select class="form-select border-info border-2 @error('doc_field') is-invalid @enderror"
                                name="doc_field" value="{{ $doctor->doc_field ?? '' }}" id="doc_field"
                                value="{{ old('doc_field') }}" autocomplete="doc_field" autofocus>
                                <option selected disabled>--select--</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                            @error('doc_field')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </fieldset>
                    </div>
                    {{-- doc_field  ends --}}
                    {{-- doc_status starts --}}
                    <div class="form-group col-md-4">
                        <fieldset class="form-group">
                            <label for="doc_status"><b>
                                    <h6>8. Role <span style="color:#ff0000">*</span></h6>
                                </b></label>
                            <select class="form-select border-info border-2 @error('doc_status') is-invalid @enderror"
                                name="doc_status" value="{{ $doctor->doc_status ?? '' }}" id="doc_status"
                                value="{{ old('doc_status') }}" autocomplete="doc_status" autofocus>
                                <option selected disabled>--select--</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                            @error('doc_status')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </fieldset>
                    </div>
                    {{-- doc_status  ends --}}
                    {{-- doc_working_branch starts --}}
                    <div class="form-group col-md-4">
                        <fieldset class="form-group">
                            <label for="doc_working_branch"><b>
                                    <h6>9. Branch <span style="color:#ff0000">*</span></h6>
                                </b></label>
                            <select
                                class="form-select border-info border-2 @error('doc_working_branch') is-invalid @enderror"
                                name="doc_working_branch" value="{{ $doctor->doc_working_branch ?? '' }}"
                                id="doc_working_branch
                                value="{{ old('doc_working_branch') }}"
                                autocomplete="doc_working_branch" autofocus>
                                <option selected disabled>--select--</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                            @error('doc_stdoc_working_branchatus')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </fieldset>
                    </div>
                    {{-- doc_working_branch  ends --}}
                    {{-- doc_office_address starts --}}
                    <div class="form-group col-md-12">
                        <label for="doc_office_address"><b>
                                <h6>10. Business Address <span style="color:#ff0000">*</span></h6>
                            </b></label>
                        <input type="text"
                            class="form-control border-info border-2  @error('doc_office_address') is-invalid @enderror"
                            id="doc_office_address" name="doc_office_address" placeholder="Enter business address"
                            value="{{ old('doc_office_address') }}" autocomplete="doc_office_address" autofocus>
                        @error('doc_office_address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    {{-- doc_office_address  ends --}}
                    {{-- doc_personal_address starts --}}
                    <div class="form-group col-md-12">
                        <label for="doc_personal_address"><b>
                                <h6>10. Home Address <span style="color:#ff0000">*</span></h6>
                            </b></label>
                        <input type="text"
                            class="form-control border-info border-2  @error('doc_personal_address') is-invalid @enderror"
                            id="doc_personal_address" name="doc_personal_address" placeholder="Enter home address"
                            value="{{ old('doc_personal_address') }}" autocomplete="doc_personal_address" autofocus>
                        @error('doc_personal_address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    {{-- doc_personal_address  ends --}}
                    {{-- doc_about starts --}}
                    <div class="form-group col-md-12">
                        <label><b>
                                <h6>12. About <span style="color:#ff0000">*</span></h6>
                            </b></label>
                        <textarea class="form-control border-info border-2 @error('doc_working_branch') is-invalid @enderror"
                            name="doc_about" placeholder="Enter about the doctor" rows="2" value="{{ old('doc_about') }}"
                            autocomplete="doc_about" autofocus></textarea>
                        @error('doc_about')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    {{-- doc_about  ends --}}






                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </form><!-- End Multi Columns Form -->

            </div>
        </div>
    </section>
@endsection
