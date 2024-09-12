<!---MODAL----->
<div class="modal fade" id="add-new-inventory-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="add-new-inventory-modal-Label" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="add-new-inventory-modal-Label">Add New Inventory</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

                    <div class="row ">
                        <div class="col">
                            <!-- All inputs in a single row -->
                            <div class="row m-2">
                                <div class="col-6">
                                    <label>Model</label>
                                    <input type="text" name="model" class="form-control">
                                </div>
                                <div class="col-6">
                                    <label>Serial No.</label>
                                    <input type="text" name="serialno" class="form-control">
                                </div>
                            </div>
                            <!---->
                            <div class="row m-2">
                                <div class="col-6">
                                    <label>Category</label>
                                    <select class="form-select" name="category" aria-label="Default select example">
                                        <option selected></option>
                                        <option value="Desktop">Desktop</option>
                                        <option value="ipad">ipad</option>
                                        <option value="laptop">laptop</option>
                                        <option value="mobile unit">mobile unit</option>
                                      </select>
                                </div>
                                <div class="col-6">
                                    <label>Make</label>
                                    <select class="form-select" name="make" aria-label="Default select example">
                                        <option selected></option>
                                        <option value="HP">HP</option>
                                        <option value="Dell">Dell</option>
                                        <option value="Lenovo">Lenovo</option>
                                        <option value="Samsung">Samsung</option>
                                        <option value="Iphone">Iphone</option>
                                        <option value="Asus">Asus</option>
                                      </select>
                                </div>
                            </div>
                            <!---->
                            <div class="row m-2">
                                <div class="col-6">
                                    <label>Asset No.</label>
                                    <input type="text" name="assetno" class="form-control">
                                </div>
                                <div class="col-6">
                                    <label>Assigned by</label>
                                    <input type="text" name="assignedby" class="form-control">
                                </div>
                            </div>
                            <!---->
                            <div class="row m-2">
                                <div class="col-6">
                                    <label>Assigned to</label>
                                    <input type="text" name="assignedto" class="form-control">
                                </div>
                                <div class="col-6">
                                    <label>Date</label>
                                    <input type="date" name="datecreated" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>

        </div>
        <div class="modal-footer">
            <button type="button" id="create-or-update-account" class="btn btn-primary" action=''>Save</button>
        </div>
        </div>
    </div>
</div>
