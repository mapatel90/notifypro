<div class="container py-5">
<div  style="display: flex;justify-content: center;align-items: center;">
    <h2 class="header_title">Listing</h2>
</div>
    <!-- make table view -->
  
    <div class="table_div table-responsive mt-5">
        <table class="table table-borderless mt-3" id="user_list" style="border-collapse: separate;">
            <thead>
                <tr>
                    <th scope="col">Sr.No</th>
                    <th scope="col">User</th>
                    <th scope="col">Date Sent</th>
                    <th scope="col">Category</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Company</th>
                    <th scope="col">Whatsapp</th>
                    <th scope="col">Email Id</th>
                    <th scope="col">Status</th>
                    <th scope="col">Date Recieved</th>
                    <th scope="col">Document</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row" style="background: #89c6e9">1</th>
                    <td style="background: #89c6e9">Mark</td>
                    <td style="background: #89c6e9">20.07.2023</td>
                    <td style="background: #89c6e9">Expence</td>
                    <td style="background: #89c6e9">sandeep</td>
                    <td style="background: #89c6e9">tech</td>
                    <td style="background: #89c6e9">yes</td>
                    <td style="background: #89c6e9">sandeep@gmail</td>
                    <td style="background: #89c6e9">yes</td>
                    <td style="background: #89c6e9">20.07.2023</td>
                    <td style="background: #89c6e9">yes</td>
                    <td style="background: #89c6e9">yes</td>
                    
                </tr>
            </tbody>
        </table>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#user_list').DataTable({
                searching: false, // Hide search option
                paging: false, // Hide pagination
                info: false, // Hide "Showing x of y entries" info
                responsive: true,
                columnDefs: [ 
            { targets: [0, 1, 2, 3, 4, 5,6,7,8,9,10,11], className: "desktop" },
            { targets: [0, 1, 2], className: "tablet mobile" },
        ]
            }

        );
    });
</script>