<!-- address modal -->
<div class="modal fade" id="addDeliveryAddresssModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Delivery Address</h5>
                <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="profile" method="post">
                <input type="hidden" name="user_id" value="<?= $userId ?>">
                <div class="modal-body">
                    <div class="form-row">
                        <div class="col-md-12 form-group mb-3">
                            <label class="form-label">Street / Purok</label>
                            <input type="text" class="form-control" placeholder="Enter Street / Purok" name="street_purok" required>
                        </div>
                        <div class="col-md-12 form-group mb-3">
                            <label class="form-label">Barangay</label>
                            <input type="text" class="form-control" placeholder="Enter Barangay" name="barangay" required>
                        </div>
                        <div class="col-md-12 form-group mb-3">
                            <label class="form-label">Municipality / City</label>
                            <select class="form-select" name="municipality_city">
                                <option value="Valencia City">Valencia City</option>
                                <option value="Maramag">Maramag</option>
                                <option value="Don Carlos">Don Carlos</option>
                            </select>
                        </div>
                        <div class="col-md-12 form-group mb-3">
                            <label class="form-label">Landmark</label>
                            <textarea class="form-control" cols="30" rows="10" name="landmark" required></textarea>
                        </div>
                        <div class="mb-0 col-md-12 form-group">
                            <label class="form-label">Nickname</label>
                            <div class="btn-group w-100">
                                <input type="radio" id="home" class="btn-check" name="nickname" value="Home" checked>
                                <label class="btn btn-outline-secondary" for="home">Home</label>
                                <input type="radio" id="work" class="btn-check" name="nickname" value="Work">
                                <label class="btn btn-outline-secondary" for="work">Work</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer p-0 border-0">
                    <div class="col-6 m-0 p-0">
                        <button type="button" class="btn border-top btn-lg w-100" data-bs-dismiss="modal">Close</button>
                    </div>
                    <div class="col-6 m-0 p-0">
                        <button type="submit" class="btn bg-primary btn-lg w-100" name="add_delivery_address">Add Delivery Address</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>