<?php
    require_once 'core.php';

    $editid = $_GET['editid'];
    $row = mysql_query("SELECT * FROM applicant where app_id = '$editid'");
    $get_id = mysql_fetch_array($row);

    if(isset($_POST['editBtn'])) {
        $appid = $_POST['appid'];
      //Personal
        $lname = $_POST['lname'];
        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $nick = $_POST['nick'];
        $status = $_POST['status'];
        $cityAddr = $_POST['cityAddr'];
        $cityZip = $_POST['cityZip'];
        $prov = $_POST['prov'];
        $provZip = $_POST['provZip'];
        $contact = $_POST['contact'];
        $bdate = $_POST['bdate'];
        $civil = $_POST['civil'];
        $bplace = $_POST['bplace'];

        // image
        $target = "images/".basename($_FILES['image']['name']);
        $image = $_FILES['image']['name'];
        $exten = explode(".", $_FILES['image']['name']);
        $exten = $exten[1];

      //educBack
        $educCollege = $_POST['educCollege'];
        $educCourse = $_POST['educCourse'];
        $colldateFrom = $_POST['colldateFrom'];
        $colldateTo = $_POST['colldateTo'];

        $educHigh = $_POST['educHigh'];
        $educHsDegree= $_POST['educHsDegree'];
        $hsDateFrom = $_POST['hsDateFrom'];
        $hsDateTo = $_POST['hsDateTo'];

        $educElem = $_POST['educElem'];
        $educElemDegree= $_POST['educElemDegree'];
        $elemDateFrom = $_POST['elemDateFrom'];
        $elemDateTo = $_POST['elemDateTo'];
      //empHis
        $comp1 = $_POST['comp1'];
        $job1 = $_POST['job1'];
        $salary1 = $_POST['salary1'];
        $job1dateFrom = $_POST['job1dateFrom'];
        $job1dateTo = $_POST['job1dateTo'];

        $comp2 = $_POST['comp2'];
        $job2 = $_POST['job2'];
        $salary2 = $_POST['salary2'];
        $job2dateFrom = $_POST['job2dateFrom'];
        $job2dateTo = $_POST['job2dateTo'];

        $comp3 = $_POST['comp3'];
        $job3 = $_POST['job3'];
        $salary3 = $_POST['salary3'];
        $job3dateFrom = $_POST['job3dateFrom'];
        $job3dateTo = $_POST['job3dateTo'];
      //skills
        $skill1 = $_POST['skill1'];
        $yearSkill1 = $_POST['yearSkill1'];

        $skill2 = $_POST['skill2'];
        $yearSkill2 = $_POST['yearSkill2'];

        $skill3 = $_POST['skill3'];
        $yearSkill3 = $_POST['yearSkill3'];
      //famBack
        $father = $_POST['father'];
        $fatherBdate = $_POST['fatherBdate'];

        $mother = $_POST['mother'];
        $motherBdate = $_POST['motherBdate'];

        $spouse = $_POST['spouse'];
        $spouseBdate = $_POST['spouseBdate'];

        $child1 = $_POST['child1'];
        $dobChild1 = $_POST['dobChild1'];
        $child1Civil = $_POST['child1Civil'];

        $child2 = $_POST['child2'];
        $dobChild2 = $_POST['dobChild2'];
        $child2Civil = $_POST['child2Civil'];

        $child3 = $_POST['child3'];
        $dobChild3 = $_POST['dobChild3'];
        $child3Civil = $_POST['child3Civil'];
      //reference
        $ref1 = $_POST['ref1'];
        $posRef1 = $_POST['posRef1'];
        $compAddRef1 = $_POST['compAddRef1'];
        $contRef1 = $_POST['contRef1'];

        $ref2 = $_POST['ref2'];
        $posRef2 = $_POST['posRef2'];
        $compAddRef2 = $_POST['compAddRef2'];
        $contRef2 = $_POST['contRef2'];

        $ref3 = $_POST['ref3'];
        $posRef3 = $_POST['posRef3'];
        $compAddRef3 = $_POST['compAddRef3'];
        $contRef3 = $_POST['contRef3'];
      //pice
        $picename = $_POST['picename'];
        $picecontact = $_POST['picecontact'];
        $picerelationship = $_POST['picerelationship'];
        $piceAddress = $_POST['piceAddress'];
      //other
        $attainEduc = $_POST['attainEduc'];
        $gambling = $_POST['gambling'];
        $training = $_POST['training'];
        $hobbySports = $_POST['hobbySports'];
      //government
        $sss = $_POST['sss'];
        $pagibig = $_POST['pagibig'];
        $tin = $_POST['tin'];
        $philhealth = $_POST['philhealth'];
      //account
        $uname = $_POST['uname'];
        $pass = $_POST['pass'];

    $editquery = "UPDATE applicant SET app_lname='$lname',app_fname='$fname',
    app_mname='$mname',app_nickname='$nick', app_address='$cityAddr',
    app_addrZip='$cityZip', app_provAddress='$prov',app_provZip='$provZip',
    app_birthDate='$bdate', app_birthPlace='$bplace',app_contactNo='$contact',
    app_civilStatus='$civil', app_status='$status', app_image='$image',
    app_college='$educCollege', app_course='$educCourse',
    app_incCollDateFrom='$colldateFrom', app_incCollDateTo='$colldateTo',
    app_highSchool='$educHigh', app_hsDegree='$educHsDegree',
    app_incHSDateFrom='$hsDateFrom', app_incHSDateTo='$hsDateTo',
    app_elem='$educElem', app_elemDegree='$educElemDegree',
    app_incElemDateFrom='$elemDateFrom', app_incElemDateTo='$elemDateTo',
    app_company1='$comp1', app_job1='$job1',app_salary1='$salary1',
    app_incJob1DateFrom='$job1dateFrom', app_incJob1DateTo='$job1dateTo',
    app_company2='$comp2',app_job2='$job2', app_salary2='$salary2',
    app_incJob2DateFrom='$job2dateFrom', app_incJob2DateTo='$job2dateTo',
    app_company3='$comp3', app_job3='$job3', app_salary3='$salary3',
    app_incJob3DateFrom='$job3dateFrom',app_incJob3DateTo='$job3dateTo',
    app_skill1='$skill1', app_yearsSkill1='$yearSkill1', app_skill2='$skill2',
    app_yearsSkill2='$yearSkill2', app_skill3='$skill3',
    app_yearsSkill3='$yearSkill3',app_father='$father',
    app_fatherDOB='$fatherBdate', app_mother='$mother',
    app_motherDOB='$motherBdate',app_spouse='$spouse',
    app_spouseDOB='$spouseBdate',app_child1='$child1',
    app_child1DOB='$dobChild1', app_child1civil='$child1Civil',
    app_child2='$child2', app_child2DOB='$dobChild2',
    app_child2civil='$child2Civil', app_child3='$child3', 
    app_child3DOB='$dobChild3',app_child3civil='$child3Civil',
    app_ref1='$ref1', app_ref1Posi='$posRef1',
    app_ref1CompAddr='$compAddRef1', app_ref1Contact='$contRef1',
    app_ref2='$ref2', app_ref2Posi='$posRef2',
    app_ref2CompAddr='$compAddRef2', app_ref2Contact='$contRef2',
    app_ref3='$ref3', app_ref3Posi='$posRef3',
    app_ref3CompAddr='$compAddRef3', app_ref3Contact='$contRef3',
    app_piceName='$picename', app_piceRelationship='$picerelationship',
    app_piceAddress='$piceAddress', app_piceContactNo='$picecontact',
    app_attEduc='$attainEduc', app_gambling='$gambling',
    app_training='$training', app_hobbySport='$hobbySports',app_SSS='$sss',
    app_TIN='$tin', app_PAGIBIG='$pagibig',
    app_PHILHEALTH='$philhealth', app_uname='$uname', app_pass='$pass'
    WHERE app_id='$appid'";

        if(($exten == 'jpg')|| ($exten == 'JPG') || ($exten == 'png') || ($exten == 'PNG') ||
            ($exten == 'bmp') || ($exten == 'BMP')){
                if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){

                    if(mysql_query($editquery)){
                        header("location: viewApp.php");                
                    }else{
                        echo "<script>alert('Error Adding')</script>".mysql_error();
                    }
                }
        }
        else{
            echo "<script>alert('File not supported')</script>";
        }
    }
