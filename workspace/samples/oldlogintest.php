<?php

include '../libs/load.php';

// Username and password already exist in database
$username = "tonystark";
$password = "ironman";
// $password = isset($_GET['pass']);

$result = null;

// Destroy the session if key logout is passed in _GET Request
if (isset($_GET['logout'])) {
    Session::destroy();
    die("Session destroyed !\n<a href='logintest.php'>Login again</a>");
}


/*
1. Check if session_token in PHP session is available
2. If yes, construct UserSession and see if its successful.
3. Check if the session is valid one
4. If valid, print "Session validated"
5. Else, print "Invlaid Session" and ask user to login.
*/


if (Session::get('is_loggedin')) {
    $username = Session::get('session_username');
    $userobj = new User($username);
    print("Welcome back, " . $userobj->getFirstname());
// print("<br>Older Bio: " . $userobj->getBio());
// $userobj->setBio("I am using arch BTW");
// print("<br>New Bio: " . $userobj->getBio());
} else {
    printf("No session found, trying to login now !\n");
    $result = User::login($username, $password);

    if ($result) {
        $userobj = new User($username);
        echo "<br>Success, Logged in as ".$userobj->getUsername();
        Session::set('is_loggedin', true);
        Session::set('session_username', $result);
    } else {
        echo "Login failed<br>";
    }
}

echo <<<EOL
<br><br><a href='logintest.php?logout'>Log out</a>
EOL;
