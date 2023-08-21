<style>
    .add-More-box {
        padding: 3px;
        border: 1px solid #17a2b8;
        background-color: #b5e7ee;
    }

    .add-More-box i {
        margin-right: 8px;
        color: #17a2b8;
    }

    .add-more-button {
        display: inline-block;
        padding: 4px 15px;
        margin: 10px;
        background-color: white;
        border: 2px solid #000;
        color: black;
        text-decoration: none;
        font-size: 16px;
        font-weight: 600;
    }
</style>
<div class="container">
    <div class="custom-container custom-center">
        <div class="mt-4">
            <div class="d-flex justify-content-end align-items-center">
                <i class="fa fa-plus ml-2" aria-hidden="true"></i>
                <div class="add-More-box">
                    <p class="mb-0 ml-1">ADD MORE</p>
                </div>
            </div>
        </div>
        <div class="row mb-4 mt-4">
            <div class="col-6"><i class="fa fa-building icon-size" style="font-size: 115px;"></i></div>
            <div class="col-6" style="display: flex;justify-content: center;align-items: center;"><a class="btn full-width rounded-0 " style="font-weight: 600;font-size: 16px;border: 1px solid black;width:65%;" href="#">Remove</a></div>
        </div>
        <div class="row mt-3">
            <div class="col-6"><i class="fa fa-address-book" style="font-size: 115px;"></i></div>
            <div class="col-6" style="display: flex;justify-content: center;align-items: center;"><a class="btn full-width rounded-0 " style="font-weight: 600;font-size: 16px;border: 1px solid black;width:65%;" href="#">Remove</a></div>
        </div>

        <div class="mt-5 text-center">
            <a href="<?php echo base_url('#') ?>" class="add-more-button">SUBMIT</a>
        </div>
    </div>
</div>