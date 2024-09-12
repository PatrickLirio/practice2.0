<div>
    <div class="container-fluid">
        <div class="card p-5">
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" wire:model.live='searchAccount'>
                </div>
                <div class="col">
                    <button type="button" class="btn btn-primary rounded" id="add-new-inventory">Add new inventory</button>
                </div>
                <div class="row m-2">
                    <div class="col-12">
                        <table class="table table-bordered w-100 text-center">
                            <thead>
                            <tr>
                                <th >No.</th>
                                <th >Model  </th>
                                <th >Serial No.</th>
                                <th >Category</th>
                                <th >make</th>
                                <th >Asset No.</th>
                                <th >Assigned by</th>
                                <th >Assigned to</th>
                                <th >Date</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @include('modal.homelayoutmodals.addnewinventorymodal')
    </div>
</div>
