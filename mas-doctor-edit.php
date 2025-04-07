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
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Doctor</a></li>
        </ol>
        <span class="" style="float:right;">
            <a href="mas-doctor.php" class="btn btn-success">Back</a>
        </span>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header p-2">Add Doctor </div>
                        <form class="needs-validation">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom01"> Doctor Reg. No.
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="number" class="form-control" id="validationCustom01"
                                                    placeholder="Doctor Reg. No..." required>
                                                <div class="invalid-feedback">
                                                    Please enter a Doctor Reg. No.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom02"> Doctor Name
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="validationCustom02"
                                                    placeholder=" Doctor Name..." required>
                                                <div class="invalid-feedback">
                                                    Please enter a Doctor Name
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom02"> Doctor Profile
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="file" class="form-control" id="validationCustom02"
                                                    placeholder=" Doctor Name..." required>
                                                <div class="invalid-feedback">
                                                    Please enter a Doctor Profile
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom03">Specialization
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <select class="default-select wide form-control" id="validationCustom03"
                                                    required>
                                                    <option selected disabled value="">Please select specialization
                                                    </option>
                                                    <option value="html"></option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please select a one.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom03">Mobile No.
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="number" class="form-control" id="validationCustom03"
                                                    placeholder="Mobile No..." required>
                                                <div class="invalid-feedback">
                                                    Please enter a Mobile No
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom04"> Sharing Pattern
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <select class="default-select wide form-control" id="validationCustom03"
                                                    required>
                                                    <option selected disabled value="">Please select Sharing Pattern
                                                    </option>
                                                    <option value="html"></option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please enter a Sharing Pattern
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom04"> Sharing Detail
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="validationCustom03"
                                                    placeholder="Sharing Detail.." required>
                                                <div class="invalid-feedback">
                                                    Please enter a Sharing Detail
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom04"> Doctor Type
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <select class="default-select wide form-control" id="validationCustom03"
                                                    required>
                                                    <option selected value="">Please select Doctor Type
                                                    <option value="Referral">Referral</option>
                                                    <option value="Referral">In-house</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please enter a Doctor Type
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom07"> Marketing Person
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="validationCustom07"
                                                    placeholder="Marketing Person..." required>
                                                <div class="invalid-feedback">
                                                    Please enter a Marketing Person
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom08"> Consultation
                                                    Charge
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="number" class="form-control" id="validationCustom08"
                                                    placeholder="Consultation Charge..." required>
                                                <div class="invalid-feedback">
                                                    Please enter a Consultation Charge
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom14">Emergency OB
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="mb-0 mb-0">
                                                    <div class="form-check custom-checkbox form-check-inline">
                                                        <input type="radio" class="form-check-input"
                                                            id="customRadioBox7" name="optradioCustom1">
                                                        <label class="form-check-label"
                                                            for="customRadioBox7">Yes</label>
                                                    </div>
                                                    <div class="form-check custom-checkbox form-check-inline">
                                                        <input type="radio" class="form-check-input"
                                                            id="customRadioBox8" name="optradioCustom1">
                                                        <label class="form-check-label" for="customRadioBox8">No</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom09"> Qualification
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="validationCustom09"
                                                    placeholder="Qualification..." required>
                                                <div class="invalid-feedback">
                                                    Please enter a Qualification.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom10">Marriage
                                                    Anniversary
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="date" class="form-control" id="validationCustom10"
                                                    placeholder="..." required>
                                                <div class="invalid-feedback">
                                                    Please enter a Anniversary Date.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom14">Status
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="mb-0 mb-0">
                                                    <div class="form-check custom-checkbox form-check-inline">
                                                        <input type="radio" class="form-check-input"
                                                            id="customRadioBox7" name="optradioCustom1">
                                                        <label class="form-check-label"
                                                            for="customRadioBox7">Active</label>
                                                    </div>
                                                    <div class="form-check custom-checkbox form-check-inline">
                                                        <input type="radio" class="form-check-input"
                                                            id="customRadioBox8" name="optradioCustom1">
                                                        <label class="form-check-label"
                                                            for="customRadioBox8">Inactive</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom11">Address 1
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="validationCustom11"
                                                    placeholder="Address 1..." required>
                                                <div class="invalid-feedback">
                                                    Please enter a Address 1
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom11">Address 2
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="validationCustom11"
                                                    placeholder="Address 2..." required>
                                                <div class="invalid-feedback">
                                                    Please enter a Address 2
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom11">Address 3
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="validationCustom11"
                                                    placeholder="Address 3..." required>
                                                <div class="invalid-feedback">
                                                    Please enter a Address 3
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom07"> Country
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <select class="default-select wide form-control" id="validationCustom03"
                                                    required>
                                                    <option selected value="">Please select Country
                                                    <option value="Country">Country</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please enter a Country
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom07"> State
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <select class="default-select wide form-control" id="validationCustom03"
                                                    required>
                                                    <option selected value="">Please select State
                                                    <option value="State">State</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please enter a State
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ccol-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom07"> City
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <select class="default-select wide form-control" id="validationCustom03"
                                                    required>
                                                    <option selected value="">Please select City
                                                    <option value="City">City</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please enter a City
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom07"> Area
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <select class="default-select wide form-control" id="validationCustom03"
                                                    required>
                                                    <option selected value="">Please select Area
                                                    <option value="City">Area</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please enter a Area
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="ccol-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom07"> Pin Code
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="number" class="form-control" id="validationCustom07"
                                                    placeholder="..." required>
                                                <div class="invalid-feedback">
                                                    Please enter a Pin Code
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom07"> Email ID
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="email" class="form-control" id="validationCustom07"
                                                    placeholder="..." required>
                                                <div class="invalid-feedback">
                                                    Please enter a Email ID
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom07"> Alternate Number
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="number" class="form-control" id="validationCustom07"
                                                    placeholder="..." required>
                                                <div class="invalid-feedback">
                                                    Please enter a Alternate Number
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom07"> Landline No.
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="number" class="form-control" id="validationCustom07"
                                                    placeholder="..." required>
                                                <div class="invalid-feedback">
                                                    Please enter a Landline
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom07"> PAN No.
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="number" class="form-control" id="validationCustom07"
                                                    placeholder="..." required>
                                                <div class="invalid-feedback">
                                                    Please enter a PAN No.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom07"> Registration No.
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="number" class="form-control" id="validationCustom07"
                                                    placeholder="..." required>
                                                <div class="invalid-feedback">
                                                    Please enter a Registration No.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom12">Available Days
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-check form-check-inline">
                                                    <input type="checkbox" class="form-check-input" id="monday"
                                                        name="days[]" value="Monday">
                                                    <label class="form-check-label" for="monday">Monday</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="checkbox" class="form-check-input" id="tuesday"
                                                        name="days[]" value="Tuesday">
                                                    <label class="form-check-label" for="tuesday">Tuesday</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="checkbox" class="form-check-input" id="wednesday"
                                                        name="days[]" value="Wednesday">
                                                    <label class="form-check-label" for="wednesday">Wednesday</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="checkbox" class="form-check-input" id="thursday"
                                                        name="days[]" value="Thursday">
                                                    <label class="form-check-label" for="thursday">Thursday</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="checkbox" class="form-check-input" id="friday"
                                                        name="days[]" value="Friday">
                                                    <label class="form-check-label" for="friday">Friday</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="checkbox" class="form-check-input" id="saturday"
                                                        name="days[]" value="Saturday">
                                                    <label class="form-check-label" for="saturday">Saturday</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="checkbox" class="form-check-input" id="sunday"
                                                        name="days[]" value="Sunday">
                                                    <label class="form-check-label" for="sunday">Sunday</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="checkbox" class="form-check-input" id="all"
                                                        name="days[]" value="all">
                                                    <label class="form-check-label" for="sunday">All Days like first day
                                                        selection</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom13">Per Patient Time
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="time" class="form-control" id="validationCustom13"
                                                    placeholder="..." required>
                                                <div class="invalid-feedback">
                                                    Please enter Per Patient Time
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <button class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
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
