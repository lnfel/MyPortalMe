        <!-- Main Content -->
        
        <div class="main-content">
   <section class="section">
     <div class="section-header">
       <h1>Administrator Student - Update</h1>
     </div>
     <div class="section-body">

       
         <form method="post">
         
           <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
              <div class="card author-box card-primary">
                                        <div class="card-body">
                                            <div class="author-box-left mr-3">
                                                <!--<img alt="image" src="<?php echo base_url(); ?>assets/stisla/img/avatar/avatar-1.png" class="rounded-circle author-box-picture" style="width:150px;">-->
                                                    <center>
                                                        <?php $filename = './site_source/Student_picture/'.$emp->StudentNo.'.png'; ?>
                                                        <?php if (file_exists($filename)) { ?>
                                                         <img src="<?php echo base_url(); ?>site_source/Student_picture/<?php echo $emp->StudentNo;?>.png" class="rounded-circle author-box-picture" style="width:150px;">
                                                        <?php } else { ?>
                                                        <img src="<?php echo base_url(); ?>site_source/no-images.png" class="rounded-circle author-box-picture" style="width:150px;">
                                                        <?php } ?>   
                                                    </center>
                                            </div>
                                            <div class="author-box-details">
                                              <div class="author-box-name">
                                                <a href="#"><?php echo $emp->LastName.', '.$emp->FirstName.' '.$emp->MiddleName; ?></a>
                                              </div>
                                              <div class="author-box-job"><?php //echo $emp->PositionName; ?></div>
                                              <div class="author-box-description">
                                                <p> <?php //echo $emp->JobDescription; ?>
                                                </p>    
                                              </div>
                                              
                                            </div>
                                        </div>
                                  </div>
              </div>
                
               
               
                <div class="col-12 col-md-12 col-lg-12">
                   <div class="card card-primary">
                       <div class="card-header">
                            <h4>Personal Information</h4>
                       </div>
                       <div class="row pl-3 pr-3">
                          
                            <input type="hidden" name="StudentID" value="<?php echo $emp->StudentID; ?>">
                            
                            <div class="col-4">
                                             <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control" name="LastName" tabindex="1" value="<?php echo $emp->LastName; ?>" required autofocus onkeyup="this.value = this.value.toUpperCase()">
                                                <div class="invalid-feedback">
                                                  Please fill in your email
                                                </div>
                                             </div>
                            </div>
                            <div class="col-4">
                                             <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" class="form-control" name="FirstName" tabindex="2" value="<?php echo $emp->FirstName; ?>" required onkeyup="this.value = this.value.toUpperCase()">
                                                <div class="invalid-feedback">
                                                  Please fill in your email
                                                </div>
                                             </div>
                            </div>
                            <div class="col-4">
                                             <div class="form-group">
                                                <label>Middle Name</label>
                                                <input type="text" class="form-control" name="MiddleName" tabindex="3" value="<?php echo $emp->MiddleName; ?>" onkeyup="this.value = this.value.toUpperCase()">
                                                <div class="invalid-feedback">
                                                  Please fill in your email
                                                </div>
                                             </div>
                            </div>

                            <div class="col-1 d-flex align-items-center  ">
                                  <label>Address</Label>  
                            </div>
                            <div class="col-4">
                                             <div class="form-group">
                                                <label>House/No., Street</label>
                                                <input type="text" class="form-control" name="Address" tabindex="4" value="<?php echo $emp->Address; ?>" required autofocus onkeyup="this.value = this.value.toUpperCase()">
                                                <div class="invalid-feedback">
                                                  Please fill in your email
                                                </div>
                                             </div>
                            </div>
                            <div class="col-7 row">
                                <div class="col-4">
                                                <div class="form-group">
                                                    <label>Province</label>
                                                    
                                                    <select name="provCode" id="provCode" class="form-control input-sm" tabindex="5" placeholder="<?php echo $emp->provDesc; ?>" data-toggle="tooltip" data-placement="top" title="provCode">
                                                              <?php foreach ($refprovince as $g_reg){ ?>          
                                                                  <option value="<?php echo $g_reg->provCode; ?>" <?php if( $emp->provCode == $g_reg->provCode ) {?> selected="selected" <?php } ?>> <?php echo $g_reg->provDesc; ?> </option> 
                                                              <?php }?>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                      Please fill in your email
                                                    </div>
                                                </div>
                                </div>
                                <div class="col-3">
                                                <div class="form-group">
                                                    <label>City/Municipality</label>
                                                    <select name="citymunCode" id="citymunCode" class="form-control input-sm" tabindex="6" placeholder="<?php echo $emp->provDesc; ?>" data-toggle="tooltip" data-placement="top" title="citymunCode">
                                                              <option value="<?php echo $emp->citymunCode; ?>"> <?php echo $emp->citymunDesc; ?> </option> 
                                                              <script>
                                                                  var provCodeVar = document.getElementById("provCode");
                                                                  var citymunCodeVar = document.getElementById("citymunCode");
                                                                  var brgyCodeVar = document.getElementById("brgyCode");

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
                                                    <div class="invalid-feedback">
                                                      Please fill in your email
                                                    </div>
                                                </div>
                                </div>
                                <div class="col-3">
                                                <div class="form-group">
                                                    <label>Barangay</label>
                                                    <input type="text" class="form-control" name="brgyCode" tabindex="7" value="<?php echo $emp->brgyCode; ?>" onkeyup="this.value = this.value.toUpperCase()" >
                                                    <div class="invalid-feedback">
                                                      Please fill in your email
                                                    </div>
                                                </div>
                                </div>
                                <div class="col-2">
                                                <div class="form-group">
                                                    <label>ZipCode</label>
                                                    <input type="text" class="form-control" name="ZipCode" tabindex="8" value="<?php echo $emp->ZipCode; ?>" onkeyup="this.value = this.value.toUpperCase()" >
                                                    <div class="invalid-feedback">
                                                      Please fill in your email
                                                    </div>
                                                </div>
                                </div>
                            </div>
                            
                            <table class="table table-striped">
                                                <tbody>
                                                  <tr>
                                                    <th scope="row">Birth Date</th>
                                                    <td><input type="text" class="form-control" placeholder="<?php $bday = $emp->BirthDate;
                                                         if( $bday == "" ) { 
                                                            echo "YYYY-MM-DD"; 
                                                        }else{ 
                                                            echo $bday; 
                                                        } ?>" name="BirthDate" tabindex="9" value="<?php echo $emp->BirthDate; ?>" required onkeyup="this.value = this.value.toUpperCase()"></td>
                                                    <th scope="row">Birth Place</th>
                                                    <td><input type="text" class="form-control" name="BirthPlace" tabindex="9" value="<?php echo $emp->BirthPlace; ?>" required onkeyup="this.value = this.value.toUpperCase()"></td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row" class="w-25">Civil Status</th>
                                                    <td>
                                                        <select name="CivilStatus" id="CivilSstatus" class="form-control input-sm" tabindex="10" placeholder="<?php echo $emp->CivilStatus; ?>" data-toggle="tooltip" data-placement="top" title="CivilStatus">
                                                            <option value="SINGLE" <?php if( $emp->CivilStatus == "SINGLE" ) {?> selected="selected" <?php } ?> > SINGLE </option>
                                                            <option value="MARRIED" <?php if( $emp->CivilStatus == "MARRIED" ) {?> selected="selected" <?php } ?> > MARRIED </option>
                                                            <option value="DIVORCED" <?php if( $emp->CivilStatus == "DIVORCED" ) {?> selected="selected" <?php } ?> > DIVORCED </option>
                                                            <option value="SEPARATED" <?php if( $emp->CivilStatus == "SEPARATED" ) {?> selected="selected" <?php } ?> > SEPARATED </option>
                                                            <option value="WIDOWED" <?php if( $emp->CivilStatus == "WIDOWED" ) {?> selected="selected" <?php } ?> > WIDOWED </option>
                                                            <!-- Marital Status based on https://psa.gov.ph/content/marital-status -->
                                                        </select>
                                                        
                                                    </td>
                                                    <th class="w-25" scope="row">Gender</th>
                                                    <td class="w-25">
                                                            <select name="Gender" id="Gender" class="form-control input-sm" tabindex="11" placeholder="<?php echo $emp->Gender; ?>" data-toggle="tooltip" data-placement="top" title="CivilStatus">
                                                                <option value="MALE" <?php if( $emp->Gender == "MALE" ) {?> selected="selected" <?php } ?> > MALE </option>
                                                                <option value="FEMALE" <?php if( $emp->Gender == "FEMALE" ) {?> selected="selected" <?php } ?> > FEMALE </option>
                                                            </select>
                                                    </td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">Height</th>
                                                        <td><input type="text" class="form-control" name="Height" tabindex="12" value="<?php echo $emp->Height; ?>" required onkeyup="this.value = this.value.toUpperCase()"></td>
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
                                                    <td><input type="text" class="form-control" name="Weight" tabindex="14" value="<?php echo $emp->Weight; ?>" required onkeyup="this.value = this.value.toUpperCase()"></td>
                                                  </tr>
                                                  <tr>                                                
                                                    <th scope="row">Nationality</th>
                                                    <td>
                                                        <input type="text" class="form-control" name="Nationality" tabindex="15" value="<?php echo $emp->Nationality; ?>" required onkeyup="this.value = this.value.toUpperCase()">
                                                    </td>
                                                    <th scope="row">Religion</th>
                                                    
                                                    <td><input type="text" class="form-control" name="Religion" tabindex="16" value="<?php echo $emp->Religion; ?>" required onkeyup="this.value = this.value.toUpperCase()"></td>
                                                    
                                                  </tr>
                                                 
                                                </tbody>
                                          </table>
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
                                                    <td><input type="text" class="form-control" name="PersonalEmailAddress" tabindex="18" value="<?php echo $emp->PersonalEmailAddress; ?>" required onkeyup="this.value = this.value.toUpperCase()"></td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">Facebook Email Address</th>
                                                    <td><input type="text" class="form-control" name="FacebookEmailAddress" tabindex="19" value="<?php echo $emp->FacebookEmailAddress; ?>" required onkeyup="this.value = this.value.toUpperCase()"></td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">Phone number</th>
                                                    <td><input type="text" class="form-control" name="TelephoneNo" tabindex="20" value="<?php echo $emp->TelephoneNo; ?>" required onkeyup="this.value = this.value.toUpperCase()"></td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">Contact number</th>
                                                    <td><input type="text" class="form-control" name="ContactNo" tabindex="21" value="<?php echo $emp->ContactNo; ?>" required onkeyup="this.value = this.value.toUpperCase()"></td>
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
                                                    <td><input type="text" class="form-control" name="FatherName" tabindex="22" value="<?php echo $emp->FatherName; ?>" required onkeyup="this.value = this.value.toUpperCase()"></td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">Father's Contact Number</th>
                                                    <td><input type="text" class="form-control" name="FatherContactNo" tabindex="22" value="<?php echo $emp->FatherContactNo; ?>" required onkeyup="this.value = this.value.toUpperCase()"></td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">Mother's Name</th>
                                                    <td><input type="text" class="form-control" name="MotherName" tabindex="22" value="<?php echo $emp->MotherName; ?>" required onkeyup="this.value = this.value.toUpperCase()"></td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">Mother's Contact Number</th>
                                                    <td><input type="text" class="form-control" name="MotherContactNo" tabindex="22" value="<?php echo $emp->MotherContactNo; ?>" required onkeyup="this.value = this.value.toUpperCase()"></td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">Guardian's Name</th>
                                                    <td><input type="text" class="form-control" name="GuardianName" tabindex="22" value="<?php echo $emp->GuardianName; ?>" required onkeyup="this.value = this.value.toUpperCase()"></td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">Guardian's Contact Number</th>
                                                    <td><input type="text" class="form-control" name="GuardianContactNo" tabindex="22" value="<?php echo $emp->GuardianContactNo; ?>" required onkeyup="this.value = this.value.toUpperCase()"></td>
                                                  </tr>
                                                </tbody>
                                          </table>
                   </div>
                </div>


                <div class="col-6 col-lg-6 ">
                        <div class="form-group">
                         <button type="submit" name="save_info" class="btn btn-primary btn-lg btn-block" tabindex="26">
                           Save Information
                         </button>
                       </div>
               </div>
               
               
               <br /><br /><br /><br /><br />
               
               
               
               
               
               
               
         </div>
         
         </form>
       
         
         
         
         

     </div>
   </section>
 </div>
	  


