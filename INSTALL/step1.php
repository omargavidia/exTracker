<html>
<head>
    <title>expense tracker | Home</title>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen"/>
</head>

<body>
<div id="container">
    <?php include("header.php"); ?>
    <?php include("menu.php"); ?>

    <div id="content">
        <div id="content_install">
            <h4>Step 1</h4>

            <p>
                Installation details will be listed here...<br/>
                TODO
            </p>

            <div id="content_install_buttons">
                <button id="step1_back" onclick="location.href = 'install.php';" type="submit" style="width: 200px; height: 30px">Back</button>
                <button id="step2" onclick="location.href = 'step2.php'; "type="submit" style="width: 200px; height: 30px">Next</button>
            </div>
        </div>
    </div>
    <?php include("footer.php"); ?>

</div>
</body>

</html>