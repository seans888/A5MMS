<?php require_once 'core.php'; 

    $t = mysql_query("SELECT * FROM client");
    $total = mysql_num_rows($t);

    $start=0;   
    $limit=5;

    if(isset($_GET['page'])){
        $page = $_GET['page'];
        $start = ($page-1) * $limit;
    }
    else{   
        $page=1;
    }

    $pageNo = ceil($total/$limit);   

    if(isset($_POST['searchBtn'])){
        $valueSearch = $_POST['valueSearch'];

        $query = "SELECT * FROM client WHERE CONCAT (client_id, client_name,
        client_contactPerson,client_contactNo) LIKE '%".$valueSearch."%'";
        $searchResult = filterTable($query);
    }else{
        $query = "SELECT * FROM client LIMIT $start,$limit";
        $searchResult = filterTable($query);
    }

    function filterTable($query){
        $filterResult = mysql_query($query);
        return $filterResult;
    }

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
  
    <div class="col-lg-2 col-lg-offset-3 form-group">
        <a href="addClient.php"><button type="button" class="btn btn-success">
        <span class="glyphicon glyphicon-plus-sign"></span> Add New Client</button></a>
    </div>
  
    <form action="viewClient.php" method="post">
        <div class="col-lg-2 col-lg-offset-4 form-group">
            <input type="text" class="form-control" name="valueSearch" placeholder="Search">
            </input>
        </div>
        
        <div>
            <button type="submit" class="btn btn-primary" name="searchBtn"><span 
            class="glyphicon glyphicon-search"></span> SEARCH</button>
        </div>
    </form> 

<div class="col-lg-9 col-lg-offset-3">

    <table class='table table-responsive table-bordered table-hover'
        style='background-color:white;'>
        <thead>
            <tr>
                <th>Client ID</th>
                <th>Client Name</th>
                <th>Contact Person</th>
                <th>Contact No</th>
                <th>Action</th>
            </tr>
        </thead>

    <?php while($records = mysql_fetch_array($searchResult)):?>

        <tbody>
            <tr>
                <th><?php echo $records['client_id']?></th>
                <th><?php echo $records['client_name']?></th>
                <th><?php echo $records['client_contactPerson']?></th>
                <th><?php echo $records['client_contactNo']?></th>
                <th>
                <a href='viewClientDetails.php?viewid=<?php echo $records['client_id'];?>'>
                <button type='button' class='btn btn-info'>
                <span class='glyphicon glyphicon-search'></span> View Details</button></a>

                <a href='updateClient.php?updateid=<?php echo $records['client_id'];?>'>
                <button type='button' class='btn btn-primary'>
                <span class='glyphicon glyphicon-edit'></span> Edit</button></a>

                <a href='deleteClient.php?deleteid=<?php echo $records['client_id'];?>'>
                <button type='submit' class='btn btn-danger' onClick="return confirm('Are you sure to delete?')">
                <span class='glyphicon glyphicon-trash'></span> Delete</button></a></th>

            </tr>
        </tbody>
    <?php 
       endwhile;
    ?>
    </table>
  
  <?php
    mysql_close();
  ?>
  
</div>

<div class="col=lg-6 col-lg-offset-7">
    <ul class="pagination col=lg-5 col-lg-offset-">
        <?php if($page > 1) { ?>
            <li><a href="?page=<?php echo ($page-1);?>"> Previous</a></li>
        <?php } ?>
        
        <?php for($i=1;$i <= $page;$i++) { ?>
            <li><a href="?page=<?php echo $i;?>"><?php echo $i;?></a></li>
        <?php } ?>

        <?php if($page != $pageNo) { ?>
            <li><a href="?page=<?php echo ($page+1);?>"> Next</a></li>
        <?php } ?>
    </ul>
</div>

</body>
</html>