?>

<!DOCTYPE html >
<html>
<head>
    <title>ADMIN</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/custom/css/manageClient.css">
    <!-- jquery plugin -->
    <script type="text/javascript" src="assets/jquery/jquery.min.js"></script>
    <!-- bootstrap js -->
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
<?php require_once 'adminPanel.php';?>
  
    <div class="col-lg-9 col-lg-offset-5" id="title">
        <p>UPDATE APPLICANT</p>
    </div>

<form class="form-horizontal" action="editAppDetails.php" method="POST" enctype="multipart/form-data">

<div class="col-lg-2 col-lg-offset-6 col-xs-12">
    <fieldset style="background-color:lightblue;">
            <img src="images/<?php echo $get_id['app_image']?>" width="200" height="200"> 
            <input type="file" name="image" required="true"/>   
    </fieldset> 
</div>

    <div class="col-lg-9 col-lg-offset-3 col-xs-12">
    <fieldset style="background-color:lightblue;">
            <legend>Personal Details</legend>

            <p class="col-lg-3 col-xs-12">
              <input type="text" class="form-control" name="lname" 
              placeholder="Last Name" required="true" 
              value="<?php echo $get_id['app_lname']?>"></input>
            </p>
          
            <p class="col-lg-3 col-xs-12">
              <input type="text" class="form-control" name="fname" 
              placeholder="First Name" required="true"
              value="<?php echo $get_id['app_fname']?>"/>
            </p>

            <p class="col-lg-3 col-xs-12">
              <input type="text" class="form-control" name="mname" 
              placeholder="Middle Name" required="true"
              value="<?php echo $get_id['app_mname']?>"/>
            </p>

            <p class="col-lg-3 col-xs-12">
              <input type="text" class="form-control" name="nick" 
              placeholder="Nick Name" required="true"
              value="<?php echo $get_id['app_nickname']?>"/>
            </p>

            <p class="col-lg-9 col-xs-12">
              <input type="text" class="form-control" name="cityAddr" 
              placeholder="City Address" required="true"
              value="<?php echo $get_id['app_address']?>"/>
            </p>

            <p class="col-lg-3 col-xs-12">
              <input type="number" class="form-control" name="cityZip" 
              placeholder="Zip Code" required="true"
              value="<?php echo $get_id['app_addrZip']?>"/>
            </p>

            <p class="col-lg-9 col-xs-12">
              <input type="text" class="form-control" name="prov" 
              placeholder="Provincial Address" required="true"
              value="<?php echo $get_id['app_provAddress']?>"/>
            </p>

            <p class="col-lg-3 col-xs-12">
              <input type="number" class="form-control" name="provZip" 
              placeholder="Province Zip Code" required="true"
              value="<?php echo $get_id['app_provZip']?>"/>
            </p>

            <p class="col-lg-3 col-xs-12">
              <input type="text" class="form-control" name="contact" 
              placeholder="Contact No" required="true"
              value="<?php echo $get_id['app_contactNo']?>"/>
            </p>

            <h4 for="bdate" class="col-lg-2 col-xs-12">Birth Date</h4>
            <p class="col-lg-4 col-xs-12">
              <input type="date" class="form-control" name="bdate" 
              required="true" value="<?php echo $get_id['app_birthDate']?>"/>
            </p>

            <p class="col-lg-3 col-xs-12">
              <select class="form-control" name="civil" required="true">
                <option><?php echo $get_id['app_civilStatus']?></option>
                <option value="">Select Civil Status</option>
                <option>Single</option>
                <option>Married</option>
                <option>Widow(er)</option>
              </select>
            </p>

            <p class="col-lg-9 col-xs-12">
              <input type="text" class="form-control" name="bplace" 
              placeholder="Place of Birth" required="true"
              value="<?php echo $get_id['app_birthPlace']?>"/>
            </p>

    </fieldset>
  </div>


