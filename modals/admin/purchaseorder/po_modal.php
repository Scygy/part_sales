<div class="modal fade" id="purchase_order_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Summary
          <input type="hidden" name="id_po_details" id="id_po_details" class="form-control" disabled>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-2">
         <h5 class="" id="">Purchase Order
          <input type="Text" name="po_num_details" id="po_num_details" class="form-control" disabled>
        </h5>
        </div>
        <div class="col-2">
         <h5 class="" id="">Status
          <input type="Text" name="Status_po_details" id="Status_po_details" class="form-control" disabled>
        </h5>
        </div>
        </div>
        <div class="card-body table-responsive p-0" style="height: 420px;">
                <table class="table table-head-fixed text-nowrap table-hover" id="view_po_modal">
                <thead style="text-align:center;">
                    <th>#</th>
                    <th>Parts Code</th>
                    <th>Parts Name</th>
                    <th>Description</th>
                    <th>Supplier Code</th>
                    <th>Quantity</th>
                    <th>Neopos Number</th>
                    
            </thead>
            <tbody id="view_po_data_modal" style="text-align:center;"></tbody>
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

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="load_po_detail()">Load</button> 
        <!-- <a href="" onclick="load_po_detail()"></a> -->
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       <!--  <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>