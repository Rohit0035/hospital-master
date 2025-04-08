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
                    OPD / Report </a>
            </li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">OPD Prescription</a></li>
        </ol>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <!-- <div class="card-header p-2 text-info fw-bold">Add OPD Charges </div> -->
                        <div class="row mt-3">
                            <div class="col-md-3 mb-3">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label class="col-form-label" for="validationCustom01">From Date
                                            <span class="text-danger">*</span>
                                        </label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="date" value="OPD" disabled class="form-control"
                                            id="validationCustom01" placeholder="Doc Type..." required>
                                        <div class="invalid-feedback">
                                            Please enter a From Date
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label class="col-form-label" for="validationCustom01">To Date
                                            <span class="text-danger">*</span>
                                        </label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="date" value="OPD" disabled class="form-control"
                                            id="validationCustom01" placeholder="Doc Type..." required>
                                        <div class="invalid-feedback">
                                            Please enter a From Date
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label class="col-form-label" for="validationCustom01">Type
                                            <span class="text-danger">*</span>
                                        </label>
                                    </div>
                                    <div class="col-md-8">
                                        <select class="default-select wide form-control" id="validationCustom03"
                                            required>
                                            <option selected disabled value="">Please select Type
                                            </option>
                                            <option value="1">All</option>
                                            <option value="2">Only Zero</option>
                                            <option value="3">Discounted Only</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select a OPD No
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label class="col-form-label" for="validationCustom01">OPD Type
                                            <span class="text-danger">*</span>
                                        </label>
                                    </div>
                                    <div class="col-md-8">
                                        <select class="default-select wide form-control" id="validationCustom03"
                                            required>
                                            <option selected disabled value="">Please select Type
                                            </option>
                                            <option value="1">All</option>
                                            <option value="2">Emergency</option>
                                            <option value="3">OPD</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select a OPD No
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label class="col-form-label" for="validationCustom01">Age Filter
                                            <span class="text-danger">*</span>
                                        </label>
                                    </div>
                                    <div class="col-md-8">
                                        <select class="default-select wide form-control" id="validationCustom03"
                                            required>
                                            <option selected disabled value="">Please select Type
                                            </option>
                                            <option value="1">Yes</option>
                                            <option value="2">No</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select a OPD No
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label class="col-form-label" for="validationCustom01">Time Wise
                                            <span class="text-danger">*</span>
                                        </label>
                                    </div>
                                    <div class="col-md-8">
                                        <select class="default-select wide form-control" id="validationCustom03"
                                            required>
                                            <option selected disabled value="">Please select Type
                                            </option>
                                            <option value="1">Yes</option>
                                            <option value="2">No</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select a OPD No
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label class="col-form-label" for="validationCustom01">Amount
                                            <span class="text-danger">*</span>
                                        </label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="validationCustom01"
                                            placeholder="Amount..." required>
                                        <div class="invalid-feedback">
                                            Please enter a Amount
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <button class="btn btn-info">Print</button>
                                <button class="btn btn-info ms-2">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example4" class="display table" style="min-width: 1000px">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>OPD ID</th>
                                        <th>UHID No.</th>
                                        <th>Casualty</th>
                                        <th>Status</th>
                                        <th>Patient Name</th>
                                        <th>Sex</th>
                                        <th>Address</th>
                                        <th>Consultant</th>
                                        <th>Department</th>
                                        <th>G. Amt.</th>
                                        <th>Disc % / Amt.</th>
                                        <th>Amount</th>
                                        <th>Mode</th>
                                        <th>User</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>OPD12345</td>
                                        <td>UHID12345</td>
                                        <td>No</td>
                                        <td>Active</td>
                                        <td>John Doe</td>
                                        <td>Male</td>
                                        <td>123 Street, ...</td>
                                        <td>Dr. Smith</td>
                                        <td>Cardiology</td>
                                        <td>500</td>
                                        <td>10% / 50</td>
                                        <td>450</td>
                                        <td>Cash</td>
                                        <td>testtest</td>
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