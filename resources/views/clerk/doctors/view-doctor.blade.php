@extends('layouts.app-cl')

@section('content')
    @foreach ($data as $item)
        <div class="pagetitle fixed row">
            <nav class="col">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="">Home</a></li>
                    <li class="breadcrumb-item">Doctor</li>
                    <li class="breadcrumb-item active">{{ $item->doc_description }}</li>
                </ol>
            </nav>
            <h1 class=" col d-flex justify-content-end">Profile</h1>
        </div>
        <!-- End breadcrumb -->
        <section class="section profile">
            <div class="row">
                <div class="col-xl-4">

                    <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                            <img src="{{ asset('welcome/img/testimonials/testimonials-1.jpg') }}" alt="Profile"
                                class="rounded-circle">
                            <h2>{{ $item->doc_name }} </h2>
                            <h3>{{ $item->doc_email }}</h3>
                            {{-- <div class="social-links mt-2">
                                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                            </div> --}}
                        </div>
                    </div>

                </div>

                <div class="col-xl-8">

                    <div class="card">
                        <div class="card-body pt-3">
                            <!-- Bordered Tabs -->
                            <ul class="nav nav-tabs nav-tabs-bordered">

                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab"
                                        data-bs-target="#profile-overview">Overview</button>
                                </li>

                                {{-- <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit
                                        Profile</button>
                                </li> --}}

                                {{-- <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab"
                                        data-bs-target="#profile-settings">Settings</button>
                                </li> --}}

                                {{-- <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab"
                                        data-bs-target="#profile-change-password">Change Password</button>
                                </li> --}}

                            </ul>
                            <div class="tab-content pt-2">

                                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                    <h5 class="card-title">About</h5>
                                    <p class="small fst-italic">{{ $item->doc_about }}</p>

                                    <h5 class="card-title">Profile Details</h5>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label ">Full Name</div>
                                        <div class="col-lg-9 col-md-8">{{ $item->doc_name }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">District</div>
                                        <div class="col-lg-9 col-md-8">{{ $item->doc_working_branch }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Status</div>
                                        <div class="col-lg-9 col-md-8">{{ $item->doc_status }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Field</div>
                                        <div class="col-lg-9 col-md-8">{{ $item->doc_field }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">NIC</div>
                                        <div class="col-lg-9 col-md-8">{{ $item->doc_nic }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Phone</div>
                                        <div class="col-lg-9 col-md-8">{{ $item->doc_phone }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Email</div>
                                        <div class="col-lg-9 col-md-8">{{ $item->doc_email }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Sex</div>
                                        <div class="col-lg-9 col-md-8">{{ $item->doc_sex }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Birthday</div>
                                        <div class="col-lg-9 col-md-8">{{ $item->doc_birthday }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Home Address</div>
                                        <div class="col-lg-9 col-md-8">{{ $item->doc_personal_address }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Ofiice Address</div>
                                        <div class="col-lg-9 col-md-8">{{ $item->doc_office_address }}</div>
                                    </div>


                                </div>

                                {{-- <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                                    <!-- Profile Edit Form -->
                                    <form method="POST" action="{{ route('update.profile-doctor', $item->doc_id) }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row mb-3">
                                            <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile
                                                Image</label>
                                            <div class="col-md-8 col-lg-9">
                                                <img src="{{ asset('welcome/img/testimonials/testimonials-1.jpg') }}"
                                                    alt="Profile">
                                                <div class="pt-2">
                                                    <a href="#" class="btn btn-primary btn-sm"
                                                        title="Upload new profile image"><i class="bi bi-upload"></i></a>
                                                    <a href="#" class="btn btn-danger btn-sm"
                                                        title="Remove my profile image"><i class="bi bi-trash"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="doc_name" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="doc_name" type="text" class="form-control" id="doc_name"
                                                    value="{{ $item->doc_name }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="doc_about" class="col-md-4 col-lg-3 col-form-label">About</label>
                                            <div class="col-md-8 col-lg-9">
                                                <textarea name="doc_about" class="form-control" id="doc_about" style="height: 100px">{{ $item->doc_about }}</textarea>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="doc_working_branch"
                                                class="col-md-4 col-lg-3 col-form-label">District</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="doc_working_branch" type="text" class="form-control"
                                                    id="doc_working_branch" value="{{ $item->doc_working_branch }}"
                                                    readonly>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="doc_status"
                                                class="col-md-4 col-lg-3 col-form-label">Status</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="doc_status" type="text" class="form-control"
                                                    id="doc_status" value="{{ $item->doc_status }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="doc_field" class="col-md-4 col-lg-3 col-form-label">Field</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="doc_field" type="text" class="form-control"
                                                    id="Country" value="{{ $item->doc_field }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="doc_nic" class="col-md-4 col-lg-3 col-form-label">NIC</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="doc_nic" type="text" class="form-control" id="doc_nic"
                                                    value="{{ $item->doc_nic }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="doc_phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="doc_phone" type="text" class="form-control"
                                                    id="doc_phone" value="{{ $item->doc_phone }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="doc_email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="doc_email" type="email" class="form-control"
                                                    id="doc_email" value="{{ $item->doc_email }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="doc_sex" class="col-md-4 col-lg-3 col-form-label">Sex</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="doc_sex" type="text" class="form-control" id="doc_sex"
                                                    value="{{ $item->doc_sex }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="doc_birthday"
                                                class="col-md-4 col-lg-3 col-form-label">Birthday</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="doc_birthday" type="date" class="form-control"
                                                    id="doc_birthday" value="{{ $item->doc_birthday }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="doc_personal_address"
                                                class="col-md-4 col-lg-3 col-form-label">Home Address</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="doc_personal_address" type="text" class="form-control"
                                                    id="doc_personal_address" value="{{ $item->doc_personal_address }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="doc_office_address"
                                                class="col-md-4 col-lg-3 col-form-label">Ofiice Address</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="doc_office_address" type="text" class="form-control"
                                                    id="doc_office_address" value="{{ $item->doc_office_address }}">
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Save Changes</button>
                                        </div>
                                    </form><!-- End Profile Edit Form -->

                                </div> --}}

                                {{-- <div class="tab-pane fade pt-3" id="profile-settings"> --}}

                                <!-- Settings Form -->
                                {{-- <form>

                                        <div class="row mb-3">
                                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email
                                                Notifications</label>
                                            <div class="col-md-8 col-lg-9">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="changesMade"
                                                        checked>
                                                    <label class="form-check-label" for="changesMade">
                                                        Changes made to your account
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="newProducts"
                                                        checked>
                                                    <label class="form-check-label" for="newProducts">
                                                        Information on new products and services
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="proOffers">
                                                    <label class="form-check-label" for="proOffers">
                                                        Marketing and promo offers
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="securityNotify"
                                                        checked disabled>
                                                    <label class="form-check-label" for="securityNotify">
                                                        Security alerts
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Save Changes</button>
                                        </div>
                                    </form><!-- End settings Form --> --}}

                                {{-- </div> --}}

                                {{-- <div class="tab-pane fade pt-3" id="profile-change-password">
                                    <!-- Change Password Form -->
                                    <form>

                                        <div class="row mb-3">
                                            <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current
                                                Password</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="password" type="password" class="form-control"
                                                    id="currentPassword">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New
                                                Password</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="newpassword" type="password" class="form-control"
                                                    id="newPassword">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter
                                                New
                                                Password</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="renewpassword" type="password" class="form-control"
                                                    id="renewPassword">
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Change Password</button>
                                        </div>
                                    </form><!-- End Change Password Form -->

                                </div> --}}

                            </div><!-- End Bordered Tabs -->

                        </div>
                    </div>

                </div>
            </div>
        </section>
    @endforeach
@endsection
