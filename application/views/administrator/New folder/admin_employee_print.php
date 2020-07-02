<?php include('include_connection.php'); ?>
<?php include('include_security.php'); ?>
<?php 

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $mysql_select = "SELECT * FROM employee WHERE id = '$id'";
    $result = $conn->query($mysql_select) or die($conn->error);
    $row = $result->fetch_assoc();

} 

?>
<?php include('include_header.php'); ?>

<br />

<div class="container">

   

        <div class="float-left" style="font-weight:bold;color:#b41e2c;font-size:25px;font-family:georgia">
        <!-- <button onclick="Print()" class="btn btn-success d-print-none"><i class="fa fa-print"></i> Print</button> -->
        </div>
		<div class="float-right">
            <button onclick="Print()" class="btn btn-success d-print-none"><i class="fa fa-print"></i> Print</button>
            <!-- <a href="admin_main_employee.php" class="btn btn-default  d-print-none" style="border: 1px solid grey;" data-toggle="tooltip" data-placement="top" title="Back"><i class="fa fa-arrow-left"></i> Back</a> --></div>
		<div class="clearfix"></div>


<table style="font-size:10px;"> 
    <tbody>
       <tr>
          <td colspan="2">
              <div style="width:960px;">
                    <div style="text-align:center;">
                        <span style="font-size:20px;"><b>SCHOOL SYSTEM</b></span>
                        <br>
                        <span style="font-size:17px;"><b>EMPLOYEE INFORMATION SHEET</b></span>
                        <br>
                        <span style="font-size:14px;">Date : <?php echo date('F d, Y');?></span>
                    </div>
              </div>
         </td>
      </tr>
      <tr valign="top" style="font-size:12px;">
          <td style="width:760px;vertical-align:middle;">

                                <table style="width:760px;padding:0px;margin:0px;">
                                    <tbody>
                                        <tr>
                                            <td style="border-bottom: 1px solid!important;" colspan="2"><h4>Personal Information</h4></td>
                                            <td style="border-bottom: 1px solid!important;" colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <th style="width:120px;">Name of Employee</th>
                                            <td style="border-bottom: 1px solid;" colspan="3">: <?php echo $row['LastName'].', '.$row['FirstName'].' '.$row['MiddleName']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Address</th>
                                            <td style="border-bottom: 1px solid;" colspan="3">: <?php echo $row['Address']; ?>
                                                    <?php 
                                                        // $prov_code = $employee->PROV_CODE;
                                                        // $town_code = $employee->TOWN_CODE; 
                                                        // $sql = "SELECT * FROM category_town_municipality where town_code = '$town_code' and prov_code = '$prov_code'";
                                                        // $result = mysqli_query($conn, $sql);
                                                        // $row_town = mysqli_fetch_assoc($result);
                                                        // echo $row_town['TOWN'];
                                                    ?>
                                                    <?php //$prov_code = $employee->PROV_CODE; 
                                                    //     $sql = "SELECT * FROM category_province where prov_code = '$prov_code' ";
                                                    //     $result = mysqli_query($conn, $sql);
                                                    //     $row_prov = mysqli_fetch_assoc($result);
                                                    //     echo $row_prov['PROVINCE'];
                                                    ?></td>
                                        </tr>
                                        <tr>
                                            <th>Birthdate</th>
                                            <td style="width:250px;border-bottom: 1px solid;">: <?php echo $row['BirthDate']; ?></td>
                                            <th style="width:110px;">&nbsp;&nbsp;Birthplace</th>
                                            <td style="border-bottom: 1px solid;">: <?php echo $row['BirthPlace']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Age</th>
                                            <td style="border-bottom: 1px solid;">: <?php  $bday = $row['BirthDate']; echo date('Y') - date('Y',strtotime($bday)); ?></td>
                                            <th></th>
                                            <td style="border-bottom: 1px solid;">: </td>
                                        </tr> 
                                        <tr>
                                            <th>Civil Status</th>
                                            <td style="border-bottom: 1px solid;">: <?php echo $row['CivilStatus']; ?></td>
                                            <th>&nbsp;&nbsp;Gender</th>
                                            <td style="border-bottom: 1px solid;">: <?php echo $row['Gender']; ?></td>
                                        </tr> 
                                        <tr>
                                            <th>Height</th>
                                            <td style="border-bottom: 1px solid;">: <?php echo $row['Height']; ?></td>
                                            <th>&nbsp;&nbsp;Body Mass Index</th>
                                            <td style="border-bottom: 1px solid;">: <?php //if(!empty($employee->HEIGHT) && !empty($employee->WEIGHT)){
                                                //$bmi = $employee->WEIGHT /(($employee->HEIGHT/100) * ($employee->HEIGHT/100));
                                                //$bmi = round($bmi);
                                                //if($bmi == ''){ 
                                                //        echo '';
                                                // } else if($bmi >= '0' && $bmi <= '18'){ 
                                                //        echo 'Underweight '.'('.$bmi.')';
                                                // } else if ($bmi >= '19' && $bmi <= '24'){
                                                //        echo 'Normal '.'('.$bmi.')'; 
                                                // } else if ($bmi >= '25' && $bmi <= '29'){
                                                //        echo 'Overweight '.'('.$bmi.')';   
                                                // } else if ($bmi >= '30' && $bmi <= '34'){
                                                //        echo 'Obesity - class I '.'('.$bmi.')';   
                                                // } else if ($bmi >= '35' && $bmi <= '39'){
                                                //        echo 'Obesity - class II '.'('.$bmi.')';
                                                // } else if ($bmi >= '40'){
                                                //        echo 'Obesity - class III '.'('.$bmi.')';
                                                // } else {
                                                //        echo '';    
                                                // }
                                                // }?>
                                            </td>
                                        </tr> 
                                        <tr>
                                            <th>Weight</th>
                                            <td style="border-bottom: 1px solid;">: <?php echo $row['Weight']; ?></td>
                                            <th>&nbsp;&nbsp;Blood Type</th>
                                            <td style="border-bottom: 1px solid;">: <?php echo $row['BloodType']; ?></td>
                                        </tr> 
                                        <tr>
                                            <th>Nationality</th>
                                            <td style="border-bottom: 1px solid;">: <?php echo $row['Nationality']; ?></td>
                                            <th>&nbsp;&nbsp;Religion</th>
                                            <td style="border-bottom: 1px solid;">: <?php echo $row['Religion']; ?></td>
                                        </tr> 
                                    </tbody>
                                </table>

        </td>
        <td width="250" align="center" style="font-weight:bold;vertical-align:middle;">
                                 <?php $filename = './assets/site_images/employee_picture/'.$row['EmployeeID'].'.jpg'; ?>
                                
                                <?php if (file_exists($filename)) { ?>
                                <img src="assets/site_images/employee_picture/<?php echo $row['EmployeeID']; ?>.jpg" class="img-thumbnail" style="background-color:#fff;height:180px;width:180px;"/>
                                <?php } else {?>
                                <img src="assets/site_images/no-images.png" class="img-thumbnail" style="background-color:#fff;height:180px;width:180px;"/>
                                <?php } ?>

        </td>
      </tr>

    </tbody> 
