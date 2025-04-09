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
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Area Wise OPD Registration</a></li>
        </ol>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row mt-3">
                            <div class="col-md-12 mb-3">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label class="col-form-label" for="validationCustom01">From Date
                                            <span class="text-danger">*</span>
                                        </label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="date" value=""  class="form-control"
                                            id="validationCustom01" placeholder="Doc Type..." required>
                                        <div class="invalid-feedback">
                                            Please enter a From Date
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label class="col-form-label" for="validationCustom01">To Date
                                            <span class="text-danger">*</span>
                                        </label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="date" value=""  class="form-control"
                                            id="validationCustom01" placeholder="Doc Type..." required>
                                        <div class="invalid-feedback">
                                            Please enter a From Date
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
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
                                            <option value="1">Summary</option>
                                            <option value="2">Detail</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select a Type
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <button class="btn btn-info">Load</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table  id="example4" class="table display">
                                <thead>
                                    <tr>
                                        <th style="width:50px;">
                                            <div class="form-check custom-checkbox checkbox-success check-lg me-3">
                                                <input type="checkbox" class="form-check-input" id="checkAll"
                                                    required="">
                                                <label class="form-check-label" for="checkAll"></label>
                                            </div>
                                        </th>
                                        <th><strong>Area Name</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-check custom-checkbox checkbox-success check-lg me-3">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox2"
                                                    required="">
                                                <label class="form-check-label" for="customCheckBox2"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="w-space-no">Jackson</span>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-3">
                            <button class="btn btn-info" onclick="printTable()">Print</button>
                            <button class="btn btn-info ">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- print receipt start -->
            <div class="col-md-12 d-none">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="printableTable">
                                <div style="text-align: center; font-weight: bold; font-size: 18px;">
                                    DR. PERWEZ HOSPITAL
                                </div>
                                <div style="text-align: center; font-size: 14px; margin-bottom: 10px;">
                                    Area Wise OPD Registration Summary Report From 01/Apr/2024 To 22/Mar/2025
                                </div>

                                <table style="width: 100%; border-collapse: collapse; border: 1px solid black;">
                                    <tr style="background-color: #ddd;">
                                        <th style="border: 1px solid black; padding: 8px; text-align: left;">Area</th>
                                        <th style="border: 1px solid black; padding: 8px; text-align: right;">No. of
                                            Patient</th>
                                    </tr>
                                    <tr>
                                        <td style="border: 1px solid black; padding: 8px; padding-left: 20px;">Siliguri-
                                            Shiv
                                            Mandir</td>
                                        <td style="border: 1px solid black; padding: 8px; text-align: right;">1</td>
                                    </tr>
                                    <tr>
                                        <td
                                            style="border: 1px solid black; padding: 8px; font-weight: bold; text-align: right;">
                                            Total :</td>
                                        <td style="border: 1px solid black; padding: 8px; text-align: right;">1</td>
                                    </tr>
                                    <tr>
                                        <td
                                            style="border: 1px solid black; padding: 8px; font-weight: bold; text-align: right;">
                                            Grand Total :</td>
                                        <td style="border: 1px solid black; padding: 8px; text-align: right;">1</td>
                                    </tr>
                                </table>

                                <div style="margin-top: 10px; font-size: 12px;">
                                    Printed on 22/Mar/2025 16:23 <span style="float: right;">End of Report</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- print receipt start close -->
        </div>
    </div>
</div>

<!--**********************************
            Content body end
***********************************-->

<!-- footer start -->
<?php include 'footer.php';?>
<!-- footer close -->


<!-- js for print -->

<script>
function printTable() {
    var printContents = document.getElementById("printableTable").innerHTML;
    var originalContents = document.body.innerHTML;

    document.body.innerHTML = "<html><head><title>Print</title></head><body>" + printContents + "</body></html>";

    window.print();

    document.body.innerHTML = originalContents;
    location.reload();
}
</script>