 <footer class="main-footer">
    <strong>Copyright &copy; 2022. Developed by: Joshua Kalaw</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>
<?php
//MODALS
include '../../modals/admin/import/stocks/update_stock.php';
include '../../modals/admin/packinglist/assign_pallet.php';
include '../../modals/admin/import/purchase_order/po_import.php';
include '../../modals/admin/import/stocks/import_unit.php';
include '../../modals/admin/import/stocks/import_stocks.php';
include '../../modals/logout.php';
include '../../modals/admin/packinglist/create_packinglist.php';
include '../../modals/admin/import/import_menu.php';
include '../../modals/admin/preparefiles/prepare_files.php';
include '../../modals/admin/viewing/viewing_menu.php';
include '../../modals/admin/import/stocks/import_unit.php';
include '../../modals/admin/import/stocks/restore_stocks.php';
include '../../modals/admin/import/stocks/import_stocks_single.php';
include '../../modals/admin/purchaseorder/po_modal.php';





?>
<!-- jQuery -->
<!-- <script src="../../plugins/jquery/jquery.min.js"></script> -->
<script src="../../node_modules/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<!-- toastr -->
<script type="text/javascript" src="../../node_modules/sweetalert/dist/sweetalert.min.js"></script>
<script src="../../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../../plugins/sparklines/sparkline.js"></script>
<!-- jQuery Knob Chart -->
<script src="../../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../../plugins/moment/moment.min.js"></script>
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="../../dist/js/demo.js"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="../../dist/js/pages/dashboard.js"></script> -->



</body>
</html>