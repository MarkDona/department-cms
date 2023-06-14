<!-- BEGIN: Content-->
<div class="app-content content email-application">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-area-wrapper container-xxl p-0">
        <div class="sidebar-left">
            <div class="sidebar">
                <div class="sidebar-content email-app-sidebar">
                    <div class="email-app-menu">
                        <div class="sidebar-menu-list">
                            <div class="list-group list-group-messages">
                                <a href="#" class="list-group-item list-group-item-action active">
                                    <i data-feather="mail" class="font-medium-3 me-50"></i>
                                    <span class="align-middle">Inbox</span>
                                    <span class="badge badge-light-primary rounded-pill float-end"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="content-right">
            <div class="content-wrapper container-xxl p-0">
                <div class="content-header row">
                </div>
                <div class="content-body">
                    <div class="body-content-overlay"></div>
                    <!-- Email list Area -->
                    <div class="email-app-list">
                        <!-- Email search starts -->
                        <div class="app-fixed-search d-flex align-items-center">
                            <div class="sidebar-toggle d-block d-lg-none ms-1">
                                <i data-feather="menu" class="font-medium-5"></i>
                            </div>
                            <div class="d-flex align-content-center justify-content-between w-100">
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i data-feather="search" class="text-muted"></i></span>
                                    <input type="text" class="form-control" id="email-search" placeholder="Search announcements" aria-label="Search..." aria-describedby="email-search" />
                                </div>
                            </div>
                        </div>
                        <!-- Email search ends -->

                        <!-- Email list starts -->
                        <div class="email-user-list">
                            <ul class="email-media-list">
                                @foreach($get_notices as $get_notice)
                                <li class="d-flex user-mail mail-read">
                                    <div class="mail-left pe-50">
                                        <div class="avatar">
                                            <img src="{{$get_notice->message_image}}" alt="avatar img holder" />
                                        </div>
                                        <div class="user-action">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck1" />
                                                <label class="form-check-label" for="customCheck1"></label>
                                            </div>
                                            <span class="email-favorite"><i data-feather="star"></i></span>
                                        </div>
                                    </div>
                                    <div class="mail-body">
                                        <div class="mail-details">
                                            <div class="mail-items">
                                                <h5 class="mb-25">{{$get_notice->notice_title}}</h5>
                                                <span class="text-truncate">{{$get_notice->type_of_notice}}</span>
                                            </div>
                                            <div class="mail-meta-item">
                                                <span class="me-50 bullet bullet-success bullet-sm"></span>
                                                <span class="mail-date">{{$get_notice->start_date}}</span>
                                            </div>
                                        </div>
                                        <div class="mail-message">
                                            <p class="text-truncate mb-0">
                                                {{$get_notice->message}}
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- Email list ends -->
                    </div>

                </div>
            </div>
