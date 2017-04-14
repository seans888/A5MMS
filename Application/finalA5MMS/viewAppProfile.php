<?php require_once 'core.php'; 

    $viewid = $_GET['viewid'];
    $row = mysql_query("SELECT * FROM applicant where app_id = '$viewid'");
    $get_id = mysql_fetch_array($row);

    /*$jobs = mysql_query("SELECT * FROM client LEFT JOIN job ON 
    client.client_id = job.client_id LEFT JOIN job_history ON job.job_id = job_history.job_id
    where emp_id = '$viewid'");*/

?>

<!DOCTYPE html >
<html>
<head>
    <title>ADMIN</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/custom/css/viewClient.css">
    <!-- jquery plugin -->
    <script type="text/javascript" src="assets/jquery/jquery.min.js"></script>
    <!-- bootstrap js -->
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
<?php require_once 'adminPanel.php';?>  

<form class="form-horizontal">

<div class="col-lg-2 col-lg-offset-6 col-xs-12">
    <fieldset style="background-color:lightblue;">
            <img src="images/<?php echo $get_id['app_image']?>" width="200" height="200"> 
    </fieldset> 
</div>

  <div class="col-lg-9 col-lg-offset-3 col-xs-12">
    <fieldset style="background-color:lightblue;">
            <legend>Personal Details</legend>

            <p class="col-lg-3 col-xs-12">
              <label class="form-control"><?php echo $get_id['app_lname']?></label>
            </p>
          
            <p class="col-lg-3 col-xs-12">
              <label class="form-control"><?php echo $get_id['app_fname']?></label>
            </p>

            <p class="col-lg-3 col-xs-12">
              <label class="form-control"><?php echo $get_id['app_mname']?></label>
            </p>

            <p class="col-lg-3 col-xs-12">
              <label class="form-control"><?php echo $get_id['app_nickname']?></label>
            </p>

            <p class="col-lg-9 col-xs-12">
              <label class="form-control"><?php echo $get_id['app_address']?></label>
            </p>

            <p class="col-lg-3 col-xs-12">
              <label class="form-control"><?php echo $get_id['app_addrZip']?></label>
            </p>

            <p class="col-lg-9 col-xs-12">
              <label class="form-control"><?php echo $get_id['app_provAddress']?></label>
            </p>

            <p class="col-lg-3 col-xs-12">
              <label class="form-control"><?php echo $get_id['app_provZip']?></label>
            </p>

            <p class="col-lg-3 col-xs-12">
              <label class="form-control"><?php echo $get_id['app_contactNo']?></label>
            </p>

            <h4 for="bdate" class="col-lg-2 col-xs-12">Birth Date</h4>
            <p class="col-lg-4 col-xs-12">
              <label class="form-control"><?php echo $get_id['app_birthDate']?></label>
            </p>

            <p class="col-lg-3 col-xs-12">
              <label class="form-control"><?php echo $get_id['app_civilStatus']?></label>
            </p>

            <p class="col-lg-9 col-xs-12">
              <label class="form-control"><?php echo $get_id['app_birthPlace']?></label>
            </p>

            <p class="col-lg-3 col-xs-12">
              <label class="form-control"><?php echo $get_id['app_status']?></label>
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
            <th><label class="form-control"><?php echo $get_id['app_college']?></label></th>
            <th><label class="form-control"><?php echo $get_id['app_course']?></label></th>
            <th><label class="form-control"><?php echo $get_id['app_incCollDateFrom']?></label></th>
            <th><label class="form-control"><?php echo $get_id['app_incCollDateTo']?></label></th>
          </tr>

          <tr>
            <th><label class="form-control"><?php echo $get_id['app_highSchool']?></th>
            <th><label class="form-control"><?php echo $get_id['app_hsDegree']?></th>
            <th><label class="form-control"><?php echo $get_id['app_incHSDateFrom']?></th>
            <th><label class="form-control"><?php echo $get_id['app_incHSDateTo']?></th>
          </tr>

          <tr>
            <th><label class="form-control"><?php echo $get_id['app_elem']?></th>
            <th><label class="form-control"><?php echo $get_id['app_elemDegree']?></th>
            <th><label class="form-control"><?php echo $get_id['app_incElemDateFrom']?></th>
            <th><label class="form-control"><?php echo $get_id['app_incElemDateTo']?></th>
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
            <th><label class="form-control"><?php echo $get_id['app_company1']?></th>
            <th><label class="form-control"><?php echo $get_id['app_job1']?></th>
            <th><label class="form-control"><?php echo $get_id['app_salary1']?></th>
            <th><label class="form-control"><?php echo $get_id['app_incJob1DateFrom']?></th>
            <th><label class="form-control"><?php echo $get_id['app_incJob1DateTo']?></th>
          </tr>

          <tr>
            <th><label class="form-control"><?php echo $get_id['app_company2']?></th>
            <th><label class="form-control"><?php echo $get_id['app_job2']?></th>
            <th><label class="form-control"><?php echo $get_id['app_salary2']?></th>
            <th><label class="form-control"><?php echo $get_id['app_incJob2DateFrom']?></th>
            <th><label class="form-control"><?php echo $get_id['app_incJob2DateTo']?></th>
          </tr>

          <tr>
            <th><label class="form-control"><?php echo $get_id['app_company3']?></th>
            <th><label class="form-control"><?php echo $get_id['app_job3']?></th>
            <th><label class="form-control"><?php echo $get_id['app_salary3']?></th>
            <th><label class="form-control"><?php echo $get_id['app_incJob3DateFrom']?></th>
            <th><label class="form-control"><?php echo $get_id['app_incJob3DateTo']?></th>
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
            <th><label class="form-control"><?php echo $get_id['app_skill1']?></th>
            <th><label class="form-control"><?php echo $get_id['app_yearsSkill1']?></th>
            <th><label class="form-control"><?php echo $get_id['app_skill2']?></th>
            <th><label class="form-control"><?php echo $get_id['app_yearsSkill2']?></th>
            <th><label class="form-control"><?php echo $get_id['app_skill3']?></th>
            <th><label class="form-control"><?php echo $get_id['app_yearsSkill3']?></th>
            
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
          <label class="form-control"><?php echo $get_id['app_father']?>
        </div>
          <h4 for="fatherBdate" class="col-lg-2 col-xs-12">Birth Date</h4>
            <div class="col-lg-4 col-xs-12">
              <label class="form-control"><?php echo $get_id['app_fatherDOB']?>
            </div>

          <div class="col-lg-6 col-xs-12">
            <label class="form-control"><?php echo $get_id['app_mother']?>
          </div>
          <h4 for="motherBdate" class="col-lg-2 col-xs-12">Birth Date</h4>
            <div class="col-lg-4 col-xs-12">
              <label class="form-control"><?php echo $get_id['app_motherDOB']?>
            </div>

          <div class="col-lg-6 col-xs-12">
            <label class="form-control"><?php echo $get_id['app_spouse']?>
          </div>
          <h4 for="spouseBdate" class="col-lg-2 col-xs-12">Birth Date</h4>
            <div class="col-lg-4 col-xs-12">
              <label class="form-control"><?php echo $get_id['app_spouseDOB']?>
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
            <th><label class="form-control"><?php echo $get_id['app_child1']?></th>
            <th><label class="form-control"><?php echo $get_id['app_child1DOB']?></th>
            <th><label class="form-control"><?php echo $get_id['app_child1civil']?></th>
          </tr>

          <tr>
            <th><label class="form-control"><?php echo $get_id['app_child2']?></th>
            <th><label class="form-control"><?php echo $get_id['app_child2DOB']?></th>
            <th><label class="form-control"><?php echo $get_id['app_child2civil']?></th>
          </tr>

           <tr>
            <th><label class="form-control"><?php echo $get_id['app_child3']?></th>
            <th><label class="form-control"><?php echo $get_id['app_child3DOB']?></th>
            <th><label class="form-control"><?php echo $get_id['app_child3civil']?></th>
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
            <th><label class="form-control"><?php echo $get_id['app_ref1']?></th>
            <th><label class="form-control"><?php echo $get_id['app_ref1Posi']?></th>
            <th><label class="form-control"><?php echo $get_id['app_ref1CompAddr']?></th>
            <th><label class="form-control"><?php echo $get_id['app_ref1Contact']?></th>
          </tr>

          <tr>
            <th><label class="form-control"><?php echo $get_id['app_ref2']?></th>
            <th><label class="form-control"><?php echo $get_id['app_ref2Posi']?></th>
            <th><label class="form-control"><?php echo $get_id['app_ref2CompAddr']?></th>
            <th><label class="form-control"><?php echo $get_id['app_ref2Contact']?></th>
          </tr>

          <tr>
            <th><label class="form-control"><?php echo $get_id['app_ref3']?></th>
            <th><label class="form-control"><?php echo $get_id['app_ref3Posi']?></th>
            <th><label class="form-control"><?php echo $get_id['app_ref3CompAddr']?></th>
            <th><label class="form-control"><?php echo $get_id['app_ref3Contact']?></th>
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
          <label class="form-control"><?php echo $get_id['app_piceName']?>
        </p>

        <p class="col-lg-4 col-xs-12">
          <label class="form-control"><?php echo $get_id['app_piceContactNo']?>
        </p>

        <p class="col-lg-4 col-xs-12">
          <label class="form-control"><?php echo $get_id['app_piceRelationship']?>
        </p>

        <p class="col-lg-12 col-xs-12">
          <label class="form-control"><?php echo $get_id['app_piceAddress']?>
        </p>

  </fieldset>
