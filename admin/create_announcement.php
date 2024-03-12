


<div class="main">
<div id="announcement-form">
    <h2>Announcement</h2>
    <form method="post">
        <input type="date" id="announcement_date" name="announcement_date" required>
        <textarea id="announcement-message" name="announcement_message" placeholder="Enter your announcement message here..." required></textarea>
        <button type="submit" name="submit">Submit</button>
    </form>
</div>
</div>


<?php 
     include("../include/connect.php");
    if(isset($_POST['submit'])){
        $message = $_POST['announcement_message'];
        $date = date('Y-m-d',strtotime($_POST['announcement_date']));
    
        $query = "insert into `announcement` (date, message) values ('$date',' $message')";
        $query_save = mysqli_query($con,$query);

        if($query_save){
            echo "<script>alert('inserted successfully')</script>";
        }else{
                echo "<script>alert('Error: " . mysqli_error($con) . "')</script>";
            }
    }

?>