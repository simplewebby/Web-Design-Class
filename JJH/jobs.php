<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JavaJam Coffee House</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="wrapper">
            <div class="header">
                <h1>JavaJam Coffee House</h1>
            </div>
        <div class="clearfix">
            <div class="column menu" id="jobM">
            <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="menu.html">Menu</a></li>
                    <li><a href="music.html">Music</a></li>
                    <li><a href="jobs.php">Jobs</a></li>
            </ul>  
        </div>
           
    <div class="column content" id="jobs">        
          
    <h2>Reservation at Pacific Trails</h2>
                    <h2>Contact Us Today!</h2><br><br>
                <form action="index.php" method="post">
                    <input type="hidden" name="action" value="process_data" autofocus>
                    <div>
                        <label for="name">Full Name:</label>
                    <input type="text" name="name" autofocus value="<?php echo htmlspecialchars($name); ?>">
                    </div>
        
                    <div>
                        <label for="email">E-mail:</label>
                       <input type="text" name="email"
               value="<?php echo htmlspecialchars($email); ?>">
                    </div>
                    <div>
                        <label for="phone">Phone:</label>
                        <input type="text" name="phone"
               value="<?php echo htmlspecialchars($phone); ?>">
                    </div>
                    <div> 
                        <label for="msg">Comments:</label>
                        <textarea id="msg" name="user_message"></textarea>
                    </div>
                        <div class="button">
                     <button type="submit">Submit</button>
                    </div>

                </form>
                    <h2>Message:</h2>
        <p><?php echo nl2br(htmlspecialchars($message)); ?></p>
                    </div>
                    </div>

               
<div class="footer" id="job">
    <p>Copyright &copy; 2018 </p>
    <i>tgaryaeva@yahoo.com</i>
</div>

    </div>

</body>
</html>


