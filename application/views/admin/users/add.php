<div id="user_add">
<div class="container py-5">
    <div  style="display: flex;justify-content: center;align-items: center;">
        <h2 class="header_title">User Creation</h2>
    </div>
</div>

<div class="container py-5">
    <div class="row">
        <div class="col-5">
            <label for="first_name" class="form-label" style="font-size: 20px;">First Name</label>
        </div>
        <div class="col-7">
            <input type="text" id="first_name" name="first_name" class="form-control custom-input rounded-0" />
        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-5">
            <label for="last_name" class="form-label" style="font-size: 20px;">Last Name</label>
        </div>
        <div class="col-7">
            <input type="text" id="last_name" name="last_name" class="form-control custom-input rounded-0" />
        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-5">
            <label for="email" class="form-label" style="font-size: 20px;">Email</label>
        </div>
        <div class="col-7">
            <input type="text" id="email" name="email" class="form-control custom-input rounded-0" />
        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-5">
            <label for="mobile" class="form-label" style="font-size: 20px;">Mobile</label>
        </div>
        <div class="col-7">
            <input type="text" id="mobile" name="mobile" class="form-control custom-input rounded-0" />
        </div>
    </div>
</div>

<div class="container pt-5 pl-4 pr-4">
    <div class="float-left">
        <a href="<?php echo base_url('admin') ?>" class="btn full-width rounded-0 w-100" style="padding: 5px 25px 5px 25px;font-weight: 600;font-size: 16px;border: 2px solid black;">SUBMIT</a>
    </div>
    <div class="float-right">
        <a href="<?php echo base_url('admin') ?>" class="btn full-width rounded-0 w-100" style="padding: 5px 25px 5px 25px;font-weight: 600;font-size: 16px;border: 2px solid black;">CLEAR</a>
    </div>
</div>
</div>

