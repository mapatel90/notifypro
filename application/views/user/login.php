<div class="container py-5">
    <div  style="display: flex;justify-content: center;align-items: center;">
        <h2 class="header_title">Login Page</h2>
    </div>
    <div class="mt-5 d-grid" style="padding-top: 45px;">
        <form class="mt-2">
            <div class="mb-3">
                <label for="username" class="form-label" style="font-size: 20px;">Username </label>
                <input type="text" class="form-control custom-input rounded-0" id="username" style="width: 50%;" name="username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label" style="font-size: 20px;">Password </label>
                <input type="password" class="form-control custom-input rounded-0" id="password" style="width: 50%;" name="password">
            </div>
            <div class="mt-4">
                <a href="<?php echo base_url('user/home_page') ?>" id="submit" name="submit" style="border: 1px solid #000; padding: 7px;color:#000;font-size: 20px;">SUBMIT</a>
            </div>
            <div class="mt-4">
                <a href="#" style="border: 1px solid #000; padding: 7px;color:#000;font-size: 20px;">
                    Reset password
                </a>
            </div>
        </form>
    </div>
</div>