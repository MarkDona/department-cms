<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section class="app-user-view-billing">
                <div class="row">
                    <!-- User Content -->
                    <div class="col-xl-12 col-lg-7 col-md-7 order-0 order-md-1">
                        <!-- current plan -->
                        <div class="card">
                            <h4 class="card-header">Previous Transactions</h4>
                            <div class="table-responsive">
                                <table class="table datatable-project">
                                    <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Description</th>
                                        <th>Time</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($all_activity as $fetch_tran)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$fetch_tran->description}}</td>
                                            <td>{{$fetch_tran->time}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- / current plan -->
                    </div>
                    <!--/ User Content -->
                </div>
            </section>
