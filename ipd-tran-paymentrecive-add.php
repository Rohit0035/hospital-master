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
                    IPD / Transaction</a>
            </li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Payment Receive</a></li>
        </ol>
        <span class="" style="float:right;">
            <a href="ipd-tran-paymentrecive.php" class="btn btn-success">Back</a>
        </span>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header p-2">Add Payment Receive </div>
                        <form class="needs-validation">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom01">Doc Type
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" value="IPD" disabled class="form-control"
                                                    id="validationCustom01" placeholder="Doc Type..." required>
                                                <div class="invalid-feedback">
                                                    Please enter a Doc Type
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom01">Receipt No.
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="number" value="" class="form-control"
                                                    id="validationCustom01" placeholder="Doc Type..." required>
                                                <div class="invalid-feedback">
                                                    Please enter a Receipt No.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom03">IPD No.
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="input-group">
                                                    <select class="default-select wide form-control">
                                                        <option value="">Select IPD No.</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom01">Date
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="date" value="" class="form-control" id="validationCustom01"
                                                    placeholder="Doc Type..." required>
                                                <div class="invalid-feedback">
                                                    Please enter a Date
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom01">Time
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="time" value="" class="form-control" id="validationCustom01"
                                                    placeholder="Time..." required>
                                                <div class="invalid-feedback">
                                                    Please enter a Time
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom01">Patient Name
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" value="" class="form-control" id="validationCustom01"
                                                    placeholder="Patient Name..." required>
                                                <div class="invalid-feedback">
                                                    Please enter a Patient Name
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom01">Address
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" value="" class="form-control" id="validationCustom01"
                                                    placeholder="Address..." required>
                                                <div class="invalid-feedback">
                                                    Please enter a Address
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom03">Sex
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="input-group">
                                                    <select class="default-select wide form-control">
                                                        <option value="">Select Sex.</option>
                                                        <option value="">Male</option>
                                                        <option value="">Female</option>
                                                        <option value="">Other</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom01">Age
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="input-group">
                                                    <input class="form-control" type="text">
                                                    <select class="default-select wide form-control"
                                                        id="validationCustom03" required>
                                                        <option selected disabled value="">Please select
                                                        </option>
                                                        <option value="Year">Year</option>
                                                        <option value="Month">Month</option>
                                                        <option value="days">Days</option>
                                                    </select>
                                                </div>
                                                <div class="invalid-feedback">
                                                    Please select Age
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3 ">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom01">Payment Mode
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <select class="default-select wide form-control" id="validationCustom03"
                                                    required>
                                                    <option selected disabled value="">Please select
                                                    </option>
                                                    <option value="Cash">Cash</option>
                                                    <option value="Online">Online</option>
                                                    <option value="UPI">UPI</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please select Payment Mode
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" class="form-control"
                                                    for="validationCustom01">Amount
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" placeholder="Amount" />
                                                <div class="invalid-feedback">
                                                    Please enter a Amount
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" class="form-control"
                                                    for="validationCustom01">Remark
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" placeholder="Remark" />
                                                <div class="invalid-feedback">
                                                    Please enter a Remark
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" class="form-control"
                                                    for="validationCustom01">Debit Acc No.
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="number" class="form-control" placeholder="Debit Acc No." />
                                                <div class="invalid-feedback">
                                                    Please enter a Debit Acc No.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="col-md-12 mt-3">
                            <button class="btn btn-primary">Submit</button>
                            <button class="btn btn-primary ms-2">Print</button>
                        </div>
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