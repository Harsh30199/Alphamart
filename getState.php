<?php
            $dbcon=mysqli_connect("localhost","id9149179_root","123456");
            if($dbcon){
                mysqli_select_db($dbcon,'id9149179_database');
            }
            else{
                die("Error! Could not connect");
            }
            $query="SELECT * FROM state WHERE countryID = '" . $_POST["country_id"] . "'";
            $result = mysqli_query($dbcon,$query);
            while($row=mysqli_fetch_assoc($result)) {
              $resultset[] = $row;
            }
            $results=$resultset;
?><option value disabled selected>Select State</option>
<?php
    foreach ($results as $state) {
        ?>
<option value="<?php echo $state["id"]; ?>"><?php echo $state["name"]; ?></option>
<?php
    }
?>