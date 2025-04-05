<!-- header start -->
<?php include 'header.php';?>
<!-- header close -->

<!--**********************************
            Content body start
***********************************-->
<div class="content-body">
    <div class="page-titles">
        <ol class="breadcrumb">
            <li>
                <h5 class="bc-title">Dashboard</h5>
            </li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">
                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M2.125 6.375L8.5 1.41667L14.875 6.375V14.1667C14.875 14.5424 14.7257 14.9027 14.4601 15.1684C14.1944 15.4341 13.8341 15.5833 13.4583 15.5833H3.54167C3.16594 15.5833 2.80561 15.4341 2.53993 15.1684C2.27426 14.9027 2.125 14.5424 2.125 14.1667V6.375Z"
                            stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M6.375 15.5833V8.5H10.625V15.5833" stroke="#2C2C2C" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    Master </a>
            </li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Consultant List</a></li>
        </ol>
        <span class="" style="float:right;">
            <a href="mas-add-consultant.php" class="btn btn-success">Add New</a>
        </span>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                         <div class="table-responsive">
                        <table id="example4" class="display table" style="min-width: 1200px">
                            <thead>
                                <tr>
                                    <th>S. No.</th>
                                    <th>Consultant Name</th>
                                    <th>Department</th>
                                    <th>Specialization</th>
                                    <th>Nature</th>
                                    <th>Mobile</th>
                                    <th>Email ID</th>
                                    <th>Short Name</th>
                                    <th>Timing</th>
                                    <th>Date Of Birth</th>
                                    <th>Anniversary Date</th>
                                    <th>OPD Charge</th>
                                    <th>Casualty Charge</th>
                                    <th>OPD Valid Upto</th>
                                    <th>OPD Charge b/w valid period</th>
                                    <th>MCI Reg. No.</th>
                                    <th>PAN No.</th>
                                    <th>Active</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>John Doe</td>
                                    <td>Cardiology</td>
                                    <td>Heart Specialist</td>
                                    <td>Full-Time</td>
                                    <td>+91 9876543210</td>
                                    <td>johndoe@example.com</td>
                                    <td>JD</td>
                                    <td>10:00 AM - 2:00 PM</td>
                                    <td>15-08-1980</td>
                                    <td>20-11-2010</td>
                                    <td>₹500</td>
                                    <td>₹700</td>
                                    <td>31-12-2025</td>
                                    <td>₹450</td>
                                    <td>123456</td>
                                    <td>ABCDE1234F</td>
                                    <td>Yes</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="mas-edit-consultant.php" class="btn btn-primary btn-sm me-2">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="#" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--**********************************
            Content body end
***********************************-->

<!-- footer start -->
<?php include 'footer.php';?>
<!-- footer close -->