</div>

  <div class="col-lg-9 col-lg-offset-3 col-xs-12">
    <fieldset style="background-color:lightblue;">
            <legend>Others</legend>
        <div style='overflow-x:auto;'>
      <p class="col-lg-3 col-xs-12">
          <label class="form-control"><?php echo $get_id['app_attEduc']?>
        </p>

        <p class="col-lg-3 col-xs-12">
          <label class="form-control"><?php echo $get_id['app_gambling']?>
        </p>

        <p class="col-lg-3 col-xs-12">
          <label class="form-control"><?php echo $get_id['app_training']?>
        </p>

        <p class="col-lg-3 col-xs-12">
          <label class="form-control"><?php echo $get_id['app_hobbySport']?>
        </p>


    </div>
  </div>
</div>

<div class="col-lg-9 col-lg-offset-3 col-xs-12">
    <fieldset style="background-color:lightblue;">
        <legend>Government Related</legend>

        <div style='overflow-x:auto;'>
      <p class="col-lg-3 col-xs-12">
          <label class="form-control"><?php echo $get_id['app_SSS']?>
        </p>

        <p class="col-lg-3 col-xs-12">
         <label class="form-control"><?php echo $get_id['app_PAGIBIG']?>
        </p>

        <p class="col-lg-3 col-xs-12">
          <label class="form-control"><?php echo $get_id['app_TIN']?>
        </p>

        <p class="col-lg-3 col-xs-12">
          <label class="form-control"><?php echo $get_id['app_PHILHEALTH']?>
        </p>

  </fieldset>
</div>

<div class="col-lg-9 col-lg-offset-3 col-xs-12">
    <fieldset style="background-color:lightblue;">
            <legend>Account</legend>
        <div style='overflow-x:auto;'>
        <p class="col-lg-6 col-xs-12">
          <label class="form-control"><?php echo $get_id['app_uname']?>
        </p>

        <p class="col-lg-6 col-xs-12">
          <label class="form-control"><?php echo $get_id['app_pass']?>
        </p>

  </fieldset>
</div>

</form>

 
</body>
</html>
