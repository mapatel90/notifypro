<div class="container py-5">
    <h1 class="text-center"><u>Login Page</u></h1>
    <div class="mt-5 d-grid" style="padding-top: 45px;">
        <form class="mt-2">
            <div class="mb-3">
                <label for="username" class="form-label">Username </label>
                <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password </label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div>
                <a href="<?php echo base_url('user/home_page') ?>" id="submit" name="submit" style="border: 1px solid #000; padding: 7px;">SUBMIT</a>
            </div>
            <div class="mt-4">
                <a href="#" style="border: 1px solid #000; padding: 7px;">
                    Reset password
                </a>
            </div>
        </form>
    </div>
</div>