@extends('layouts.app-cl')

@section('content')
    <div class="pagetitle fixed row">
        <nav class="col">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Home</a></li>
                <li class="breadcrumb-item">Doctor</li>
                <li class="breadcrumb-item active">List</li>
            </ol>
        </nav>
        <h1 class=" col d-flex justify-content-end">Doctors</h1>
    </div>
    <!-- End breadcrumb -->
    <section class="section">
        <div class="row align-items-top">

            {{-- ------------------------------------------------------ --}}

            <div class="card">
                <div class="card-body">


                    <table class="table table-hover datatable">
                        <thead class="">
                            <tr>
                                <th scope="col">#</th>
                                <th>Doctor ID</th>
                                <th>Name</th>
                                <th>Area</th>
                                <th>Status</th>
                                <th>District</th>
                                <th scope="row">Email/Phone</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($doctors as $item)
                                <tr>
                                    <td>

                                        <p scope="row">{{ $item->doc_id }}</p>

                                    </td>
                                    <td>

                                        <h6 class="">{{ $item->doc_description }}</h6>

                                    </td>
                                    <td>
                                        <p class="mb-1"> {!! Str::words($item->doc_name, 2) !!}</p>
                                        <p class=" mb-0">{{ $item->doc_nic }} </p>
                                    </td>
                                    <td>
                                        <p class="">{{ $item->doc_field }}</p>
                                    </td>
                                    <td>
                                        <span class="">{{ $item->doc_status }}</span>
                                    </td>
                                    <td>
                                        <p class=" mb-1">{{ $item->doc_working_branch }}</p>
                                    </td>
                                    <td>
                                        <p class=" mb-1">{{ $item->doc_email }}</p>
                                        <p class="">{{ $item->doc_phone }} </p>
                                    </td>
                                    <td>
                                        {{-- {{ route('start.hirer-show-approved', $item->loan_id) }} --}}
                                        <a href="" class="btn badge bg-info" data-mdb-ripple-color="dark">
                                            View
                                        </a>

                                    </td>
                            @endforeach
                            </tr>
                        </tbody>
                    </table>


                </div>
            </div>
            {{-- ----------------------------------------------- --}}
        </div>
    </section>
@endsection
