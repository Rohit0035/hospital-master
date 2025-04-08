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
                    OPD / Transaction</a>
            </li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit OPD Prescription </a></li>
        </ol>
        <span class="" style="float:right;">
            <a href="opd-prescription.php" class="btn btn-success">Back</a>
        </span>
    </div>
    <div class="container-fluid">
        <form>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-header p-2 text-info fw-bold">Patient Detail</div>
                            <div class="row mt-3">
                                <div class="col-md-4 mb-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="col-form-label" for="validationCustom01">Consultant Doctor
                                                <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                        <div class="col-md-8">
                                            <select class="default-select wide form-control">
                                                <option value=" Yes">--Select Consultant Doctor --</option>
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
                                <div class="col-md-4 mb-3">
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
                                            <label class="col-form-label" for="validationCustom01"> Next Appt.
                                                <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" id="validationCustom01"
                                                placeholder="Next Appt...." required>
                                            <div class="invalid-feedback">
                                                Please enter a Next Appt.
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
                                                <select class="default-select wide form-control" id="validationCustom03"
                                                    required>
                                                    <option selected disabled value="">Please select Sex
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

                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label class="col-form-label" for="validationCustom01">
                                                Case & Complaints <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                        <div class="col-md-10">
                                            <textarea class="form-control" id="validationCustom03" required rows="4"
                                                placeholder="Enter case details and complaints"></textarea>
                                            <div class="invalid-feedback">
                                                Please enter case details and complaints
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label class="col-form-label" for="validationCustom01">
                                               History of Present Illness <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                        <div class="col-md-10">
                                            <textarea class="form-control" id="validationCustom03" required rows="4"
                                                placeholder="Enter History of Present Illness"></textarea>
                                            <div class="invalid-feedback">
                                                Please enter History of Present Illness
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label class="col-form-label" for="validationCustom01">
                                                Past History <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                        <div class="col-md-10">
                                            <textarea class="form-control" id="validationCustom03" required rows="4"
                                                placeholder="Enter Past History"></textarea>
                                            <div class="invalid-feedback">
                                                Please enter Past History
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label class="col-form-label" for="validationCustom01">
                                               Comorbid Conditions <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                        <div class="col-md-10">
                                            <textarea class="form-control" id="validationCustom03" required rows="4"
                                                placeholder="Comorbid Conditions"></textarea>
                                            <div class="invalid-feedback">
                                                Please enter Comorbid Conditions
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label class="col-form-label" for="validationCustom01">
                                               Habits & Advice <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                        <div class="col-md-10">
                                            <textarea class="form-control" id="validationCustom03" required rows="4"
                                                placeholder="Habits & Advice"></textarea>
                                            <div class="invalid-feedback">
                                                Please enter Habits & Advice
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                
                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label class="col-form-label" for="validationCustom01">
                                            Family History <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                        <div class="col-md-10">
                                            <textarea class="form-control" id="validationCustom03" required rows="4"
                                                placeholder=" Family History"></textarea>
                                            <div class="invalid-feedback">
                                                Please enter  Family History
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label class="col-form-label" for="validationCustom01">
                                            Medication Being Taken <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                        <div class="col-md-10">
                                            <textarea class="form-control" id="validationCustom03" required rows="4"
                                                placeholder=" Medication Being Taken"></textarea>
                                            <div class="invalid-feedback">
                                                Please enter  Medication Being Taken
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label class="col-form-label" for="validationCustom01">
                                            Medication Examination <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                        <div class="col-md-10">
                                            <textarea class="form-control" id="validationCustom03" required rows="4"
                                                placeholder=" MExamination"></textarea>
                                            <div class="invalid-feedback">
                                                Please enter  Examination
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label class="col-form-label" for="validationCustom01">
                                            Any Known Allergies<span class="text-danger">*</span>
                                            </label>
                                        </div>
                                        <div class="col-md-10">
                                            <textarea class="form-control" id="validationCustom03" required rows="4"
                                                placeholder=" Any Known Allergies"></textarea>
                                            <div class="invalid-feedback">
                                                Please enter  Any Known Allergies
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label class="col-form-label" for="validationCustom01">
                                            Diagnosis<span class="text-danger">*</span>
                                            </label>
                                        </div>
                                        <div class="col-md-10">
                                            <textarea class="form-control" id="validationCustom03" required rows="4"
                                                placeholder=" Diagnosis"></textarea>
                                            <div class="invalid-feedback">
                                                Please enter  Diagnosis
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label class="col-form-label" for="validationCustom01">
                                            Special Comments / Next FollowUp<span class="text-danger">*</span>
                                            </label>
                                        </div>
                                        <div class="col-md-10">
                                            <textarea class="form-control" id="validationCustom03" required rows="4"
                                                placeholder=" Special Comments / Next FollowUp"></textarea>
                                            <div class="invalid-feedback">
                                                Please enter  Special Comments / Next FollowUp
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


