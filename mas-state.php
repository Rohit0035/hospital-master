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
                        <path d="M2.125 6.375L8.5 1.41667L14.875 6.375V14.1667C14.875 14.5424 14.7257 14.9027 14.4601 15.1684C14.1944 15.4341 13.8341 15.5833 13.4583 15.5833H3.54167C3.16594 15.5833 2.80561 15.4341 2.53993 15.1684C2.27426 14.9027 2.125 14.5424 2.125 14.1667V6.375Z" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M6.375 15.5833V8.5H10.625V15.5833" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Master </a>
            </li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">State Master</a></li>
        </ol>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <!-- Add State Form -->
                <div class="card" id="addForm">
                    <div class="card-body">
                        <div class="card-header p-2">Add State</div>
                        <form>
                            <div class="row">
                                <div class="col-md-12 mt-3">
                                    <label>Country </label>
                                    <select class="form-select">
                                        <option>Select Country</option>
                                        <option>USA</option>
                                        <option>India</option>
                                        <option>Canada</option>
                                    </select>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <label>State Name</label>
                                    <input type="text" placeholder="State Name" class="form-control" />
                                </div>
                                <div class="col-md-12 mt-3">
                                    <button class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Edit State Form (Initially Hidden) -->
                <div class="card" id="editForm" style="display: none;">
                    <div class="card-body">
                        <div class="card-header p-2">Edit State</div>
                        <form>
                            <div class="row">
                                <div class="col-md-12 mt-3">
                                    <label>Country </label>
                                    <select class="form-select">
                                        <option>Select Country</option>
                                        <option>USA</option>
                                        <option>India</option>
                                        <option>Canada</option>
                                    </select>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <label>State Name</label>
                                    <input type="text" id="editStateName" placeholder="State Name" class="form-control" />
                                </div>
                                <div class="col-md-12 mt-3">
                                    <button class="btn btn-primary">Update</button>
                                    <button type="button" class="btn btn-secondary" id="backButton">Back</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- State List Table -->
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example4" class="display table" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>S. No.</th>
                                        <th>Country Name</th>
                                        <th>State Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>India</td>
                                        <td>Maharashtra</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary btn-sm me-2 edit-btn" data-state="Maharashtra">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="#" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>USA</td>
                                        <td>California</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary btn-sm me-2 edit-btn" data-state="California">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="#" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Canada</td>
                                        <td>Ontario</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary btn-sm me-2 edit-btn" data-state="Ontario">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="#" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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

<!-- JavaScript to Toggle Forms -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const editForm = document.getElementById("editForm");
        const addForm = document.getElementById("addForm");
        const editButtons = document.querySelectorAll(".edit-btn");
        const backButton = document.getElementById("backButton");
        const editStateName = document.getElementById("editStateName");

        // Hide edit form initially
        editForm.style.display = "none";

        // Edit Button Click
        editButtons.forEach(button => {
            button.addEventListener("click", function (e) {
                e.preventDefault();
                const stateName = this.getAttribute("data-state");

                // Hide add form and show edit form
                addForm.style.display = "none";
                editForm.style.display = "block";

                // Set the state name in the edit input field
                editStateName.value = stateName;
            });
        });

        // Back Button Click
        backButton.addEventListener("click", function () {
            editForm.style.display = "none";
            addForm.style.display = "block";
        });
    });
</script>

<!-- footer start -->
<?php include 'footer.php';?>
<!-- footer close -->
