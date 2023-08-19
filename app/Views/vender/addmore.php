<style>
    .Add-More-box {
        padding: 3px;
        border: 1px solid #17a2b8;
        background-color: aqua;
    }

    .Add-More-box i {
        margin-right: 8px;
        color: #17a2b8;
    }

    .add-more-button {
        display: inline-block;
        padding: 4px 15px;
        margin: 10px;
        background-color: white;
        border: 1px solid #ccc;
        color: black;
        text-decoration: none;
    }
</style>
<div class="container">
    <div class="mt-4">
        <div class="d-flex justify-content-end align-items-center">
            <i class="fa fa-plus ml-2" aria-hidden="true"></i>
            <div class="Add-More-box">
                <p class="mb-0 ml-1">ADD MORE</p>
            </div>
        </div>
    </div>

    <div class="mt-4">
        <i class="fa fa-building icon-size" style="font-size: 115px;"></i>
        <a class="ml-5 add-more-button" href="#">Remove</a>
    </div>

    <div class="mt-4">
        <i class="fa fa-address-book" style="font-size: 115px;"></i>
        <a class="ml-5 add-more-button" href="#">Remove</a>
    </div>

    <div class="mt-5 text-center">
        <a href="<?php echo base_url('#') ?>" class="add-more-button">SUBMIT</a>
    </div>
</div>