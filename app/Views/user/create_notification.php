<div class="container py-5">
    <div style="display: flex;justify-content: center;align-items: center;">
        <h2 class="header_title">Create Notification</h2>
    </div>
    <div class="d-grid gap-2 col-lg-4 col-md-6 mx-auto text-center">
        <div class="mt-3">
            <button class="btn btn-color">Search <b>category</b></button>
        </div>
        <div class="mt-3">
            <button class="btn btn-color">Search <b>Company</b></button>
        </div>
        <div class="mt-3">
            <button class="btn btn-color">Search <b>Contact</b></button>
        </div>
    </div>
    <form class="mt-5" style="margin-left: 1%;">
        <a href="<?php echo base_url('user/create_notification_details') ?>" style="color: black;">
            <div class="mb-3">
                <label for="contact_name" class="form-label">Contact Name :</label>
                <input type="text" class="custom-input" style="border: none;" id="contact_name" name="contact_name">
            </div>
            <div class="mb-3">
                <label for="whatsapp_no" class="form-label">Whatsapp No :</label>
                <input type="text" class="custom-input" style="border: none;" id="whatsapp_no" name="whatsapp_no">
            </div>
            <div class="mb-3">
                <label for="email_id" class="form-label">Email ID :</label>
                <input type="email" class="custom-input" style="border: none;" id="email_id" name="email_id">
            </div>
        </a>
    </form>
</div>