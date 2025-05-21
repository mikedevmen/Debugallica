<?php
require('settings.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Debugallica</title>
    <link rel="stylesheet" href="styles/about_us.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/footer.css">
</head>



<body id="Aboutuspage">

<?php
require('inc/decideheader.php');
?>

<div class="videocover">
    <video autoplay muted loop id="myVideo">
        <source src="video/sunspin.mp4" type="video/mp4">
    </video>
</div>

<?php
require('inc/menu.inc');
?>

<script>
    function showSidebar(){
            const sidebar = document.querySelector('.sidebar')
            sidebar.style.display ='flex'
    }
    function hideSidebar(){
            const sidebar = document.querySelector('.sidebar')
            sidebar.style.display ='none'
    }
</script>


    <div class="text-box">
        <h1>Know more about US</h1>
        <p>At Debugallica, we specialize in providing innovative IT solutions tailored to meet the unique needs of businesses. With expertise in software development, cloud computing, cybersecurity, and IT consulting, we help organizations streamline operations, enhance security, and drive digital transformation. Our team is committed to delivering high-quality services that empower clients to stay ahead in a rapidly evolving technological landscape. <p>
    </div>




    <div class="separator-line">
        <svg xmlns="http://www.w3.org/2000/svg" width="974" height="20" viewBox="0 0 974 20" fill="none">
            <path d="M0.339765 8.98188L8.98188 17.6602L17.6602 9.01812L9.01812 0.339765L0.339765 8.98188ZM973.66 11.0181L965.018 2.33976L956.34 10.9819L964.982 19.6602L973.66 11.0181ZM8.99686 10.5L964.997 12.5L965.003 9.5L9.00314 7.5L8.99686 10.5Z" fill="url(#paint0_linear_90_291)"/>
        </svg>
    </div>


    <div class="check-out-section">
        Check out on us right now!
    </div>
    <div class="see-crew-timetable">
        See our crew and work timetable
        <p>At Debugallica, we specialize in providing innovative IT solutions tailored to meet the unique needs of businesses. With expertise in software development, cloud computing, cybersecurity, and IT consulting, we help organizations streamline operations, enhance security, and drive digital transformation. Our team is committed to delivering high-quality services that empower clients to stay ahead in a rapidly evolving technological landscape.</p>
    </div>
    



    <div class="separator-line">
        <svg xmlns="http://www.w3.org/2000/svg" width="974" height="20" viewBox="0 0 974 20" fill="none">
            <path d="M0.339765 8.98188L8.98188 17.6602L17.6602 9.01812L9.01812 0.339765L0.339765 8.98188ZM973.66 11.0181L965.018 2.33976L956.34 10.9819L964.982 19.6602L973.66 11.0181ZM8.99686 10.5L964.997 12.5L965.003 9.5L9.00314 7.5L8.99686 10.5Z" fill="url(#paint0_linear_90_291)"/>
        </svg>
    </div>



    <div class="h2">
        Our work schedule
    </div>
    <table id="table">
        <tr>
            <th>Day</th>
            <th>Available from</th>
            <th>Session</th>
        </tr>
        <tr>
            <td>Monday</td>
            <td>8:00-12:00/13:00-17:00</td>
            <td>Morning/Afternoon</td>
        </tr>
        <tr>
            <td>Tuesday</td>
            <td>8:00-12:00/13:00-17:00</td>
            <td>Morning/Afternoon</td>
        </tr>
        <tr>
            <td>Wednesday</td>
            <td>8:00-12:00/13:00-17:00</td>
            <td>Morning/Afternoon</td>
        </tr>
        <tr>
            <td>Thursday</td>
            <td>8:00-12:00/13:00-17:00</td>
            <td>Morning/Afternoon</td>
        </tr>
        <tr>
            <td>Friday</td>
            <td>8:00-12:00/13:00-17:00</td>
            <td>Morning/Afternoon</td>
        </tr>
        <tr>
            <td>Saturday</td>
            <td>Break day</td>
            <td>Not available</td>
        </tr>
        <tr>
            <td>Sunday</td>
            <td>Break day</td>
            <td>Not available</td>
        </tr>
    </table>



    <div class="separator-line">
        <svg xmlns="http://www.w3.org/2000/svg" width="974" height="20" viewBox="0 0 974 20" fill="none">
            <path d="M0.339765 8.98188L8.98188 17.6602L17.6602 9.01812L9.01812 0.339765L0.339765 8.98188ZM973.66 11.0181L965.018 2.33976L956.34 10.9819L964.982 19.6602L973.66 11.0181ZM8.99686 10.5L964.997 12.5L965.003 9.5L9.00314 7.5L8.99686 10.5Z" fill="url(#paint0_linear_90_291)"/>
        </svg>
    </div>



    <div class="h2">
        Group Contribution
    </div>
    <table id="table">
        <tr>
            <th>Student name</th>
            <th>Contribution</th>
        </tr>
        <tr>
            <td>Le Mai Chi</td>
            <td>Home Page, Menu Bar, Enhancement 1,2,3,6</td>
        </tr>
        <tr>
            <td>Le Anh Duc</td>
            <td>Jobs Description Page, Enhancement 4,6</td>
        </tr>
        <tr>
            <td>Dang Duc Minh</td>
            <td>Apply Page, Responsive Footer, Enhancement 5,7</td>
        </tr>
        <tr>
            <td>Do Khac Phi</td>
            <td>About Us Page, Enhancement 6</td>
        </tr>
    </table>

    <div class="h2">Our Team
    </div>

<!--Parallax-->

<section>
    <!-- --- Chi-- -->
        <section class="chi">
           <div class="parallax-inner" >
            <h1> Le Mai Chi  </h1>
            <p class="title">CEO & Founder</p>
           </div>
        </section>
       
       
          <section class="details">

            <p>A visionary leader with a passion for innovation and technology, Mai Chi drives Debugallica toward new heights.</p>
            <p>Student ID: 105555880</p>
            <p>Course: Bachelor Degree of Computer Science</p>
            <p>Hometown: Thanh Hoa</p>
            <p>Student email: 105555880@student.edu.au</p>
            <p>About me: I yearn to be a straight A student and then become a high salary women in the future. I have a typical family and a normal life. However, I love my life and I'm gonna try my best in the future to live a fullfilling lifetime. </p>
            <p>Hobby: Chess, Code, Basketball, Sleeping</p>

           </div>
        </section>
       
       
    <!-- --- Duc-- -->
       
       
        <section class="duc">
           <div class="parallax-inner">
                <h1> Le Anh Duc   </h1>
                <p class="title">Web Engineer</p>
           </div>
       </section>
       
       <section class="details">

        <p>A coding expert dedicated to crafting seamless web experiences with precision and creativity.</p>
        <p>Student ID: 105550568 - SWH02359</p>
        <p>Course: Bachelor Degree of Computer Science</p>
        <p>Hometown: Ha Noi</p>
        <p>Student email: 105550568@student.swin.edu.au</p>
        <p>About me: As a Vietnamese student specializing in English, I have developed a strong passion for technology from a young age.
          I am fascinated by its potential to shape the future, its power to push humanity beyond current limitations. I enjoy exploring innovations, learning about advancements in science and engineering, and thinking about how technology can improve lives.</p>
        <p>Hobby: Reading books</p>
        </div>
        </section>
       
       
    <!-- --- Minh-- -->
       
       <section class="minh">
           <div class="parallax-inner">
            <h1> Dand Duc Minh </h1> 
            <p class="title">Art director</p> 
           </div>
       </section>
        
       
       <section class="details">
           
        <p>Blending design and technology, Duc Minh brings creative visions to life with a keen eye for aesthetics.
        </p>
        <p>Student ID: 105559691</p>
        <p>Course: Bachelor Degree of Computer Science</p>
        <p>Hometown: Ha Noi</p>
        <p>Student email: 105559691@student.swin.edu.au</p>
        <p>About me:Whether it's diving into the latest tech trends, learning a new skill, or just hanging out with friends, I’m always up for something exciting. I love discovering different cultures, trying out new hobbies, and sharing ideas with others. My friends would probably describe me as easygoing, with a good sense of humor and a knack for making the best out of any situation. I’m still figuring things out, but I’m excited about the future and all the adventures it has to offer!
           </p>
        <p>Hobby: Play/Listen to music</p>
       </section>
      
    <!-- --- Phi-- -->
       
    <section class="phi">
        <div class="parallax-inner">
            <h1>Do Khac Phi </h1>
            <p class="title">Web Designer</p>
        </div>
    </section>
     
    
    <section class="details">
        <p>Passionate about user-friendly and visually stunning web designs, making digital experiences engaging.</p>
        <p>Student ID: SWH02327</p>
        <p>Course: Bachelor Degree of Computer Science</p>
        <p>Hometown: Hanoi</p>
        <p>Student email: 105560253@student.swin.edu.au</p>
        <p>About me: I have a fond in technology and the way how it works Fascinated by innovation, i enjoys exploring new advancements and understanding the mechanics behind them. At the same time, i have a strong appreciation for the English language and strive to improve my proficiency. With a desire to develop both my technical and linguistic skills, i am constantly learning, adapting, and seeking opportunities to grow in both fields.
        </p>
        <p>Hobby: Chilling</p>
    </section>
</section>

<?php
    require('inc/footer.inc');
?>


</body>
</html>