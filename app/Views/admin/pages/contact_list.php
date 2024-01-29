            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0">User Data</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                            <li class="breadcrumb-item active">User Data</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Phone No</th>
                                                    <th>Requirement</th>
                                                    <th>Through</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach ($data as $row): ?>
                                                <tr>
                                                    <td><?php echo $row->name; ?></td>
                                                    <td><?php echo $row->email; ?></td>
                                                    <td><?php echo $row->phone; ?></td>
                                                    <td><?php echo $row->requirement; ?></td>
                                                    <td>
                                                        <?php if ($row->type == 1) { ?>
                                                    <button type="button" class="btn btn-outline-success">Contact Form</button>
                                                        <?php }else{?>
                                                    <button type="button" class="btn btn-outline-warning">Enquiry Form</button>
                                                        <?php }?>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                            </tbody>
                                        </table>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
    
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->