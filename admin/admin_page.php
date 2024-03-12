<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Nunito Sans', sans-serif;
    text-decoration: none;
    
    
}

html{
    scroll-behavior: smooth;
}

.main_school {
    background-color: #53917e;
    height: 100px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 20px; 
}

.school {
    display: flex;
    align-items: center;
}

.school img {
    height: 80px;
    width: 80px;
    margin-right: 20px; 
}

ul {
    list-style: none;
    padding: 0;
    display: flex;
    padding-left: 3rem;
}

ul li {
    margin-right: 20px;
}

ul li:last-child {
    margin-right: 0; 
}

ul li a {
    text-decoration: none;
    font-size: 16px;
    color: white;
    letter-spacing: 2px;
    font-weight: bold;
    margin-right: 20px;
}
.user {
    height: 40px;
    background-color: #EB9C5C;
    display: flex;
    justify-content: center; 
    align-items: center; 
}
.user p{
    font-size: 14px;
    letter-spacing: 2px;
    
}
footer{
    display: flex;
    justify-content: center;
    background-color: #53917e;
    height: 100px;
    align-items: center;
    padding: 0 20px; 
    margin-top: 30px;
}
footer p{
    
    text-align: center;
    color: #fff;
}
body {
       
        background-color: #f5f5f5;
    }
    /* announcement */
    .main{
        display: flex;
        justify-content: center;
        align-items: center;
        
    }
    #announcement-form {
        background-color: #fff;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        /* width: 600px;
        height: auto; */
        margin: 50px 0;
        
    }
    
    #announcement-form h2 {
        text-align: center;
        margin-bottom: 30px;
    }
    
    #announcement-form input[type="date"],
    #announcement-form textarea {
        width: 100%;
        padding: 15px;
        margin-bottom: 30px;
        border: 2px solid #ccc;
        border-radius: 8px;
        box-sizing: border-box;
        font-size: 16px;
    }
    
    #announcement-form textarea {
        height: 150px;
    }
    
    #announcement-form button {
        background-color: #4caf50;
        color: #fff;
        border: none;
        padding: 15px 30px;
        border-radius: 8px;
        cursor: pointer;
        display: block;
        margin: 0 auto;
        font-size: 18px;
    }
    /* events */
    #event-form {
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        width: 500px; /* Adjust the width as needed */
        margin: 50px;
    }
    
    #event-form h2 {
        text-align: center;
        margin-bottom: 20px;
    }
    
    #event-form input[type="text"],
    #event-form textarea,
    #event-form input[type="file"] {
        width: calc(100% - 30px);
        padding: 10px;
        margin-bottom: 20px;
        border: 2px solid #ccc;
        border-radius: 8px;
        box-sizing: border-box;
        font-size: 14px;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }
    
    #event-form textarea {
        height: 100px;
    }
    
    #event-form button {
        background-color: #4caf50;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 8px;
        cursor: pointer;
        display: block;
        margin-left: auto;
        margin-right: auto;
        font-size: 16px;
    }
    </style>
</head>
<body>
<nav class="main_school">
        <div class="school">
            <img src="../components/images/schoollogos.png" alt="logo">
            <ul>
                <li><a href="admin_page.php?create_announcement">Create Announcement</a></li>
                <li><a href="admin_page.php?create_event">Create Event</a></li>
                
                
            </ul>
        </div>
    </nav>
    <div class="user">
        <p>WELCOME ADMIN</p>
    </div>
    
    <?php 

        if(isset($_GET["create_announcement"])){
            include("create_announcement.php");
        }
        if(isset($_GET["create_event"])){
        include("create_event.php");
        }
    
    ?>
  
    <footer>
        <p>&copy; 2024 GTDLNHS. All rights reserved.</p>
    </footer>
</body>
</html>