<div class="col-lg-9 col-lg-offset-3 col-xs-12" >
    <fieldset style="background-color:lightblue;">
        <legend>Educational Background</legend>
    <div style='overflow-x:auto;'>
      <table class='table table-bordered' >
        <thead style='background-color:lightgreen;'>
          <tr>
            <th>Educational Institution</th>
            <th>Course(s)/Degree</th>
            <th>Inclusive Date From</th>
            <th>Inclusive Date To</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <th><input type="text" class="form-control" name="educCollege" 
            placeholder="College" value="<?php echo $get_id['app_college']?>"/></th>
            <th><input type="text" class="form-control" name="educCourse"
            value="<?php echo $get_id['app_course']?>"/></th>
            <th><input type="date" class="form-control" name="colldateFrom"
            value="<?php echo $get_id['app_incCollDateFrom']?>"/></th>
            <th><input type="date" class="form-control" name="colldateTo"
            value="<?php echo $get_id['app_incCollDateTo']?>"/></th>
          </tr>

          <tr>
            <th><input type="text" class="form-control" name="educHigh" 
            placeholder="High School" required="true"
            value="<?php echo $get_id['app_highSchool']?>"/></th>
            <th><input type="text" class="form-control" name="educHsDegree" 
            required="true" value="<?php echo $get_id['app_hsDegree']?>"/></th>
            <th><input type="date" class="form-control" name="hsDateFrom" 
            required="true" value="<?php echo $get_id['app_incHSDateFrom']?>"/></th>
            <th><input type="date" class="form-control" name="hsDateTo" 
            required="true" value="<?php echo $get_id['app_incHSDateTo']?>"/></th>
          </tr>

          <tr>
            <th><input type="text" class="form-control" name="educElem" 
            placeholder="Elementary" required="true"
            value="<?php echo $get_id['app_elem']?>"/></th>
            <th><input type="text" class="form-control" name="educElemDegree"
            required="true" value="<?php echo $get_id['app_elemDegree']?>"/></th>
            <th><input type="date" class="form-control" name="elemDateFrom" 
            required="true" value="<?php echo $get_id['app_incElemDateFrom']?>"/></th>
            <th><input type="date" class="form-control" name="elemDateTo"
            required="true" value="<?php echo $get_id['app_incElemDateTo']?>"/></th>
          </tr>

        </tbody>
      </table>

  </fieldset>
  </div>
