<!-- Main Content -->
<div class="main-content">
    <section class="section">
        
        <?php $this->load->view('employee/section_header'); ?>
        
        <div class="section-body">

            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">

                    <?php $this->load->view('employee/menu'); ?>

                </div>

                <div class="col-12 col-md-4 col-lg-4">



                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Co-Employee</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled user-details list-unstyled-border list-unstyled-noborder">
                                <li class="media">
                                    <img alt="image" class="mr-3 rounded-circle" width="50" src="./assets/stisla/img/avatar/avatar-1.png">
                                    <div class="media-body">
                                        <div class="media-title">Rizal Fakhri</div>
                                        <div class="text-job text-muted">Web Developer</div>
                                    </div>
                                    <!--<div class="media-items">
                                      <div class="media-item">
                                        <div class="media-value">10K</div>
                                        <div class="media-label">Followers</div>
                                      </div>
                                      <div class="media-item">
                                        <div class="media-value">2,312</div>
                                        <div class="media-label">Following</div>
                                      </div>
                                    </div>-->
                                </li>
                                <li class="media">
                                    <img alt="image" class="mr-3 rounded-circle" width="50" src="./assets/stisla/img/avatar/avatar-5.png">
                                    <div class="media-body">
                                        <div class="media-title">Irwansyah Saputra</div>
                                        <div class="text-job text-muted">Web Developer</div>
                                    </div>
                                </li>
                                <li class="media">
                                    <img alt="image" class="mr-3 rounded-circle" width="50" src="./assets/stisla/img/avatar/avatar-4.png">
                                    <div class="media-body">
                                        <div class="media-title">Hasan Basri</div>
                                        <div class="text-job text-muted">Web Developer</div>
                                    </div>
                                </li>
                                <li class="media">
                                    <img alt="image" class="mr-3 rounded-circle" width="50" src="./assets/stisla/img/avatar/avatar-5.png">
                                    <div class="media-body">
                                        <div class="media-title">Irwansyah Saputra</div>
                                        <div class="text-job text-muted">Web Developer</div>
                                    </div>
                                </li>
                                <li class="media">
                                    <img alt="image" class="mr-3 rounded-circle" width="50" src="./assets/stisla/img/avatar/avatar-4.png">
                                    <div class="media-body">
                                        <div class="media-title">Hasan Basri</div>
                                        <div class="text-job text-muted">Web Developer</div>
                                    </div>
                                </li>
                                <li class="media">
                                    <img alt="image" class="mr-3 rounded-circle" width="50" src="./assets/stisla/img/avatar/avatar-5.png">
                                    <div class="media-body">
                                        <div class="media-title">Irwansyah Saputra</div>
                                        <div class="text-job text-muted">Web Developer</div>
                                    </div>
                                </li>
                                <li class="media">
                                    <img alt="image" class="mr-3 rounded-circle" width="50" src="./assets/stisla/img/avatar/avatar-4.png">
                                    <div class="media-body">
                                        <div class="media-title">Hasan Basri</div>
                                        <div class="text-job text-muted">Web Developer</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>


                <div class="col-lg-8">

                     <div class="card card-primary">
                        <div class="card-header">
                            <h4>Account Information</h4>
                        </div>
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <th scope="row">Employee No.</th>
                                    <td>19011601</td>
                                </tr>
                                <tr>
                                    <th scope="row">Department</th>
                                    <td>Data System Department</td>
                                </tr>
                                <tr>
                                    <th scope="row">Employee Type</th>
                                    <td>Regular</td>
                                </tr>
                                <tr>
                                    <th scope="row">Email Address</th>
                                    <td>markalvin.mangune@myportal.com</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    

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




            </div>









        </div>
    </section>
</div>


