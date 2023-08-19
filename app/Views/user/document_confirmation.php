<style>
    #reason_textarea {
        background-color: #4ebde6;
    }
</style>
<div class="container py-5">
    <h4 class="text-center"><u>Document Confirmation</u></h4>
    <div class="mt-5 d-grid" style="padding-top: 5px;">
        <div style="border: 1px solid #000;text-align: center;margin-left: 10%;margin-right: 67%;padding: 5px;">
            Aceept
        </div>
        <div style="border: 1px solid #000;text-align: center;margin-left: 10%;margin-right: 67%;padding: 5px;margin-top: 3%;">
            Reject
        </div>
        <div style="margin-left: 11%; margin-top: 5%;">
            <h5>Rejected Reason :</h5>
            <textarea name="reason_textarea" id="reason_textarea" cols="35" rows="8"></textarea>
        </div>
    </div>

</div>
<div>
    <a href="<?php echo base_url('/') ?>" style="border: 1px solid #000; padding: 7px; margin-left: 5%;">
        SUBMIT
    </a>
</div>