</div>

<div class="col-lg-9 col-lg-offset-3 col-xs-12" >
    <fieldset style="background-color:lightblue;">
        <legend>Employment History</legend>
    <div style='overflow-x:auto;'>
      <table class='table table-bordered' >
        <thead style='background-color:lightgreen;'>
          <tr>
            <th>Name of Company</th>
            <th>Job Title / Position</th>
            <th>Salary Rate</th>
            <th>Inclusive Date From</th>
            <th>Inclusive Date To</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <th><input type="text" class="form-control" name="comp1"
            value="<?php echo $get_id['app_company1']?>"/></th>
            <th><input type="text" class="form-control" name="job1"
            value="<?php echo $get_id['app_job1']?>"/></th>
            <th><input type="text" class="form-control" name="salary1"
            value="<?php echo $get_id['app_salary1']?>"/></th>
            <th><input type="date" class="form-control" name="job1dateFrom"
            value="<?php echo $get_id['app_incJob1DateFrom']?>"/></th>
            <th><input type="date" class="form-control" name="job1dateTo"
            value="<?php echo $get_id['app_incJob1DateTo']?>"/></th>
          </tr>

          <tr>
            <th><input type="text" class="form-control" name="comp2"
            value="<?php echo $get_id['app_company2']?>"/></th>
            <th><input type="text" class="form-control" name="job2"
            value="<?php echo $get_id['app_job2']?>"/></th>
            <th><input type="text" class="form-control" name="salary2"
            value="<?php echo $get_id['app_salary2']?>"/></th>
            <th><input type="date" class="form-control" name="job2dateFrom"
            value="<?php echo $get_id['app_incJob2DateFrom']?>"/></th>
            <th><input type="date" class="form-control" name="job2dateTo"
            value="<?php echo $get_id['app_incJob2DateTo']?>"/></th>
          </tr>

          <tr>
            <th><input type="text" class="form-control" name="comp3"
            value="<?php echo $get_id['app_company3']?>"/></th>
            <th><input type="text" class="form-control" name="job3"
            value="<?php echo $get_id['app_job3']?>"/></th>
            <th><input type="text" class="form-control" name="salary3"
            value="<?php echo $get_id['app_salary3']?>"/></th>
            <th><input type="date" class="form-control" name="job3dateFrom"
            value="<?php echo $get_id['app_incJob3DateFrom']?>"/></th>
            <th><input type="date" class="form-control" name="job3dateTo"
            value="<?php echo $get_id['app_incJob3DateTo']?>"/></th>
          </tr>

        </tbody>
      </table>

     </fieldset>
  </div>
