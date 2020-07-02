<?php include('include_connection.php'); ?>
<?php include('include_security.php'); ?>
<?php 

// Get Data From the URL
$id = $_GET['id'];

// Select to Display Data
if (isset($_GET['id'])) {

      $mysql_select = "SELECT * FROM employee WHERE ID = '$id'";
      $result = $conn->query($mysql_select) or die($conn->error);
      $row = $result->fetch_assoc();

} 

if (isset($_POST['upload']))
{
    $filename = $_FILES["file"]["name"];
    $file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
    $file_ext = substr($filename, strripos($filename, '.')); // get file name
    $filesize = $_FILES["file"]["size"];
    $allowed_file_types = array('.jpg','.jpeg');  

    if (in_array($file_ext,$allowed_file_types) && ($filesize < 200000))
    {   
        // Rename file
        $newfilename = $row['EmployeeID']. $file_ext;
        if (file_exists("assets/site_images/employee_picture/" . $newfilename))
        {
            // file already exists error
            echo "You have already uploaded this file.";
        }
        else
        {       
            move_uploaded_file($_FILES["file"]["tmp_name"], "assets/site_images/employee_picture/" . $newfilename);
            echo "File uploaded successfully.";   
            header('Location: admin_employee_edit.php?id='.$id);  
        }
    }
    elseif (empty($file_basename))
    {   
        // file selection error
        echo "Please select a file to upload.";
    } 
    elseif ($filesize > 200000)
    {   
        // file size error
        echo "The file you are trying to upload is too large.";
    }
    else
    {
        // file type error
        echo "Only these file typs are allowed for upload: " . implode(', ',$allowed_file_types);
        unlink($_FILES["file"]["tmp_name"]);
    }
}





// Update Data
if (isset($_POST['save_changes'])) {

      // Pass Data From FORM TO VARIABLE
      $id_new = mysqli_real_escape_string($conn, $_POST['id_new']);
      $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
      $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
      $middle_name = mysqli_real_escape_string($conn, $_POST['middle_name']);
      $employee_type = mysqli_real_escape_string($conn, $_POST['employee_type']);
      $position = mysqli_real_escape_string($conn, $_POST['position']);
      $status_id = mysqli_real_escape_string($conn, $_POST['status_id']);
      $address = mysqli_real_escape_string($conn, $_POST['address']);
      $zip_code = mysqli_real_escape_string($conn, $_POST['zip_code']);
      $birth_date = mysqli_real_escape_string($conn, $_POST['birth_date']);
      $birth_place = mysqli_real_escape_string($conn, $_POST['birth_place']);
      $civil_status = mysqli_real_escape_string($conn, $_POST['civil_status']);
      $gender = mysqli_real_escape_string($conn, $_POST['gender']);
      $height = mysqli_real_escape_string($conn, $_POST['height']);
      $weight = mysqli_real_escape_string($conn, $_POST['weight']);
      $blood_type = mysqli_real_escape_string($conn, $_POST['blood_type']);
      $nationality = mysqli_real_escape_string($conn, $_POST['nationality']);
      $religion = mysqli_real_escape_string($conn, $_POST['religion']);
      $departmentid = mysqli_real_escape_string($conn, $_POST['department']);

          //SQL UPDATE SYSTAX
          $mysql_update = "UPDATE employee 
          SET 
          LastName = '$last_name', 
          FirstName = '$first_name', 
          MiddleName = '$middle_name', 
          EmployeeTypeID = '$employee_type', 
          PositionID = '$position', 
          Address = '$address', 
          ActiveStatus = '$status_id', 
          ZipCode = '$zip_code', 
          BirthDate = '$birth_date', 
          BirthPlace = '$birth_place', 
          CivilStatus = '$civil_status', 
          Gender = '$gender', 
          Height = '$height', 
          Weight = '$weight', 
          BloodType = '$blood_type', 
          Nationality = '$nationality',
          Religion = '$religion',
          DepartmentID = '$departmentid'
          

          WHERE id = '$id_new'";

          //EXECUTE SQL UPDATE SYSTAX
          $result = $conn->query($mysql_update) or die($conn->error);

          // Redirect To page
          header('Location: admin_employee_main.php');

}

