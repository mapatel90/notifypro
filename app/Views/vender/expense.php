<style>
    .rounded-icon {
        display: inline-flex;
        align-items: center;
        padding: 10px;
        border-radius: 20px;
        background-color: #b5e7ee;
        color: white;
        cursor: pointer;
    }

    .txt-content-box {
        border: 1px solid;
    }

    .txt-color-font {
        color: #1414b7cf;
    }

    input[type=text] {
        outline: none;
    }
</style>

<div class="container py-3">
    <div class="custom-container custom-center">
        <h2 class="text-center"><u>Expenses</u></h2>
        <div class="p-3 text-center">
            <p>
                Please Submit <br>
                following document
            </p>
        </div>
        <div class="ml-2 mr-5 txt-content-box" style="background-color: #b5e7ee; width: 195px; height: 65px;">
            <p class="text-center mt-1">
                txt as entered by <br>
                sender Ashok
            </p>
        </div>
        <div class="mt-5">
            <div class="d-flex align-items-center ml-3">
                <input type="text" class="mr-3" style="width: 123px;height: 42px;">
                <div>
                    <a href="<?php echo base_url('addmore') ?>"><i class="fa fa-upload rounded-icon" aria-hidden="true"></i></a>
                </div>
                <p class="mb-0 ml-3"> <a href="<?php echo base_url('addmore') ?>" class="txt-color-font">ADD FILE</a></p>
            </div>
        </div>
    </div>
</div>