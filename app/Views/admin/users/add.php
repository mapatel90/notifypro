<div class="container py-5">
    <div style="display: flex;justify-content: center;align-items: center;">
        <h3 style="border-bottom: 2px solid black;padding-bottom: 5px;">User Creation</h3>
    </div>
</div>
<div class="container py-5">
    <div class="row">
        <div class="col-5">
            <label for="first_name" style="font-size: 25px;">First Name</label>
        </div>
        <div class="col-7">
            <input type="text" id="first_name" name="first_name" style="padding: 15px;border: 2px solid black;background-color: rgba(154,220,255,.6);" />
        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-5">
            <label for="last_name" style="font-size: 25px;">Last Name</label>
        </div>
        <div class="col-7">
            <input type="text" id="last_name" name="last_name" style="padding: 15px;border: 2px solid black;background-color: rgba(154,220,255,.6);" />
        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-5">
            <label for="email" style="font-size: 25px;">Email</label>
        </div>
        <div class="col-7">
            <input type="text" id="email" name="email" style="padding: 15px;border: 2px solid black;background-color: rgba(154,220,255,.6);" />
        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-5">
            <label for="mobile" style="font-size: 25px;">Mobile</label>
        </div>
        <div class="col-7">
            <input type="text" id="mobile" name="mobile" style="padding: 15px;border: 2px solid black;background-color: rgba(154,220,255,.6);" />
        </div>
    </div>
</div>
<div class="container pt-5 pl-4 pr-4">
    <div class="float-left">
        <a href="<?php echo base_url('admin') ?>" class="btn full-width rounded-0 w-100" style="padding: 5px 25px 5px 25px;font-weight: 600;font-size: 25px;border: 2px solid black;">SUBMIT</a>
    </div>
    <div class="float-right">
        <a href="<?php echo base_url('admin') ?>" class="btn full-width rounded-0 w-100" style="padding: 5px 25px 5px 25px;font-weight: 600;font-size: 25px;border: 2px solid black;">CLEAR</a>
    </div>
</div>