<!-- address modal -->
<div class="modal fade" id="addMunicipalityCityModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Municipality / City</h5>
                <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="municipality-city" method="post">
                <input type="hidden" name="user_id" value="<?= $userId ?>">
                <div class="modal-body">
                    <div class="form-row">
                        <div class="col-md-12 form-group mb-3">
                            <label class="form-label">Municipality / City</label>
                            <input type="text" placeholder="Enter Municipality / City" class="form-control" name="municipality_city" required> 
                        </div>
                    </div>
                </div>
                <div class="modal-footer p-0 border-0">
                    <div class="col-6 m-0 p-0">
                        <button type="button" class="btn border-top btn-lg w-100" data-bs-dismiss="modal">Close</button>
                    </div>
                    <div class="col-6 m-0 p-0">
                        <button type="submit" class="btn bg-primary btn-lg w-100" name="add_municipality_city">Add Municipality / City</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>