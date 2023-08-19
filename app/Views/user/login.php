<div class="container py-5">
    <div  style="display: flex;justify-content: center;align-items: center;">
        <h3 class="header_title">Login Page</h3>
    </div>
    <div class="mt-5 d-grid" style="padding-top: 45px;">
        <form class="mt-2">
            <div class="mb-3">
                <label for="username" class="form-label">Username </label>
                <input type="text" class="custom-input" id="username" name="username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password </label>
                <input type="password" class="custom-input" id="password" name="password">
            </div>
            <div>
                <a href="<?php echo base_url('user/home_page') ?>" id="submit" name="submit" style="border: 1px solid #000; padding: 7px;color:#000;">SUBMIT</a>
            </div>
            <div class="mt-4">
                <a href="#" style="border: 1px solid #000; padding: 7px;color:#000;">
                    Reset password
                </a>
            </div>
        </form>
    </div>
</div>