?>

<?php include('include_header.php'); ?>

<?php include('menu_sidebar.php'); ?>

<main class="admin-main">
        
        <?php include('menu_top.php'); ?>

        <section class="admin-content">
            <!-- BEGIN PlACE PAGE CONTENT HERE -->
            <div class="container">



<br />
<div class="card" style="padding:20px;">
            <div>

                <div class="float-left" style="font-weight:bold;font-size:25px;"><i class="fa fa-users"></i> UPDATE EMPLOYEE</div>
            		<div class="float-right"><a href="admin_employee_main.php" class="btn btn-default" style="border: 1px solid grey;" data-toggle="tooltip" data-placement="top" title="Back"><i class="fa fa-arrow-left"></i> Back</a></div>
            		<div class="clearfix"></div>
            		<hr />

                <div class="row">
                    <div class="col-md-3">
                        <center>
                          
                              <?php $filename = './assets/site_images/employee_picture/'.$row['EmployeeID'].'.jpg'; ?>
                              
                              <?php if (file_exists($filename)) { ?>
                              <img src="assets/site_images/employee_picture/<?php echo $row['EmployeeID']; ?>.jpg" class="img-thumbnail" style="background-color:#fff;height:180px;width:180px;"/>
                              <?php } else {?>
                              <img src="assets/site_images/no-images.png" class="img-thumbnail" style="background-color:#fff;height:180px;width:180px;"/>
                              <?php } ?>

                        </center>
                    </div>
                    <div class="col-md-9">

                          <table class="table table-sm">
                              <tr>
                                  <th style="width:80px;">Name :</th>
                                  <td style="width:400px;"><?php echo $row['LastName'].',   '.$row['FirstName'].' '.$row['MiddleName']; ?>
                                      
                                  </td>
                                  <th style="width:200px;">Employee Id :</th>
                                  <td style="width:100px;"><?php echo $row['EmployeeID']; ?></td>
                              </tr>
                              <tr>
                                  <th>Position :</th>
                                  <td><?php echo $row['PositionID'];?>
                                  <?php //$position_id = $employee->POSITION_ID; 
                                          //$sql = "SELECT * FROM employee_position where position_id = '$position_id'";
                                          //$result = mysqli_query($conn, $sql);
                                          //$row_position = mysqli_fetch_assoc($result);
                                          //echo ucwords(strtolower($row_position['POSITION_FULL']));
                                          //echo $row_position['POSITION_FULL'];
                                      ?>
                                  </td>
                                  <th></th>
                                  <td><?php //echo $employee->MANNING_EMPLOYEE_ID_1; ?></td>
                              </tr>
                              <tr>
                                  <th>Status :</th>
                                  <td> <?php $emptype = $row['EmployeeTypeID']; 
                                          $result1 = $conn->query("SELECT * FROM employee_type WHERE EmployeeTypeID = '$emptype'") or die($conn->error);
                                          $row1 = $result1->fetch_assoc();
                                          echo $row1['EmployeeType'];
                                        ?>                        
                                  </td>
                                  <th></th>
                                  <td><?php //echo $employee->MANNING_EMPLOYEE_ID_2; ?></td>
                              </tr>
                              <tr>
                                  <th>Action</th>
                                  <td>
                                      <?php $filename = "assets/site_images/employee_picture/".$row['EmployeeID'].".jpg";
                                            $handle = @fopen($filename, 'r');
                                      ?>
                                      <?php if ($handle !== false) { ?>
                                      <!--<a href="upload_download.php?id=<?php //echo $id; ?>" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Download Photo"><i class="fa fa-download"></i></a>-->
                                      <a href="upload_delete.php?id=<?php echo $id; ?>" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete Photo" onclick="return confirm('Are you sure you want to delete this photo?');"><i class="fa fa-trash"></i></a>
                                      <?php } else { ?>
                                      <a href="#" data-toggle="modal" data-target="#exampleModal"  class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Upload Photo"><i class="fa fa-upload"></i></a>
                                     <!--  <a href="upload_image.php?id=<?php //echo $id; ?>" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Upload Photo"><i class="fa fa-upload"></i></a> -->
                                      <?php } ?>
                                      | 
                                      <!-- <a href="admin_view_employee.php?id=<?php echo $id; ?>" target="_blank" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="View Profile"><i class="fa fa-file"></i></a> -->
                                      <a href="admin_employee_print.php?id=<?php echo $id; ?>" target="_blank" class="btn btn-default" style="border: 1px solid grey;" data-toggle="tooltip" data-placement="top" title="Print Profile"><i class="fa fa-print"></i></a>
                                                                          
                                  </td>
                                  <th></th>
                                  <td></td>
                              </tr>
                          </table>


                                              <form method="post" action="admin_employee_edit.php?id=<?php echo $id; ?>"  enctype="multipart/form-data">
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog  modal-dialog-align-top-left" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Upload Employee Photo</h5>
                                                                    <button type="button" class="close" data-dismiss="modal"
                                                                            aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                <center>
                                                                  <!-- <label>Select image to upload: (Jpeg Format)</label>
                                                                  <div class="input-group mb-3">
                                                                      <div class="input-group-prepend">
                                                                          <span class="input-group-text" id="inputGroupFileAddon01">Max 1mb</span>
                                                                      </div>
                                                                      <div class="custom-file">
                                                                          <input type="file" name="file" class="custom-file-input" id="inputGroupFile01" >
                                                                          <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                                      </div>
                                                                  </div>
                                                                  <br /> -->
                                                                                    Select image to upload: (Jpeg Format)
                                                                                    <br /><br /><br />
                                                                                    <input type="file" name="file">
                                                                                    <br /><br /><br />
                                                                </center>
                                                                <div class="modal-footer">
                                                                    <button type="submit" name="upload" class="btn btn-primary"><i class="fa fa-upload"></i> Upload Photo</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                              </form>


                    </div>
                </div>     
            </div>

 </div>

