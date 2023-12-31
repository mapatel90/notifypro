<style>
    #textarea {
        background-color: #b5e7ee;
    }

    th {
        text-align: center;
    }

    td {
        text-align: center;
    }

    textarea:focus {
        outline: none;
    }
</style>
<div class="container py-5">

    <h3 class="text-center header_title"><b>Create Notification Details</b></h3>
    <div class="mt-2 ml-0 d-grid" style="padding-top: 45px;">
        <div style="margin-left: 65px;">
            <h5>Type Text :</h5>
            <textarea name="textarea" id="textarea" cols="23" rows="3"></textarea>
        </div>
        <div>
            <table class="table table-borderless mt-3" style="border-collapse: separate;border-spacing: 20px;">
                <thead>
                    <tr>
                        <th scope="col" class="btn-color">Reminder Period:</th>
                        <th scope="col" class="btn-color">No.of Attachments:</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="border: 1px solid #000;">1 Day</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;">2 Day</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;">3 Day</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;">4 Day</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;">5 Day</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td colspan="2" style="height: 20px;"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="container pl-4 pr-4">
            <div class="float-left">
                <a href="<?php echo base_url('user/home_page') ?>" class="btn full-width rounded-0 w-100" style="padding: 5px 25px 5px 25px;font-weight: 600;font-size: 16px;border: 2px solid black;">SUBMIT</a>
            </div>
            <div class="float-right">
                <a href="<?php echo base_url('user/home_page') ?>" class="btn full-width rounded-0 w-100" style="padding: 5px 25px 5px 25px;font-weight: 600;font-size: 16px;border: 2px solid black;">RESET</a>
            </div>
        </div>
    </div>
</div>
</div>