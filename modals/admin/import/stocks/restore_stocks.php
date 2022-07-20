 <div class="modal fade bd-example-modal-xl" id="restore_stocks" tabindex="-1"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
          Update Stock
          <input type="hidden" name="id_restore" id="id_restore" class="form-control">
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"  >
            <!-- onclick="javascript:window.location.reload()" -->
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
           <div class="row">
               <div class="col-3">
                   <span>Parts Code:</span>
                   <input type="text" name="" id="parts_code_restore" class="form-control" disabled>
               </div>
                <div class="col-3">
                   <span>Parts Name:</span>
                   <input type="text" name="" id="parts_name_restore" class="form-control" disabled>
               </div>
                <div class="col-3">
                   <span>Supplier Code:</span>
                   <input type="text" name="" id="supplier_code_restore" class="form-control" disabled>
               </div>
                <div class="col-3">
                   <span>Description:</span>
                   <input type="text" name="" id="description_restore" class="form-control" disabled>
               </div>
           </div>  
           <div class="row">
            <div class="col-3">
                   <span>Quantity per Box:</span>
                   <input type="number" name="" id="qty_per_box_restore" class="form-control" disabled>
               </div>
                <div class="col-3">
                   <span>Net W/T:</span>
                   <input type="number" name="" id="net_restore" class="form-control" disabled>
               </div>
                <div class="col-3">
                   <span>Box W/T:</span>
                   <input type="number" name="" id="box_weight_restore" class="form-control" disabled>
               </div>
                  <div class="col-3">
                   <span>Gross W/T:</span>
                   <input type="number" name="" id="gross_restore" class="form-control" disabled>
               </div>
           </div> 
           <div class="row">
            <div class="col-3">
                   <span>Remaining Stocks:</span>
                   <input type="number" name="" id="remaining_stck_restore" class="form-control" disabled>
               </div>
                
                <!-- <div class="col-3">
                   <span>Unit:</span>
                   <input type="text" name="" id="unit_update_stock" class="form-control" disabled>
               </div> -->
                <!-- <div class="col-3">
                   <span>Date Registered:</span>
                   <input type="date" name="" id="date_registered_update_stock" class="form-control" disabled>
               </div>
                <div class="col-3">
                   <span>Date Updated:</span>
                   <input type="date" name="" id="date_updated_update_stock" class="form-control" disabled>
               </div> -->
           </div> 
           <br>
           <div class="row">
                        <div class="col-12">
                          <p style="text-align:right;">
                        <button type="button" class="btn btn-primary"  onclick="restore_stocksss()" disabled>Restore</button>
                          </p>
                        </div>
           </div>
      </div>
     
    </div>
  </div>
</div>

