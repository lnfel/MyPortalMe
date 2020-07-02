<!-- Main Content -->
<div class="main-content">
   <section class="section">
     <div class="section-header">
       <h1>New Student Applicant List</h1>
     </div>
     <div class="section-body">


         

         
         
         
         <div class="row">
                    <div class="col-md-6">
                            <div class="float-left">
                                <h2 class="section-title mt-0">Manage Student Applicant</h2>
                                <p class="section-lead">
                                  Organize Data.
                                </p>
                            </div>
                    </div>
                    <div class="col-md-6">
                            <div class="float-right">
                                    <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary"><i class="fa fa-user-plus"></i> Add New Student Applicant </a>
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
                                                            <option value="ApplicantNo">Applicant No</option>
                                                            <option value="YearGraduate">Year Graduated</option>
                                                            <option value="LastName">Last Name</option>
                                            </select>
                                    </div>
                            </div>
                            <div class="col-md-10">
                                    <div class="input-group mb-3">
                                            <input type="text" class="form-control" autofocus="" name="keyword" placeholder="Search Student Applicant List" data-toggle="tooltip" data-placement="top" title="Search_student_application ">
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
                                                <th >Applicant Number</th>
                                                <th >Name</th>
                                                <th style="text-align:center;">Year Graduate</th>
                                                <th><center>Action</center></th>
                                        </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; $c=0;?>
                                    <?php foreach ($student_application as $emp) { ?>
                                        <tr>
                                                <th style="vertical-align: middle;"><?php echo $i++; ?></th>
                                                <td style="vertical-align: middle;"><?php echo $emp->ApplicantNo; $c=$emp->ApplicantNo;?></td>
                                                <td style="vertical-align: middle;"> <?php echo $emp->LastName.', '.$emp->FirstName.' '.$emp->MiddleName; ?></td>
                                                <td style="text-align:center;vertical-align: middle;"><?php echo $emp->YearGraduate; ?></td>
                                                <td style="vertical-align: middle;" class="d-flex flex-row">
                                                        <center>
                                                            <a href="<?php echo base_url('administrator/applicant_list_view/'.$emp->ApplicantNo); ?>" class="btn btn-info btn-sm">View <i class="fa fa-file"></i></a>
                                                            <a href="<?php echo base_url('administrator/applicant_list_edit/'.$emp->ApplicantNo); ?>" class="btn btn-warning btn-sm" >Edit <i class="fa fa-edit"></i></a>
                                                            <a href="<?php echo base_url('administrator/applicant_list_delete/'.$emp->ApplicantNo); ?>" class="btn btn-danger btn-sm"  onclick="return confirm('Are you sure you want to delete?');">Delete <i class="fa fa-trash"></i></a>
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
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content ">
                        <div class="modal-header" style="background-color:<?php echo $_SESSION['thm_bg_primary']; ?>;color:<?php echo $_SESSION['thm_fg_primary']; ?>">
                            <h5 class="modal-title mb-3">New Student Applicant </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:<?php echo $_SESSION['thm_fg_primary']; ?>">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <div class="col-12 col-md-12 col-lg-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                    <h4>Personal Information</h4>
                            </div>
                            
                            <div class="row" >
                                    <div class="col-md-12">
                                            <div class="row">
                                                    <div class="col-md-3">
                                                            <label style="font-weight:bold;">Applicant Number</label>                                                         
                                                            <input type="text" name="ApplicantNo" tabindex="1" class="form-control" value="" placeholder="" data-toggle="tooltip" data-placement="top" title="ApplicantNo" readonly onkeyup="this.value = this.value.toUpperCase()" required>
                                                   </div>
                                                   <div class="col-md-3">
                                                            <label style="font-weight:bold;">Year Graduate</label>                                                         
                                                            <input type="text" name="YearGraduate" tabindex="1" class="form-control" value="" placeholder="Year Graduate" data-toggle="tooltip" data-placement="top" title="YearGraduate"  onkeyup="this.value = this.value.toUpperCase()" required>
                                                   </div>
                                                   <div class="col-md-3">
                                                            <label style="font-weight:bold;">Period ID</label>                                                         
                                                            <select name="PeriodID" id="PeriodID" class="form-control input-sm" tabindex="5" placeholder="" data-toggle="tooltip" data-placement="top" title="PeriodID">
                                                                <?php foreach ($cat_school_year as $csy){ ?> 
                                                                    <option value="<?php echo $csy->PeriodID; ?>"><?php echo $csy->SchoolYearName.' '.$csy->PeriodName; ?> </option>
                                                                <?php } ?>
                                                            </select>
                                                   </div>
                                                   <div class="col-md-3">
                                                            <label style="font-weight:bold;">Student Type</label>                                                         
                                                            <input type="text" name="StudentType" tabindex="1" class="form-control" value="" placeholder="Student Type" data-toggle="tooltip" data-placement="top" title="StudentType"  onkeyup="this.value = this.value.toUpperCase()" required>
                                                   </div>
                                                   <!--New Row-->
                                                   <div class="col-md-4">
                                                            <label style="font-weight:bold;">First Name</label>                                                         
                                                            <input type="text" name="FirstName" tabindex="1" class="form-control" value="" placeholder="First Name" data-toggle="tooltip" data-placement="top" title="FirstName"  onkeyup="this.value = this.value.toUpperCase()" required>
                                                   </div>
                                                   <div class="col-md-4">
                                                            <label style="font-weight:bold;">Middle Name</label>                                                         
                                                            <input type="text" name="MiddleName" tabindex="2" class="form-control" value="" placeholder="Middle Name" data-toggle="tooltip" data-placement="top" title="MiddleName"  onkeyup="this.value = this.value.toUpperCase()" required>
                                                   </div>
                                                   <div class="col-md-4">
                                                            <label style="font-weight:bold;">Last Name</label>                                                         
                                                            <input type="text" name="LastName" tabindex="3" class="form-control" value="" placeholder="Last Name" data-toggle="tooltip" data-placement="top" title="LastName"  onkeyup="this.value = this.value.toUpperCase()" required>
                                                   </div>
                                                   <!--New Row-->
                                                   <div class="col-md-4">
                                                            <label style="font-weight:bold;">Street Address</label>                                                         
                                                            <input type="text" name="Address" tabindex="4" class="form-control" value="" placeholder="House No / Street / Block & Lot / Brgy" data-toggle="tooltip" data-placement="top" title="Address"  onkeyup="this.value = this.value.toUpperCase()" required>
                                                   </div>
                                                   <div class="col-md-3">
                                                   
                                                        <label>Province</label>
                                                    
                                                        <select name="provCode" id="provCode" class="form-control input-sm" tabindex="5" placeholder="<?php echo $emp->provDesc; ?>" data-toggle="tooltip" data-placement="top" title="provCode">
                                                              <?php foreach ($refprovince as $g_reg){ ?>          
                                                                  <option value="<?php echo $g_reg->provCode; ?>" <?php if( $emp->provCode == $g_reg->provCode ) {?> selected="selected" <?php } ?>> <?php echo $g_reg->provDesc; ?> </option> 
                                                              <?php }?>
                                                        </select>
                                                
                                                   </div>
                                                   <div class="col-md-3">
                                                            <label style="font-weight:bold;">City/Municipality</label>                                                         
                                                            <select name="citymunCode" id="citymunCode" class="form-control input-sm" tabindex="6" placeholder="Choose City/Municipality" data-toggle="tooltip" data-placement="top" title="citymunCode">
                                                              <script>
                                                                  var provCodeVar = document.getElementById("provCode");
                                                                  var citymunCodeVar = document.getElementById("citymunCode");

                                                                  provCodeVar.onchange = function() {
                                                                      // empty citymunCodeVar
                                                                      
                                                                      while (citymunCodeVar.firstChild) {
                                                                          console.log(citymunCodeVar.firstChild);
                                                                          citymunCodeVar.removeChild(citymunCodeVar.firstChild);
                                                                      }
                                                                      if (provCodeVar.selectedIndex == 0) {
                                                                          return;
                                                                      }
                                                                      var greg = "";
                                                                      <?php foreach ($refcitymun as $g_reg){ ?>
                                                                        greg = "<?php echo $g_reg->provCode ?>";
                                                                        console.log( provCodeVar.value +"=="+greg  );
                                                                        if ( provCodeVar.value ==  greg ){
                                                                            var ovalue = "<?php echo $g_reg->citymunCode;?>";
                                                                            var otext = "<?php echo $g_reg->citymunDesc; ?>";
                                                                            var o = document.createElement("option");
                                                                            o.value = ovalue;
                                                                            o.text = otext;
                                                                            console.log(ovalue);
                                                                            console.log(otext);
                                                                            citymunCodeVar.appendChild (o);   
                                                                        }
                                                                      <?php }?> 
                                                                      
                                                                      console.log(provCodeVar.value);
                                                                      console.log(provCodeVar.text);
                                                                  }
                                                              </script>
                                                    </select>
                                                   </div>
                                                   <div class="col-md-2">
                                                            <label style="font-weight:bold;">Zip Code</label>                                                         
                                                            <input type="text" name="ZipCode" class="form-control"  tabindex="6"  value="" placeholder="Zip Code" data-toggle="tooltip" data-placement="top" title="ZipCode"  onkeyup="this.value = this.value.toUpperCase()" required>
                                                   </div>
                                                    <div class="col-md-12">
                                                   <table class="table">
                                                                <tbody>
                                                                <tr>
                                                                    <th scope="row">Birth Date</th>
                                                                    <td><input type="text" class="form-control" placeholder="YYYY-MM-DD" name="BirthDate" tabindex="9" value="" required onkeyup="this.value = this.value.toUpperCase()"></td>
                                                                    <th scope="row">Birth Place</th>
                                                                    <td><input type="text" class="form-control" placeholder="Birth Place" name="BirthPlace" tabindex="9" value="" required onkeyup="this.value = this.value.toUpperCase()"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row" class="w-25">Civil Status</th>
                                                                    <td>
                                                                        <select name="CivilStatus" id="CivilSstatus" class="form-control input-sm" tabindex="10" placeholder="" data-toggle="tooltip" data-placement="top" title="CivilStatus">
                                                                            <option value="SINGLE" > SINGLE </option>
                                                                            <option value="MARRIED" > MARRIED </option>
                                                                            <option value="DIVORCED"  > DIVORCED </option>
                                                                            <option value="SEPARATED" > SEPARATED </option>
                                                                            <option value="WIDOWED" > WIDOWED </option>
                                                                            <!-- Marital Status based on https://psa.gov.ph/content/marital-status -->
                                                                        </select>
                                                                        
                                                                    </td>
                                                                    <th class="w-25" scope="row">Gender</th>
                                                                    <td class="w-25">
                                                                            <select name="Gender" id="Gender" class="form-control input-sm" tabindex="11" placeholder="--Choose Gender--" data-toggle="tooltip" data-placement="top" title="CivilStatus">
                                                                                <option value="MALE" > MALE </option>
                                                                                <option value="FEMALE" > FEMALE </option>
                                                                            </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Height</th>
                                                                        <td><input type="text" class="form-control" name="Height" tabindex="12" value="" required onkeyup="this.value = this.value.toUpperCase()"></td>
                                                                    <th scope="row">Blood Type</th>
                                                                    <td>
                                                                        <select name="BloodType" id="BloodType" class="form-control input-sm" tabindex="13" placeholder="<?php echo $emp->BloodType; ?>" data-toggle="tooltip" data-placement="top" title="BloodType">
                                                                            <option value="--Choose Bloodtype--">--Choose Bloodtype--</option>
                                                                            <option value="A-" <?php if( $emp->BloodType == "A-" ) {?> selected="selected" <?php } ?> > A- </option>
                                                                            <option value="A+" <?php if( $emp->BloodType == "A+" ) {?> selected="selected" <?php } ?> > A+ </option>
                                                                            <option value="B-" <?php if( $emp->BloodType == "B-" ) {?> selected="selected" <?php } ?> > B- </option>
                                                                            <option value="B+" <?php if( $emp->BloodType == "B+" ) {?> selected="selected" <?php } ?> > B+ </option>
                                                                            <option value="AB-" <?php if( $emp->BloodType == "AB-" ) {?> selected="selected" <?php } ?> > AB- </option>
                                                                            <option value="AB+" <?php if( $emp->BloodType == "AB+" ) {?> selected="selected" <?php } ?> > AB+ </option>
                                                                            <option value="O-" <?php if( $emp->BloodType == "O-" ) {?> selected="selected" <?php } ?> > O- </option>
                                                                            <option value="O+" <?php if( $emp->BloodType == "O+" ) {?> selected="selected" <?php } ?> > O+ </option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Weight</th>
                                                                    <td><input type="text" class="form-control" name="Weight" tabindex="14" value="" required onkeyup="this.value = this.value.toUpperCase()"></td>
                                                                </tr>
                                                                <tr>                                                
                                                                    <th scope="row">Nationality</th>
                                                                    <td>
                                                                        <input type="text" class="form-control" name="Nationality" tabindex="15" value="" required onkeyup="this.value = this.value.toUpperCase()">
                                                                    </td>
                                                                    <th scope="row">Religion</th>
                                                                    
                                                                    <td><input type="text" class="form-control" name="Religion" tabindex="16" value="" required onkeyup="this.value = this.value.toUpperCase()"></td>
                                                                    
                                                                </tr>
                                                                
                                                                </tbody>
                                                        </table>
                                                   </div>
                                            </div>
                                            </div>
                                            </div>       
                                            <div class="col-12 col-md-12 col-lg-12 row">
                   <div class="card card-primary col-sm-12 col-md-6 col-lg-6" >
                        <div class="card-header">
                            <h4>Contact Information</h4>
                       </div>
                                            <table class="table table-striped">
                                                <tbody>
                                                  <tr>
                                                    <th scope="row">Personal Email Address</th>
                                                    <td><input type="text" class="form-control" name="PersonalEmailAddress" tabindex="18" value="" required onkeyup="this.value = this.value.toUpperCase()"></td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">Facebook Email Address</th>
                                                    <td><input type="text" class="form-control" name="FacebookEmailAddress" tabindex="19" value="" required onkeyup="this.value = this.value.toUpperCase()"></td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">Phone number</th>
                                                    <td><input type="text" class="form-control" name="TelephoneNo" tabindex="20" value="" required onkeyup="this.value = this.value.toUpperCase()"></td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">Contact number</th>
                                                    <td><input type="text" class="form-control" name="ContactNo" tabindex="21" value="" required onkeyup="this.value = this.value.toUpperCase()"></td>
                                                  </tr>
                                                </tbody>
                                          </table>
                   </div>

                   <div class="card card-primary col-sm-12 col-md-6 col-lg-6" >
                        <div class="card-header">
                            <h4>Family's Contact Information</h4>
                       </div>
                                            <table class="table table-striped">
                                                <tbody>
                                                  <tr>
                                                    <th scope="row">Father's Name</th>
                                                    <td><input type="text" class="form-control" name="FatherName" tabindex="22" value="" required onkeyup="this.value = this.value.toUpperCase()"></td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">Father's Contact Number</th>
                                                    <td><input type="text" class="form-control" name="FatherContactNo" tabindex="22" value="" required onkeyup="this.value = this.value.toUpperCase()"></td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">Mother's Name</th>
                                                    <td><input type="text" class="form-control" name="MotherName" tabindex="22" value="" required onkeyup="this.value = this.value.toUpperCase()"></td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">Mother's Contact Number</th>
                                                    <td><input type="text" class="form-control" name="MotherContactNo" tabindex="22" value="" required onkeyup="this.value = this.value.toUpperCase()"></td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">Guardian's Name</th>
                                                    <td><input type="text" class="form-control" name="GuardianName" tabindex="22" value="" required onkeyup="this.value = this.value.toUpperCase()"></td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">Guardian's Contact Number</th>
                                                    <td><input type="text" class="form-control" name="GuardianContactNo" tabindex="22" value="" required onkeyup="this.value = this.value.toUpperCase()"></td>
                                                  </tr>
                                                </tbody>
                                          </table>
                   </div>
                </div> 
                                    </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-secondary" data-dismiss="modal">
                                <i class="fa fa-refresh"></i> Clear Changes
                            </button>
                            <button type="submit" name="add_student_application" class="btn btn-primary"><i class="fa fa-plus"></i> Add New Student Applicant </button>
                        </div>
                    </div>
                </div>
            </div>
</form>