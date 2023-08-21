<style>
  .custom-container {
    height: 60vh;
  }

  .custom-center {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 20px;
  }

  .input-box {
    margin-top: 20px;
    width: 80%;
    padding: 10px;
    border: none;
    background-color: #b5e7ee;
    border-radius: 0;
    height: 15%;
  }

  .button-group {
    display: flex;
    justify-content: space-between;
    width: 100%;
    margin-top: 10px;
  }
  .btn_custome{
    width: 40%;
    padding: 10px;
    border: 1px solid #000;
    border-radius: 0;
    font-weight: 600;
    font-size: 25px;
  }

  input.input-box:focus {
    outline: none;
  }

 
</style>

<div class="container py-5">
    <div class="custom-container custom-center">
        <h5 class="text-center">Name of Category</h5>
        <input class="input-box" type="text">
       
    </div>

</div>
<div class="container pl-4 pr-4">
    <div class="float-left">
        <a href="<?php echo base_url('admin') ?>" class="btn full-width rounded-0 w-100" style="padding: 5px 25px 5px 25px;font-weight: 600;font-size: 16px;border: 2px solid black;">SUBMIT</a>
    </div>
    <div class="float-right">
        <a href="<?php echo base_url('admin') ?>" class="btn full-width rounded-0 w-100" style="padding: 5px 25px 5px 25px;font-weight: 600;font-size: 16px;border: 2px solid black;">CLEAR</a>
    </div>
</div>

