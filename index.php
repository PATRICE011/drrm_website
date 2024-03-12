<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- swiper -->
    <link rel="stylesheet" href="components/links/swiper-bundle.min.css">
    
    <title>GTDLNHS</title>
    <style>
        /* reminders */
        .reminders {
  text-align: center; /* Aligns everything within the section to the center */
}

.reminders .title {
  margin-bottom: 20px; /* Add some space below the title */
}

.reminders .comment {
  width: 78%;
  text-align: justify;
  font-size: 18px;
  margin: 0 auto 20px; /* Centers the paragraph and adds space below it */
}

.gallery {
  width: 80%;
  padding: 20px;
  background-color: #eee;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 5px;
  flex-wrap: wrap; /* Allows items to wrap to the next line */
  margin: 0 auto; /* Center the gallery */
}

.gallery .field {
  /* border: 1px solid; */
  padding: 0 20px;
  border-radius: 5px;
  margin-right: 10px;
  background-color: #3b3c36;
  margin-bottom: 10px; /* Adds space between each field */
}

.gallery a {
    border-radius: 5px;
  color: #fff;
  text-decoration: none;
  display: block; /* Makes the whole field clickable */
  padding: 10px;
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
.video-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh; /* Optional: Adjust this based on your layout */
        margin-bottom: 50px;
    }


.event {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center; 
    text-align: justify;
    border-radius: 10px;
    height: auto; 
    width: 80%; 
    margin: 50px auto; 
    padding: 20px; 
    background-color: #bde0fe;
}

.event .message {
    margin-bottom: 20px; 
}

.event .org img {
    width: 600px;
    border-radius: 10px; 
}


.event .message h1{
    margin-top: 5px ;
    margin-bottom: 10px;
    color: #3b3c36;
    font-size: 40px;
    
}
.event .message p{
    width: 95%;
    font-size: 17px;
    font-weight: bold;
    line-height: 25px;
    text-align: justify;
    color: #3b3c36;
}

    </style>
