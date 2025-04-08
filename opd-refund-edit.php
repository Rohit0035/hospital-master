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
                    OPD / Transaction </a>
            </li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Refund</a></li>
        </ol>
        <span class="" style="float:right;">
            <a href="opd-refund.php" class="btn btn-success">Back</a>
        </span>
    </div>
    <div class="container-fluid">
        <form>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <!-- <div class="card-header p-2 text-info fw-bold">Add OPD Charges </div> -->
                            <div class="row mt-3">
                                <div class="col-md-3 mb-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="col-form-label" for="validationCustom01">Doc Type
                                                <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" value="OPD" disabled class="form-control"
                                                id="validationCustom01" placeholder="Doc Type..." required>
                                            <div class="invalid-feedback">
                                                Please enter a Doc Type
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="col-form-label" for="validationCustom01">Date
                                                <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="date" class="form-control" id="validationCustom01"
                                                placeholder="Date..." required>
                                            <div class="invalid-feedback">
                                                Please enter a Date
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="col-form-label" for="validationCustom01">Doc No
                                                <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="number" class="form-control" id="validationCustom01"
                                                placeholder="Doc No..." required>
                                            <div class="invalid-feedback">
                                                Please enter a Doc No
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="col-form-label" for="validationCustom01">Find OPD
                                                <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                        <div class="col-md-8">
                                            <select class="default-select wide form-control" id="validationCustom03"
                                                required>
                                                <option selected disabled value="">Please select OPD No.
                                                </option>
                                                <option value="html"></option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Please select a OPD No
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-header p-2 text-info fw-bold">Patient Detail</div>
                            <div class="row mt-3">
                                <div class="col-md-4 mb-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="col-form-label" for="validationCustom01">UHID No.
                                                <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="number" class="form-control" id="validationCustom01"
                                                placeholder="Doc No..." required>
                                            <div class="invalid-feedback">
                                                Please enter a Doc No
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="col-form-label" for="validationCustom01">Patient
                                                <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                        <div class="col-md-8">
                                            <select class="default-select wide form-control" id="validationCustom03"
                                                required>
                                                <option selected disabled value="">Please select Patient
                                                </option>
                                                <option value=""></option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Please select a Patient
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="col-form-label" for="validationCustom03"> Guardians
                                                <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" placeholder="" class="form-control"
                                                placeholder="Guardians Name" />
                                            <div class="invalid-feedback">
                                                Please enter a Guardians
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="col-form-label" for="validationCustom01">Age
                                                <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="input-group">
                                                <input class="form-control" type="text">
                                                <select class="default-select wide form-control" id="validationCustom03"
                                                    required>
                                                    <option selected disabled value="">Please Sex
                                                    </option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                            <div class="invalid-feedback">
                                                Please select Age
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="col-form-label" for="validationCustom01">Case
                                                <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                        <div class="col-md-8">
                                            <select class="default-select wide form-control">
                                                <option value=" Yes">--Select Case--</option>
                                                <option value=" "></option>
                                                <option value=""></option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Please select a Case
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="col-form-label" for="validationCustom01">Consultant Doctor
                                                <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                        <div class="col-md-8">
                                            <select class="default-select wide form-control">
                                                <option value=" Yes">--Select onsultant Doctor --</option>
                                                <option value=" "></option>
                                                <option value=""></option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Please select
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="col-form-label" for="validationCustom03"> Address
                                                <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="validationCustom03"
                                                    placeholder="Address ...." required>
                                                <div class="invalid-feedback">
                                                    Please enter a Address
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-header p-2 text-info fw-bold">
                                Payment Detail
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-4 mb-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="col-form-label" for="validationCustom01">Payment Mode
                                                <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                        <div class="col-md-8">
                                            <select class="default-select wide form-control">
                                                <option value=" ">--Select Payment Mode* --</option>
                                                <option value=" ">Cash</option>
                                                <option value="">Card</option>
                                                <option value="">UPI</option>

                                            </select>
                                            <div class="invalid-feedback">
                                                Please select
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="col-form-label" for="validationCustom01">Refund Form
                                                <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                        <div class="col-md-8">
                                            <select class="default-select wide form-control">
                                                <option value=" ">--Select Payment Mode* --</option>
                                                <option value=" ">Registration</option>
                                                <option value=""></option>
                                                <option value=""></option>

                                            </select>
                                            <div class="invalid-feedback">
                                                Please select  Refund Form
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="col-form-label" for="validationCustom01">Amount
                                                <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="number" class="form-control" id="validationCustom01"
                                                placeholder="Amount...." required>
                                            <div class="invalid-feedback">
                                                Please enter a Amount
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="col-form-label" for="validationCustom01">Debit A/c.
                                                <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="number" class="form-control" id="validationCustom01"
                                                placeholder="Debit A/c......" required>
                                            <div class="invalid-feedback">
                                                Please enter a Debit A/c.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="col-form-label" for="validationCustom01">Remark
                                                <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="number" class="form-control" id="validationCustom01"
                                                placeholder="Remark......" required>
                                            <div class="invalid-feedback">
                                                Please enter a Remark
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="mt-2">
                                <button class="btn btn-primary">Save</button>
                                <button class="btn btn-primary ms-2">Print</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


<!--**********************************
            Content body end
***********************************-->

<!-- footer start -->
<?php include 'footer.php';?>
<!-- footer close -->
