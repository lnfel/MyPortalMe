<!-- Main Content -->
<div class="main-content">
    <section class="section">
       
        <?php $this->load->view('employee/section_header'); ?>
        
        <div class="section-body">

            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">

                    <?php $this->load->view('employee/menu'); ?>

                </div>

                <div class="col-4 col-md-4 col-lg-4">
                    <div class="card card-hero">
                        <div class="card-header">
                            <div class="card-icon">
                                <i class="far fa-question-circle"></i>
                            </div>
                            <h4>14 SL</h4>
                            <div class="card-description">Sick Leave</div>
                        </div>
                    </div>
                </div>

                <div class="col-4 col-md-4 col-lg-4">
                    <div class="card card-hero">
                        <div class="card-header">
                            <div class="card-icon">
                                <i class="far fa-question-circle"></i>
                            </div>
                            <h4>14 VL</h4>
                            <div class="card-description">Vacation Leave</div>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-md-4 col-lg-4">
                    <div class="card card-hero">
                        <div class="card-header">
                            <div class="card-icon">
                                <i class="far fa-question-circle"></i>
                            </div>
                            <h4>14 EL</h4>
                            <div class="card-description">Emergency Leave</div>
                        </div>
                    </div>
                </div>
                
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Attendance</h4>
                        </div>
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <th>Date Logged In</th>
                                    <th>Date Logged Out</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php //foreach ($account_logs as $acc_log) { ?>
                                <tr>
                                    <td><?php //echo $acc_log->DATE_LOGS;   ?></td>
                                    <td><?php //echo $acc_log->IP_ADDRESS;   ?></td>
                                    <td><?php //echo $acc_log->IP_ADDRESS;   ?></td>
                                </tr>
                                <?php //} ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Leave History</h4>
                        </div>
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <th>Date Filed</th>
                                    <th>Date End</th>
                                    <th>Number of Days</th>
                                    <th>Reason</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php //foreach ($account_logs as $acc_log) { ?>
                                <tr>
                                    <td><?php //echo $acc_log->DATE_LOGS;   ?></td>
                                    <td><?php //echo $acc_log->IP_ADDRESS;   ?></td>
                                    <td><?php //echo $acc_log->IP_ADDRESS;   ?></td>
                                    <td><?php //echo $acc_log->IP_ADDRESS;   ?></td>
                                    <td><?php //echo $acc_log->IP_ADDRESS;   ?></td>
                                </tr>
                                <?php //} ?>
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


