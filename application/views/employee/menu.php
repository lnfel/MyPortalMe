<div class="card author-box card-primary">
    <div class="card-body">
        <div class="author-box-left mr-3">
            <center>
                <?php $filename = './site_source/employee_picture/' . $emp->EmployeeNo . '.png'; ?>
                <?php if (file_exists($filename)) { ?>
                    <img src="<?php echo base_url(); ?>site_source/employee_picture/<?php echo $emp->EmployeeNo; ?>.png" class="rounded-circle author-box-picture" style="width:150px;">
                <?php } else { ?>
                    <img src="<?php echo base_url(); ?>site_source/no-images.png" class="rounded-circle author-box-picture" style="width:150px;">
                <?php } ?>   
            </center>
            <div class="clearfix"></div>
        </div>
        
            <div class="author-box-details">
                <div class="author-box-name">
                    <a href="#"><?php echo $emp->LastName . ', ' . $emp->FirstName . ' ' . $emp->MiddleName; ?></a>
                </div>
                <div class="author-box-job"><?php echo $emp->PositionName; ?></div>
                <div class="author-box-description">
                    <p> <?php echo $emp->JobDescription; ?>
                    </p>
                </div>

            </div>
    </div>
</div>


<div class="card card-primary">
    <ul class="nav nav-pills nav-justified"  id="myTab3" role="tablist">
        <li class="nav-item">
            <a class="nav-link <?php if ($menu == 1) {
                    echo 'active';
                } ?>" href="<?php echo base_url('employee/'); ?>">My Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php if ($menu == 2) {
                    echo 'active';
                } ?>" href="<?php echo base_url('employee/profile'); ?>">My Profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php if ($menu == 3) {
                    echo 'active';
                } ?>" href="<?php echo base_url('employee/attendance'); ?>">My Attendance</a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link <?php if ($menu == 4) {
                    echo 'active';
                } ?>" href="<?php echo base_url('employee/activity'); ?>">Account Activity</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php if ($menu == 5) {
                    echo 'active';
                } ?>" href="<?php echo base_url('employee/payroll'); ?>">Payroll</a>
        </li>
         <li class="nav-item">
            <a class="nav-link <?php if ($menu == 6) {
                    echo 'active';
                } ?>" href="<?php echo base_url('employee/document_training'); ?>">Document/Trainings</a>
        </li>
    </ul>
</div>