</div>

<div class="col-lg-9 col-lg-offset-3 col-xs-12" >
    <fieldset style="background-color:lightblue;">
        <legend>Skills Best Qualified by Experience & Training</legend>
    <div style='overflow-x:auto;'>
      <table class='table table-bordered' >
        <thead style='background-color:lightgreen;'>
          <tr>
            <th>1st Best Skill</th>
            <th>No. of Years</th>
            <th>2nd Best Skill</th>
            <th>No. of Years</th>
            <th>3rd Best Skill</th>
            <th>No. of Years</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <th><input type="text" class="form-control" name="skill1"
            value="<?php echo $get_id['app_skill1']?>"/></th>
            <th><input type="number" class="form-control" name="yearSkill1"
            value="<?php echo $get_id['app_yearsSkill1']?>"/></th>
            <th><input type="text" class="form-control" name="skill2"
            value="<?php echo $get_id['app_skill2']?>"/></th>
            <th><input type="number" class="form-control" name="yearSkill2"
            value="<?php echo $get_id['app_yearsSkill2']?>"/></th>
            <th><input type="text" class="form-control" name="skill3"
            value="<?php echo $get_id['app_skill3']?>"/></th>
            <th><input type="number" class="form-control" name="yearSkill3"
            value="<?php echo $get_id['app_yearsSkill3']?>"/></th>
            
          </tr>
        </tbody>
      </table>

    </fieldset>
  </div>
</div>

<div class="col-lg-9 col-lg-offset-3 col-xs-12" >
    <fieldset style="background-color:lightblue;">
        <legend>Family Background</legend>
        <div style='overflow-x:auto;'>

        <div class="col-lg-6 col-xs-12">
          <input type="text" class="form-control" name="father" 
          value="<?php echo $get_id['app_father']?>" placeholder="Father's Name"required="true"/>
        </div>
          <h4 for="fatherBdate" class="col-lg-2 col-xs-12">Birth Date</h4>
            <div class="col-lg-4 col-xs-12">
              <input type="date" class="form-control" name="fatherBdate" 
              required="true" value="<?php echo $get_id['app_fatherDOB']?>"/>
            </div>

          <div class="col-lg-6 col-xs-12">
            <input type="text" class="form-control" name="mother" 
            placeholder="Mother's Maiden Name"required="true"
            value="<?php echo $get_id['app_mother']?>" />
          </div>
          <h4 for="motherBdate" class="col-lg-2 col-xs-12">Birth Date</h4>
            <div class="col-lg-4 col-xs-12">
              <input type="date" class="form-control" name="motherBdate" 
              required="true" value="<?php echo $get_id['app_motherDOB']?>"/>
            </div>

          <div class="col-lg-6 col-xs-12">
            <input type="text" class="form-control" name="spouse" 
            placeholder="Spouse Name" value="<?php echo $get_id['app_spouse']?>"/>
          </div>
          <h4 for="spouseBdate" class="col-lg-2 col-xs-12">Birth Date</h4>
            <div class="col-lg-4 col-xs-12">
              <input type="date" class="form-control" name="spouseBdate" 
              value="<?php echo $get_id['app_spouseDOB']?>"/>
            </div>

      <table class='table table-bordered' >
        <thead style='background-color:lightgreen;'>
          <tr>
            <th>Name of Children</th>
            <th>Date of Birth</th>
            <th>Civil Status</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <th><input type="text" class="form-control" name="child1"
            value="<?php echo $get_id['app_child1']?>"/></th>
            <th><input type="date" class="form-control" name="dobChild1"
            value="<?php echo $get_id['app_child1DOB']?>"/></th>
            <th>
              <select class="form-control" name="child1Civil">
                <option><?php echo $get_id['app_child1civil']?></option>
                <option value="">Select Civil Status</option>
                <option>Single</option>
                <option>Married</option>
                <option>Widow(er)</option>
              </select>
            </th>
          </tr>

          <tr>
            <th><input type="text" class="form-control" name="child2"
            value="<?php echo $get_id['app_child2']?>"/></th>
            <th><input type="date" class="form-control" name="dobChild2"
            value="<?php echo $get_id['app_child2DOB']?>"/></th>
            <th>
              <select class="form-control" name="child2Civil">
                <option><?php echo $get_id['app_child2civil']?></option>
                <option value="">Select Civil Status</option>
                <option>Single</option>
                <option>Married</option>
                <option>Widow(er)</option>
              </select>
            </th>
          </tr>

           <tr>
            <th><input type="text" class="form-control" name="child3"
            value="<?php echo $get_id['app_child3']?>"/></th>
            <th><input type="date" class="form-control" name="dobChild3"
            value="<?php echo $get_id['app_child3DOB']?>"/></th>
            <th>
              <select class="form-control" name="child3Civil">
                <option><?php echo $get_id['app_child3civil']?></option>
                <option value="">Select Civil Status</option>
                <option>Single</option>
                <option>Married</option>
                <option>Widow(er)</option>
              </select>
            </th>
          </tr>

        </tbody>
      </table>

    </fieldset>
  </div>
