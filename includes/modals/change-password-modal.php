<!-- address modal -->
<div class="modal fade" id="changePasswordModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Change Password</h5>
                <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="profile" method="post">
                <input type="hidden" name="user_id" value="<?= $userId ?>">
                <div class="modal-body">
                    <div class="form-row">
                        <div class="col-md-12 form-group mb-3">
                            <label class="form-label">New Password</label>
                            <input type="password" placeholder="Enter New Password" class="form-control py-1" name="new_password" required>
                        </div>
                        <div class="col-md-12 form-group mb-3">
                            <label class="form-label">Confirm Password</label>
                            <input type="password" placeholder="Enter Confirm Password" class="form-control py-1" name="confirm_password" required>
                        </div>
                    </div>

                </div>
                <div class="modal-footer p-0 border-0">
                    <div class="col-6 m-0 p-0">
                        <button type="button" class="btn border-top btn-lg w-100" data-bs-dismiss="modal">Close</button>
                    </div>
                    <div class="col-6 m-0 p-0">
                        <button type="submit" class="btn bg-primary btn-lg w-100" name="change_password">Change Password</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>