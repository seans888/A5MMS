<?php
    require_once 'core.php';

    if(isset($_POST['addBtn'])) {
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

    $addquery = "INSERT INTO applicant (app_lname,app_fname,
    app_mname,app_nickname, app_address, app_addrZip, app_provAddress,
    app_provZip,app_birthDate, app_birthPlace, app_contactNo,
    app_civilStatus, app_status, app_image, app_college, app_course,
    app_incCollDateFrom, app_incCollDateTo, app_highSchool, app_hsDegree,
    app_incHSDateFrom, app_incHSDateTo, app_elem, app_elemDegree,
    app_incElemDateFrom, app_incElemDateTo, app_company1, app_job1,
    app_salary1, app_incJob1DateFrom, app_incJob1DateTo, app_company2,
    app_job2, app_salary2, app_incJob2DateFrom, app_incJob2DateTo,
    app_company3, app_job3, app_salary3, app_incJob3DateFrom,
    app_incJob3DateTo, app_skill1, app_yearsSkill1, app_skill2,
    app_yearsSkill2, app_skill3, app_yearsSkill3, app_father,
    app_fatherDOB, app_mother, app_motherDOB, app_spouse,
    app_spouseDOB, app_child1, app_child1DOB, app_child1civil,
    app_child2, app_child2DOB, app_child2civil, app_child3, 
    app_child3DOB,app_child3civil, app_ref1, app_ref1Posi,
    app_ref1CompAddr, app_ref1Contact, app_ref2, app_ref2Posi,
    app_ref2CompAddr, app_ref2Contact, app_ref3, app_ref3Posi,
    app_ref3CompAddr, app_ref3Contact,app_piceName, app_piceRelationship,
    app_piceAddress, app_piceContactNo, app_attEduc, app_gambling,
    app_training, app_hobbySport, app_SSS, app_TIN, app_PAGIBIG,
    app_PHILHEALTH, app_uname, app_pass) 

    VALUES ('$lname','$fname',
    '$mname','$nick','$cityAddr','$cityZip','$prov',
    '$provZip','$bdate','$bplace','$contact',
    '$civil','$status','$image','$educCollege','$educCourse',
    '$colldateFrom','$colldateTo','$educHigh','$educHsDegree',
    '$hsDateFrom','$hsDateTo','$educElem','$educElemDegree',
    '$elemDateFrom','$elemDateTo','$comp1','$job1',
    '$salary1','$job1dateFrom','$job1dateTo','$comp2',
    '$job2','$salary2','$job2dateFrom','$job2dateTo',
    '$comp3','$job3','$salary3','$job3dateFrom',
    '$job3dateTo','$skill1','$yearSkill1','$skill2',
    '$yearSkill2','$skill3','$yearSkill3','$father',
    '$fatherBdate','$mother','$motherBdate','$spouse',
    '$spouseBdate','$child1','$dobChild1','$child1Civil',
    '$child2','$dobChild2','$child2Civil','$child3',
    '$dobChild3','$child3Civil','$ref1','$posRef1',
    '$compAddRef1','$contRef1','$ref2','$posRef2',
    '$compAddRef2','$contRef2','$ref3','$posRef3',
    '$compAddRef3','$contRef3','$picename','$picerelationship',
    '$piceAddress','$picecontact','$attainEduc','$gambling',
    '$training','$hobbySports','$sss','$tin','$pagibig',
    '$philhealth','$uname','$pass')";

        if(($exten == 'jpg')|| ($exten == 'JPG') || ($exten == 'png') || ($exten == 'PNG') ||
            ($exten == 'bmp') || ($exten == 'BMP')){
                if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){

                    if(mysql_query($addquery)){
                        echo "<script>alert('Successfully Added')</script>";                
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
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>

<body>
<?php require_once 'adminPanel.php';?>
  
    <div class="col-lg-6 col-lg-offset-5" id="title">
        <p>ADD APPLICANT</p>
    </div>

<form class="form-horizontal" action="addApp.php" method="POST" enctype="multipart/form-data">
  <div class="col-lg-9 col-lg-offset-3 col-xs-12">
    <fieldset style="background-color:lightblue;">
            <legend>Personal Details</legend>

            <p class="col-lg-3 col-xs-12">
              <input type="text" class="form-control" name="lname" placeholder="Last Name" required="true"/>
            </p>
          
            <p class="col-lg-3 col-xs-12">
              <input type="text" class="form-control" name="fname" placeholder="First Name" required="true"/>
            </p>

            <p class="col-lg-3 col-xs-12">
              <input type="text" class="form-control" name="mname" placeholder="Middle Name" required="true"/>
            </p>

            <p class="col-lg-3 col-xs-12">
              <input type="text" class="form-control" name="nick" placeholder="Nick Name" required="true"/>
            </p>

            <p class="col-lg-9 col-xs-12">
              <input type="text" class="form-control" name="cityAddr" placeholder="City Address" required="true"/>
            </p>

            <p class="col-lg-3 col-xs-12">
              <input type="number" class="form-control" name="cityZip" placeholder="Zip Code" required="true"/>
            </p>

            <p class="col-lg-9 col-xs-12">
              <input type="text" class="form-control" name="prov" placeholder="Provincial Address" required="true"/>
            </p>

            <p class="col-lg-3 col-xs-12">
              <input type="number" class="form-control" name="provZip" placeholder="Province Zip Code" required="true"/>
            </p>

            <p class="col-lg-3 col-xs-12">
              <input type="text" class="form-control" name="contact" placeholder="Contact No" required="true"/>
            </p>

            <h4 for="bdate" class="col-lg-2 col-xs-12">Birth Date</h4>
            <p class="col-lg-4 col-xs-12">
              <input type="date" class="form-control" name="bdate" required="true"/>
            </p>

            <p class="col-lg-3 col-xs-12">
              <select class="form-control" name="civil" required="true">
                <option value="">Select Civil Status</option>
                <option>Single</option>
                <option>Married</option>
                <option>Widow(er)</option>
              </select>
            </p>

            <p class="col-lg-9 col-xs-12">
              <input type="text" class="form-control" name="bplace" placeholder="Place of Birth" required="true"/>
            </p>

            <p class="col-lg-3 col-xs-12">
              <label for="image">Image</label>
              <input type="file" name="image" required="true"/>
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
            <th><input type="text" class="form-control" name="educCollege" placeholder="College"/></th>
            <th><input type="text" class="form-control" name="educCourse"/></th>
            <th><input type="date" class="form-control" name="colldateFrom"/></th>
            <th><input type="date" class="form-control" name="colldateTo"/></th>
          </tr>

          <tr>
            <th><input type="text" class="form-control" name="educHigh" placeholder="High School" required="true"/></th>
            <th><input type="text" class="form-control" name="educHsDegree" required="true"/></th>
            <th><input type="date" class="form-control" name="hsDateFrom" required="true"/></th>
            <th><input type="date" class="form-control" name="hsDateTo" required="true"/></th>
          </tr>

          <tr>
            <th><input type="text" class="form-control" name="educElem" placeholder="Elementary" required="true"/></th>
            <th><input type="text" class="form-control" name="educElemDegree" required="true"/></th>
            <th><input type="date" class="form-control" name="elemDateFrom" required="true"/></th>
            <th><input type="date" class="form-control" name="elemDateTo" required="true"/></th>
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
            <th><input type="text" class="form-control" name="comp1"/></th>
            <th><input type="text" class="form-control" name="job1"/></th>
            <th><input type="text" class="form-control" name="salary1"/></th>
            <th><input type="date" class="form-control" name="job1dateFrom"/></th>
            <th><input type="date" class="form-control" name="job1dateTo"/></th>
          </tr>

          <tr>
            <th><input type="text" class="form-control" name="comp2"/></th>
            <th><input type="text" class="form-control" name="job2"/></th>
            <th><input type="text" class="form-control" name="salary2"/></th>
            <th><input type="date" class="form-control" name="job2dateFrom"/></th>
            <th><input type="date" class="form-control" name="job2dateTo"/></th>
          </tr>

          <tr>
            <th><input type="text" class="form-control" name="comp3"/></th>
            <th><input type="text" class="form-control" name="job3"/></th>
            <th><input type="text" class="form-control" name="salary3"/></th>
            <th><input type="date" class="form-control" name="job3dateFrom"/></th>
            <th><input type="date" class="form-control" name="job3dateTo"/></th>
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
            <th><input type="text" class="form-control" name="skill1"/></th>
            <th><input type="number" class="form-control" name="yearSkill1"/></th>
            <th><input type="text" class="form-control" name="skill2"/></th>
            <th><input type="number" class="form-control" name="yearSkill2"/></th>
            <th><input type="text" class="form-control" name="skill3"/></th>
            <th><input type="number" class="form-control" name="yearSkill3"/></th>
            
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
          <input type="text" class="form-control" name="father" placeholder="Father's Name"required="true"/>
        </div>
          <h4 for="fatherBdate" class="col-lg-2 col-xs-12">Birth Date</h4>
            <div class="col-lg-4 col-xs-12">
              <input type="date" class="form-control" name="fatherBdate" required="true"/>
            </div>

          <div class="col-lg-6 col-xs-12">
            <input type="text" class="form-control" name="mother" placeholder="Mother's Maiden Name"required="true"/>
          </div>
          <h4 for="motherBdate" class="col-lg-2 col-xs-12">Birth Date</h4>
            <div class="col-lg-4 col-xs-12">
              <input type="date" class="form-control" name="motherBdate" required="true"/>
            </div>

          <div class="col-lg-6 col-xs-12">
            <input type="text" class="form-control" name="spouse" placeholder="Spouse Name"/>
          </div>
          <h4 for="spouseBdate" class="col-lg-2 col-xs-12">Birth Date</h4>
            <div class="col-lg-4 col-xs-12">
              <input type="date" class="form-control" name="spouseBdate" />
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
            <th><input type="text" class="form-control" name="child1"/></th>
            <th><input type="date" class="form-control" name="dobChild1"/></th>
            <th>
              <select class="form-control" name="child1Civil">
                <option value="">Select Civil Status</option>
                <option>Single</option>
                <option>Married</option>
                <option>Widow(er)</option>
              </select>
            </th>
          </tr>

          <tr>
            <th><input type="text" class="form-control" name="child2"/></th>
            <th><input type="date" class="form-control" name="dobChild2"/></th>
            <th>
              <select class="form-control" name="child2Civil">
                <option value="">Select Civil Status</option>
                <option>Single</option>
                <option>Married</option>
                <option>Widow(er)</option>
              </select>
            </th>
          </tr>

           <tr>
            <th><input type="text" class="form-control" name="child3"/></th>
            <th><input type="date" class="form-control" name="dobChild3"/></th>
            <th>
              <select class="form-control" name="child3Civil">
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
            <th><input type="text" class="form-control" name="ref1" required="true"/></th>
            <th><input type="text" class="form-control" name="posRef1" required="true"/></th>
            <th><input type="text" class="form-control" name="compAddRef1" required="true"/></th>
            <th><input type="text" class="form-control" name="contRef1" required="true"/></th>
          </tr>

          <tr>
            <th><input type="text" class="form-control" name="ref2"/></th>
            <th><input type="text" class="form-control" name="posRef2"/></th>
            <th><input type="text" class="form-control" name="compAddRef2"/></th>
            <th><input type="text" class="form-control" name="contRef2"/></th>
          </tr>

          <tr>
            <th><input type="text" class="form-control" name="ref3"/></th>
            <th><input type="text" class="form-control" name="posRef3"/></th>
            <th><input type="text" class="form-control" name="compAddRef3"/></th>
            <th><input type="text" class="form-control" name="contRef3"/></th>
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
          <input type="text" class="form-control" name="picename" placeholder="Name" required="true"/>
        </p>

        <p class="col-lg-4 col-xs-12">
          <input type="text" class="form-control" name="picecontact" placeholder="Contact No" required="true"/>
        </p>

        <p class="col-lg-4 col-xs-12">
          <select class="form-control" name="picerelationship" required="true">
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
          <input type="text" class="form-control" name="piceAddress" placeholder="Address" required="true"/>
        </p>

  </fieldset>
</div>

  <div class="col-lg-9 col-lg-offset-3 col-xs-12">
    <fieldset style="background-color:lightblue;">
            <legend>Others</legend>
        <div style='overflow-x:auto;'>
      <p class="col-lg-3 col-xs-12">
          <select class="form-control" name="attainEduc" required="true">
            <option value="">Select Attain Education</option>
            <option>Parent Support</option>
            <option>Self Support</option>
            <option>Scholarship</option>
          </select>
        </p>

        <p class="col-lg-3 col-xs-12">
          <select class="form-control" name="gambling" required="true">
            <option value=""> Engage in any form of gambling?</option>
            <option>YES</option>
            <option>NO</option>
          </select>
        </p>

        <p class="col-lg-3 col-xs-12">
          <select class="form-control" name="training" required="true">
            <option value=""> Willing to undergo training & orientation?</option>
            <option>YES</option>
            <option>NO</option>
          </select>
        </p>

        <p class="col-lg-3 col-xs-12">
          <input type="text" class="form-control" name="hobbySports" placeholder="Hobbies & Sports"/>
        </p>


    </div>
  </div>
</div>

<div class="col-lg-9 col-lg-offset-3 col-xs-12">
    <fieldset style="background-color:lightblue;">
        <legend>Government Related</legend>

        <div style='overflow-x:auto;'>
      <p class="col-lg-3 col-xs-12">
          <input type="text" class="form-control" name="sss" placeholder="SSS No" required="true"/>
        </p>

        <p class="col-lg-3 col-xs-12">
         <input type="text" class="form-control" name="pagibig" placeholder="Pag-Ibig No" required="true"/>
        </p>

        <p class="col-lg-3 col-xs-12">
          <input type="text" class="form-control" name="tin" placeholder="BIR Tin No" required="true"/>
        </p>

        <p class="col-lg-3 col-xs-12">
          <input type="text" class="form-control" name="philhealth" placeholder="PhilHealth No" required="true"/>
        </p>

  </fieldset>
</div>

<div class="col-lg-9 col-lg-offset-3 col-xs-12">
    <fieldset style="background-color:lightblue;">
            <legend>Account</legend>
        <div style='overflow-x:auto;'>
        <p class="col-lg-6 col-xs-12">
          <input type="text" class="form-control" name="uname" placeholder="Username" required="true"/>
        </p>

        <p class="col-lg-6 col-xs-12">
          <input type="password" class="form-control" name="pass" placeholder="Password" required="true"/>
        </p>

  </fieldset>
</div>

<input type="hidden" name="status" value="applicant"/>

<div class="col-xs-12">
  <br/>
  <button type="submit" class="btn btn-success col-lg-1 col-lg-offset-7 col-xs-12" name="addBtn">
  <span class="glyphicon glyphicon-plus-sign"></span> Submit</button>
</div>

</form>

</body>
</html>
