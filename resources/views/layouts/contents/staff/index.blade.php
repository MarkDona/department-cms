<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section class="app-user-view-account">
                <div class="row">
                    <!-- User Sidebar -->
                    @foreach($staffs as $staff)
                        <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
                            <!-- User Card -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="user-avatar-section">
                                        <div class="d-flex align-items-center flex-column">
                                            <img class="img-fluid rounded mt-3 mb-2" src="https://erp.htu.edu.gh/hr/assets/img/staffs/{{$staff->id}}.jpg"
                                                 height="110" width="110" alt="User avatar" />
                                            <div class="user-info text-center">
                                                <h6 class="badge bg-light-secondary">{{$staff->staff_category ?? ''}}</h6>
                                                <h4>{{$staff->title ?? ''}} {{$staff->Name ?? ''}} {{$staff->middle_name ?? ''}} {{$staff->surname ?? ''}}</h4>
                                                <h6 class="badge bg-light-secondary">{{$staff->desName ?? ''}}</h6>
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
                                                <span>{{$staff->email ?? ''}}</span>
                                            </li>
                                            <li class="mb-75">
                                                <span class="fw-bolder me-25">Contact:</span>
                                                <span>{{$staff->phone ?? ''}}</span>
                                            </li>
                                            @if($staff->scopus_id !== null)
                                            <li class="mb-75">
                                                <span class="fw-bolder me-25">Scopus ID:</span>
                                                <span><a href="{{$staff->scopus_id ?? ''}}" target="_blank">Click Here</a></span>
                                            </li>
                                            @endif
                                            @if($staff->orcid_id !== null)
                                            <li class="mb-75">
                                                <span class="fw-bolder me-25">ORCID ID:</span>
                                                <span><a href="{{$staff->orcid_id ?? ''}}" target="_blank">Click Here</a></span>
                                            </li>
                                            @endif
                                            @if($staff->google_scholar_id !== null)
                                            <li class="mb-75">
                                                <span class="fw-bolder me-25">Google Scholar ID:</span>
                                                <span><a href="{{$staff->google_scholar_id ?? ''}}" target="_blank">Click Here</a></span>
                                            </li>
                                            @endif
                                            @if($staff->research_gate_id !== null)
                                            <li class="mb-75">
                                                <span class="fw-bolder me-25">ResearchGate ID:</span>
                                                <span><a href="{{$staff->research_gate_id ?? ''}}" target="_blank">Click Here</a></span>
                                            </li>
                                            @endif
                                            @if($staff->web_science_id !== null)
                                            <li class="mb-75">
                                                <span class="fw-bolder me-25">Web of Science Researcher ID:</span>
                                                <span><a href="{{$staff->web_science_id ?? ''}}" target="_blank">Click Here</a></span>
                                            </li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