</table>

<table style="font-size:10px;"> 
    <tbody>
        <tr valign="top" style="font-size:12px;">
            <td>
                <div style="width:340px;">
                    <table style="width:340px;padding:0px;margin:0px;">
                        <tbody>
                            <tr>
                                <td style="border-bottom:1px solid!important;" colspan="2"><h4>Contact Information</h4></td>
                            </tr>
                            <tr>
                                <th style="width:150px;">Telephone No.</th>
                                <td style="width:175px;border-bottom: 1px solid;">: <?php echo $row['TelephoneNo']; ?></td>
                            </tr>
                            <tr>
                                <th>Cellphone No.</th>
                                <td style="border-bottom: 1px solid;">: <?php echo $row['ContactNo']; ?></td>
                            </tr> 
                            <tr>
                                <th>&nbsp;</th>
                                <td style="border-bottom: 1px solid;">: <?php //echo $row['InCaseOfEmergencyNo']; ?></td>
                            </tr> 
                            <tr>
                                <th>In Case of Emergency</th>
                                <td style="border-bottom: 1px solid;">: <?php //echo $row['InCaseOfEmergencyNo']; ?></td>
                            </tr> 
                            <tr>
                                <th>Personal Email Address</th>
                                <td style="border-bottom: 1px solid;">: <?php echo $row['PersonalEmailAddress']; ?></td>
                            </tr>
                            <tr>
                                <th>Facebook Address</th>
                                <td style="border-bottom: 1px solid;">: <?php echo $row['FacebookEmailAddress']; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </td>
            <td>
                <div style="width:280px;">
                            <table style="width:280px;padding:0px;margin:0px;">
                                <tbody>
                                    <tr>
                                        <td style="border-bottom: 1px solid!important;" colspan="2"><h4>&nbsp;Identification Number</h4></td>
                                    </tr>
                                    <tr>
                                        <th style="width:110px;">&nbsp;&nbsp;SSS No.</th>
                                        <td style="width:165px;border-bottom: 1px solid;">: <?php echo $row['Sss']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>&nbsp;&nbsp;TIN No.</th>
                                        <td style="border-bottom: 1px solid;">: <?php echo $row['Tin']; ?></td>
                                    </tr> 
                                    <tr>
                                        <th>&nbsp;&nbsp;Pagibig No.</th>
                                        <td style="border-bottom: 1px solid;">: <?php echo $row['Pagibig']; ?></td>
                                    </tr> 
                                    <tr>
                                        <th>&nbsp;&nbsp;Philhealth No.</th>
                                        <td style="border-bottom: 1px solid;">: <?php echo $row['Philhealth']; ?></td>
                                    </tr> 
                                    <tr>
                                        <th>&nbsp;&nbsp;CRN No.</th>
                                        <td style="border-bottom: 1px solid;">: <?php echo $row['Crn']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>&nbsp;&nbsp;Driver License</th>
                                        <td style="border-bottom: 1px solid;">: <?php //echo $row['DriverLicense']; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                </div>
            </td>
            <td>
                <div style="width:340px;">
                            <table style="width:340px;padding:0px;margin:0px;">
                                <tbody>
                                    <tr>
                                        <td style="border-bottom: 1px solid!important;" colspan="2"><h4>&nbsp;Employee Information</h4></td>
                                    </tr>
                                    <tr>
                                        <th style="width:110px;">&nbsp;&nbsp;Position</th>
                                        <td style="width:240px;border-bottom: 1px solid;">: <?php echo $row['PositionID']; ?>
                                        <?php //$position_id = $employee->POSITION_ID; 
                                              //  $sql = "SELECT * FROM employee_position where position_id = '$position_id'";
                                              //  $result = mysqli_query($conn, $sql);
                                              //  $row_position = mysqli_fetch_assoc($result);
                                              //  echo ucwords(strtolower($row_position['POSITION_FULL']));
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>&nbsp;&nbsp;Employee Type</th>
                                        <td style="border-bottom: 1px solid;">: <?php //echo ucfirst(strtolower($row['EMPLOYEE_TYPE'])); ?></td>
                                    </tr> 
                                    <tr>
                                        <th>&nbsp;&nbsp;Department</th>
                                        <td style="border-bottom: 1px solid;">: <?php //echo $employee->DEPARTMENT_ID; ?>
                                                <?php //$department_id = $employee->DEPARTMENT_ID; 
                                                    //$sql = "SELECT * FROM employee_department where department_id = '$department_id'";
                                                    //$result = mysqli_query($conn, $sql);
                                                    //$row_department = mysqli_fetch_assoc($result);
                                                    //echo ucwords(strtolower($row_department['DEPARTMENT_NAME']));
                                                ?>
                                        </td>
                                    </tr> 
                                    <tr>
                                        <th>&nbsp;&nbsp;Date Employed</th>
                                        <td style="border-bottom: 1px solid;">: <?php //echo date('F d, Y', strtotime($employee->DATE_HIRED_PROVISIONARY)); ?> --- <?php //echo date('F d, Y', strtotime($employee->DATE_HIRED_REGULAR)); ?></td>
                                    </tr> 
                                    <tr>
                                        <th>&nbsp;&nbsp;Company Email</th>
                                        <td style="border-bottom: 1px solid;">: <?php //echo strtolower($row['COMPANY_EMAIL_ADDRESS_1']); ?></td>
                                    </tr>
                                    <tr>
                                        <th>&nbsp;&nbsp;Company Email</th>
                                        <td style="border-bottom: 1px solid;">: <?php //echo strtolower($row['COMPANY_EMAIL_ADDRESS_2']); ?></td>
                                    </tr>
                                </tbody>
                            </table>
                </div>
            </td>
        </tr>
    </tbody>
