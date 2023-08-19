<style>
    #textarea {
        background-color: #4ebde6;
    }

    th {
        text-align: center;
    }

    td {
        text-align: center;
    }
</style>
<div class="container py-5">
    <h3 class="text-center"><u>Create Notification Details</u></h3>
    <div class="mt-2 ml-0 d-grid" style="padding-top: 45px;">
        <div style="margin-left: 100px;">
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
            <div class="row">
                <div class="col-9">
                    <button id="notification_submit" name="notification_submit">
                        SUBMIT
                    </button>
                </div>
                <div class="col-3">
                    <button id="notification_reset" name="notification_reset">
                        RESET
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>