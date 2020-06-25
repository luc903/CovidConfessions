<?php
require("config.php");


$loggedIn = false;
$errorMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputUsername = $_POST["username"];
    $inputPassword = $_POST["password"];


    if ($inputUsername == $authUsername && $inputPassword == $authPassword) {
        $loggedIn = true;
    } else {
        $errorMessage = "You have entered a wrong username or password";
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Confessions</title>

    <meta name="author" content="Audacious, Ashley Wilkie, Luc Wybourn Whyte">
    <meta name="description"
          content="The anonymous portal will absorb your Confessions. The ritual of confessing helps with your well-being. Share those confessions anonymously and be part of our online global participatory project">
    <meta property="og:image" content="https://confessions.audacious.org.uk/images/render_room.png">
    <meta property="og:description"
          content="The anonymous portal will absorb your Confessions. The ritual of confessing helps with your well-being. Share those confessions anonymously and be part of our online global participatory project">
    <meta property="og:title" content="Confessions - Admin">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="images/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="images/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <link href="css/uikit.min.css" rel="stylesheet"/>

</head>
<body>
<div class="uk-container">
    <h1 class="uk-heading-medium">Admin Panel</h1>

    <?php if ($loggedIn):

        $sql = "SELECT * FROM confessions WHERE isSafe='1' AND isApproved='0' ORDER BY RAND()";
        $result = $conn->query($sql);
        $result_array = array();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                array_push($result_array, $row);
            }
        }

        ?>
        <input name="authGUID" type="hidden" value="<?php echo $authGUID; ?>">
        <table class="uk-table">
            <thead>
            <tr>
                <th>Confession</th>
                <th>&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($result_array as $confessionItem): ?>
                <tr class="confession-list-item" data-id="<?php echo $confessionItem['id'] ?>">
                    <td><?php echo $confessionItem['text'] ?></td>
                    <td>
                        <button type="button" class="approveConfession uk-button-primary"
                                value="<?php echo $confessionItem['id'] ?>">Approve
                        </button>
                        <button type="button" class="removeConfession uk-button-danger"
                                value="<?php echo $confessionItem['id'] ?>">Delete
                        </button>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <form action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']) ?>" method="post">

            <div class="uk-margin">
                <div class="uk-inline">
                    <span class="uk-form-icon" uk-icon="icon: user"></span>
                    <input class="uk-input" type="text" name="username">
                </div>
            </div>

            <div class="uk-margin">
                <div class="uk-inline">
                    <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
                    <input class="uk-input" type="password" name="password">
                </div>
            </div>

            <button class="uk-button uk-button-default">Log in</button>
            <p class="errorMessage"><?php echo $errorMessage ?></p>

        </form>

    <?php endif; ?>
</div>
<script src="node_modules/jquery/dist/jquery.js"></script>
<script src="js/uikit.min.js"></script>
<script src="js/uikit-icons.min.js"></script>

<script src="js/admin.js"></script>
