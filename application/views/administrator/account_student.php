<!-- Main Content -->
 <div class="main-content">
   <section class="section">
     <div class="section-header">
       <h1>Manage Account - Student</h1>
     </div>
     <div class="section-body">

         <div class="card card-primary">
     <ul class="nav nav-pills nav-justified">
                      <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('Administrator/account_employee'); ?>"><i class="fas fa-user"></i> Employee</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" href="<?php echo base_url('Administrator/account_student'); ?>"><i class="fas fa-user"></i> Student</a>
                      </li>
                    </ul>

         </div>


         
     <form method="post">
                    <div class="row" >
                            <div class="col-md-2">
                                    <div class="form-group">
                                            <select class="form-control" name="cat_keyword" data-toggle="tooltip" data-placement="top" title="Select Category">
                                                            <option value="LastName">Last Name</option>
                                                            <option value="FirstName">First Name</option>
                                                            <option value="MiddleName">Middle Name</option>
                                                            <option value="EmployeeNo">Employee No</option>
                                            </select>
                                    </div>
                            </div>
                            <div class="col-md-10">
                                    <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="keyword" autofocus placeholder="Search Student" data-toggle="tooltip" data-placement="top" title="Search Student">
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
                                                <th >Full Name</th>
                                                <th style="width:300px;">Year/Grade</th>
                                                <th style="width:350px;"><center>Action</center></th>
                                        </tr>
                                </thead>
                                <tbody>
                            <?php //if($result->num_rows > 0){ ?>
                                        <?php //$i=1; do { ?>
                                                <tr>
                                                        <th style="vertical-align: middle;"><?php //echo $i++; ?></th>
                                                        <td><center>
                                                        <?php //$filename = './assets/site_images/employee_picture/'.$row['EmployeeID'].'.jpg'; ?>
                                                        <?php //if (file_exists($filename)) { ?>
<!--                                                                <img src="assets/site_images/employee_picture/<?php //echo $row['EmployeeID']; ?>.jpg" class="rounded-circle" style="width:70px;height:70px;">-->
                                                        <?php //} else {?>
                                                            <img src="../site_source/no-images.png" class="rounded-circle" style="width:100px;height:100px;padding:10px;">
                                                        <?php //} ?>
                                                        </center>

                                                        </td>
                                                        <td style="vertical-align: middle;">
                                                                <?php //$emptype = $row['EmployeeTypeID']; 
                                                                        //$result1 = $conn->query("SELECT * FROM employee_type WHERE EmployeeTypeID = '$emptype'") or die($conn->error);
                                                                        //$row1 = $result1->fetch_assoc();
                                                                        //echo $row1['EmployeeType'];
                                                                ?>
                                                        </td>
                                                        <td style="vertical-align: middle;">
                                                       
                                                        </td>
                                                        <td style="vertical-align: middle;">
                                                                <center>
                                                                 <a href="admin_employee_delete.php?id=<?php //echo $row['ID']; ?>" class="btn btn-danger btn-sm"  onclick="return confirm('Are you sure you want to Reset Password?');"><i class="fa fa-trash"></i> Reset Password</a>
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
   </section>
 </div>
	  
