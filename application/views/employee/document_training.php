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
                            <h4>Documents</h4>
                        </div>
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <th>Document Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php //foreach ($account_logs as $acc_log) { ?>
                                <tr>
                                    <td><?php //echo $acc_log->DATE_LOGS;  ?></td>
                                    <td><?php //echo $acc_log->IP_ADDRESS;  ?></td>
                                </tr>
                                <?php //} ?>
                            </tbody>
                        </table>
                    </div>
                </div>

<div class="col-12 col-md-12 col-lg-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Training/Seminar/Orientation</h4>
                        </div>
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <th>Training Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php //foreach ($account_logs as $acc_log) { ?>
                                <tr>
                                    <td><?php //echo $acc_log->DATE_LOGS;  ?></td>
                                    <td><?php //echo $acc_log->IP_ADDRESS;  ?></td>
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


