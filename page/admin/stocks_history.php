
<?php include 'plugins/navbar.php';?>
<?php include 'plugins/sidebar/historystocksbar.php';?>
  <!-- Main Sidebar Container -->
 <section class="content">
      <div class="container-fluid">
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Stocks History</h1>
            <br>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Stocks History</li>
            </ol>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <div class="row">
            
            </div>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
       <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title col-6">
                  <div class="row">
                    <div class="col-4">
                      <label>Parts Name:</label><input type="text" name="parts_name"  id="parts_name" class="form-control">
                    </div>
             
                   
                  </div>
                </h3> 
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 100px;">
                    <button class="btn btn-primary" id="searchReqBtn" onclick="load_stocks_history()">Search <i class="fas fa-search"></i></button> 
                  </div>
                </div>
              </div>
                <div class="row">
                    <div class="col-sm-12">
                      &nbsp;<button class="btn btn-success " onclick="export_unit('export_po')">Export</button>
                      
                    </div>
                  </div>
                  <hr>
             <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 420px;">
                <table class="table table-head-fixed text-nowrap table-hover" id="view_stocks">
                <thead style="text-align:center;">
                    <th>#</th>
                    <th>Parts Code</th>
                    <th>Parts Name</th>
                    <th>Supplier Code</th>
                    <th>Description</th>
                    <th>Quantity per Box</th>
                    <th>Net W/T</th>
                    <th>Box Weight W/T</th>
                    <th>Gross W/T</th>
                    <th>Remaining Stocks</th>
                    <th>Unit</th>
                    <th>Date Registered</th>
                    <th>Date Updated</th>
                    
            </thead>
            <tbody id="view_stocks_data" style="text-align:center;"></tbody>
                </table>
                 <div class="row">
                  <div class="col-6">
                    
                  </div>
                  <div class="col-6">
                      <input type="hidden" name="" id="stocks">
   
                    <div class="spinner" id="spinner" style="display:none;">
                        
                        <div class="loader float-sm-center"></div>    
                    </div>
             
                  </div>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->

        
</div>
</div>
</section>


<?php include 'plugins/footer.php';?>
<?php include 'javascript/stock_history_script.php';?>
