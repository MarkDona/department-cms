@include('modals.paynow')
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
        <!-- User Sidebar -->
        <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
            <!-- Plan Card -->
            <div class="card border-primary">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start">
                        <span class="badge bg-light-primary">Department Dues</span>
                        <div class="d-flex justify-content-center">
                            <sup class="h5 pricing-currency text-primary mt-1 mb-0">GHc</sup>
                            <span class="fw-bolder display-5 mb-0 text-primary">{{$fetch_dues->amount ?? ''}}</span>
                            <sub class="pricing-duration font-small-4 ms-25 mt-auto mb-2">/year</sub>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center fw-bolder mb-50">
                    </div>
                    <span>Pay your dues before examination begins</span>
                    <div class="d-grid w-100 mt-2">
                        <button type="submit" class="btn btn-primary payNow"data-bs-toggle="modal" data-bs-target="#payNow">Pay Now</button>
                    </div>
                </div>
            </div>
            <!-- /Plan Card -->
        </div>
        <!--/ User Sidebar -->

        <!-- User Content -->
        <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">
            <!-- current plan -->
            <div class="card">
                <h4 class="card-header">Previous Transactions</h4>
                <div class="table-responsive">
                    <table class="table datatable-project">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Invoice Number</th>
                            <th>Amount</th>
                            <th>Academic Year</th>
                            <th>Level</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>00004501</td>
                            <td>GHc 50.00</td>
                            <td>2022-2023</td>
                            <td>100</td>
                            <td>Donatus</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- / current plan -->
        </div>
        <!--/ User Content -->
    </div>
</section>
