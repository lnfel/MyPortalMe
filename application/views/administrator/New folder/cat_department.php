<!-- Main Content -->
<div class="main-content">
   <section class="section">
     <div class="section-header">
       <h1>Manage Departments</h1>
     </div>
     <div class="section-body">


         

         
         
         
         <div class="row">
                    <div class="col-md-6">
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
                                                            <option value="DepartmentCode">Department Code</option>
                                                            <option value="DepartmentName">Department Name</option>
                                                            <option value="ActiveStatus">Active Status</option>
                                            </select>
                                    </div>
                            </div>
                            <div class="col-md-10">
                                    <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="keyword" placeholder="Search Department " data-toggle="tooltip" data-placement="top" title="Search Department ">
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
                                                <th >Active Status</th>
                                                <th style="width:250px;"><center>Action</center></th>
                                        </tr>
                                </thead>
                                <tbody>
                            <?php //if($result->num_rows > 0){ ?>
                                        <?php //$i=1; do { ?>
                                                <tr>
                                                        <th style="vertical-align: middle;"><?php //echo $i++; ?></th>
                                                        
                                                        <td style="vertical-align: middle;"> <?php //echo $row['DepartmentID'].', '.$row['DepartmentCode'].' '.$row['DepartmentName']; ?></td>
                                                        <td style="vertical-align: middle;">
                                                                <?php //$emptype = $row['EmployeeTypeID']; 
                                                                        //$result1 = $conn->query("SELECT * FROM employee_type WHERE EmployeeTypeID = '$emptype'") or die($conn->error);
                                                                        //$row1 = $result1->fetch_assoc();
                                                                        //echo $row1['EmployeeType'];
                                                                ?>
                                                        </td>
                                                        <td style="vertical-align: middle;">
                                                                <?php //$emptype = $row['EmployeeTypeID']; 
                                                                        //$result1 = $conn->query("SELECT * FROM employee_type WHERE EmployeeTypeID = '$emptype'") or die($conn->error);
                                                                        //$row1 = $result1->fetch_assoc();
                                                                        //echo $row1['EmployeeType'];
                                                                ?>
                                                        </td>
                                                        <td style="vertical-align: middle;">
                                                                <center>
<!--                                                                    <div class="btn-group mb-2">
                                                                        <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            Action Menu
                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                          <a class="dropdown-item btn-info" href="#"><i class="fa fa-file"></i> View Information</a>
                                                                          <a class="dropdown-item btn-warning" href="#"><i class="fa fa-edit"></i> Update Information</a>
                                                                          <a class="dropdown-item btn-danger" href="#"><i class="fa fa-trash"></i> Delete Information</a>
                                                                          <div class="dropdown-divider"></div>
                                                                          <a class="dropdown-item btn-success" href="#"><i class="fa fa-print"></i> Print Information</a>
                                                                        </div>
                                                                    </div>-->
                                                                        <a href="admin_employee_view.php?id=<?php //echo $row['ID']; ?>" class="btn btn-info btn-sm">View <i class="fa fa-file"></i></a>
                                                                        <!-- <a href="print_employee.php?id=<?php //echo $row['ID']; ?>" class="btn btn-success btn-sm" ><i class="fa fa-print"></i></a>
                                                                     -->
                                                                     <a href="admin_employee_edit.php?id=<?php //echo $row['ID']; ?>" class="btn btn-warning btn-sm" >Edit <i class="fa fa-edit"></i></a>
                                                                    <a href="admin_employee_delete.php?id=<?php //echo $row['ID']; ?>" class="btn btn-danger btn-sm"  onclick="return confirm('Are you sure you want to delete?');">Delete <i class="fa fa-trash"></i></a>
                                                        </center>
                                                        </td>
                                                </tr>
                                        <?php  //} while ($row = $result->fetch_assoc());  ?>
                            <?php  //}  ?>
                                </tbody>
                        </table>
                </div>
            </div>
        </div>
       
         
         
         
         

     </div>
   </section>
 </div>
	  
<!--        <div class="modal fade" tabindex="-1" role="dialog" id="exampleModal">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Modal body text goes here.</p>
              </div>
              <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>-->

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
                                                            <label style="font-weight:bold;">Department ID</label>
                                                            <input type="text" name="DepartmentID" class="form-control" value="" placeholder="Department ID" data-toggle="tooltip" data-placement="top" title="Department ID" onkeyup="this.value = this.value.toUpperCase()" required>
                                                            <label style="font-weight:bold;">Department Code</label>
                                                            <input type="text" name="DepartmentCOde" class="form-control" value="" placeholder="Department Code" data-toggle="tooltip" data-placement="top" title="Department Code" onkeyup="this.value = this.value.toUpperCase()" required>
                                                            <label style="font-weight:bold;">Department Name</label>
                                                            <input type="text" name="DepartmentName" class="form-control" value="" placeholder="Department Name" data-toggle="tooltip" data-placement="top" title="Sear Capacity" onkeyup="this.value = this.value.toUpperCase()">
                                                            <label style="font-weight:bold;">Active Status</label>
                                                    <select name="ActiveStatus" class="form-control input-sm" placeholder="Active Status" data-toggle="tooltip" data-placement="top" title="Active Status" onkeyup="this.value = this.value.toUpperCase()">
                                                    <?php 
                                                                //$result_employeetype = $conn->query("SELECT * FROM employee_type") or die($conn->error);
                                                                //$row_employeetype = $result_employeetype->fetch_assoc();
                                                     ?>    
                                                        <option>Active Status</option>
                                                        <?php //do { ?>
                                                                <option value="<?php //echo $row_employeetype['EmployeeTypeID']; ?>"><?php //echo $row_employeetype['EmployeeType']; ?></option>
                                                        <?php //} while ($row_employeetype = $result_employeetype->fetch_assoc()); ?>

                                                    </select>  
                                                    

                                                   </div>
                                            </div>

                                    </div>
                            </div>
							
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-secondary" data-dismiss="modal">
                                <i class="fa fa-refresh"></i> Clear Changes
                            </button>
                            <button type="submit" name="add_employee" class="btn btn-primary"><i class="fa fa-plus"></i> Add Department </button>
                        </div>
                    </div>
                </div>
            </div>
			</form>