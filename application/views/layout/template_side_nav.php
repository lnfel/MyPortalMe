<div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
			  <div class="sidebar-brand">
                              <a href="<?php echo base_url('home'); ?>">My Portal</a>
			  </div>
			  <div class="sidebar-brand sidebar-brand-sm">
				<a href="<?php echo base_url('home'); ?>">MP</a>
			  </div>
			  <ul class="sidebar-menu">
			  	<li class="menu-header">Dashboard</li>
			  	<li class=active><a class="nav-link" href="<?php echo base_url('Home'); ?>"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
				<li class="menu-header">Administrator</li>
				<li><a class="nav-link" href="<?php echo base_url('administrator/account_employee'); ?>"><i class="fas fa-user"></i> <span>Account Management</span></a></li>
				<li class="dropdown">
				  <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i><span>Data Entry</span></a>
				  <ul class="dropdown-menu">
					<li><a class="nav-link" href="<?php echo base_url('administrator/employee'); ?>">Employee</a></li>
					<li><a class="nav-link" href="<?php echo base_url('administrator/student'); ?>">Student</a></li>
					<li><a class="nav-link" href="<?php echo base_url('administrator/academic_program'); ?>">Academic Program</a></li>
                                        <li><a class="nav-link" href="<?php echo base_url('administrator/curriculum'); ?>">Curriculum</a></li>
                                        <li><a class="nav-link" href="<?php echo base_url('administrator/department'); ?>">Department</a></li>
                                        <li><a class="nav-link" href="<?php echo base_url('administrator/room'); ?>">Room</a></li>
					<li><a class="nav-link" href="<?php echo base_url('administrator/subject'); ?>">Subject</a></li>
					<li><a class="nav-link" href="<?php echo base_url('administrator/section_schedule'); ?>">Section/Schedule</a></li>
                                        <li><a class="nav-link" href="<?php echo base_url('administrator/school_year'); ?>">School Year/Period</a></li>
                                        <li class="divider"></li>
                                        <li><a class="nav-link" href="<?php echo base_url('administrator/list_announcement'); ?>">Announcement</a></li>
                                        <li><a class="nav-link" href="<?php echo base_url('administrator/list_holidays'); ?>">Holidays</a></li>
				  </ul>
				</li>
                                <li class="menu-header">Others</li>
				<li class="dropdown">
				  <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Quick Links</span></a>
				  <ul class="dropdown-menu">
					<li><a class="nav-link" href="#">Find Employee</a></li>
					<li><a class="nav-link" href="#">Find Student</a></li>
                                        <li><a class="nav-link" href="website.html">Official Website</a></li>
				  </ul>
				</li>
				<li class="menu-header">Employee</li>
				<li class="dropdown">
				  <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Employee Services</span></a>
				  <ul class="dropdown-menu">
                                        <li><a class="nav-link" href="<?php echo base_url('employee'); ?>">My Information</a></li>
					<li><a class="nav-link" href="<?php echo base_url('employee/profile'); ?>">My Profile</a></li>
					<li><a class="nav-link" href="<?php echo base_url('employee/attendance'); ?>">Attendance</a></li>
                                        <li><a class="nav-link" href="<?php echo base_url('employee/activity'); ?>">Account Activity</a></li>
                                        <li><a class="nav-link" href="<?php echo base_url('employee/payroll'); ?>">Payroll</a></li>
					<li><a class="nav-link" href="<?php echo base_url('employee/document_training'); ?>">Document/Trainings</a></li>
				  </ul>
				</li>
				<li class="dropdown">
				  <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Faculty Head</span></a>
				  <ul class="dropdown-menu">
					<li><a class="nav-link" href="#">Faculty List</a></li>
					<li><a class="nav-link" href="#">Faculty Performance</a></li>
					<li><a class="nav-link" href="#">Evaluate Faculty</a></li>                   
                    <li><a class="nav-link" href="#">Section Management</a></li>
                    <li><a class="nav-link" href="#">Faculty Loading</a></li>
				  </ul>
				</li>
				<li class="dropdown">
				  <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Faculty Services</span></a>
				  <ul class="dropdown-menu">
					<li><a class="nav-link" href="#">Faculty Policy</a></li>
					<li><a class="nav-link" href="#">My Evaluation</a></li>
					<li><a class="nav-link" href="#">Class List</a></li>
					<li><a class="nav-link" href="#">Grades Encoding</a></li>
				  </ul>
				</li>
                                <li class="dropdown">
				  <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Admission Services</span></a>
				  <ul class="dropdown-menu">
					<li><a class="nav-link" href="<?php echo base_url('admission/applicant_list'); ?>">Applicant List</a></li>
				  </ul>
				</li>
                                <li class="dropdown">
				  <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Registrar Services</span></a>
				  <ul class="dropdown-menu">
                                        <li><a class="nav-link" href="#">Program/Curriculum List</a></li>
					<li><a class="nav-link" href="#">Subject List</a></li>
				  </ul>
				</li>
				
			  </ul>
         </aside>
     </div>