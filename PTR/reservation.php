<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pacific Trails Resort</title>
    <link rel="stylesheet" href="styleR.css">
</head>

<body>

<div class="wrapper">

    <div class="mainContent">
            <div class="header">
                <h1>Pacific Trails Resort</h1>
            </div>
        <div class="navbar">
            
                <a href="index.html">Home</a>
                <a href="yurt.html">Yurts</a>
                <a href="activities.html">Activities</a>
                <a href="reservation.php">Reservation</a>
           
        </div>
           
            
          
<div class="content">
    <h2>Reservation at Pacific Trails</h2>
                    <h3>Contact Us Today!</h3><br><br>
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
                <br><br>
    
<footer> 
    <small>
        <i>Copyright &copy; 2018 Pacific Trails Resort</i>
    </small>
    </p>
    <p>
        <small>
            <i>tsagan@garyaeva.com</i>
        </small>
    </p>
</footer>

    </div>

</div>

</div> 
</div>



