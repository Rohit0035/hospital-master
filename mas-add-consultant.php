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
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Add Consultant</a></li>
        </ol>
        <span class="" style="float:right;">
            <a href="mas-consultant-list.php" class="btn btn-success">Back</a>
        </span>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header p-2">Add Consultant </div>
                        <form class="needs-validation">
                            <div class="row">
                                <div class="col-md-4 mt-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="col-form-label" for="validationCustom01"> Name
                                                <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" id="validationCustom01"
                                                placeholder="Consultant Name.." required>
                                            <div class="invalid-feedback">
                                                Please enter a Consultant Name.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="col-form-label" for="validationCustom02">Department
                                                <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                        <div class="col-md-8">
                                            <select class="default-select wide form-control" id="validationCustom02"
                                                required>
                                                <option selected disabled value="">Please select department</option>
                                                <option value="html"></option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Please select a one.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="col-form-label" for="validationCustom03">Specialization
                                                <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                        <div class="col-md-8">
                                            <select class="default-select wide form-control" id="validationCustom03"
                                                required>
                                                <option selected disabled value="">Please select specialization</option>
                                                <option value="html"></option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Please select a one.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="col-form-label" for="validationCustom04">Nature
                                                <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                        <div class="col-md-8">
                                            <select class="default-select wide form-control" id="validationCustom04"
                                                required>
                                                <option selected disabled value="">Please select nature</option>
                                                <option value="html"></option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Please select a one.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="col-form-label" for="validationCustom05"> Mobile
                                                <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="number" class="form-control" id="validationCustom05"
                                                placeholder="Mobile.." required>
                                            <div class="invalid-feedback">
                                                Please enter a Mobile.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="col-form-label" for="validationCustom06"> Email ID
                                                <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="number" class="form-control" id="validationCustom06"
                                                placeholder="Email ID.." required>
                                            <div class="invalid-feedback">
                                                Please enter a Email ID.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="col-form-label" for="validationCustom07"> Short Name
                                                <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" id="validationCustom07"
                                                placeholder="Short Name..." required>
                                            <div class="invalid-feedback">
                                                Please enter a Short Name.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="col-form-label" for="validationCustom08"> Timing
                                                <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="time" class="form-control" id="validationCustom08"
                                                placeholder="Short Name..." required>
                                            <div class="invalid-feedback">
                                                Please enter a Timing.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="col-form-label" for="validationCustom09"> Date Of Birth
                                                <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="date" class="form-control" id="validationCustom09"
                                                placeholder="..." required>
                                            <div class="invalid-feedback">
                                                Please enter a DOB.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="col-form-label" for="validationCustom10">Anniversary Date
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
                                <div class="col-md-4 mt-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="col-form-label" for="validationCustom11">OPD Charge
                                                <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="number" class="form-control" id="validationCustom11"
                                                placeholder="..." required>
                                            <div class="invalid-feedback">
                                                Please enter a OPD Charge.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="col-form-label" for="validationCustom12">Casually Charge
                                                <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="number" class="form-control" id="validationCustom12"
                                                placeholder="..." required>
                                            <div class="invalid-feedback">
                                                Please enter a Casually Charge.
                                                <span class="text-danger">*</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="col-form-label" for="validationCustom13">OPD Valid Upto
                                                <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="number" class="form-control" id="validationCustom13"
                                                placeholder="..." required>
                                            <div class="invalid-feedback">
                                                Please enter OPD Valid Upto.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="col-form-label" for="validationCustom14">OPD Charge b/w valid
                                                period
                                                <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="number" class="form-control" id="validationCustom14"
                                                placeholder="..." required>
                                            <div class="invalid-feedback">
                                                Please enter OPD Charge b/w valid period
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="col-form-label" for="validationCustom14">Active
                                                <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="mb-0 mb-0">
                                                <div class="form-check custom-checkbox form-check-inline">
                                                    <input type="radio" class="form-check-input" id="customRadioBox7"
                                                        name="optradioCustom1">
                                                    <label class="form-check-label" for="customRadioBox7">Yes</label>
                                                </div>
                                                <div class="form-check custom-checkbox form-check-inline">
                                                    <input type="radio" class="form-check-input" id="customRadioBox8"
                                                        name="optradioCustom1">
                                                    <label class="form-check-label" for="customRadioBox8">No</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="col-form-label" for="validationCustom16">MCI Reg. No.
                                                <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="number" class="form-control" id="validationCustom16"
                                                placeholder="..." required>
                                            <div class="invalid-feedback">
                                                Please enter MCI Reg. No.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="col-form-label" for="validationCustom17">PAN No.
                                                <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="number" class="form-control" id="validationCustom17"
                                                placeholder="..." required>
                                            <div class="invalid-feedback">
                                                Please enter PAN No.
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
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Clinic Details
                        <span class="text-enf">
                            <button class="btn btn-success btn-sm" onclick="addRow()">&#43;</button>
                        </span>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead class="table-light">
                                <tr>
                                    <th>Site</th>
                                    <th>Timings</th>
                                    <th>Phone</th>
                                    <th>City</th>
                                    <th>Address1</th>
                                    <th>Address2</th>
                                    <th>Address3</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="dataTable">
                            </tbody>
                        </table>
                        <button class="btn btn-primary" onclick="saveData()">Save</button>
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



<!-- dynamic column -->

<script>
document.addEventListener("DOMContentLoaded", loadTable); // Load table data on page load

function addRow(site = "", timings = "", phone = "", city = "", address1 = "", address2 = "", address3 = "") {
    let table = document.getElementById("dataTable");
    let row = table.insertRow();
    row.innerHTML = `
                <td><input type="text" class="form-control" value="${site}"></td>
                <td><input type="time" class="form-control" value="${timings}"></td>
                <td><input type="text" class="form-control" value="${phone}"></td>
                <td><input type="text" class="form-control" value="${city}"></td>
                <td><input type="text" class="form-control" value="${address1}"></td>
                <td><input type="text" class="form-control" value="${address2}"></td>
                <td><input type="text" class="form-control" value="${address3}"></td>
                <td>
                    <button class="btn btn-danger btn-sm text-white" onclick="deleteRow(this)"><i class="fa fa-close"></i></button>
                </td>`;
}

function deleteRow(btn) {
    let row = btn.parentNode.parentNode;
    row.parentNode.removeChild(row);
    saveData(); // Save data after deletion
}

function saveData() {
    let table = document.getElementById("dataTable");
    let data = [];
    for (let i = 0; i < table.rows.length; i++) {
        let row = table.rows[i].cells;
        let rowData = {
            site: row[0].querySelector("input").value,
            timings: row[1].querySelector("input").value,
            phone: row[2].querySelector("input").value,
            city: row[3].querySelector("input").value,
            address1: row[4].querySelector("input").value,
            address2: row[5].querySelector("input").value,
            address3: row[6].querySelector("input").value
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
            addRow(row.site, row.timings, row.phone, row.city, row.address1, row.address2, row.address3);
        });
    }
}
</script>