<?php
require('settings.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Application Form</title>
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/apply.css">
    <link rel="stylesheet" href="styles/footer.css">
</head>
<body>

<?php
require('inc/decideheader.php');
?>

    <div class="video-container">
        <video autoplay muted loop class="bg-video">
            <source src="video/earth.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>


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


        <div class="video-overlay">
            <h2>Apply Now with easy form filling</h2>
            <p>Let's Start your Career here!!! - Filling Form</p>
        </div>
    </div>
    



    <section class="form-container">
        <h2>Start your career with us right now!</h2>
        <p>Fill this form so that we have a brief of your skills!</p>

        <div class="form-box">
            <h2>Job Application Form</h2>
            <form action="process_eoi.php" method="post">
            
                <label for="job-ref">Job Reference Number:</label>
                <select id="job-ref" name="job-ref" required>
                    <option value="">Select Your Job Reference Number</option>
                    <option value="tester">11111</option>
                    <option value="cybersecuirty">22222</option>
                    <option value="softwaredev">33333</option>
                </select>
                
                <label for="fname">First Name:</label>
                <input type="text" id="fname" name="fname" maxlength="20" pattern="^[A-Za-z]+$" placeholder="John" required>
                
                <label for="lname">Last Name:</label>
                <input type="text" id="lname" name="lname" maxlength="20" pattern="^[A-Za-z]+$" placeholder="Mayer" required>
                
                <label for="dob">Date of Birth:</label>
                <div class="dob">
                    <input type="text" id="dob-day" name="dob_day" placeholder="dd" pattern="^[0-9]{2}$" required>
                    <input type="text" id="dob-month" name="dob_month" placeholder="mm" pattern="^[0-9]{2}$" required>
                    <input type="text" id="dob-year" name="dob_year" placeholder="yy" pattern="^[0-9]{2}$" required>
                </div>
                
                <label>Gender:</label>
                <div class="gender">
                    <input type="radio" name="gender" value="Male" required> Male 
                    <input type="radio" name="gender" value="Female" required> Female
                    <input type="radio" name="gender" value="Other" required> Other
                </div>
                
                <label for="address">Street Address:</label>
                <input type="text" id="address" name="address" maxlength="40" placeholder="649 Chapel St" required>
                
                <label for="suburb">Suburb/Town:</label>
                <input type="text" id="suburb" name="suburb" maxlength="40" placeholder="South Yarra" required>
                
                <label for="state">State:</label>
                <select id="state" name="state" required>
                    <option value="">Select your state</option>
                    <option value="VIC">VIC</option>
                    <option value="NSW">NSW</option>
                    <option value="QLD">QLD</option>
                    <option value="SA">SA</option>
                    <option value="WA">WA</option>
                    <option value="TAS">TAS</option>
                    <option value="ACT">ACT</option>
                    <option value="NT">NT</option>
                </select>
                
                <label for="postcode">Postcode:</label>
                <input type="text" id="postcode" name="postcode" pattern="^[0-9]{4}$" placeholder="3000" required>
                
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" placeholder="johnmayer@gmail.com" required>
                
                <label for="phone">Phone Number:</label>
                <input type="text" id="phone" name="phone" pattern="^[0-9]{8,12}$" placeholder="0912345678" required>

                <label>Skills:</label>
                <div class="skills">
                    <div>
                        <p>Programming Languages</p>
                        <input type="checkbox"> HTML <br>
                        <input type="checkbox"> CSS <br>
                        <input type="checkbox"> JS <br>
                        <input type="checkbox"> C++ <br>
                        <input type="checkbox"> C# <br>
                    </div>
                    <div>
                        <p>Software Engineering</p>
                        <input type="checkbox"> Git <br>
                        <input type="checkbox"> Docker <br>
                        <input type="checkbox"> Firebase <br>
                        <input type="checkbox"> AWS <br>
                        <input type="checkbox"> Azure <br>
                    </div>
                    <div>
                        <p>Essential Soft Skills</p>
                        <input type="checkbox"> Teamwork <br>
                        <input type="checkbox"> Flexibility <br>
                        <input type="checkbox"> Creativity <br>
                        <input type="checkbox"> Leadership <br>
                        <input type="checkbox"> Integrity <br>
                    </div>
                </div>
                
                <label><input type="checkbox" class="other-skills-check" id="other-skills-check" name="other-skills-check">Other Skills:</label>
                <textarea class="other-skills" id="other-skills" name="other_skills" rows="6" placeholder="List other skills here..."></textarea>
                
                <div class="bottom-buttons">
                    <button type="submit" class="bottom-btn">Submit</button>
                    <button type="reset" class="bottom-btn">Reset</button>
                </div>
            </form>
        </div>
    </section>
    <?php
    require('inc/footer.inc');
?>

</body>
</html>
