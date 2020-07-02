<?php //include('include_connection.php'); ?>
<?php //include('include_security.php'); ?>
<?php 

$id = $_GET['id'];
/**
if (isset($_GET['id'])) {

    $mysql_select = "SELECT * FROM employee WHERE ID = '$id'";
    $result = $conn->query($mysql_select) or die($conn->error);
    $row = $result->fetch_assoc();

} 
 */
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
                        <div class="float-left" style="font-weight:bold;font-size:25px;"><i class="fa fa-users"></i> VIEW EMPLOYEE PROFILE</div>
                        <div class="float-right">
                            <a href="admin_employee_print.php?id=<?php echo $id; ?>" target="_blank" class="btn btn-default" style="border: 1px solid grey;" data-toggle="tooltip" data-placement="top" title="Print Profile"><i class="fa fa-print"></i></a>
                            <a href="admin_employee_main.php" class="btn btn-default" style="border: 1px solid grey;" data-toggle="tooltip" data-placement="top" title="Back"><i class="fa fa-arrow-left"></i> Back</a>
                        </div>
                        <div class="clearfix"></div>
                        <hr />


                        <div class="row">
                            <div class="col-md-12">
                                <center>
                                    <?php $filename = './assets/site_images/employee_picture/'.$row['EmployeeID'].'.jpg'; ?>
                                    
                                    <?php if (file_exists($filename)) { ?>
                                        <img src="assets/site_images/employee_picture/<?php echo $row['EmployeeID']; ?>.jpg" class="img-thumbnail" style="background-color:#fff;height:180px;width:180px;"/>
                                    <?php } else {?>
                                        <img src="assets/site_images/no-images.png" class="img-thumbnail" style="background-color:#fff;height:180px;width:180px;"/>
                                    <?php } ?>
                                </center>
                            </div>
                        </div>    
                    </div>



<br />



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
                                                            <label style="padding:0px;margin:0px;font-weight:bold;">First Name</label>
                                                            <br />
                                                            <?php echo $row['FirstName']; ?>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label style="padding:0px;margin:0px;font-weight:bold;">Middle Name</label>
                                                             <br />
                                                            <?php echo $row['MiddleName']; ?>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label style="padding:0px;margin:0px;font-weight:bold;">Last Name</label>
                                                             <br />
                                                            <?php echo $row['LastName']; ?>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label style="padding:0px;margin:0px;font-weight:bold;">Employee Type</label>
                                                            <br />
                                                            <?php $emptype = $row['EmployeeTypeID']; 
                                                              $result1 = $conn->query("SELECT * FROM employee_type WHERE EmployeeTypeID = '$emptype'") or die($conn->error);
                                                              $row1 = $result1->fetch_assoc();
                                                              echo $row1['EmployeeType'];
                                                            ?>  
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label style="padding:0px;margin:0px;font-weight:bold;">Position</label>
                                                            <br />
                                                            <?php echo $row['PositionID']; ?>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label style="padding:0px;margin:0px;font-weight:bold;">Status</label>
                                                            <br />
                                                            <?php if($row['ActiveStatus'] == 1) { echo "Active"; } else { echo "Inactive"; }  ?>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label style="padding:0px;margin:0px;font-weight:bold;">DEPARTMENT</label>
                                                            <br />
                                                             <?php $deptid = $row['DepartmentID']; 
                                                                $result1 = $conn->query("SELECT * FROM employee_department WHERE DepartmentID = '$deptid'") or die($conn->error);
                                                                $row1 = $result1->fetch_assoc();
                                                                echo $row1['DepartmentName'];
                                                              ?>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label style="padding:0px;margin:0px;font-weight:bold;">Salary</label>
                                                            <br />
                                                            <?php //echo $row['SALARY']; ?>
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
                                                            <label style="padding:0px;margin:0px;font-weight:bold;">Address</label>
                                                            <br />
                                                            <?php echo $row['Address']; ?>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label style="padding:0px;margin:0px;font-weight:bold;">Zip Code / Postal Code</label>
                                                            <br />
                                                            <?php echo $row['ZipCode']; ?>
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
                                                    <?php echo $row['BirthDate']; ?>
                                                </td>
                                                <th style="width:180px;">Birthplace</th>
                                                <td style="width:300px;">
                                                    <?php echo $row['BirthPlace']; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Age</th>
                                                <td><?php  $bday = $row['BirthDate']; echo date('Y') - date('Y',strtotime($bday)); ?></td>
                                                <th></th>
                                                <td></td>
                                            </tr> 
                                            <tr>
                                                <th>Civil Status</th>
                                                <td><?php echo $row['CivilStatus']; ?>
                                                </td>
                                                <th>Gender</th>
                                                <td><?php echo $row['Gender']; ?></td>
                                            </tr> 
                                            <tr>
                                                <th>Height (Centimeter)</th>
                                                <td><?php echo $row['Height']; ?></td>
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
                                                <td><?php echo $row['Weight']; ?></td>
                                                <th>Blood Type</th>
                                                <td><?php echo $row['BloodType']; ?>
                                                </td>
                                            </tr> 
                                            <tr>
                                                <th>Nationality</th>
                                                <td><?php echo $row['Nationality']; ?></td>
                                                <th>Religion</th>
                                                <td><?php echo $row['Religion']; ?></td>
                                            </tr> 
                                        </tbody>
                                    </table>
                           <br />
                          
                          </form>
                        </div>
                    </div>

 </div>

 <br /><br />

            </div>
            <!-- END PLACE PAGE CONTENT HERE -->
        </section>
</main>

<?php include('include_footer.php'); ?>