</table>

<table style="font-size:10px;"> 
    <tbody>
        <tr valign="top" style="font-size:12px;">
            <td>
                <div style="width:960px;">
                            <table style="width:960px;padding:0px;margin:0px;">
                                <tbody>
                                    <tr>
                                        <td style="border-bottom: 1px solid!important;" colspan="10"><h4>Family Details</h4></td>
                                    </tr>
                                    <tr>
                                        <th style="text-align:center;">Name</th>
                                        <th style="text-align:center;">Relationship</th>
                                        <th style="text-align:center;">Occupation</th>
                                        <th style="text-align:center;">Age</th>
                                        <th style="text-align:center;">Birthdate</th>
                                        <th style="text-align:center;">Birthplace</th>
                                        <th style="text-align:center;">Civil Status</th>
                                        <th style="text-align:center;">Gender</th>
                                        <th style="text-align:center;">Status</th>
                                        <th style="text-align:center;">Contact No.</th>
                                    </tr>
                                     <?php //foreach ($employee_family as $employee_fam) { ?>
                                    <tr>
                                        <td style="border-bottom: 1px solid;"><?php //echo ucwords($employee_fam->LAST_NAME.', '.$employee_fam->FIRST_NAME.' '.$employee_fam->MIDDLE_NAME); ?></td>
                                        <td style="border-bottom: 1px solid;text-align:center;">
                                            <?php //echo ucwords(strtolower($employee_fam->RELATIONSHIP)); ?>
                                            <?php //$relationship_id = $employee_fam->RELATIONSHIP_ID; 
                                               // $sql = "SELECT * FROM category_family_relation where relationship_id = '$relationship_id'";
                                               // $result = mysqli_query($conn, $sql);
                                               // $row_family = mysqli_fetch_assoc($result);
                                               // echo ucwords(strtolower($row_family['RELATION']));
                                            ?>
                                        </td>
                                        <td style="border-bottom: 1px solid;text-align:center;"><?php //echo ucwords(strtolower($employee_fam->OCCUPATION)); ?></td>
                                        <td style="border-bottom: 1px solid;text-align:center;"><?php //echo date('Y') - date('Y',strtotime($employee_fam->BIRTH_DATE)); ?></td>
                                        <td style="border-bottom: 1px solid;text-align:center;"><?php //echo $employee_fam->BIRTH_DATE; ?></td>
                                        <td style="border-bottom: 1px solid;text-align:center;"><?php //echo ucwords(strtolower($employee_fam->BIRTH_PLACE)); ?></td>
                                        <td style="border-bottom: 1px solid;text-align:center;"><?php //echo ucwords(strtolower($employee_fam->CIVIL_STATUS)); ?></td>
                                        <td style="border-bottom: 1px solid;text-align:center;"><?php //echo ucwords(strtolower($employee_fam->GENDER)); ?></td>
                                        <td style="border-bottom: 1px solid;text-align:center;"><?php //echo ucwords(strtolower($employee_fam->LIVING_STATUS)); ?></td>
                                        <td style="border-bottom: 1px solid;text-align:center;"><?php //echo ucwords(strtolower($employee_fam->CONTACT_NO)); ?></td>
                                    </tr>
                                    <?php //} ?>
                                </tbody>
                            </table>       
                </div>
            </td>
        </tr>
    </tbody>