</div>


  <div class="col-lg-9 col-lg-offset-3 col-xs-12">
    <fieldset style="background-color:lightblue;">
            <legend>Reference Persons</legend>
        <div style='overflow-x:auto;'>
      <table class='table table-bordered' >
        <thead style='background-color:lightgreen;'>
          <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Company / Address</th>
            <th>Contact No</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <th><input type="text" class="form-control" name="ref1" 
            value="<?php echo $get_id['app_ref1']?>" required="true"/></th>
            <th><input type="text" class="form-control" name="posRef1" 
            required="true" value="<?php echo $get_id['app_ref1Posi']?>"/></th>
            <th><input type="text" class="form-control" name="compAddRef1" 
            required="true" value="<?php echo $get_id['app_ref1CompAddr']?>"/></th>
            <th><input type="text" class="form-control" name="contRef1" 
            required="true" value="<?php echo $get_id['app_ref1Contact']?>"/></th>
          </tr>

          <tr>
            <th><input type="text" class="form-control" name="ref2"
            value="<?php echo $get_id['app_ref2']?>"/></th>
            <th><input type="text" class="form-control" name="posRef2"
            value="<?php echo $get_id['app_ref2Posi']?>"/></th>
            <th><input type="text" class="form-control" name="compAddRef2"
            value="<?php echo $get_id['app_ref2CompAddr']?>"/></th>
            <th><input type="text" class="form-control" name="contRef2"
            value="<?php echo $get_id['app_ref2Contact']?>"/></th>
          </tr>

          <tr>
            <th><input type="text" class="form-control" name="ref3"
            value="<?php echo $get_id['app_ref3']?>"/></th>
            <th><input type="text" class="form-control" name="posRef3"
            value="<?php echo $get_id['app_ref3Posi']?>"/></th>
            <th><input type="text" class="form-control" name="compAddRef3"
            value="<?php echo $get_id['app_ref3CompAddr']?>"/></th>
            <th><input type="text" class="form-control" name="contRef3"
            value="<?php echo $get_id['app_ref3Contact']?>"/></th>
          </tr>


        </tbody>
      </table>
  </fieldset>
</div>


  <div class="col-lg-9 col-lg-offset-3 col-xs-12">
    <fieldset style="background-color:lightblue;">
            <legend>Person Notified In Case of Emergency</legend>
        <div style='overflow-x:auto;'>

        <p class="col-lg-4 col-xs-12">
          <input type="text" class="form-control" name="picename" 
          placeholder="Name" required="true"
          value="<?php echo $get_id['app_piceName']?>"/>
        </p>

        <p class="col-lg-4 col-xs-12">
          <input type="text" class="form-control" name="picecontact" 
          placeholder="Contact No" required="true"
          value="<?php echo $get_id['app_piceContactNo']?>"/>
        </p>

        <p class="col-lg-4 col-xs-12">
          <select class="form-control" name="picerelationship" required="true">
            <option><?php echo $get_id['app_piceRelationship']?></option>
            <option value="">Select Relationship</option>
            <option>Mother</option>
            <option>Father</option>
            <option>Sibling</option>
            <option>Kin</option>
            <option>Friend</option>
            <option>Others</option>
          </select>
        </p>

        <p class="col-lg-12 col-xs-12">
          <input type="text" class="form-control" name="piceAddress" 
          placeholder="Address" required="true"
          value="<?php echo $get_id['app_piceAddress']?>"/>
        </p>

  </fieldset>
