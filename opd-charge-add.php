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
                    OPD </a>
            </li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Add OPD Charges</a></li>
        </ol>
        <span class="" style="float:right;">
            <a href="opd-charge-list.php" class="btn btn-success">Back</a>
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
                                <div class="col-md-3 mb-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="col-form-label" for="validationCustom01">Find IPD
                                                <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                        <div class="col-md-8">
                                            <select class="default-select wide form-control" id="validationCustom03"
                                                required>
                                                <option selected disabled value="">Please select IPD No.
                                                </option>
                                                <option value="html"></option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Please select a IPD
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="col-form-label" for="validationCustom01">Rate Mode
                                                <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                        <div class="col-md-8">
                                            <select class="default-select wide form-control" id="validationCustom03"
                                                required>
                                                <option selected disabled value="">Please select Rate Mode
                                                </option>
                                                <option value="Normal">Normal</option>
                                                <option value="High">High</option>
                                                <option value="Moderate">Moderate</option>
                                                <option value="Low">Low</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Please Select a Rate Mode
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
                                            <label class="col-form-label" for="validationCustom01"> OPD No.
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
                                <div class="col-md-4 mb-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="col-form-label" for="validationCustom03">Patient Name
                                                <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="input-group">
                                                <select class="default-select wide form-control"
                                                    style="max-width:100px;"">
                                                        <option value=" Miss.">Miss.</option>
                                                    <option value="Mrs.">Mrs.</option>
                                                    <option value="Mr.">Mr.</option>
                                                    <option value="Baby">Baby</option>
                                                    <option value="Mst.">Mst.</option>
                                                    <option value="Ms.">Ms.</option>
                                                </select>
                                                <input type="text" placeholder="" class="form-control"
                                                    placeholder="Patient Name" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="col-form-label" for="validationCustom03"> Guardians Name
                                                <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="input-group">
                                                <select class="default-select wide form-control"
                                                    style="max-width:100px;"">
                                                        <option value=" Miss.">Miss.</option>
                                                    <option value="Mrs.">Mrs.</option>
                                                    <option value="Mr.">Mr.</option>
                                                    <option value="Baby">Baby</option>
                                                    <option value="Mst.">Mst.</option>
                                                    <option value="Ms.">Ms.</option>
                                                </select>
                                                <input type="text" placeholder="" class="form-control"
                                                    placeholder="Guardians Name" />
                                                <div class="invalid-feedback">
                                                    Please enter a Guardians
                                                </div>
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
                                            <label class="col-form-label" for="validationCustom01">Reff. Doctor
                                                <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                        <div class="col-md-8">
                                            <select class="default-select wide form-control">
                                                <option value=" Yes">--Select Reff. Doctor --</option>
                                                <option value=" "></option>
                                                <option value=""></option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Please select a Caste
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
                            <div class="card-header p-2 text-info fw-bold">Billing Charges
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