</table>
    

<table style="font-size:10px;"> 
    <tbody>
        <tr valign="top" style="font-size:12px;">
            <td>
                <div style="width:470px;">

                    
                        <table style="width:470px;padding:0px;margin:0px;">
                                <thead>
                                    <tr>
                                            <td style="border-bottom:1px solid;" colspan="2"><h4>Educational Background</h4></h4></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php //foreach ($employee_education as $employee_educ) { ?>
                                    <tr valign="top">
                                        <td style="border-bottom:1px solid;width:100px;"><?php // if(empty($employee_educ->DATE_GRADUATED_TO) || ($employee_educ->DATE_GRADUATED_TO == '0000-00-00') || ($employee_educ->GRADUATED_OPTION == 'NO')) { echo 'Undergrad'; } else { echo date('F j, Y',strtotime($employee_educ->DATE_GRADUATED_TO)); } ?>
                                         </td>
                                        <td style="border-bottom:1px solid;">
                                            <?php //echo ucwords(strtolower($employee_educ->SCHOOL_LEVEL)); ?>
                                            <br />
                                            <?php //$school_id = $employee_educ->SCHOOL_ID; 
                                                //$sql = "SELECT * FROM category_school_name where school_id = '$school_id'";
                                               // $result = mysqli_query($conn, $sql);
                                                //$row_school = mysqli_fetch_assoc($result);
                                               // echo ucwords(strtolower($row_school['SCHOOL_NAME']));
                                            ?>
                                            <br />
                                            <?php // $course_id = $employee_educ->COURSE_ID; 
                                                //$sql = "SELECT * FROM category_school_course where course_id = '$course_id'";
                                               // $result = mysqli_query($conn, $sql);
                                               // $row_course = mysqli_fetch_assoc($result);
                                               // echo ucwords(strtolower($row_course['COURSE_NAME']));
                                            ?>
                                        </td>
                                    </tr>
                                    <?php //} ?>
                                </tbody>
                        </table>

                    
                        <table style="width:470px;padding:0px;margin:0px;">
                                <thead>
                                    <tr>
                                            <td style="border-bottom:1px solid;" colspan="3"><h4>Trainings Provided</h4></td>
                                    </tr>
                                    <tr style="font-weight:bold;">
                                            <td style="border-bottom:1px solid;width:400px;">TRAININGS / SEMINARS / ORIENTATION</td>
                                            <td style="border-bottom:1px solid;text-align:center;width:100px;">DATE FROM</td>
                                            <td style="border-bottom:1px solid;text-align:center;width:100px;">DATE TO</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php //$i = 1; foreach ($employee_training as $training) { ?>
                                    <tr valign="top">
                                        <td style="border-bottom:1px solid;"><?php //echo $training->TRAINING_NAME; ?></td>
                                        <td style="border-bottom:1px solid;"><?php //echo $training->DATE_FROM; ?></td>
                                        <td style="border-bottom:1px solid;"><?php //echo $training->DATE_TO; ?></td>
                                    </tr>
                                    <?php //} ?>
                                </tbody>
                        </table>
                    
                </div>
            </td>
            <td>
                <div style="width:20px;">
                    &nbsp;
                </div>
            </td>
            <td>
                <div style="width:470px;">
                            <table style="width:470px;padding:0px;margin:0px;">
                                <tbody>
                                    <tr>
                                        <td style="border-bottom: 1px solid;" colspan="2"><h4>&nbsp;Employment History</h4></td>
                                    </tr>
                                    <!--
                                    <tr valign="top">
                                        <th style="border-bottom: 1px solid;width:180px;">&nbsp;&nbsp;<?php //echo date('Y',strtotime($employee->DATE_HIRED_PROVISIONARY)); ?> - <?php //if ($employee->DATE_RESIGNED_SEPERATED == '0000-00-00' || $employee->DATE_RESIGNED_SEPERATED == '1970-01-01'){ echo 'Present'; } else { echo date('Y',strtotime($employee->DATE_RESIGNED_SEPERATED)); } ?></th>
                                        <td style="border-bottom: 1px solid;"><strong>Veritas Maritime Corporation</strong><br />
                                            <?php //echo ucwords(strtolower($employee->POSITION_ID)); ?>
                                            <?php //$position_id = $employee->POSITION_ID; 
                                                //$sql = "SELECT * FROM employee_position where position_id = '$position_id'";
                                                //$result = mysqli_query($conn, $sql);
                                                //$row_position = mysqli_fetch_assoc($result);
                                                //echo ucwords(strtolower($row_position['POSITION_FULL']));
                                            ?>
                                            <br />
                                            <?php //echo date('F j, Y',strtotime($employee->DATE_HIRED_PROVISIONARY)); ?> - <?php //if ($employee->DATE_RESIGNED_SEPERATED == '0000-00-00' || $employee->DATE_RESIGNED_SEPERATED == '1970-01-01'){ echo 'Present'; } else { echo date('Y',strtotime($employee->DATE_RESIGNED_SEPERATED)); } ?><br />
                                        </td>
                                    </tr>-->
                                    <?php //foreach ($employee_exp as $employee_exp_history) { ?>
                                    <tr valign="top">
                                        <th style="border-bottom: 1px solid;width:180px;">&nbsp;&nbsp;<?php //echo date('Y',strtotime($employee_exp_history->DATE_FROM)); ?> - <?php //if ($employee_exp_history->DATE_TO == '0000-00-00' || $employee_exp_history->DATE_TO == '1970-01-01'){ echo 'Present'; } else { echo date('Y',strtotime($employee_exp_history->DATE_TO)); } ?></th>
                                        <td style="border-bottom: 1px solid;"><strong><?php //echo ucwords(strtolower($employee_exp_history->COMPANY_NAME)); ?></strong><br />
                                            <?php //echo ucwords(strtolower($employee_exp_history->POSITION_ID)); ?>
                                            <?php //$position_id = $employee_exp_history->POSITION_ID; 
                                                //$sql = "SELECT * FROM employee_position where position_id = '$position_id'";
                                                //$result = mysqli_query($conn, $sql);
                                                //$row_position = mysqli_fetch_assoc($result);
                                                //echo ucwords(strtolower($row_position['POSITION_FULL']));
                                            ?>
                                            <br />
                                            <?php //echo date('F j, Y',strtotime($employee_exp_history->DATE_FROM)); ?> - <?php //if ($employee_exp_history->DATE_TO == '0000-00-00' || $employee_exp_history->DATE_TO == '1970-01-01'){ echo 'Present'; } else { echo date('F j, Y',strtotime($employee_exp_history->DATE_TO)); } ?><br />
                                        </td>
                                    </tr>
                                    <?php //} ?>
                                </tbody>
                            </table>
                    
                    
                    
                            <table style="width:470px;padding:0px;margin:0px;">
                                <thead>
                                    <tr>
                                            <td style="border-bottom:1px solid;" colspan="3"><h4>Documents</h4></td>
                                    </tr>
                                    <tr style="font-weight:bold;">
                                            <td style="border-bottom:1px solid;width:250px;">DOCUMENT NAME</td>
                                            <td style="border-bottom:1px solid;text-align:center;">DATE OF ISSUE</td>
                                            <td style="border-bottom:1px solid;text-align:center;">DATE OF EXPIRED</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php  //$i = 1;  foreach ($employee_document as $document) { ?>
                                    <tr valign="top">
                                        <td style="border-bottom:1px solid;"><?php //echo $document->DOCUMENT_NAME; ?></td>
                                        <td style="border-bottom:1px solid;text-align:center;"><?php //echo $document->DATE_ISSUED; ?></td>
                                        <td style="border-bottom:1px solid;text-align:center;"><?php //echo $document->DATE_EXPIRED; ?></td>
                                    </tr>
                                    <?php //} ?>
                                </tbody>
                        </table>

                </div>
            </td>
        </tr>
    </tbody>
</table>


<table style="font-size:10px;"> 
    <tbody>
        <tr valign="top" style="font-size:12px;">
            <td>
                <div style="width:470px;">

                </div>
            </td>
            <td>
                <div style="width:20px;">
                    &nbsp;
                </div>
            </td>
            <td>
                <div style="width:470px;">
                  

                </div>
            </td>
        </tr>
    </tbody>
</table>
    

   
        
</div>





<script>
    function Print() {
        window.print();
    }
</script>


 <br /> 
 <br /> 
</body>
    </html>