<br />


<div class="card" style="padding:20px;">




  <div class="row">
    <div class="col-md-12">



<form role="form" method="post">
                            <table class="table" style="padding:0px;margin:0px;">
                                <tbody>
                                    <tr>
                                        <td style="border:1px!important;" colspan="4"><h3>Personal Information</h3></td>
                                    </tr>
                                    <tr>
                                        <th style="width:180px;">Name</th>
                                        <td colspan="3">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label style="padding:0px;margin:0px;">First Name</label>
                                                    <input type="text" name="first_name" class="form-control input-sm" value="<?php echo $row['FirstName']; ?>" placeholder="First Name" data-toggle="tooltip" data-placement="top" title="First Name" onkeyup="this.value = this.value.toUpperCase()">
                                                </div>
                                                <div class="col-md-4">
                                                    <label style="padding:0px;margin:0px;">Middle Name</label>
                                                    <input type="text" name="middle_name" class="form-control input-sm" value="<?php echo $row['MiddleName']; ?>" placeholder="Middle Name" data-toggle="tooltip" data-placement="top" title="Middle Name" onkeyup="this.value = this.value.toUpperCase()">
                                                </div>
                                                <div class="col-md-4">
                                                    <label style="padding:0px;margin:0px;">Last Name</label>
                                                    <input type="text" name="last_name" class="form-control input-sm" value="<?php echo $row['LastName']; ?>" placeholder="Last Name" data-toggle="tooltip" data-placement="top" title="Last Name" onkeyup="this.value = this.value.toUpperCase()">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label style="padding:0px;margin:0px;">Employee Type</label>
                                                    <select name="employee_type" class="form-control input-sm" placeholder="Employee Type" data-toggle="tooltip" data-placement="top" title="Employee Type" onkeyup="this.value = this.value.toUpperCase()">
                                                             <option value="<?php echo $row['EmployeeTypeID']; ?>">
                                                                 <?php $emptype = $row['EmployeeTypeID']; 
                                                                    $result1 = $conn->query("SELECT * FROM employee_type WHERE EmployeeTypeID = '$emptype'") or die($conn->error);
                                                                    $row1 = $result1->fetch_assoc();
                                                                    echo $row1['EmployeeType'];
                                                                  ?>
                                                              </option>
                                                             <?php 
                                                                  $result_employeetype = $conn->query("SELECT * FROM employee_type") or die($conn->error);
                                                                  $row_employeetype = $result_employeetype->fetch_assoc();
                                                             ?>    
                                                            <?php do { ?>
                                                              <option value="<?php echo $row_employeetype['EmployeeTypeID']; ?>"><?php echo $row_employeetype['EmployeeType']; ?></option>
                                                            <?php } while ($row_employeetype = $result_employeetype->fetch_assoc()); ?>
                                                    </select>  
                                                </div>
                                                <div class="col-md-4">
                                                    <label style="padding:0px;margin:0px;">Position</label>
                                                    <input type="text" name="position" class="form-control input-sm" value="<?php echo $row['PositionID']; ?>" placeholder="Position" data-toggle="tooltip" data-placement="top" title="Position" onkeyup="this.value = this.value.toUpperCase()">
                                                </div>
                                                <div class="col-md-4">
                                                    <label style="padding:0px;margin:0px;">Status</label>
                                                    <select name="status_id" class="form-control input-sm" placeholder="Employee Type" data-toggle="tooltip" data-placement="top" title="Status" onkeyup="this.value = this.value.toUpperCase()">
                                                        <option value="<?php echo $row['ActiveStatus']; ?>"><?php if($row['ActiveStatus'] == 1) { echo "Active"; } else { echo "Inactive"; }  ?></option>
                                                        <option value="1">Active</option>
                                                        <option value="0">Inactive</option>                                                    
                                                      </select>  
                                                </div>
                                            </div>
                                           <div class="row">
                                                <div class="col-md-4">
                                                    <label style="padding:0px;margin:0px;">Department</label>
                                                    <!-- <input type="text" name="department" class="form-control input-sm" value="<?php //echo $row['DepartmentID']; ?>" placeholder="Department" data-toggle="tooltip" data-placement="top" title="Position" onkeyup="this.value = this.value.toUpperCase()"> -->
                                                    <select name="department"" class="form-control input-sm" placeholder="Employee Type" data-toggle="tooltip" data-placement="top" title="Employee Type" onkeyup="this.value = this.value.toUpperCase()">
                                                             <option value="<?php echo $row['DepartmentID']; ?>">
                                                                 <?php $deptid = $row['DepartmentID']; 
                                                                    $result1 = $conn->query("SELECT * FROM employee_department WHERE DepartmentID = '$deptid'") or die($conn->error);
                                                                    $row1 = $result1->fetch_assoc();
                                                                    echo $row1['DepartmentName'];
                                                                  ?>
                                                              </option>
                                                             <?php 
                                                                  $result_dept = $conn->query("SELECT * FROM employee_department") or die($conn->error);
                                                                  $row_dept = $result_dept->fetch_assoc();
                                                             ?>    
                                                            <?php do { ?>
                                                              <option value="<?php echo $row_dept['DepartmentID']; ?>"><?php echo $row_dept['DepartmentName']; ?></option>
                                                            <?php } while ($row_dept = $result_dept->fetch_assoc()); ?>
                                                    </select>  
                                                </div>
                                                <div class="col-md-4">
                                                    <label style="padding:0px;margin:0px;">Salary</label>
                                                    <input type="number" name="salary" class="form-control input-sm" value="<?php //echo $row['SALARY']; ?>" placeholder="Salary" data-toggle="tooltip" data-placement="top" title="Position" onkeyup="this.value = this.value.toUpperCase()">
                                                </div>
                                                <div class="col-md-4">
                                                    
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Address</th>
                                        <td colspan="3">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label style="padding:0px;margin:0px;">Address</label>
                                                    <input type="text" name="address" class="form-control input-sm" value="<?php echo $row['Address']; ?>" placeholder="Address" data-toggle="tooltip" data-placement="top" title="Address" onkeyup="this.value = this.value.toUpperCase()">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label style="padding:0px;margin:0px;">Zip Code / Postal Code</label>
                                                    <input type="text" name="zip_code" class="form-control input-sm" value="<?php echo $row['ZipCode']; ?>" placeholder="Zip Code / Postal Code" data-toggle="tooltip" data-placement="top" title="Zip Code / Postal Code" onkeyup="this.value = this.value.toUpperCase()">
                                                </div>
                                                <div class="col-md-4">
                                                    
                                                </div>
                                                <div class="col-md-4">
                                                    
                                                </div>
                                            </div>
                                            <?php //echo $crew->ADDRESS.' '.$crew->PROVINCE.', '.$crew->TOWN; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Birthdate</th>
                                        <td style="width:300px;">
                                            <div class="input-group">
                                                <input class="datepicker form-control input-sm" data-date-format="yyyy-mm-dd" type="date" name="birth_date" value="<?php echo $row['BirthDate']; ?>" id="3" placeholder="Birth Date - Format(YYYY-MM-DD)" data-toggle="tooltip" data-placement="top" title="Birth Date" onkeyup="this.value = this.value.toUpperCase()">
                                                <div class="input-group-append">
                                                     <button class="btn btn-default"><i class="fa fa-calendar"></i></button>
                                                </div>
                                            </div>
             
                                        </td>
                                        <th style="width:180px;">Birthplace</th>
                                        <td style="width:300px;"><input type="text" name="birth_place" class="form-control input-sm" value="<?php echo $row['BirthPlace']; ?>" placeholder="Birth Place" data-toggle="tooltip" data-placement="top" title="Birth Place" onkeyup="this.value = this.value.toUpperCase()"></td>
                                    </tr>
                                    <tr>
                                        <th>Age</th>
                                        <td><?php  $bday = $row['BirthDate']; echo date('Y') - date('Y',strtotime($bday)); ?></td>
                                        <th></th>
                                        <td></td>
                                    </tr> 
                                    <tr>
                                        <th>Civil Status</th>
                                        <td><select name="civil_status" class="form-control input-sm" placeholder="Civil Status" data-toggle="tooltip" data-placement="top" title="Civil Status" onkeyup="this.value = this.value.toUpperCase()">
                                                <option value="<?php echo $row['CivilStatus']; ?>"><?php echo $row['CivilStatus']; ?></option>
                                                <option>Single</option>
                                                <option>Married</option>
                                                <option>Widowed</option>
                                                <option>Seperated</option>
                                            </select>
                                        </td>
                                        <th>Gender</th>
                                        <td><select name="gender" class="form-control input-sm" placeholder="Gender" data-toggle="tooltip" data-placement="top" title="Gender" onkeyup="this.value = this.value.toUpperCase()">
                                                <option value="<?php echo $row['Gender']; ?>"><?php echo $row['Gender']; ?></option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select></td>
                                    </tr> 
                                    <tr>
                                        <th>Height (Centimeter)</th>
                                        <td><input type="text" name="height" class="form-control input-sm" value="<?php echo $row['Height']; ?>" placeholder="Height" data-toggle="tooltip" data-placement="top" title="Height" onkeyup="this.value = this.value.toUpperCase()"></td>
                                        <th>Body Mass Index</th>
                                        <td><?php 
                                           $weight = $row['Weight'];
                                           $height = $row['Height'];
                                        if(!empty($height) && !empty($weight)){
                                            $bmi = $weight /(($height/100) * ($height/100));
                                            $bmi = round($bmi);
                                            if($bmi == ''){ 
                                                   echo '';
                                             } else if($bmi >= '0' && $bmi <= '18'){ 
                                                    echo 'Underweight'.'('.$bmi.')';
                                             } else if ($bmi >= '19' && $bmi <= '24'){
                                                    echo 'Normal'.'('.$bmi.')'; 
                                             } else if ($bmi >= '25' && $bmi <= '29'){
                                                    echo 'Overweight'.'('.$bmi.')';   
                                             } else if ($bmi >= '30' && $bmi <= '34'){
                                                    echo 'Obesity - class I'.'('.$bmi.')';   
                                             } else if ($bmi >= '35' && $bmi <= '39'){
                                                    echo 'Obesity - class II'.'('.$bmi.')';
                                             } else if ($bmi >= '40'){
                                                    echo 'Obesity - class III'.'('.$bmi.')';
                                             } else {
                                                    echo '';    
                                             }
                                             }?>
                                        </td>
                                    </tr> 
                                    <tr>
                                        <th>Weight (Kilogram)</th>
                                        <td><input type="text" name="weight" class="form-control input-sm" value="<?php echo $row['Weight']; ?>" placeholder="Weight" data-toggle="tooltip" data-placement="top" title="Weight" onkeyup="this.value = this.value.toUpperCase()"></td>
                                        <th>Blood Type</th>
                                        <td><select name="blood_type" class="form-control input-sm" placeholder="Blood Type" data-toggle="tooltip" data-placement="top" title="Blood Type" onkeyup="this.value = this.value.toUpperCase()">
                                                <option value="<?php echo $row['BloodType']; ?>"><?php echo $row['BloodType']; ?></option>
                                                <option value="">None / Uncertain / Not Sure</option>
                                                <option value="A">A --------------------> / Not Sure / A+ or A-</option>
                                                <option value="B">B --------------------> / Not Sure / B+ or B-</option>
                                                <option value="AB">AB ------------------> / Not Sure / AB+ or AB-</option>
                                                <option value="O">O --------------------> / Not Sure / O+ or O-</option>
                                                <option value="A+">A+</option>
                                                <option value="A-">A-</option>
                                                <option value="B+">B+</option>
                                                <option value="B-">B-</option>
                                                <option value="AB+">AB+</option>
                                                <option value="AB-">AB-</option>
                                                <option value="O+">O+</option>
                                                <option value="O-">O-</option>
                                            </select>
                                        </td>
                                    </tr> 
                                    <tr>
                                        <th>Nationality</th>
                                        <td><select name="nationality" class="form-control input-sm" placeholder="Nationality" data-toggle="tooltip" data-placement="top" title="Nationality" onkeyup="this.value = this.value.toUpperCase()">
                                                <option value="<?php echo $row['Nationality']; ?>"><?php echo $row['Nationality']; ?></option>
                                                <option value="">None / Uncertain / Not Sure</option>
                                                <option value="FILIPINO">Filipino</option>
                                                <option value="JAPANESE">Japanese</option>
                                                <option value="BULGARIAN">Bulgarian</option>
                                                <option value="UKRAINIAN">Ukrainian</option>
                                                <option value="CHINESE">Chinese</option>
                                            </select></td>
                                        <th>Religion</th>
                                        <td><input type="text" name="religion" class="form-control input-sm" value="<?php echo $row['Religion']; ?>" placeholder="Religion" data-toggle="tooltip" data-placement="top" title="Religion" onkeyup="this.value = this.value.toUpperCase()"></td>
                                    </tr> 
                                </tbody>
                            </table>
                           <br />
                            <div style="text-align:center;">
                              <input type="hidden" name="id_new" value="<?php echo $row['ID']; ?>">
                                <button type="submit" name="save_changes" class="btn btn-primary" onclick="return confirm('Save Employee Profile?');"><i class="fa fa-save"></i> Save Changes</button>
                                <button type="reset" name="reset" class="btn btn-default"><i class="fa fa-refresh"></i> Reset Changes</button>
                            </div>
                          </form>






                <br />












		                            
    </div>
  </div>


</div>



<br /><br />




            </div>
            <!-- END PLACE PAGE CONTENT HERE -->
        </section>
</main>

<?php include('include_footer.php'); ?>