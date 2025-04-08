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
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Add Medical Certificate</a></li>
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
                                <div class="col-md-4 mb-3">
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
                                <div class="col-md-4 mb-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="col-form-label" for="validationCustom01">Type
                                                <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" value="OPD" disabled class="form-control"
                                                id="validationCustom01" placeholder="Type..." required>
                                            <div class="invalid-feedback">
                                                Please enter a Type
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
                                            <label class="col-form-label" for="validationCustom01">Time
                                                <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="time" class="form-control" id="validationCustom01"
                                                placeholder="Time..." required>
                                            <div class="invalid-feedback">
                                                Please enter a Time
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
                                                Please select Reff. Doctor
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
                                            <input type="text" placeholder="Patient Name" class="form-control"
                                                placeholder="Patient Name" />
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
                                            <label class="col-form-label" for="validationCustom03"> Guardians Name
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
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header p-2 text-info fw-bold">
                            Certificate Details
                            <span class="text-end">
                                <button class="btn btn-success btn-sm" onclick="addRow()">&#43;</button>
                            </span>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead class="table-light">
                                        <tr>
                                            <th>S. No.</th>
                                            <th>Date</th>
                                            <th>From Date</th>
                                            <th>To Date</th>
                                            <th>Diagnosis</th>
                                            <th>Fitness</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="dataTable"></tbody>
                                </table>
                            </div>
                            <button class="btn btn-primary" onclick="saveData()">Save</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="mt-2">
                                <button class="btn btn-primary">Save All</button>
                                <button class="btn btn-primary ms-2">Print </button>
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


<!-- dynamic column -->
<script>
document.addEventListener("DOMContentLoaded", loadTable); 

function addRow(sno = "", date = "", fromDate = "", toDate = "", diagnosis = "", fitness = "") {
    let table = document.getElementById("dataTable");
    let row = table.insertRow();
    row.innerHTML = `
        <td><input type="text" class="form-control" value="${sno}"></td>
        <td><input type="date" class="form-control" value="${date}"></td>
        <td><input type="date" class="form-control" value="${fromDate}"></td>
        <td><input type="date" class="form-control" value="${toDate}"></td>
        <td><input type="text" class="form-control" value="${diagnosis}"></td>
        <td><input type="text" class="form-control" value="${fitness}"></td>
        <td>
            <button class="btn btn-danger btn-sm text-white" onclick="deleteRow(this)"><i class="fa fa-close"></i></button>
        </td>`;
}

function deleteRow(btn) {
    let row = btn.parentNode.parentNode;
    row.parentNode.removeChild(row);
    saveData();
}

function saveData() {
    let table = document.getElementById("dataTable");
    let data = [];

    for (let i = 0; i < table.rows.length; i++) {
        let row = table.rows[i].cells;
        let rowData = {
            sno: row[0].querySelector("input").value,
            date: row[1].querySelector("input").value,
            fromDate: row[2].querySelector("input").value,
            toDate: row[3].querySelector("input").value,
            diagnosis: row[4].querySelector("input").value,
            fitness: row[5].querySelector("input").value
        };
        data.push(rowData);
    }

    localStorage.setItem("tableData", JSON.stringify(data));
}

function loadTable() {
    let savedData = localStorage.getItem("tableData");
    if (savedData) {
        let rows = JSON.parse(savedData);
        rows.forEach(row => {
            addRow(row.sno, row.date, row.fromDate, row.toDate, row.diagnosis, row.fitness);
        });
    }
}
</script>