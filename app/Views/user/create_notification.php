<div class="container py-5">
    <div style="display: flex;justify-content: center;align-items: center;">
        <h2 class="header_title">Create Notification</h2>
    </div>
    <div class="d-grid gap-2 col-lg-4 col-md-6 mx-auto text-center">
        <div class="mt-3">
            <a class="btn btn-color  rounded-0" style="font-size: 25px;">Search <b>category</b></a>
        </div>
        <div class="mt-3">
            <a class="btn btn-color  rounded-0" style="font-size: 25px;">Search <b>Company</b></a>
        </div>
        <div class="mt-3">
            <a class="btn btn-color  rounded-0" style="font-size: 25px;">Search <b>Contact</b></a>
        </div>
    </div>
    <form class="mt-5" style="margin-left: 1%;">
        <a href="<?php echo base_url('user/create_notification_details') ?>" style="color: black;">
            <div class="mb-3">
                <label for="contact_name" class="form-label" style="font-size: 20px;">Contact Name :</label>
                <input type="text" class="form-control custom-input rounded-0" style="border: none;" id="contact_name" name="contact_name">
            </div>
            <div class="mb-3">
                <label for="whatsapp_no" class="form-label" style="font-size: 20px;">Whatsapp No :</label>
                <input type="text" class="form-control custom-input rounded-0" style="border: none;" id="whatsapp_no" name="whatsapp_no">
            </div>
            <div class="mb-3">
                <label for="email_id" class="form-label" style="font-size: 20px;">Email ID :</label>
                <input type="email" class="form-control custom-input rounded-0" style="border: none;" id="email_id" name="email_id">
            </div>
        </a>
    </form>
</div>