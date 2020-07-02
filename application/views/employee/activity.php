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
                            <h4>Account Activity</h4>
                        </div>
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <th>Date Logged</th>
                                    <th>Ip Address</th>
                                    <th>Computer Name</th>
                                    <th>Device</th>
                                    <th>Operating System</th>
                                    <th>Browser</th>
                                    <th>Browser Version</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php //foreach ($account_logs as $acc_log) { ?>
                                <tr>
                                    <td><?php //echo $acc_log->DATE_LOGS;  ?></td>
                                    <td><?php //echo $acc_log->IP_ADDRESS;  ?></td>
                                    <td><?php //echo $acc_log->DEVICE;  ?></td>
                                    <td><?php //echo $acc_log->OPERATING_SYSTEM;  ?></td>
                                    <td><?php //echo $acc_log->BROWSER;  ?></td>
                                    <td><?php //echo $acc_log->BROWSER_VERSION;  ?></td>
                                </tr>
                                <?php //} ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>



        </div>



        <br /><br /><br /><br /><br />









</div>









</div>
</section>
</div>


