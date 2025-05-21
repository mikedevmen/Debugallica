<?php
require('settings.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Debugallica Jobs Description</title>
   <link rel="stylesheet" href="styles/jobs.css">
   <link rel="stylesheet" href="styles/header.css">
   <link rel="stylesheet" href="styles/footer.css">
   <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.6.0/css/fontawesome.min.css" rel="stylesheet">
</head>



<body id="JobsPage">
<?php
require('inc/decideheader.php');
?>


    <div class="videocover">
    <video autoplay muted loop id="myVideo">
        <source src="video/planet.mp4" type="video/mp4">
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
        <h1>
            Joining with Us for up to 50+ Million Monthly earning!
        </h1>
        <p>Working in high-tech environment with dedicated colleagues</p>
    </div>



    <div class="separator-line">
        <svg xmlns="http://www.w3.org/2000/svg" width="974" height="20" viewBox="0 0 974 20" fill="none">
            <path d="M0.339765 8.98188L8.98188 17.6602L17.6602 9.01812L9.01812 0.339765L0.339765 8.98188ZM973.66 11.0181L965.018 2.33976L956.34 10.9819L964.982 19.6602L973.66 11.0181ZM8.99686 10.5L964.997 12.5L965.003 9.5L9.00314 7.5L8.99686 10.5Z" fill="url(#paint0_linear_90_291)"/>
        </svg>
    </div>


    


        <div class="check-out-section">
           <h1> Work with Us</h1>
           <p>At our IT company, you'll have the opportunity to work on innovative projects using cutting-edge technology, fostering both personal and professional growth. We prioritize a collaborative and inclusive work culture, offering competitive compensation, excellent benefits, and a healthy work-life balance. Our commitment to continuous learning, career development, and mentorship ensures you can thrive and advance in your career. With a focus on innovation, employee well-being, and long-term stability, we provide an environment where you can make a significant impact and grow alongside a talented team.</p>
        </div>




        <div class="separator-line">
        <svg xmlns="http://www.w3.org/2000/svg" width="974" height="20" viewBox="0 0 974 20" fill="none">
            <path d="M0.339765 8.98188L8.98188 17.6602L17.6602 9.01812L9.01812 0.339765L0.339765 8.98188ZM973.66 11.0181L965.018 2.33976L956.34 10.9819L964.982 19.6602L973.66 11.0181ZM8.99686 10.5L964.997 12.5L965.003 9.5L9.00314 7.5L8.99686 10.5Z" fill="url(#paint0_linear_90_291)"/>
        </svg>
    </div>


<!--Parallax-->

<section>
    <!-- --- Tester-- -->
        <section class="tester">
           <div class="parallax-inner" >
            <h1> Quality Assurance (Tester) </h1>
            <p class="title">Reference Number: 11111</p>
           </div>
        </section>

        <div class="separator-line">
        <svg xmlns="http://www.w3.org/2000/svg" width="974" height="20" viewBox="0 0 974 20" fill="none">
            <path d="M0.339765 8.98188L8.98188 17.6602L17.6602 9.01812L9.01812 0.339765L0.339765 8.98188ZM973.66 11.0181L965.018 2.33976L956.34 10.9819L964.982 19.6602L973.66 11.0181ZM8.99686 10.5L964.997 12.5L965.003 9.5L9.00314 7.5L8.99686 10.5Z" fill="url(#paint0_linear_90_291)"/>
        </svg>
    </div>


       
          <section class="details">
    <h3>Key Responsibilities:</h3>
        <ul>
            <li>Review and analyze system specifications</li>
            <li>Collaborate with QA Engineers to develop effective strategies and test plans</li>
            <li>Execute test cases (manual or automated) and analyze results</li>
            <li>Report bugs and errors to development teams</li>
        </ul>
        <p>Report your daily work to the Project Manager</p>


        <?php
                $svgTemplate = '
                    <svg class="star" xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 29 29" fill="none">
                        <g clip-path="url(#clip0_77_28)">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.5632 1.35676C13.222 -0.451601 15.7781 -0.451601 16.4368 1.35676L19.4259 9.57411L27.6432 12.5632C29.4516 13.2219 29.4516 15.778 27.6432 16.4368L19.4259 19.4258L16.4368 27.6432C15.7781 29.4515 13.222 29.4515 12.5632 27.6432L9.57417 19.4258L1.35682 16.4368C-0.451542 15.778 -0.451542 13.2219 1.35682 12.5632L9.57417 9.57411L12.5632 1.35676Z" fill="#336D8B"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_77_28">
                                <rect width="29" height="29" fill="white" transform="matrix(-1 0 0 1 29 0)"/>
                            </clipPath>
                        </defs>
                    </svg>';
                
                for ($i = 0; $i < 5; $i++) {
                    echo $svgTemplate;
                }
            ?>

        <h3>Required Skills:</h3>
        <ol>
        <li>Essential:
        <ul>
            <li>A minimum Bachelor's Degree or higher in related field</li>
            <li>Have fundamental knowledge of QA methodology</li>
            <li>Good English and communication skills</li>
        </ul>
        </li>
        <li>Preferable:
        <ul>
            <li>Attention to details and strong analytical skills</li>
            <li>Familiarity with programming languages and debugging process</li>
            <li>Having prior experience in similar roles is a plus</li>
        </ul>
        </li>
        </ol>
        </section>

       
    <!-----Cybersecurity Analyst-- -->
       
       
        <section class="Cybersecurity">
           <div class="parallax-inner">
                <h1> Cybersecurity Analyst   </h1>
                <p class="title">Reference Number: 22222</p>
           </div>
       </section>


       <div class="separator-line">
        <svg xmlns="http://www.w3.org/2000/svg" width="974" height="20" viewBox="0 0 974 20" fill="none">
            <path d="M0.339765 8.98188L8.98188 17.6602L17.6602 9.01812L9.01812 0.339765L0.339765 8.98188ZM973.66 11.0181L965.018 2.33976L956.34 10.9819L964.982 19.6602L973.66 11.0181ZM8.99686 10.5L964.997 12.5L965.003 9.5L9.00314 7.5L8.99686 10.5Z" fill="url(#paint0_linear_90_291)"/>
        </svg>
    </div>


       
    <section class="details">


    <h3>Key Responsibilities:</h3>
        <ul>
            <li>Monitor network activity and analyze security alerts to detect threats.</li>
            <li>Perform vulnerability assessments and penetration testing to identify risks.</li>
            <li>Implement and enforce security policies, controls, and best practices.</li>
            <li>Develop and update security reports and documentation.</li>
        </ul>
        <p>Report your daily work to the Cybersecurity Team Leader</p>

            <?php
                $svgTemplate = '
                    <svg class="star" xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 29 29" fill="none">
                        <g clip-path="url(#clip0_77_28)">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.5632 1.35676C13.222 -0.451601 15.7781 -0.451601 16.4368 1.35676L19.4259 9.57411L27.6432 12.5632C29.4516 13.2219 29.4516 15.778 27.6432 16.4368L19.4259 19.4258L16.4368 27.6432C15.7781 29.4515 13.222 29.4515 12.5632 27.6432L9.57417 19.4258L1.35682 16.4368C-0.451542 15.778 -0.451542 13.2219 1.35682 12.5632L9.57417 9.57411L12.5632 1.35676Z" fill="#336D8B"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_77_28">
                                <rect width="29" height="29" fill="white" transform="matrix(-1 0 0 1 29 0)"/>
                            </clipPath>
                        </defs>
                    </svg>';
                
                for ($i = 0; $i < 5; $i++) {
                    echo $svgTemplate;
                }
            ?>

        <h3>Required Skills:</h3>
        <ol>
            <li>Essential:
                <ul>
                    <li>Experience with cybersecurity frameworks and risk assessment methodologies.</li>
                    <li>Strong understanding of encryption, authentication, and access control mechanisms.</li>
                    <li>Ability to analyze security logs and detect anomalies.</li>
                </ul>
            </li>
            <li>Preferable:
                <ul>
                    <li>Certifications such as Certified Ethical Hacker (CEH), CISSP, or CompTIA Security+.</li>
                    <li>Experience with ethical hacking and penetration testing tools</li>
                    <li>Familiarity with forensic analysis and incident response procedures.</li>
                </ul>
            </li>
        </ol>
            </section>



       
       
    <!-- --- Software Developer-- -->
       
       <section class="SoftwareDev">
           <div class="parallax-inner">
            <h1> Software Developer </h1> 
            <p class="title">Reference Number: 33333</p> 
           </div>
       </section>
        

       <div class="separator-line">
        <svg xmlns="http://www.w3.org/2000/svg" width="974" height="20" viewBox="0 0 974 20" fill="none">
            <path d="M0.339765 8.98188L8.98188 17.6602L17.6602 9.01812L9.01812 0.339765L0.339765 8.98188ZM973.66 11.0181L965.018 2.33976L956.34 10.9819L964.982 19.6602L973.66 11.0181ZM8.99686 10.5L964.997 12.5L965.003 9.5L9.00314 7.5L8.99686 10.5Z" fill="url(#paint0_linear_90_291)"/>
        </svg>
    </div>


       
       <section class="details">
 <h3>Key Responsibilities:</h3>
    <ul>
        <li>Designing, coding, testing, debugging, deploying software applications</li>
        <li>Maintaining existing code as well as troubleshooting issues</li>
        <li>Ensuring the software meets specific requirements by analyzing user needs and implementing solutions through programming languages and software development methodologies</li>
        <li>Tackling bugs and errors reported by the QA team</li>
    </ul>
    <p>Report your daily work to both the Head Developer. </p>

    <?php
                $svgTemplate = '
                    <svg class="star" xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 29 29" fill="none">
                        <g clip-path="url(#clip0_77_28)">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.5632 1.35676C13.222 -0.451601 15.7781 -0.451601 16.4368 1.35676L19.4259 9.57411L27.6432 12.5632C29.4516 13.2219 29.4516 15.778 27.6432 16.4368L19.4259 19.4258L16.4368 27.6432C15.7781 29.4515 13.222 29.4515 12.5632 27.6432L9.57417 19.4258L1.35682 16.4368C-0.451542 15.778 -0.451542 13.2219 1.35682 12.5632L9.57417 9.57411L12.5632 1.35676Z" fill="#336D8B"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_77_28">
                                <rect width="29" height="29" fill="white" transform="matrix(-1 0 0 1 29 0)"/>
                            </clipPath>
                        </defs>
                    </svg>';
                
                for ($i = 0; $i < 5; $i++) {
                    echo $svgTemplate;
                }
            ?>
 <h3>Required Skills:</h3>
 <ol>
    <li>Essential:
        <ul>
            <li>A minimum Bachelor's Degree or higher in related field</li>
            <li>Have strong knowledge of common software structures</li>
            <li>Proficiency in Java and Javascript</li>
        </ul>
    </li>
    <li>Preferable:
        <ul>
            <li>Good debugging skills and implement coding best practice in your work</li>
            <li>Familiarity with other programming languages is a plus</li>
            <li>Having prior experience (1+ year) in similar roles is a plus</li>
        </ul>
    </li>
 </ol>
       
    

 <div class="separator-line">
        <svg xmlns="http://www.w3.org/2000/svg" width="974" height="20" viewBox="0 0 974 20" fill="none">
            <path d="M0.339765 8.98188L8.98188 17.6602L17.6602 9.01812L9.01812 0.339765L0.339765 8.98188ZM973.66 11.0181L965.018 2.33976L956.34 10.9819L964.982 19.6602L973.66 11.0181ZM8.99686 10.5L964.997 12.5L965.003 9.5L9.00314 7.5L8.99686 10.5Z" fill="url(#paint0_linear_90_291)"/>
        </svg>
    </div>



       </section>
</section>
<?php
    require('inc/footer.inc');
?>
</body>
</html>
