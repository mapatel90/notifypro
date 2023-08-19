<style>
    .rounded-icon {
        display: inline-flex;
        align-items: center;
        padding: 10px;
        border-radius: 50px;
        background-color: aqua;
        color: white;
        cursor: pointer;
    }
</style>

<div class="container py-3">
    <h2 class="text-center"><u>Expenses</u></h2>
    <div class="p-3 text-center">
        <p>
            Please Submit <br>
            following document
        </p>
    </div>
    <div class="border border-primary rounded ml-2 mr-5" style="background-color: aqua; width: 195px; height: 65px;">
        <p class="text-center mt-1">
            txt as entered by <br>
            sender Ashok
        </p>
    </div>
    <div class="mt-5">
        <div class="d-flex align-items-center ml-3">
            <input type="text" class="mr-3" style="width: 123px;height: 42px;">
            <div class="rounded-icon">
                <i class="fa fa-upload" aria-hidden="true"></i>
            </div>
            <p class="mb-0 ml-3"> <a href="<?php echo base_url('addmore') ?>">ADD FILE</a></p>
        </div>
    </div>
</div>