</head>
<body>
    <!-- nav bar -->
    <nav class="main_school">
        <div class="school">
            <img src="components/images/schoollogos.png" alt="logo">
            <ul>
                <li><a href="#Home">Home</a></li>
                <li><a href="#About">About</a></li>
                <li><a href="#Hotlines">Hotlines</a></li>
                <li><a href="#Reminders">Reminders</a></li>
                <li><a href="#Announcement">Announcements</a></li>
                <li><a href="#Updates">Updates</a></li>
                <li><a href="#Events">Events</a></li>
                
            </ul>
        </div>
    </nav>
    <!-- session -->
    <div class="user">
        <p>WELCOME GUEST,<a href="admin/index.php" target="_blank"> Access admin</a>?</p>
    </div>

    <!-- hero swiper -->
    <div id="Home" class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="components/images/gent.jpg" alt=""></div>
                <div class="swiper-slide"><img src="components/images/GeographicalLoc.png" alt=""></div>
                <div class="swiper-slide"><img src="components/images/eq2.avif" alt=""></div>
                <div class="swiper-slide"><img src="components/images/Typhoon.jpg" alt=""></div>
                <div class="swiper-slide"><img src="components/images/sunog-2.webp" alt=""></div>
                <div class="swiper-slide"><img src="components/images/Flood.jpg" alt=""></div>
                
        </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
    </div>
    
    <!-- about -->
    <section id="About" class="about">
    
        <div class='message'>
            <h1>About Us</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet tempora soluta rerum nihil eligendi suscipit saepe perspiciatis quas porro quaerat aliquid impedit dicta, incidunt dolore nemo ipsam at quae? Quia, quisquam quam minus, corporis natus dignissimos doloremque debitis esse fugiat obcaecati, laborum ab nam assumenda commodi vero! Eius adipisci beatae ea, quasi error eos iste unde dignissimos quae! Cum incidunt, repellat cupiditate dicta libero expedita blanditiis et, quidem, in quis quisquam dolor adipisci nulla? Autem in, recusandae dolor iste blanditiis, temporibus sunt fuga error laboriosam alias provident quasi nesciunt quisquam nemo porro perferendis repellendus maiores voluptates eos tempore iure incidunt saepe nisi earum. Veniam nam libero tempore provident optio sed, vel fugit. Dicta illum, adipisci ullam laudantium sunt eligendi molestias, dolorem eius fugiat eos architecto iusto ducimus? Magni distinctio eligendi, quasi magnam unde praesentium nesciunt sit tempora porro animi debitis veritatis odit, voluptate quaerat quae incidunt ipsum dolore iusto architecto, eos veniam placeat officiis. Odit assumenda ullam beatae sapiente quos voluptate sequi provident fugit earum iure! Pariatur id porro consequatur omnis deserunt cum aperiam vel at dignissimos illo explicabo corporis alias maxime facere amet, nostrum sunt, labore reiciendis, in voluptatem fuga! Enim, repudiandae omnis cum dicta dolore animi harum at?</p>
                    </div>
                    <div class='org'>
                        <a href='components/images/$image' target='blank'>
                        <img src='components/images/OrgChart.jpg' alt='orgchart'>
                        </a>
                    </div>
        
    </section>
    <!-- video -->
    <div class="video-container">
         <video src="video.mp4"  height="600px" controls autoplay  ></video>
    </div>
    
    <!-- contacts -->
    <div class="title">
            <h3 >HOTLINES</h3>
        </div>
    <section id="Hotlines" class="contact-container">
        
        <table class="contact-table">
            <tr>
                <th>Organization</th>
                <th>Phone Number(s)</th>
            </tr>
            <tr>
                <td ><a href="https://valenzuela.gov.ph/government/article/198" target="_blank">BUREAU OF FIRE PROTECTION VALENZUELA CITY</a></td>
                <td class="phone-number"><span class="phone-icon">&#9742;</span>8292-3519</td>
            </tr>
            <tr>
                <td ><a href="https://www.davaocity.gov.ph/departments/social-services/city-social-services-development-office/" target="_blank">CIT SOCIAL WELFARE AND DEVELOPMENT OFFICE (CSWDO)</a></td>
                <td class="phone-number"><span class="phone-icon">&#9742;</span>8352-1000</td>
            </tr>
            <tr>
                <td ><a href="https://valenzuela.gov.ph/government/article/207" target="_blank">PHILIPPINE RED CROSS VALENZUELA CITY CHAPTER</a></td>
                <td class="phone-number"><span class="phone-icon">&#9742;</span>3432-0273</td>
            </tr>
            <tr>
                <td ><a href="https://www.facebook.com/vcdrrmo/" target="_blank">VALENZUELA CITY DISASTER RISK REDUCTION & MANAGEMENT OFFICE (VCDRRMO)</a></td>
                <td class="phone-number"><span class="phone-icon">&#9742;</span>8352-5000<br><span class="phone-icon">&#9742;</span>8292-1405</td>
            </tr>
            <tr>
                <td ><a href="https://valenzuela.gov.ph/government/article/11642" target="_blank">VALENZUELA CITY COMMAND & COORDINATION CENTER (VCC3)</a></td>
                <td class="phone-number"><span class="phone-icon">&#9742;</span>0999-7441692<br>0926-8939801</td>
                
            </tr>
        </table>
    </section>
     <!-- reminders -->
    <section id="Reminders" class="reminders">
        <h1 class="title">REMINDERS</h1>
            <p class="comment">Please note that the following link provides access to the evacuation map for the school building. It's crucial to familiarize yourself with this map to ensure a swift and safe evacuation in the event of an emergency</p>
        <div class="gallery">
            <div class="field">
                    <a href="components/images/Area_Plan.jpg" target="_blank"><p>Area Plan</p></a>
            </div>
            <div class="field">
                    <a href="components/images/BldgA_1&2F.jpg" target="_blank"><p>Bldg A 1&2F</p></a>
            </div>
            <div class="field">
                    <a href="components/images/BldgA_3&4F.jpg"target="_blank"><p>BldgA 3&4F</p></a>
            </div>
            <div class="field">
                    <a href="components/images/BldgB_1&2F.jpg" target="_blank"><p>BldgB 1&2F</p></a>
            </div>
            <div class="field">
                    <a href="components/images/BldgB_3&4F.jpg" target="_blank"><p>BldgB 3&4F</p></a>
            </div>
            <div class="field">
                    <a href="components/images/BldgC_1&2F.jpg" target="_blank"><p>BldgC 1&2F</p></a>
            </div>
            <div class="field">
                    <a href="components/images/BldgC_3&4F.jpg" target="_blank"><p>BldgC 3&4F</p></a>
            </div>
            
            <div class="field">
                    <a href="components/images/Evacuation_Map.jpg" target="_blank"><p>Evacuation Map</p></a>
            </div>
        </div>
    </section>
    <!-- announcements -->
    <section id="Announcement" class="Announcement">
        <div class="left">
                <img src="components/images/1.png" alt="announcement-img">
            </div>
            <div class="right">
                <h1>Announcements !</h1>
                <?php 
                   include('include/connect.php');

                   $get_announcement = "SELECT * FROM `announcement` ORDER BY `id` DESC LIMIT 1";
                   $result = mysqli_query($con, $get_announcement);
                   
                   if ($result && mysqli_num_rows($result) > 0) {
                       $row = mysqli_fetch_assoc($result);
                       $date = $row['date'];
                       $message = $row['message'];
                   
                       echo "
                       <p class='date'>$date</p>
                       <p class='message'>$message</p>";
                   } else {
                       echo "No announcement found.";
                   }
                   
                    
                    
                ?>
                
                <!-- <a href="#">Read More</a> -->
            </div>
    </section>
        <!-- updates -->
        <div class="title">
            <h3 >GET UPDATES</h3>
        </div>
    <section id="Updates" class="updates">
        
        <a href="https://www.pagasa.dost.gov.ph/" target="blank">
            <div class="boxes">
                <img src="components/images/PAGASA.png" alt="">
                <div class="overlay">
                    <div class="content">
                        <h3>PAGASA</h3>
                    </div>
                </div>
            </div>
        </a>
        <a href="https://www.phivolcs.dost.gov.ph/" target="blank">
            <div class="boxes">
                <img src="components/images/PHIVOLCS.png" alt="">
                <div class="overlay">
                    <div class="content">
                        <h3>PHIVOLCS</h3>
                    </div>
                </div>
            </div>
        </a>
        <a href="https://bfp.gov.ph/" target="blank">
            <div class="boxes">
                <img src="components/images/BFP.png" alt="">
                <div class="overlay">
                    <div class="content">
                        <h3>BFP</h3>
                    </div>
                </div>
            </div>
        </a>
        <a href="https://redcross.org.ph/" target="blank">
            <div class="boxes">
                <img src="components/images/RedCross.png" alt="">
                <div class="overlay">
                    <div class="content">
                        <h3>RED CROSS</h3>
                    </div>
                </div>
            </div>
        </a>
        <a href="https://doh.gov.ph/" target="blank">
            <div class="boxes">
                <img src="components/images/DOH.png" alt="">
                <div class="overlay">
                    <div class="content">
                        <h3>DOH</h3>
                    </div>
                </div>
            </div>
        </a>
        <a href="https://www.who.int/" target="blank">
            <div class="boxes">
                <img src="components/images/WHO.jpg" alt="">
                <div class="overlay">
                    <div class="content">
                        <h3>WHO</h3>
                    </div>
                </div>
            </div>
        </a>
        <a href="https://ndrrmc.gov.ph/" target="blank">
            <div class="boxes">
                <img src="components/images/NDRRMC.png" alt="">
                <div class="overlay">
                    <div class="content">
                        <h3>NDRRMC</h3>
                    </div>
                </div>
            </div>
        </a>
        <a href="https://www.facebook.com/vcdrrmo/" target="blank">
            <div class="boxes">
                <img src="components/images/vc.jpg" alt="">
                <div class="overlay">
                    <div class="content">
                        <h3>VCDRRMO</h3>
                    </div>
                </div>
            </div>
        </a>
        <a href="https://mmda.gov.ph/" target="blank">
            <div class="boxes">
                <img src="components/images/MMDA.png" alt="">
                <div class="overlay">
                    <div class="content">
                        <h3>MMDA</h3>
                    </div>
                </div>
            </div>
        </a>
    </section>
    <!-- events -->
    <section id="Events" class="event">

    <?php 
                include('include/connect.php');

                   $get_event = "SELECT * FROM `event` ORDER BY `event_id` DESC LIMIT 1";
                   $result = mysqli_query($con, $get_event);
                   
                   if ($result && mysqli_num_rows($result) > 0) {
                       $row = mysqli_fetch_assoc($result);
                       $image = $row['event_image'];
                       $message = $row['event_message'];
                   
                       echo "
                       <div class='message'>
                        <h1>Event</h1>
                        <p>$message</p>
                    </div>
                    <div class='org'>
                    
                        <img src='components/images/$image' alt='orgchart'>
                        </a>
                    </div>
                       ";
                   } else {
                       echo "No event found.";
                   }
                   
                    
                    
                ?>
        
    </section>
    <!-- footer -->
    <footer>
        <p>&copy; 2024 GTDLNHS. All rights reserved.</p>
    </footer>

    <!-- swiper js -->
    <script src="components/links/swiper-bundle.min.js"></script>
    <script src="components/links/script_swiper.js"></script>
</body>
</html>