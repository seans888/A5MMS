<?php require_once 'core.php'; 

    $t = mysql_query("SELECT * FROM announcement");
    $total = mysql_num_rows($t);

    $start=0;   
    $limit=3;

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

        $query = "SELECT * FROM announcement WHERE CONCAT (ann_id, ann_desc,
        ann_location,ann_startDate,ann_startTime,ann_dateTimePosted) LIKE 
        '%".$valueSearch."%'";
        $searchResult = filterTable($query);
    }else{
        $query = "SELECT * FROM announcement LIMIT $start,$limit";
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
        <a href="addAnnounce.php"><button type="button" class="btn btn-success">
        <span class="glyphicon glyphicon-plus-sign"></span> Add Announcement</button></a>
    </div>
  
    <form action="viewAnnounce.php" method="post">
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
                <th>Announce ID</th>
                <th>Description</th>
                <th>Location</th>
                <th>Date</th>
                <th>Time</th>
                <th>Posted</th>
                <th>Action</th>
            </tr>
        </thead>

    <?php while($records = mysql_fetch_array($searchResult)):?>

        <tbody>
            <tr>
                <th><?php echo $records['ann_id']?></th>
                <th><?php echo $records['ann_desc']?></th>
                <th><?php echo $records['ann_location']?></th>
                <th><?php echo $records['ann_startDate']?></th>
                <th><?php echo $records['ann_startTime']?></th>
                <th><?php echo $records['ann_dateTimePosted']?></th>
                <th><a href='updateAnn.php?updateid=<?php echo $records['ann_id'];?>'>
                <button type='button' class='btn btn-primary'>
                <span class='glyphicon glyphicon-edit'></span> Edit</button></a>

                <a href='deleteAnn.php?deleteid=<?php echo $records['ann_id'];?>'>
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