</div>

  <div class="col-lg-9 col-lg-offset-3 col-xs-12">
    <fieldset style="background-color:lightblue;">
            <legend>Others</legend>
        <div style='overflow-x:auto;'>
      <p class="col-lg-3 col-xs-12">
          <select class="form-control" name="attainEduc" required="true">
            <option><?php echo $get_id['app_attEduc']?></option>
            <option value="">Select Attain Education</option>
            <option>Parent Support</option>
            <option>Self Support</option>
            <option>Scholarship</option>
          </select>
        </p>

        <p class="col-lg-3 col-xs-12">
          <select class="form-control" name="gambling" required="true">
            <option><?php echo $get_id['app_gambling']?></option>
            <option value=""> Engage in any form of gambling?</option>
            <option>YES</option>
            <option>NO</option>
          </select>
        </p>

        <p class="col-lg-3 col-xs-12">
          <select class="form-control" name="training" required="true">
            <option><?php echo $get_id['app_training']?></option>
            <option value=""> Willing to undergo training & orientation?</option>
            <option>YES</option>
            <option>NO</option>
          </select>
        </p>

        <p class="col-lg-3 col-xs-12">
          <input type="text" class="form-control" name="hobbySports" 
          placeholder="Hobbies & Sports"
          value="<?php echo $get_id['app_hobbySport']?>"/>
        </p>


    </div>
  </div>
</div>

<div class="col-lg-9 col-lg-offset-3 col-xs-12">
    <fieldset style="background-color:lightblue;">
        <legend>Government Related</legend>

        <div style='overflow-x:auto;'>
      <p class="col-lg-3 col-xs-12">
          <input type="text" class="form-control" name="sss" 
          placeholder="SSS No" required="true"
          value="<?php echo $get_id['app_SSS']?>"/>
        </p>

        <p class="col-lg-3 col-xs-12">
         <input type="text" class="form-control" name="pagibig" 
         placeholder="Pag-Ibig No" required="true"
         value="<?php echo $get_id['app_PAGIBIG']?>"/>
        </p>

        <p class="col-lg-3 col-xs-12">
          <input type="text" class="form-control" name="tin" 
          placeholder="BIR Tin No" required="true"
          value="<?php echo $get_id['app_TIN']?>"/>
        </p>

        <p class="col-lg-3 col-xs-12">
          <input type="text" class="form-control" name="philhealth" 
          placeholder="PhilHealth No" required="true"
          value="<?php echo $get_id['app_PHILHEALTH']?>"/>
        </p>

  </fieldset>
</div>

<div class="col-lg-9 col-lg-offset-3 col-xs-12">
    <fieldset style="background-color:lightblue;">
            <legend>Account</legend>
        <div style='overflow-x:auto;'>
        <p class="col-lg-6 col-xs-12">
          <input type="text" class="form-control" name="uname" 
          placeholder="Username" required="true"
          value="<?php echo $get_id['app_uname']?>"/>
        </p>

        <p class="col-lg-6 col-xs-12">
          <input type="text" class="form-control" name="pass" 
          placeholder="Password" required="true"
          value="<?php echo $get_id['app_pass']?>"/>
        </p>

  </fieldset>
</div>

<input type="hidden" name="appid" value="<?php echo $get_id['app_id']?>">
<input type="hidden" name="status" value="applicant"/>

<div class="col-xs-12">
  <br/>
  <button type="submit" class="btn btn-success col-lg-1 col-lg-offset-7 col-xs-12" name="editBtn">
  <span class="glyphicon glyphicon-edit"></span> Update</button>
</div>

</form>


</body>
</html>
    