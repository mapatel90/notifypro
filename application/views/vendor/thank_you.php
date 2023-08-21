<style>
    .custom-container {
        height: 70vh;
    }

    .custom-center {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 10px;
    }

    .btn_custome{
    width: 100%;
    padding: 10px;
    border: 1px solid #000;
    border-radius: 0;
  }
  .button-group{
    margin-top: 30%;
  }
  
</style>

<div class="container py-5">
    <div class="custom-container custom-center">
        <h4 class="text-center">Thank you for submitting the document!</h4>
        <div class="button-group">
        <a href="<?php echo base_url('/') ?>" class="btn btn-lg  btn-color btn_custome mx-2 full-width rounded-0"><b>Home</b></a>
    </div>
    </div>
  
</div>