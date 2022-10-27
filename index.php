<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Proposal 4</title>
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/menu.js"></script>
</head>
<body>
    <div id='displayNone'>
        <div id='pageHome'>Home</div>
        <div id='pageWebsites'><?php include "pages/websites.php" ?></div>
        <div id='pageAbout'><?php include "pages/about.php" ?></div>
    </div>

    <div id='header'><p>Website Proposal 4</p></div>

    <div id='main'>
        <div id='menu'>
            <button id='home' class='classButton' value='pageHome'>Home</button>
            <button id='websites' class='classButton'  value='pageWebsites'>Websites</button>
            <button id='about' class='classButton'  value='pageAbout'>About</button>
        </div>
        <div id='centerContents'>
            <div id='contents'></div>
        </div>
    </div>

    <div id='footer'><?php include "pages/footer.php" ?></div>
</body>
</html>

