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

 
</style>

<div class="container py-5">
    <div class="custom-container custom-center">
        <h5 class="text-center">Name of Category</h5>
        <input class="input-box" type="text">
       
    </div>
    <div class="button-group">
            <a href="<?php echo base_url('admin') ?>" class="btn round-0 btn_custome">Submit</a>
            <a href="<?php echo base_url('admin') ?>" class="btn round-0 btn_custome">Clear</a>
</div>
</div>

