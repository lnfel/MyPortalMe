<!-- Main Content -->
<div class="main-content">
   <section class="section">
     <div class="section-header">
       <h1>Manage Departments</h1>
     </div>
     <div class="section-body">


         

         
         
         
         <div class="row">
                    <div class="col-md-6">
                         <div class="float-left">
                                <h2 class="section-title mt-0">Manage Department</h2>
                                <p class="section-lead">
                                  Organize Data.
                                </p>
                            </div>
                    </div>
                    <div class="col-md-6">
                            <div class="float-right">
                                    <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary"><i class="fa fa-user-plus"></i> Add Department </a>
                                    <!-- <a href="admin_add_employee.php" class="btn btn-primary" ><i class="fa fa-user-plus"></i> Add Employee</a> -->
                                    <!-- <a href="reports.php" class="btn btn-warning" >
                                            <i class="fa fa-database"></i> Reports</a> -->
                            </div>
                            <div class="clearfix"></div>
                            <br />
                    </div>
        </div>
         
         <form method="post">
                    <div class="row" >
                            <div class="col-md-2">
                                    <div class="form-group">
                                            <select class="form-control" name="cat_keyword" data-toggle="tooltip" data-placement="top" title="Select Category">
                                                            <option value="DepartmentID">Department ID</option>
                                                            <option value="DepartmentAcronym">Department Acronym</option>
                                                            <option value="DepartmentName">Department Name</option>
                                                            <option value="AcademicDept">Academic Department</option>
                                            </select>
                                    </div>
                            </div>
                            <div class="col-md-10">
                                    <div class="input-group mb-3">
                                            <input type="text" class="form-control" autofocus="" name="keyword" placeholder="Search Department " data-toggle="tooltip" data-placement="top" title="Search Department ">
                                            <div class="input-group-append">
                                                            <button class="btn btn-primary" type="submit" name="submit" data-toggle="tooltip" data-placement="top" title="Search"><i class="fa fa-search"></i> Search</button>
                                            </div>
                                    </div>
                            </div>
                    </div>
        </form>
         
         
          <div class="card">
              <div class="table-responsive">
                   <div style="height:620px;overflow:auto;">
                        <table class="table table-striped table-hover">
                                <thead>
                                    <tr style="background-color:<?php echo $_SESSION['thm_bg_secondary']; ?>;">
                                                <th style="width:20px;">#</th>
                                                <th >Department ID</th>
                                                <th >Department Name</th>
                                                <th style="text-align:center;">Academic Department</th>
                                                <th style="width:250px;"><center>Action</center></th>
                                        </tr>
                                </thead>
                                <tbody>
                                <?php $i=1; ?>
                                    <?php foreach ($cat_department as $emp) { ?>
                                        <tr     >
                                                <th style="vertical-align: middle;"><?php echo $emp->DepartmentID; ?></th>
                                                <td style="vertical-align: middle;"> <?php echo $emp->DepartmentAcronym; ?></td>
                                                <td style="vertical-align: middle;"> <?php echo $emp->DepartmentName; ?></td>
                                                <td style="vertical-align: middle;"> <?php echo $emp->AcademicDept; ?></td>
                                                <td style="vertical-align: middle;">
                                                        <center>
                                                            <a href="<?php echo base_url('administrator/department_edit/'.$emp->DepartmentID); ?>" class="btn btn-warning btn-sm" >Edit <i class="fa fa-edit"></i></a>
                                                            <a href="<?php echo base_url('administrator/department_delete/'.$emp->DepartmentID); ?>" class="btn btn-danger btn-sm"  onclick="return confirm('Are you sure you want to delete?');">Delete <i class="fa fa-trash"></i></a>
                                                        </center>
                                                </td>
                                        </tr>
                                        <?php  }  ?>
                                </tbody>
                        </table>
                </div>
            </div>
        </div>
       
         
         
         
         

     </div>
   </section>
 </div>
	  


<form method="post">
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color:<?php echo $_SESSION['thm_bg_primary']; ?>;color:<?php echo $_SESSION['thm_fg_primary']; ?>">
                            <h5 class="modal-title mb-3">Add New Department </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:<?php echo $_SESSION['thm_fg_primary']; ?>">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            
                            <div class="row" >
                                    <div class="col-md-12">
                                            <div class="row">
                                                    <div class="col-md-12">
                                                            <label style="font-weight:bold;">Department Acronym</label>
                                                            <input type="text" name="DepartmentAcronym" class="form-control" value="" placeholder="Department Acronym" data-toggle="tooltip" data-placement="top" title="Department Acronym" onkeyup="this.value = this.value.toUpperCase()" required>
                                                            <label style="font-weight:bold;">Department Name</label>
                                                            <input type="text" name="DepartmentName" class="form-control" value="" placeholder="Department Name" data-toggle="tooltip" data-placement="top" title="Sear Capacity" onkeyup="this.value = this.value.toUpperCase()">
                                                            <label style="font-weight:bold;">Academic department</label>
                                                            <input name="AcademicDept" class="form-control input-sm" placeholder="Academic Department" data-toggle="tooltip" data-placement="top" title="Academic Department" onkeyup="this.value = this.value.toUpperCase()">

                                                    

                                                   </div>
                                            </div>

                                    </div>
                            </div>
							
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-secondary" data-dismiss="modal">
                                <i class="fa fa-refresh"></i> Clear Changes
                            </button>
                            <button type="submit" name="add_department" class="btn btn-primary"><i class="fa fa-plus"></i> Add Department </button>
                        </div>
                    </div>
                </div>
            </div>
			</form>