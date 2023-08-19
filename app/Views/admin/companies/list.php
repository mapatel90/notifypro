<div class="container py-5">
    <div style="display: flex;justify-content: center;align-items: center;">
        <h3 style="border-bottom: 2px solid black;padding-bottom: 5px;">Company List</h3>
    </div>
    <!-- make table view -->
    <div class="float-right m-4">
        <a href="<?php echo base_url('admin/add_company') ?>" class="btn full-width rounded-0 w-100 mt-5" style="background-color: rgba(154,220,255,.6);border: 2px solid black;"><i class="fa-solid fa-plus"></i> ADD NEW</a>
    </div>
    <div class="table_div table-responsive mt-5">
        <table class="table table-borderless mt-3" style="border-collapse: separate;">
            <thead>
                <tr>
                    <th scope="col" style="background: #89c6e9;">Sr.No</th>
                    <th scope="col" style="background: #89c6e9">Company</th>
                    <th scope="col" style="background: #89c6e9">Created Date</th>
                    <th scope="col" style="background: #89c6e9">City</th>
                    <th scope="col" style="background: #89c6e9">State</th>
                    <th scope="col" style="background: #89c6e9">Update</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Taj Hotels</td>
                    <td>08.06.2023</td>
                    <td>Panjim</td>
                    <td>Goa</td>
                    <td>Edit/Delete</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>