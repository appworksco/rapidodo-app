<!-- address modal -->
<div class="modal fade" id="deactivateAccountModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Deactivate Account</h5>
                <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="profile" method="post">
                <input type="hidden" name="user_id" value="<?= $userId ?>">
                <div class="modal-body">
                    <p>Are you sure you want to deactivate this account? Once deactivated, all data, including your rapidodo points, will be irretrievable.</p>
                </div>
                <div class="modal-footer p-0 border-0">
                    <div class="col-6 m-0 p-0">
                        <button type="button" class="btn border-top btn-lg w-100" data-bs-dismiss="modal">Close</button>
                    </div>
                    <div class="col-6 m-0 p-0">
                        <button type="submit" class="btn bg-primary btn-lg w-100" name="deactivate_account">Deactivate Account</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>