<!-- Main Content -->
 <div class="main-content">
   <section class="section">
     <div class="section-header">
       <h1>Manage Sections and Schedules</h1>
     </div>
     <div class="section-body">


         

         
         
         
         <div class="row">
                    <div class="col-md-6">
                            <div class="float-left">
                                <h2 class="section-title mt-0">Manage Sections</h2>
                                <p class="section-lead">
                                  Organize Data.
                                </p>
                            </div>
                    </div>
                    <div class="col-md-6">
                            <div class="float-right">
                                    <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary"><i class="fa fa-user-plus"></i> Add Sections</a>
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
                                                            <option value="SectionName">Section Name</option>
                                            </select>
                                    </div>
                            </div>
                            <div class="col-md-10">
                                    <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="keyword" placeholder="Search Sections" data-toggle="tooltip" data-placement="top" title="Search Sections">
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
                                                <th>Section Name</th>
                                                <th>Curriculum ID</th>
                                                <th>Period ID</th>
                                                <th>Grade/Year</th>
                                                <th style="width:300px;"><center>Action</center></th>
                                        </tr>
                                </thead>
                                <tbody>
                                        <?php $i=1; ?>
                                        <?php foreach ($section as $sec) { ?>
                                                <tr>
                                                        <th style="vertical-align: middle;"><?php echo $i++; ?></th>
                                                        <td style="vertical-align: middle;"><?php echo $sec->SectionName; ?></td>
                                                        <td style="vertical-align: middle;"><?php echo $sec->CurriculumID; ?></td>
                                                        <td style="vertical-align: middle;"><?php echo $sec->PeriodID; ?></td>
                                                        <td style="vertical-align: middle;"><?php echo $sec->GradeYear; ?></td>
                                                        <td style="vertical-align: middle;">
                                                                <center>
                                                                <a href="<?php echo base_url('administrator/section_edit/'.$sec->SectionID); ?>" class="btn btn-warning btn-sm" >Edit <i class="fa fa-edit"></i></a>
                                                                <a href="<?php echo base_url('administrator/section_delete/'.$sec->SectionID); ?>" class="btn btn-danger btn-sm"  onclick="return confirm('Are you sure you want to delete?');">Delete <i class="fa fa-trash"></i></a>
                                                                </center>
                                                        </td>
                                                </tr>
                                        <?php  } ?>
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
                            <h5 class="modal-title mb-3">Add New Section</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:<?php echo $_SESSION['thm_fg_primary']; ?>">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            
                            <div class="row" >
                                    <div class="col-md-12">
                                            <div class="row">
                                                    <div class="col-md-12">
                                                            <label style="font-weight:bold;">Section Name</label>
                                                            <input type="text" name="SectionName" class="form-control" value="" placeholder="Section Name" data-toggle="tooltip" data-placement="top" title="Section Name" onkeyup="this.value = this.value.toUpperCase()" required>
                                                            <label style="font-weight:bold;">Curriculum ID</label>
                                                            <input type="text" name="CurriculumID" class="form-control" value="" placeholder="Curriculum ID" data-toggle="tooltip" data-placement="top" title="Curriculum ID" onkeyup="this.value = this.value.toUpperCase()" required>
                                                            <label style="font-weight:bold;">Period ID</label>
                                                            <input type="text" name="PeriodID" class="form-control" value="" placeholder="Period ID" data-toggle="tooltip" data-placement="top" title="Period ID" onkeyup="this.value = this.value.toUpperCase()">
                                                                                                                
                                                        <label style="font-weight:bold;">Grade /Year</label>
                                                        <input type="text" name="GradeYear" class="form-control input-sm" value="" placeholder="Grade /year" data-toggle="tooltip" data-placement="top" title="GradeYear" onkeyup="this.value = this.value.toUpperCase()">

                                                   </div>
                                            </div>

                                    </div>
                            </div>
							
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-secondary" data-dismiss="modal">
                                <i class="fa fa-refresh"></i> Clear Changes
                            </button>
                            <button type="submit" name="add_section" class="btn btn-primary"><i class="fa fa-plus"></i> Add Section</button>
                        </div>
                    </div>
                </div>
            </div>
			</form>
