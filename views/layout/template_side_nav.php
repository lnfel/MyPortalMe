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
				<li><a class="nav-link" href="<?php echo base_url('administrator/account_employee'); ?>"><i class="fas fa-user"></i> <span>Account</span></a></li>
				<li class="dropdown">
				  <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i><span>Data Entry</span></a>
				  <ul class="dropdown-menu">
					<li><a class="nav-link" href="<?php echo base_url('administrator/employee'); ?>">Employee</a></li>
					<li><a class="nav-link" href="<?php echo base_url('administrator/student'); ?>">Student</a></li>
					<li><a class="nav-link" href="<?php echo base_url('administrator/academic_program'); ?>">Academic Program</a></li>
					<li><a class="nav-link" href="<?php echo base_url('administrator/subject'); ?>">Subject</a></li>
					<li><a class="nav-link" href="<?php echo base_url('administrator/section_schedule'); ?>">Section/Schedule</a></li>
					<li><a class="nav-link" href="<?php echo base_url('administrator/room'); ?>">Room</a></li>
                                        <li><a class="nav-link" href="<?php echo base_url('administrator/department'); ?>">Department</a></li>
                                        <li><a class="nav-link" href="<?php echo base_url('administrator/curriculum'); ?>">Curriculum</a></li>
                                        <li class="divider"></li>
                                        <li><a class="nav-link" href="<?php echo base_url('administrator/list_announcement'); ?>">Announcement</a></li>
                                        <li><a class="nav-link" href="<?php echo base_url('administrator/list_holidays'); ?>">Holidays</a></li>
				  </ul>
				</li>
				<li class="menu-header">Employee</li>
				<li class="dropdown">
				  <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Employee Services</span></a>
				  <ul class="dropdown-menu">
					<li><a class="nav-link" href="<?php echo base_url('employee'); ?>">My Profile</a></li>
					<li><a class="nav-link" href="<?php echo base_url('employee/attendance'); ?>">Attendance</a></li>
					<li><a class="nav-link" href="<?php echo base_url('employee/payroll'); ?>">Payroll</a></li>
				  </ul>
				</li>
				<li class="dropdown">
				  <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Faculty Head</span></a>
				  <ul class="dropdown-menu">
					<li><a class="nav-link" href="#">Faculty List</a></li>
					<li><a class="nav-link" href="#">Faculty Performance</a></li>
					<li><a class="nav-link" href="#">Evaluate Faculty</a></li>
				  </ul>
				</li>
				<li class="dropdown">
				  <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Faculty Services</span></a>
				  <ul class="dropdown-menu">
					<li><a class="nav-link" href="#">Faculty Policy</a></li>
					<li><a class="nav-link" href="#">Class List</a></li>
					<li><a class="nav-link" href="#">Grades Encoding</a></li>
					<li><a class="nav-link" href="#">My Evaluation - Dean/Head</a></li>
				  </ul>
				</li>
				<li class="menu-header">Student</li>
				<li class="dropdown">
				  <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Student Services</span></a>
				  <ul class="dropdown-menu">
					<li><a class="nav-link" href="#">My Profile</a></li>
					<li><a class="nav-link" href="#">Classmate List</a></li>
					<li><a class="nav-link" href="#">My Grades</a></li>
					<li><a class="nav-link" href="#">Evaluate Teacher</a></li>
				  </ul>
				</li>
				<li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Blank Page</span></a></li>
			  </ul>
         </aside>
     </div>