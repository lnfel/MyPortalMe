<!-- Main Content -->
<div class="main-content">
   <section class="section">
     <div class="section-header">
       <h1>Manage Rooms</h1>
     </div>
     <div class="section-body">


         

         
         
         
         <div class="row">
                    <div class="col-md-6">
                            <div class="float-left">
                                <h2 class="section-title mt-0">Manage Room</h2>
                                <p class="section-lead">
                                  Organize Data.
                                </p>
                            </div>
                    </div>
                    <div class="col-md-6">
                            <div class="float-right">
                                    <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary"><i class="fa fa-user-plus"></i> Add Room </a>
                                    <!-- <a href="admin_add_employee.php" class="btn btn-primary" ><i class="fa fa-user-plus"></i> Add Employee</a> -->
                                    <!-- <a href="reports.php" class="btn btn-warning" >
                                            <i class="fa fa-database"></i> Reports</a> -->
                            </div>
                            <div class="clearfix"></div>
                            <br />
                    </div>
        </div>

         <form method="post">
                    <div class="row" >
                            <div class="col-md-2">
                                    <div class="form-group">
                                            <select class="form-control" name="cat_keyword" data-toggle="tooltip" data-placement="top" title="Select Category">
                                                            <option value="RoomName">Room Name</option>
                                                            <option value="Building">Building</option>
                                                            <option value="Capacity">Capacity</option>
                                                            <option value="AirCondition">Air Condition</option>
                                            </select>
                                    </div>
                            </div>
                            <div class="col-md-10">
                                    <div class="input-group mb-3">
                                            <input type="text" class="form-control" autofocus="" name="keyword" placeholder="Search Room " data-toggle="tooltip" data-placement="top" title="Search Room ">
                                            <div class="input-group-append">
                                                            <button class="btn btn-primary" type="submit" name="submit" data-toggle="tooltip" data-placement="top" title="Search"><i class="fa fa-search"></i> Search</button>
                                            </div>
                                    </div>
                            </div>
                    </div>
        </form>

          <div class="card">
              <div class="table-responsive">
                   <div style="height:620px;overflow:auto;">
                        <table class="table table-striped table-hover">
                                <thead>
                                    <tr style="background-color:<?php echo $_SESSION['thm_bg_secondary']; ?>;">
                                                <th style="width:20px;">#</th>
                                                <th>Room Name</th>
                                                <th>Building</th>
                                                <th style="text-align:center;">Capacity</th>
                                                <th style="text-align:center;">Air Condition</th>
                                                <th style="width:250px;"><center>Action</center></th>
                                        </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; ?>
                                    <?php foreach ($cat_room as $emp) { ?>
                                        <tr <?php echo $emp->ActiveStatus > 0 ? "" : "style=\"background-color:#f2dede;\""; ?>>
                                                <th style="vertical-align: middle;"><?php echo $emp->RoomID; ?></th>
                                                <td style="vertical-align: middle;"> <?php echo $emp->RoomName; ?></td>
                                                <td style="vertical-align: middle;"> <?php echo $emp->Building; ?></td>
                                                <td style="text-align:center;vertical-align: middle;"><?php echo $emp->Capacity; ?></td>
                                                <td style="text-align:center;vertical-align: middle;"><?php echo $emp->AirCondition; ?></td>
                                                <td style="vertical-align: middle;">
                                                        <center>
                                                            <a href="<?php echo base_url('administrator/room_edit/'.$emp->RoomID); ?>" class="btn btn-warning btn-sm" >Edit <i class="fa fa-edit"></i></a>
                                                            <a href="<?php echo base_url('administrator/room_delete/'.$emp->RoomID); ?>" class="btn btn-danger btn-sm"  onclick="return confirm('Are you sure you want to delete?');">Delete <i class="fa fa-trash"></i></a>
                                                        </center>
                                                </td>
                                        </tr>
                                        <?php  }  ?>
                                </tbody>
                        </table>
                </div>
            </div>
        </div>
       
         
         
         
         

     </div>
   </section>
 </div>
	  
<form method="post">
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color:<?php echo $_SESSION['thm_bg_primary']; ?>;color:<?php echo $_SESSION['thm_fg_primary']; ?>">
                            <h5 class="modal-title mb-3">Add New Room </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:<?php echo $_SESSION['thm_fg_primary']; ?>">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            
                            <div class="row" >
                                    <div class="col-md-12">
                                            <div class="row">
                                                    <div class="col-md-12">
                                                            <label style="font-weight:bold;">Room Name</label>
                                                            <input type="text" name="RoomName" class="form-control" value="" placeholder="Room Name" data-toggle="tooltip" data-placement="top" title="Room Name" onkeyup="this.value = this.value.toUpperCase()" required>
                                                            <label style="font-weight:bold;">Building</label>
                                                            <input type="text" name="Building" class="form-control" value="" placeholder="Building" data-toggle="tooltip" data-placement="top" title="Building" onkeyup="this.value = this.value.toUpperCase()" required>
                                                            <label style="font-weight:bold;">Capacity</label>
                                                            <input type="text" name="Capacity" class="form-control" value="" placeholder="Capacity" data-toggle="tooltip" data-placement="top" title="Capacity" onkeyup="this.value = this.value.toUpperCase()" required>
                                                            <label style="font-weight:bold;">Air Condition</label>
                                                            <select name="AirCondition" class="form-control input-sm" placeholder="Air Condition" data-toggle="tooltip" data-placement="top" title="Air Condition" onkeyup="this.value = this.value.toUpperCase()">
                                                                <option value="1">Yes</option>
                                                                <option value="0">No</option>
                                                           </select>  
                                                   </div>
                                            </div>

                                    </div>
                            </div>
							
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-secondary" data-dismiss="modal">
                                <i class="fa fa-refresh"></i> Clear Changes
                            </button>
                            <button type="submit" name="add_room" class="btn btn-primary"><i class="fa fa-plus"></i> Add Room</button>
                        </div>
                    </div>
                </div>
            </div>
			</form>