</div>
</div>
</div>
<!-- END: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light">
    <p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25">Copyright &copy; <?php echo date("Y"); ?>
<a class="ms-25" href="{{route('home')}}">Computer Science Department</a><span class="d-none d-sm-inline-block">, All rights Reserved</span></span>
        <span class="float-md-end d-none d-md-block">Hand-crafted & Made with<i data-feather="heart"></i></span></p>
</footer>
<button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
<!-- END: Footer-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('donatus/app-assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
<script src="{{asset('donatus/app-assets/vendors/js/forms/cleave/cleave.min.js')}}"></script>
<script src="{{asset('donatus/app-assets/vendors/js/forms/cleave/addons/cleave-phone.us.js')}}"></script>
<script src="{{asset('donatus/app-assets/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('donatus/app-assets/vendors/js/extensions/moment.min.js')}}"></script>
<script src="{{asset('donatus/app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('donatus/app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js')}}"></script>
<script src="{{asset('donatus/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('donatus/app-assets/vendors/js/tables/datatable/responsive.bootstrap5.js')}}"></script>
<script src="{{asset('donatus/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js')}}"></script>
<script src="{{asset('donatus/app-assets/vendors/js/tables/datatable/jszip.min.js')}}"></script>
<script src="{{asset('donatus/app-assets/vendors/js/tables/datatable/pdfmake.min.js')}}"></script>
<script src="{{asset('donatus/app-assets/vendors/js/tables/datatable/vfs_fonts.js')}}"></script>
<script src="{{asset('donatus/app-assets/vendors/js/tables/datatable/buttons.html5.min.js')}}"></script>
<script src="{{asset('donatus/app-assets/vendors/js/tables/datatable/buttons.print.min.js')}}"></script>
<script src="{{asset('donatus/app-assets/vendors/js/tables/datatable/dataTables.rowGroup.min.js')}}"></script>
<script src="{{asset('donatus/app-assets/vendors/js/extensions/sweetalert2.all.min.js')}}"></script>
<script src="{{asset('donatus/app-assets/vendors/js/extensions/polyfill.min.js')}}"></script>
<script src="{{asset('donatus/app-assets/vendors/js/vendors.min.js')}}"></script>
<script src="{{asset('donatus/app-assets/vendors/js/charts/apexcharts.min.js')}}"></script>
<script src="{{asset('donatus/app-assets/vendors/js/extensions/toastr.min.js')}}"></script>
<script src="{{asset('donatus/app-assets/js/core/app-menu.js')}}"></script>
<script src="{{asset('donatus/app-assets/js/core/app.js')}}"></script>
<script src="{{asset('donatus/app-assets/js/scripts/pages/dashboard-ecommerce.js')}}"></script>
<!-- END: Page JS-->

<!-- BEGIN: Page JS-->
<script src="{{asset('donatus/app-assets/js/scripts/pages/modal-edit-user.js')}}"></script>
<script src="{{asset('donatus/app-assets/js/scripts/pages/app-user-view-account.js')}}"></script>
<script src="{{asset('donatus/app-assets/js/scripts/pages/app-user-view.js')}}"></script>
<!-- END: Page JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('donatus/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js')}}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Page JS-->
<script src="{{asset('donatus/app-assets/js/scripts/forms/form-validation.js')}}"></script>
<!-- END: Page JS-->

<!-- BEGIN: Page JS-->
<script src="{{asset('donatus/app-assets/js/scripts/pages/modal-add-new-cc.js')}}"></script>
<script src="{{asset('donatus/app-assets/js/scripts/pages/modal-edit-cc.js')}}"></script>
<script src="{{asset('donatus/app-assets/js/scripts/pages/modal-add-new-address.js')}}"></script>
<script src="{{asset('donatus/app-assets/js/scripts/pages/app-user-view-billing.js')}}"></script>
<!-- END: Page JS-->
<script>
    $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })
</script>
</body>
<!-- END: Body-->

</html>
