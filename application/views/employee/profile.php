<!-- Main Content -->
<div class="main-content">
    <section class="section">

        <?php $this->load->view('employee/section_header'); ?>
        
        <div class="section-body">

            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">

                    <?php $this->load->view('employee/menu'); ?>

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
                                    <td colspan="3"><?php echo $emp->EmployeeNo; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Full Name</th>
                                    <td colspan="3"><?php echo $emp->LastName . ', ' . $emp->FirstName . ' ' . $emp->MiddleName; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Address</th>
                                    <td colspan="3"><?php //echo $emp->Address . ', ' . $emp->brgyCode . ', ' . $emp->citymunDesc . ',' . $emp->provDesc . ', ' . $emp->ZipCode; ?></td>
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









</div>
</section>
</div>


