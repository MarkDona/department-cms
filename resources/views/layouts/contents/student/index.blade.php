<section class="app-user-view-account">
    <div class="row">
        <!-- User Sidebar -->
        <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
            <!-- User Card -->
            <div class="card">
                <div class="card-body">
                    <div class="user-avatar-section">
                        <div class="d-flex align-items-center flex-column">
                            <img class="img-fluid rounded mt-3 mb-2" src="{{asset('vandek/logos/user.png')}}"
                                 height="110" width="110" alt="User avatar" />
                            <div class="user-info text-center">
                                <h6 class="badge bg-light-secondary">{{$my_data->index_number ?? ''}}</h6>
                                <h4>{{$my_data->firstname ?? ''}} {{$my_data->middle_name ?? ''}} {{$my_data->lastname ?? ''}}</h4>
                                <h6 class="badge bg-light-secondary">{{$my_data->program_type ?? ''}} {{$my_data->program ?? ''}}</h6>
                                <h6 class="badge bg-light-secondary">Level {{$my_data->level ?? ''}}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-around my-2 pt-75">

                    </div>
                    <h4 class="fw-bolder border-bottom pb-50 mb-1">Details</h4>
                    <div class="info-container">
                        <ul class="list-unstyled">
                            <li class="mb-75">
                                <span class="fw-bolder me-25">Email:</span>
                                <span>{{$my_data->email ?? ''}}</span>
                            </li>
                            <li class="mb-75">
                                <span class="fw-bolder me-25">Contact:</span>
                                <span>{{$my_data->contact ?? ''}}</span>
                            </li>
                            <li class="mb-75">
                                <span class="fw-bolder me-25">Gender:</span>
                                <span>{{$my_data->gender ?? ''}}</span>
                            </li>
                            <li class="mb-75">
                                <span class="fw-bolder me-25">Date of Birth:</span>
                                <span>{{$my_data->date_of_birth ?? ''}}</span>
                            </li>
                            <li class="mb-75">
                                <span class="fw-bolder me-25">Place of residence:</span>
                                <span>{{$my_data->place_of_residence ?? ''}}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--/ User Sidebar -->

        <!-- User Content -->
        <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">

            <!-- Activity Timeline -->
            <div class="card">
                <h4 class="card-header">Bio Data</h4>
                <div class="card-body">
                    <form id="update_profile" class="needs-validation" action="{{route('update_profile')}}" method="POST" novalidate>
                        @csrf
                        <div class="row">
                            <div class="mb-1 col-md-6">
                                <label for="passport" class="form-label">Profile pic</label>
                                <input class="form-control" type="file" id="passport" name="passport" />
                                <div class="invalid-feedback">Please upload passport picture</div>
                            </div>
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="title">Title <i class="text-danger">*</i></label>
                                <select class="form-select" id="title" name="title" required>
                                    <option value="{{$my_data->title ?? ''}}">{{$my_data->title ?? 'Select Title'}}</option>
                                    <option value="Mr.">Mr.</option>
                                    <option value="Miss">Miss</option>
                                    <option value="Mrs.">Mrs.</option>
                                </select>
{{--                                <div class="valid-feedback">Looks good!</div>--}}
                                <div class="invalid-feedback">Please select your title</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-1 col-md-4">
                                <label class="form-label" for="firstname">First Name <i class="text-danger">*</i></label>
                                <input type="text" name="firstname" value="{{$my_data->firstname ?? ''}}" id="firstname" class="form-control"
                                       placeholder="First Name" aria-label="First Name" aria-describedby="firstname" required readonly />
{{--                                <div class="valid-feedback">Looks good!</div>--}}
                                <div class="invalid-feedback">Please enter your firstname.</div>
                            </div>
                            <div class="mb-1 col-md-4">
                                <label class="form-label" for="middle_name">Middle Name</label>
                                <input type="text" id="middle_name" value="{{$my_data->middle_name ?? ''}}" name="middle_name"
                                       class="form-control" placeholder="Middle Name" aria-label="Middle Name" aria-describedby="middle_name" readonly/>
{{--                                <div class="valid-feedback">Looks good!</div>--}}
                                <div class="invalid-feedback">Please enter your middle name.</div>
                            </div>
                            <div class="mb-1 col-md-4">
                                <label class="form-label" for="lastname">Last Name <i class="text-danger">*</i></label>
                                <input type="text" id="lastname" name="lastname" value="{{$my_data->lastname ?? ''}}" class="form-control"
                                       placeholder="Last Name" aria-label="Last Name" aria-describedby="lastname" required readonly/>
{{--                                <div class="valid-feedback">Looks good!</div>--}}
                                <div class="invalid-feedback">Please enter your last name.</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-1 col-md-4">
                                <label class="form-label" for="email">Email <i class="text-danger">*</i></label>
                                <input type="email" id="email" name="email" value="{{$my_data->email ?? ''}}" class="form-control" placeholder="john.doe@email.com" aria-label="john.doe@email.com" required />
{{--                                <div class="valid-feedback">Looks good!</div>--}}
                                <div class="invalid-feedback">Please enter a valid email</div>
                            </div>
                            <div class="mb-1 col-md-4">
                                <label class="form-label" for="contact">Contact <i class="text-danger">*</i></label>
                                <input type="text" id="contact" name="contact" value="{{$my_data->contact ?? ''}}" class="form-control" placeholder="0240000000" aria-label="0240000000" required />
{{--                                <div class="valid-feedback">Looks good!</div>--}}
                                <div class="invalid-feedback">Please enter a valid contact</div>
                            </div>
                            <div class="mb-1 col-md-4">
                                <label class="form-label" for="gender">Gender <i class="text-danger">*</i></label>
                                <select class="form-select" id="gender" name="gender" required>
                                    <option value="{{$my_data->gender ?? ''}}">{{$my_data->gender ?? 'Select Gender'}}</option>
                                    <option value="usa">Male</option>
                                    <option value="uk">Female</option>
                                </select>
{{--                                <div class="valid-feedback">Looks good!</div>--}}
                                <div class="invalid-feedback">Please select your gender</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-1 col-md-8">
                                <label class="form-label" for="place_of_residence">Place of Residence <i class="text-danger">*</i></label>
                                <input type="text" id="place_of_residence" name="place_of_residence" value="{{$my_data->place_of_residence ?? ''}}" class="form-control" placeholder="Place of Residence" aria-label="john.doe@email.com" required />
{{--                                <div class="valid-feedback">Looks good!</div>--}}
                                <div class="invalid-feedback">Please enter a valid location</div>
                            </div>
                        </div>
                        <div class="mb-1">

                        </div>
                        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                    </form>

                </div>
            </div>

            <!-- Project table -->
            <div class="card">
                <h4 class="card-header">Final Year Project</h4>
                <div class="table-responsive">
                    <table class="table datatable-project">
                        <thead>
                        <tr>
                            <th></th>
                            <th>Year</th>
                            <th>Project Title</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
            <!-- /Project table -->
        </div>
        <!--/ User Content -->
    </div>
</section>
