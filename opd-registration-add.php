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
            <li class="breadcrumb-item active"><a href="javascript:void(0)">OPD Registration</a></li>
        </ol>
        <span class="" style="float:right;">
            <a href="opd-registration.php" class="btn btn-success">Back</a>
        </span>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header p-2">Add OPD Registration </div>
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
                                                <input type="number" class="form-control" id="validationCustom01"
                                                    placeholder="Doc Type..." required>
                                                <div class="invalid-feedback">
                                                    Please enter a Doc Type
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom02"> OPD No.
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
                                                    Please enter a OPD No.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom03">UHID No.
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="number" class="form-control" id="validationCustom03"
                                                    placeholder="UHID No...." required>
                                                <div class="invalid-feedback">
                                                    Please enter a UHID No.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom03">Time
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="time" class="form-control" id="validationCustom03"
                                                    placeholder="UHID No...." required>
                                                <div class="invalid-feedback">
                                                    Please enter a Time
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
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
                                    <div class="col-md-12 mt-3">
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
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom03"> Address 1
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="validationCustom03"
                                                        placeholder="Address 1...." required>
                                                    <div class="invalid-feedback">
                                                        Please enter a Address 1
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom03"> Address 2
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="validationCustom03"
                                                        placeholder="Address 2...." required>
                                                    <div class="invalid-feedback">
                                                        Please enter a Address 2
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom03"> Address 3
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="validationCustom03"
                                                        placeholder="Address 3...." required>
                                                    <div class="invalid-feedback">
                                                        Please enter a Address 3
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom03"> Mobile No.
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="input-group">
                                                    <input type="number" class="form-control" id="validationCustom03"
                                                        placeholder="Mobile No...." required>
                                                    <div class="invalid-feedback">
                                                        Please enter a Mobile No.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom03"> DOB
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="input-group">
                                                    <input type="date" class="form-control" id="validationCustom03"
                                                        placeholder="...." required>
                                                    <div class="invalid-feedback">
                                                        Please enter a DOB
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom01">Sex
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <select class="default-select wide form-control" id="validationCustom03"
                                                    required>
                                                    <option selected disabled value="">Please select Sex
                                                    </option>
                                                    <option value="male">Male</option>
                                                    <option value="Female">Female</option>
                                                    <option value="General">General</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please select Sex
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom01">Blood Group
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <select class="default-select wide form-control" id="validationCustom03"
                                                    required>
                                                    <option selected disabled value="">Please select Blood Group
                                                    </option>
                                                    <option value="Blood Group">Blood Group</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please select Sex
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom01">Martial Status
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <select class="default-select wide form-control" id="validationCustom03"
                                                    required>
                                                    <option selected disabled value="">Please select Martial Status
                                                    </option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please select Martial Status
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                                    <div class="col-md-12 mt-3">
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
                                </div>

                                <div class="col-md-4">
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom01">Religion
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <select class="default-select wide form-control" id="validationCustom03"
                                                    required>
                                                    <option selected disabled value="">Please select Religion
                                                    </option>
                                                    <option value=""></option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please select Religion
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom01">Organization
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="validationCustom01"
                                                    placeholder="Organization..." required>
                                                <div class="invalid-feedback">
                                                    Please enter a Organization
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom01">Card Hold Name
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="validationCustom01"
                                                    placeholder="Card Hold Name..." required>
                                                <div class="invalid-feedback">
                                                    Please enter a Card Hold Name
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom01">Code Policy No.
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="number" class="form-control" id="validationCustom01"
                                                    placeholder="Code Policy No...." required>
                                                <div class="invalid-feedback">
                                                    Please enter a Code Policy No.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom01">Any Known
                                                    Allegiance
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="number" class="form-control" id="validationCustom01"
                                                    placeholder="Any Known Allegiance ...." required>
                                                <div class="invalid-feedback">
                                                    Please enter a Any Known Allegiance
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom01">Mother Name
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="number" class="form-control" id="validationCustom01"
                                                    placeholder="Mother Name  ...." required>
                                                <div class="invalid-feedback">
                                                    Please enter a Mother Name
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom01">Complants
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="number" class="form-control" id="validationCustom01"
                                                    placeholder="Any Known Allegiance ...." required>
                                                <div class="invalid-feedback">
                                                    Please enter a Any Known Allegiance
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom01">ID Type
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="number" class="form-control" id="validationCustom01"
                                                    placeholder="ID Type ...." required>
                                                <div class="invalid-feedback">
                                                    Please enter a ID Type
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom01">ID No.
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="number" class="form-control" id="validationCustom01"
                                                    placeholder="ID No. ...." required>
                                                <div class="invalid-feedback">
                                                    Please enter a ID No.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom01">Temp
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="validationCustom01"
                                                    placeholder="Temp. ...." required>
                                                <div class="invalid-feedback">
                                                    Please enter a Temp
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom01">Weight
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="validationCustom01"
                                                    placeholder="Weight...." required>
                                                <div class="invalid-feedback">
                                                    Please enter a Weight
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom01">Foreigner
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <select class="default-select wide form-control">
                                                    <option value=" Yes">--select--</option>
                                                    <option value=" Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please enter a Foreigner
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
                                                <input type="date" class=form-control />
                                                <div class="invalid-feedback">
                                                    Please enter a Date
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom01">Casualty
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <select class="default-select wide form-control">
                                                    <option value=" Yes">--select--</option>
                                                    <option value=" Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please enter a Casualty
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom01">Old Patient
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <select class="default-select wide form-control">
                                                    <option value=" Yes">--select--</option>
                                                    <option value=" Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please enter a Old Patient
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
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
                                </div>
                                <div class="col-md-4">
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-body text-center">
                                                        <img src="https://picsum.photos/536/354"
                                                            style="width:150px; height:150px; border-radius: 100px;" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom01">Upload Profile
                                                    Image
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="file" class="form-control" id="validationCustom01"
                                                    placeholder="" required>
                                                <div class="invalid-feedback">
                                                    Please upload a Image
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom01">Caste
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <select class="default-select wide form-control">
                                                    <option value=" Yes">--Select Caste--</option>
                                                    <option value=" "></option>
                                                    <option value=""></option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please select a Caste
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
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
                                    <div class="col-md-12 mt-3">
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
                                                    Please select a Caste
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom01">Department
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <select class="default-select wide form-control">
                                                    <option value=" Yes">--Select Department --</option>
                                                    <option value=" "></option>
                                                    <option value=""></option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please select a Department
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom01">Area
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <select class="default-select wide form-control">
                                                    <option value=" Yes">--Select Area --</option>
                                                    <option value=" "></option>
                                                    <option value=""></option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please select a Area
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom01">Phone No.
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" placeholder="Phone No." />
                                                <div class="invalid-feedback">
                                                    Please enter a Phone No
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" for="validationCustom01">Email ID.
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="email" class="form-control" placeholder="email id" />
                                                <div class="invalid-feedback">
                                                    Please enter a Email ID
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
                                                <label class="col-form-label" for="validationCustom01">Service Tax
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" placeholder="Service Tax " />
                                                <div class="invalid-feedback">
                                                    Please enter a Service Tax
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" class="form-control"
                                                    for="validationCustom01">Dis % & Amt.
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Dis " />
                                                    <input type="text" class="form-control" placeholder="% " />
                                                    <input type="text" class="form-control" placeholder="Amt " />
                                                </div>
                                                <div class="invalid-feedback">
                                                    Please enter a Service Tax
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-form-label" class="form-control"
                                                    for="validationCustom01">Net Amount
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder=" " />
                                                    <input type="text" class="form-control" placeholder="" />
                                                </div>
                                                <div class="invalid-feedback">
                                                    Please enter a Net Amount
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
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