<!-- Main Content -->
 <div class="main-content">
   <section class="section">
     <div class="section-header">
       <h1>Manage Academic Program</h1>
     </div>
     <div class="section-body">


         

         
         
         
         <div class="row">
                    <div class="col-md-6">
                            <div class="float-left">
                                <h2 class="section-title mt-0">Manage Academic Program</h2>
                                <p class="section-lead">
                                  Organize Data.
                                </p>
                            </div>
                    </div>
                    <div class="col-md-6">
                            <div class="float-right">
                                    <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary"><i class="fa fa-user-plus"></i> Add Academic Program</a>
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
                                                            <option value="AcaProgramName">Academic Program Name</option>
                                                            <option value="AcaProgramCode">Academic Program Code</option>
                                                            <option value="AcaProgramNameDiploma">Diploma Program Name</option>
                                            </select>
                                    </div>
                            </div>
                            <div class="col-md-10">
                                    <div class="input-group mb-3">
                                            <input type="text" class="form-control" autofocus="" name="keyword" placeholder="Search Academic Program" data-toggle="tooltip" data-placement="top" title="Search Academic Program">
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
                                                <th>Academic Program Code</th>
                                                <th>Academic Program Name</th>
                                                <th>Diploma Program Name</th>
                                                <th style="width:250px;"><center>Action</center></th>
                                        </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; ?>
                                    <?php foreach ($cat_acad_program as $emp) { ?>
                                        <tr     >
                                                <th style="vertical-align: middle;"><?php echo $i++; ?></th>
                                                <td style="vertical-align: middle;"> <?php echo $emp->AcaProgramCode; ?></td>
                                                <td style="vertical-align: middle;"> <?php echo $emp->AcaProgramName; ?></td>
                                                <td style="vertical-align: middle;"> <?php echo $emp->AcaProgramNameDiploma; ?></td>
                                                <td style="vertical-align: middle;">
                                                        <center>
                                                            <a href="<?php echo base_url('administrator/academic_program_edit/'.$emp->AcaProgramCode); ?>" class="btn btn-warning btn-sm" >Edit <i class="fa fa-edit"></i></a>
                                                            <a href="<?php echo base_url('administrator/academic_program_delete/'.$emp->AcaProgramCode); ?>" class="btn btn-danger btn-sm"  onclick="return confirm('Are you sure you want to delete?');">Delete <i class="fa fa-trash"></i></a>
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
                            <h5 class="modal-title mb-3">Add New Academic Program</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:<?php echo $_SESSION['thm_fg_primary']; ?>">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            
                            <div class="row" >
                                    <div class="col-md-12">
                                            <div class="row">
                                                    <div class="col-md-12">
                                                            <label style="font-weight:bold;">Academic Program Code</label>
                                                            <input type="text" name="AcaProgramCode" class="form-control" value="" placeholder="Academic Program Code" data-toggle="tooltip" data-placement="top" title="Academic Program Code" onkeyup="this.value = this.value.toUpperCase()" required>
                                                            <label style="font-weight:bold;">Academic Program Name</label>
                                                            <input type="text" name="AcaProgramName" class="form-control" value="" placeholder="Academic Program Name" data-toggle="tooltip" data-placement="top" title="Academic Program Name" onkeyup="this.value = this.value.toUpperCase()">
                                                            <label style="font-weight:bold;">Diploma Program Name</label>
                                                            <input type="text" name="AcaProgramNameDiploma" class="form-control" value="" placeholder="Diploma Program Name" data-toggle="tooltip" data-placement="top" title="Diploma Program Name" onkeyup="this.value = this.value.toUpperCase()" required>
                                                  
                                                   </div>
                                            </div>

                                    </div>
                            </div>
							
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-secondary" data-dismiss="modal">
                                <i class="fa fa-refresh"></i> Clear Changes
                            </button>
                            <button type="submit" name="add_academic_program" class="btn btn-primary"><i class="fa fa-plus"></i> Add Academic Program</button>
                        </div>
                    </div>
                </div>
            </div>
			</form>