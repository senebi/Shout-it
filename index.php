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
                    <li class="shout"><span>10:15PM - </span>Brad: Hey what are you guys up to?</li>
                    <li class="shout"><span>10:15PM - </span>Brad: Hey what are you guys up to?</li>
                    <li class="shout"><span>10:15PM - </span>Brad: Hey what are you guys up to?</li>
                    <li class="shout"><span>10:15PM - </span>Brad: Hey what are you guys up to?</li>
                    <li class="shout"><span>10:15PM - </span>Brad: Hey what are you guys up to?</li>
                    <li class="shout"><span>10:15PM - </span>Brad: Hey what are you guys up to?</li>
                </ul>
            </div>
            <div id="input">
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
