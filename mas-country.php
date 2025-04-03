<!-- header start -->
<?php include 'header.php'; ?>
<!-- header close -->

<!--**********************************
            Content body start
***********************************-->
<div class="content-body">
    <!-- row -->
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
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Country</a></li>
        </ol>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <!-- Add Country Form -->
                <div class="card" id="addForm">
                    <div class="card-body">
                        <div class="card-header p-2">
                            Add Country
                        </div>
                        <form>
                            <div class="row">
                                <div class="col-md-12 mt-3">
                                    <label>Country Name </label>
                                    <input type="text" placeholder="Country Name" class="form-control" />
                                </div>
                                <div class="col-md-12 mt-3">
                                    <button class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Edit Country Form (Hidden by Default) -->
                <div class="card" id="editForm" style="display: none;">
                    <div class="card-body">
                        <div class="card-header p-2 d-flex justify-content-between align-items-center">
                            <span>Edit Country</span>
                            <button class="btn btn-secondary btn-sm" onclick="showAddForm()">Back</button>
                        </div>
                        <form>
                            <div class="row">
                                <div class="col-md-12 mt-3">
                                    <label>Country Name </label>
                                    <input type="text" id="editCountryName" class="form-control" placeholder="Country Name" />
                                </div>
                                <div class="col-md-12 mt-3">
                                    <button class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Country List -->
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example4" class="display table" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>S. No.</th>
                                        <th>Country Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Tiger Nixon</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="javascript:void(0);" class="btn btn-primary btn-sm me-2" onclick="showEditForm('Tiger Nixon')">
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
                                        <td>John Doe</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="javascript:void(0);" class="btn btn-primary btn-sm me-2" onclick="showEditForm('John Doe')">
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
                                        <td>Jane Smith</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="javascript:void(0);" class="btn btn-primary btn-sm me-2" onclick="showEditForm('Jane Smith')">
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

<!-- footer start -->
<?php include 'footer.php'; ?>
<!-- footer close -->

<script>
    function showEditForm(countryName) {
        document.getElementById('addForm').style.display = 'none'; 
        document.getElementById('editForm').style.display = 'block'; 
        document.getElementById('editCountryName').value = countryName; 
    }

    function showAddForm() {
        document.getElementById('editForm').style.display = 'none'; 
        document.getElementById('addForm').style.display = 'block'; 
    }
</script>
