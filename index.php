<?php include "database.php";
    //Create select query
    $query="select * from shouts order by id desc";
    $shouts=mysqli_query($con, $query);
    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Shout it!</title>
        <link rel="stylesheet" href="css/style.css" type="text/css" />
    </head>
    
    <body>
        <div id="container">
            <header>
                <h1>Shout it! Shoutbox</h1>
            </header>
            <div id="shouts">
                <ul>
                    <?php
                        while($row=mysqli_fetch_assoc($shouts)){
                            echo "<li class='shout'><span>".$row["time"]."</span> <strong>".$row["user"]."</strong>: ".$row["message"]."</li>";
                        }
                    ?>
                </ul>
            </div>
            <div id="input">
                <?php
                    if(isset($_GET["error"])){
                        echo "<div class='error'>".$_GET["error"]."</div>";
                    }
                ?>
                <form method="post" action="process.php">
                    <input type="text" name="user" placeholder="Enter your name" />
                    <input type="text" name="message" placeholder="Type your message" />
                    <br />
                    <input class="shout-btn" type="submit" name="submit" value="Shout it out" />
                </form>
            </div>
        </div>
    </body>
</html>
