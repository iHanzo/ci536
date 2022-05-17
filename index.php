<?php include_once 'header.php';?>

        <section class="header">
            <h2>GIGBUDS.</h2>
        </section>
    
        <section class="leftcolumn">
            <div onclick="window.location.href='event1.php';" class="card">
                <div class="images">
                    <img src="images/party1.jpg" alt="party1">
                </div>
                <div class="fleft">
                    <p>Event: SummerTime Live Brighton 2022 </p>
                    <p>Date/Time: Saturday July 9th , 14:00</p>
                    <p>Location: Brighton Racecourse</p>
                    <p>Price: Starts at £32.65</p> 
                </div>
            </div>
        
            <div onclick="window.location.href='event2.php';" class="card">
                <div class="images">
                    <img src="images/party2.jpg" alt="party2">
                </div>
                <div class="fleft">
                    <p>Event: Swiftogeddon – Taylor Swift Club Night </p>
                    <p>Date/Time:Friday May 20th, 23:00 </p>
                    <p>Location: Komedia Brighton</p>
                    <p>Price: £8.96</p>   
                </div>
            </div>
        
            <div onclick="window.location.href='event3.php';" class="card">
                <div class="images">
                    <img src="images/party3.jpg" alt="party3">
                </div>
                <div class="fleft">
                    <p>Event: Addicitve Beats – Dirty Disco </p>
                    <p>Date/Time: Saturday April 20th, 22:00</p>
                    <p>Location:The Factory Live, Worthing</p>
                    <p>Price: £16.22</p>  
                </div>
            </div>  
         
            <div onclick="window.location.href='event4.php';" class="card">
                <div class="images">
                    <img src="images/party4.jpg" alt="party4">
                </div>
                <div class="fleft">
                    <p>Event: Son Guarachando Live </p>
                    <p>Date/Time: Saturday April 30th, 19:00</p>
                    <p>Location: Verdict Jazz Club, Brighton</p>
                    <p>Price: £14.00</p> 
                </div>
            </div>
          
    <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "empty_input") {
            echo '<script type="text/javascript">
                window.onload = function () {alert("Please, fill in all fields!"); }
            </script>';
            }
            else if ($_GET["error"] == "wrong_login") {
                echo '<script type="text/javascript">
                window.onload = function () {alert("Wrong login details!"); }
            </script>';
            }
            else if ($_GET["error"] == "username_error") {
                echo '<script type="text/javascript">
                window.onload = function () {alert("Username can only contain letters and numbers!"); }
            </script>';
            }
            else if ($_GET["error"] == "email_error") {
                echo '<script type="text/javascript">
                window.onload = function () {alert("Email format is incorrect!"); }
            </script>';
            }
            else if ($_GET["error"] == "pwd_error") {
                echo '<script type="text/javascript">
                window.onload = function () {alert("Passwords do not match!"); }
            </script>';
            }
            else if ($_GET["error"] == "username_taken") {
                echo '<script type="text/javascript">
                window.onload = function () {alert("Username is already taken!"); }
            </script>';
            }
            else if ($_GET["error"] == "stmt_failed") {
                echo '<script type="text/javascript">
                window.onload = function () {alert("Something went wrong. Please try again!"); }
            </script>';
            }
            else if ($_GET["error"] == "none") {
                echo '<script type="text/javascript">
                window.onload = function () {alert("You have signed up!"); }
            </script>';
            }
        }
    ?>


        </section>
    </div>
    

<?php include_once 'footer.php';?>