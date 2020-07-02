        <!-- Main Content -->
        <div class="main-content">
   <section class="section">
     <div class="section-header">
       <h1>Administrator Student Applicant - View</h1>
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
                                                        <?php $filename = './site_source/student_picture/'.$emp->ApplicantNo.'.png'; ?>
                                                        <?php if (file_exists($filename)) { ?>
                                                         <img src="<?php echo base_url(); ?>site_source/student_picture/<?php echo $emp->ApplicantNo;?>.png" class="rounded-circle author-box-picture" style="width:150px;">
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
                                            <table class="table table-striped">
                                                <tbody>
                                                  <tr>
                                                    <th scope="row">Student No.</th>
                                                    <td><?php echo $emp->ApplicantNo; ?></td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">Full Name</th>
                                                    <td><?php echo $emp->LastName.', '.$emp->FirstName.' '.$emp->MiddleName; ?></td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">Address</th>
                                                    <td><?php echo $emp->Address.', '.$emp->citymunDesc.', '.$emp->provDesc.', '.$emp->ZipCode; ?></td>
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

                <div class="col-12 col-md-12 col-lg-12 row">
                   <div class="card card-primary col-sm-12 col-md-6 col-lg-6" >
                        <div class="card-header">
                            <h4>Contact Information</h4>
                       </div>
                                            <table class="table table-striped">
                                                <tbody>
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

                   <div class="card card-primary col-sm-12 col-md-6 col-lg-6" >
                        <div class="card-header">
                            <h4>Family Contact Information</h4>
                       </div>
                                            <table class="table table-striped">
                                                <tbody>
                                                  <tr>
                                                    <th scope="row">Father's Name</th>
                                                    <td><?php echo $emp->FatherName; ?></td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">Father's Contact Number</th>
                                                    <td><?php echo $emp->FatherContactNo; ?></td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">Mother's Name</th>
                                                    <td><?php echo $emp->MotherName; ?></td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">Mother's Contact Number</th>
                                                    <td><?php echo $emp->MotherContactNo; ?></td>
                                                  </tr>
                                                  
                                                  <tr>
                                                    <th scope="row">Guardian's Name</th>
                                                    <td><?php echo $emp->GuardianName; ?></td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">Guardian's Contact Number</th>
                                                    <td><?php echo $emp->GuardianContactNo; ?></td>
                                                  </tr>
                                                  
                                                </tbody>
                                          </table>
                   </div>
                </div>
                
     
               
               
               <br /><br /><br /><br /><br />
               
               
               
               
               
               
               
         </div>
         
         </form>
       
         
         
         
         

     </div>
   </section>
 </div>
	  
