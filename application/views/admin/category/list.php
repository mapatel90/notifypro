<div class="container py-5">
    
    <div style="display: flex;justify-content: center;align-items: center;">
        <h3 class="header_title" style="font-weight: 10 !important;">Category List</h3>
    </div>
    <!-- make table view -->
    <div class="float-right m-4">
        <a href="<?php echo base_url('admin/category/add') ?>" class="btn full-width rounded-0 w-100 mt-5" style="border: 1px solid #000;">Add New</a>
    </div>
    <div class="table_div table-responsive mt-5">
        <table class="table table-borderless mt-3" id="category_list" style="border-collapse: separate;">
            <thead>
                <tr>
                    <th scope="col" style="background: #89c6e9">Sr.No</th>
                    <th scope="col" style="background: #89c6e9">Name</th>
                    <th scope="col" style="background: #89c6e9">Created Date</th>
                    <th scope="col" style="background: #89c6e9">Update</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>20.07.2023</td>
                    <td>Edit/Delete</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>15.07.2023</td>
                    <td>Edit/Delete</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#category_list').DataTable({
                searching: false, // Hide search option
                paging: false, // Hide pagination
                info: false, // Hide "Showing x of y entries" info
            }

        );
    });
</script>