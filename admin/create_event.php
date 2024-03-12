<div class="main">
<div id="event-form">
    <h2>Create Event</h2>
    <form method="post" enctype="multipart/form-data">
        <!-- <input type="text" id="event-title" name="event-title" placeholder="Event Title" required> -->
        <input type="file" id="event-image" name="image" accept="image/*" required>
        <textarea id="event-description" name="event-description" placeholder="Event Description" required></textarea>
        <button type="submit" name="submit">Create Event</button>
    </form>
</div>
</div>

<?php 
    include("../include/connect.php");
    if(isset($_POST['submit'])){
        $message = $_POST['event-description'];
        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        move_uploaded_file($image_tmp,"../components/images/$image");
        $query = "insert into `event` (event_image, event_message) values ('$image ',' $message')";
        $query_save = mysqli_query($con,$query);

        if($query_save){
            echo "<script>alert('inserted successfully')</script>";
        }else{
                echo "<script>alert('Error: " . mysqli_error($con) . "')</script>";
            }
    }

?>