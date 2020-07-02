<!-- Main Content -->
 <div class="main-content">
   <section class="section">
     <div class="section-header">
       <h1>Manage Student</h1>
     </div>
     <div class="section-body">


         

         
         
         
         <div class="row">
                    <div class="col-md-6">
                        <div class="float-left">
                                <h2 class="section-title mt-0">Manage Student Profile </h2>
                                <p class="section-lead">
                                  Organize Their Profile.
                                </p>
                            </div>
                    </div>
                    <div class="col-md-6">
                            <div class="float-right">
                                    <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary"><i class="fa fa-user-plus"></i> Add Student</a>
                                    <!-- <a href="admin_add_student.php" class="btn btn-primary" ><i class="fa fa-user-plus"></i> Add Student</a> -->
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
                                                            <option value="LastName">Last Name</option>
                                                            <option value="FirstName">First Name</option>
                                                            <option value="MiddleName">Middle Name</option>
                                                            <option value="StudentNo">Student No.</option>
                                            </select>
                                    </div>
                            </div>
                            <div class="col-md-10">
                                    <div class="input-group mb-3">
                                            <input type="text" class="form-control" autofocus="" name="keyword" placeholder="Search Student" data-toggle="tooltip" data-placement="top" title="Search Student">
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
                                                <th style="width:100px;text-align:center;">Photo</th>
                                                <th>Full Name</th>
                                                <th>Academic Program</th>
                                                <th style="text-align:center;">Year Entry</th>
                                                <th style="width:250px;"><center>Action</center></th>
                                        </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; ?>
                                    <?php foreach ($student as $emp) { ?>
                                        <tr>
                                                <th style="vertical-align: middle;"><?php echo $i++; ?></th>
                                                <td><center>
                                                    <?php $filename = './site_source/student_picture/'.$emp->StudentID.'.png'; ?>
                                                    <?php if (file_exists($filename)) { ?>
                                                    <img src="../site_source/student_picture/<?php echo $emp->StudentID;?>.png" class="rounded-circle" style="width:100px;height:100px;padding:10px;">
                                                    <?php } else { ?>
                                                    <img src="../site_source/no-images.png" class="rounded-circle" style="width:100px;height:100px;padding:10px;">
                                                    <?php } ?>   
                                                </center>

                                                </td>
                                                <td style="vertical-align: middle;"> <?php echo $emp->LastName.', '.$emp->FirstName.' '.$emp->MiddleName; ?></td>
                                                <td style="vertical-align: middle;">
                                                        <?php //$emptype = $row['EmployeeTypeID']; 
                                                                //$result1 = $conn->query("SELECT * FROM employee_type WHERE EmployeeTypeID = '$emptype'") or die($conn->error);
                                                                //$row1 = $result1->fetch_assoc();
                                                                //echo $row1['EmployeeType'];
                                                        ?>
                                                </td>
                                                <td style="text-align:center;vertical-align: middle;"> </td>
                                                <td style="vertical-align: middle;">
                                                        <center>
<!--                                                        <div class="btn-group mb-2">
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
                                                            <a href="<?php echo base_url('administrator/student_view/'.$emp->StudentID); ?>" class="btn btn-info btn-sm">View <i class="fa fa-file"></i></a>
                                                            <a href="<?php echo base_url('administrator/student_edit/'.$emp->StudentID); ?>" class="btn btn-warning btn-sm" >Edit <i class="fa fa-edit"></i></a>
                                                            <a href="<?php echo base_url('administrator/student_delete/'.$emp->StudentID); ?>" class="btn btn-danger btn-sm"  onclick="return confirm('Are you sure you want to delete?');">Delete <i class="fa fa-trash"></i></a>
                                                         </center>
                                                </td>
                                        </tr>
                                        <?php  }  ?>
                            <?php  //}  ?>
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
                            <h5 class="modal-title mb-3">Add New Student</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:<?php echo $_SESSION['thm_fg_primary']; ?>">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            
                            <div class="row" >
                                    <div class="col-md-12">
                                            <div class="row">
                                                    <div class="col-md-12">
                                                            <label style="font-weight:bold;">Last Name</label>
                                                            <input type="text" name="last_name" class="form-control" value="" placeholder="Last Name" data-toggle="tooltip" data-placement="top" title="Last Name" onkeyup="this.value = this.value.toUpperCase()" required>
                                                            <label style="font-weight:bold;">First Name</label>
                                                            <input type="text" name="first_name" class="form-control" value="" placeholder="First Name" data-toggle="tooltip" data-placement="top" title="First Name" onkeyup="this.value = this.value.toUpperCase()" required>
                                                            <label style="font-weight:bold;">Middle Name</label>
                                                            <input type="text" name="middle_name" class="form-control" value="" placeholder="Middle Name" data-toggle="tooltip" data-placement="top" title="Middle Name" onkeyup="this.value = this.value.toUpperCase()">
                                                            <label style="font-weight:bold;">Educational Level</label>
                                                            <select name="EducLevelID" class="form-control input-sm" placeholder="Academic Program Name" data-toggle="tooltip" data-placement="top" title="Academic Program Name" required>
                                                                <option value="5">COLLEGE</option>
                                                                <?php foreach ($educational_level as $educ) { ?>
                                                                <option value="<?php echo $educ->EducLevelID; ?>"><?php echo $educ->EducationalName; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                            <label style="font-weight:bold;">Academic Program</label>
                                                            <select name="AcademicProgramID" class="form-control input-sm" placeholder="Academic Program Name" data-toggle="tooltip" data-placement="top" title="Academic Program Name" required>
                                                                <option disabled="">Course</option>
                                                                <?php foreach ($academic_program as $acad) { ?>
                                                                <option value="<?php echo $acad->AcaProgramID; ?>"><?php echo $acad->AcaProgramCode. '-'.$acad->AcaProgramName; ?></option>
                                                                <?php } ?>
                                                            </select>  
                                                            <label style="font-weight:bold;">Year Entry</label>
                                                            <select name="YearEntry" class="form-control input-sm" placeholder="Year Entry" data-toggle="tooltip" data-placement="top" title="Year Entry" required>
                                                                <option value="">2019-2020 1ST SEMESTER</option>
                                                                <option value="">2018-2019 SUMMER</option>
                                                                <option value="">2018-2019 2ND SEMESTER</option>
                                                                <option value="">2018-2019 1ST SEMESTER</option>
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
                            <button type="submit" name="add_student" class="btn btn-primary"><i class="fa fa-plus"></i> Add student</button>
                        </div>
                    </div>
                </div>
            </div>
</form>