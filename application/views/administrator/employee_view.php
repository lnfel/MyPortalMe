        <!-- Main Content -->
 <div class="main-content">
   <section class="section">
     <div class="section-header">
       <h1>Administrator Employee - View</h1>
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
                                                        <?php $filename = './site_source/employee_picture/'.$emp->EmployeeNo.'.png'; ?>
                                                        <?php if (file_exists($filename)) { ?>
                                                         <img src="<?php echo base_url(); ?>site_source/employee_picture/<?php echo $emp->EmployeeNo;?>.png" class="rounded-circle author-box-picture" style="width:150px;">
                                                        <?php } else { ?>
                                                        <img src="<?php echo base_url(); ?>site_source/no-images.png" class="rounded-circle author-box-picture" style="width:150px;">
                                                        <?php } ?>   
                                                    </center>
                                            </div>
                                            <div class="author-box-details">
                                              <div class="author-box-name">
                                                <a href="#"><?php echo $emp->LastName.', '.$emp->FirstName.' '.$emp->MiddleName; ?></a>
                                              </div>
                                              <div class="author-box-job"><?php echo $emp->PositionName; ?></div>
                                              <div class="author-box-description">
                                                <p> <?php echo $emp->JobDescription; ?>
                                                </p>
                                              </div>
                                              
                                            </div>
                                        </div>
                                  </div>
              </div>
              <div class="col-12 col-md-12 col-lg-12">
                   <div class="card card-primary">
                        <div class="card-header">
                            <h4>Employee informaiton</h4>
                       </div>
                                            <table class="table table-striped">
                                                <tbody>
                                                  <tr>
                                                    <th scope="row" class="w-25">Employee Type</th>
                                                    <td class="w-25"><?php echo $emp->EmployeeType; ?></td>
                                                    <th scope="row">Department</th>
                                                    <td><?php echo $emp->DepartmentName; ?></td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">Date Hired</th>
                                                    <td><?php echo $emp->DateHiredProvisionary; ?></td>
                                                    <th scope="row">Date Regularized</th>
                                                    <td><?php echo $emp->DateHiredRegular; ?></td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">Date Resigned/Separated</th>
                                                    <td><?php echo $emp->DateResignedSeperated; ?></td>
                                                    <th scope="row">Date of Retirement</th>
                                                    <td><?php echo $emp->DateRetirement; ?></td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">Record Creation Date</th>
                                                    <td><?php echo $emp->DateCreated; ?></td>
                                                    <th scope="row">Last Modified</th>
                                                    <td><?php echo $emp->DateModified; ?></td>
                                                  </tr>
                                                </tbody>
                                          </table>
                   </div>
                </div>
                
  <div class="col-12 col-md-12 col-lg-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Personal Information</h4>
                        </div>
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <th scope="row">Employee No.</th>
                                    <td><?php echo $emp->EmployeeNo; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Full Name</th>
                                    <td><?php echo $emp->LastName . ', ' . $emp->FirstName . ' ' . $emp->MiddleName; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Address</th>
                                    <td colspan="3"><?php echo $emp->Address //. ', ' . $emp->brgyCode . ', ' . $emp->citymunDesc . ',' . $emp->provDesc . ', ' . $emp->ZipCode; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Birth Date</th>
                                    <td><?php echo $emp->BirthDate; ?></td>
                                    <th scope="row">Birth Place</th>
                                    <td><?php echo $emp->BirthPlace; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="w-25">Civil Status</th>
                                    <td class="w-25"><?php echo $emp->CivilStatus; ?></td>
                                    <th class="w-25" scope="row">Gender</th>
                                    <td class="w-25"><?php echo $emp->Gender; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Height</th>
                                    <td><?php echo $emp->Height; ?></td>
                                    <th scope="row">Blood Type</th>
                                    <td><?php echo $emp->BloodType; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Weight</th>
                                    <td><?php echo $emp->Weight; ?></td>
                                    <th scope="row">BMI</th>
                                    <td><?php //echo $emp->Weight; ?></td>
                                </tr>
                                <tr>                                                
                                    <th scope="row">Nationality</th>
                                    <td><?php echo $emp->Nationality; ?></td>
                                    <th scope="row">Religion</th>
                                    <td><?php echo $emp->Religion; ?></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Contact Information</h4>
                        </div>
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <th scope="row">Company Email Address</th>
                                    <td><?php echo $emp->CompanyEmailAddress; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Personal Email Address</th>
                                    <td><?php echo $emp->PersonalEmailAddress; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Facebook Email Address</th>
                                    <td><?php echo $emp->FacebookEmailAddress; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Phone number</th>
                                    <td><?php echo $emp->TelephoneNo; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Contact number</th>
                                    <td><?php echo $emp->ContactNo; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card card-primary" >
                        <div class="card-header">
                            <h4>Identification Numbers</h4>
                        </div>
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <th scope="row">TIN</th>
                                    <td><?php echo $emp->Tin; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">SSS</th>
                                    <td><?php echo $emp->Sss; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">PhilHealth</th>
                                    <td><?php echo $emp->Philhealth; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">PagIbig</th>
                                    <td><?php echo $emp->Pagibig; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
     
               
               
               <br /><br /><br /><br /><br />
               
               
               
               
               
               
               
         </div>
         
         </form>
       
         
         
         
         

     </div>
   </section>
 </div>
	  
