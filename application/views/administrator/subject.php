<!-- Main Content -->
<div class="main-content">
   <section class="section">
     <div class="section-header">
       <h1>Manage Subjects</h1>
     </div>
     <div class="section-body">


         

         
         
         
         <div class="row">
                    <div class="col-md-6">
                            <div class="float-left">
                                <h2 class="section-title mt-0">Manage Subject</h2>
                                <p class="section-lead">
                                  Organize Data.
                                </p>
                            </div>
                    </div>
                    <div class="col-md-6">
                            <div class="float-right">
                                    <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary"><i class="fa fa-user-plus"></i> Add Subject</a>
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
                                                    <option value="SubjectName">Subject Name</option>
                                                    <option value="SubjectCode">Subject Code</option>
                                                    <option value="Unit">Units</option>
                                                    <option value="Component_SubjectID">Units</option>
                                            </select>
                                    </div>
                            </div>
                            <div class="col-md-10">
                                    <div class="input-group mb-3">
                                            <input type="text" class="form-control" autofocus="" name="keyword" placeholder="Search Subject " data-toggle="tooltip" data-placement="top" title="Search Subject ">
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
                                                <th>Subject Code</th>
                                                <th>Subject Name</th>
                                                <th style="text-align:center;">Units</th>
                                                <th style="text-align:center;">Component Subject</th>
                                                <th style="width:250px;"><center>Action</center></th>
                                        </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; ?>
                                    <?php foreach ($cat_subject as $emp) { ?>
                                    <tr <?php echo $emp->ActiveStatus > 0 ? "" : "style=\"background-color:#f2dede;\""; ?>>
                                                <th style="vertical-align: middle;"><?php echo $i++; ?></th>
                                                <td style="vertical-align: middle;"><?php echo $emp->SubjectCode; ?></td>
                                                <td style="vertical-align: middle;"><?php echo $emp->SubjectName; ?></td>
                                                <td style="text-align:center;vertical-align: middle;"><?php echo $emp->Unit; ?></td>
                                                <td style="text-align:center;vertical-align: middle;"><?php echo $emp->Component_SubjectID; ?></td>
                                                <td style="vertical-align: middle;">
                                                        <center>
                                                            <a href="<?php echo base_url('administrator/subject_edit/'.$emp->SubjectID); ?>" class="btn btn-warning btn-sm" >Edit <i class="fa fa-edit"></i></a>
                                                            <a href="<?php echo base_url('administrator/subject_delete/'.$emp->SubjectID); ?>" class="btn btn-danger btn-sm"  onclick="return confirm('Are you sure you want to delete?');">Delete <i class="fa fa-trash"></i></a>
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
                            <h5 class="modal-title mb-3">Add New Subject </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:<?php echo $_SESSION['thm_fg_primary']; ?>">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            
                            <div class="row" >
                                    <div class="col-md-12">
                                            <div class="row">
                                                    <div class="col-md-12">
                                                            <label style="font-weight:bold;">Subject Code</label>
                                                            <input type="text" name="SubjectCode" class="form-control" value="" placeholder="Subject Code" data-toggle="tooltip" data-placement="top" title="Subject Code" onkeyup="this.value = this.value.toUpperCase()" required>
                                                            <label style="font-weight:bold;">Subject Name</label>
                                                            <input type="text" name="SubjectName" class="form-control" value="" placeholder="Subject Name" data-toggle="tooltip" data-placement="top" title="Subject Name" onkeyup="this.value = this.value.toUpperCase()">
                                                            <label style="font-weight:bold;">Units</label>
                                                            <input type="text" name="Unit" class="form-control" value="" placeholder="Units" data-toggle="tooltip" data-placement="top" title="Units">
                                                            <label style="font-weight:bold;">Educational Level</label>
                                                            <select name="EducLevelID" class="form-control input-sm" placeholder="Academic Program Name" data-toggle="tooltip" data-placement="top" title="Academic Program Name" required>
                                                                <option value="5">COLLEGE</option>
                                                                <?php foreach ($educational_level as $educ) { ?>
                                                                <option value="<?php echo $educ->EducLevelID; ?>"><?php echo $educ->EducationalName; ?></option>
                                                                <?php } ?>
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
                            <button type="submit" name="add_subject" class="btn btn-primary"><i class="fa fa-plus"></i> Add Subject </button>
                        </div>
                    </div>
                </div>
            </div>
			</form>