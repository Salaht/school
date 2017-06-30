<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
        .box {padding: 0 5px 0 5px;}
        .body{ padding: 0px; }
        .container{ padding-top: 10px; }
        .button .btn{ border-radius: 0; }
        .form-control{ border-radius: 0; }
    </style>

    <title>Proefopdracht</title>
        
    <!-- Custom CSS -->
    <link href="css/" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
       <?php include 'breadcrumb.php'; ?>
		<div class="container">
        <?php
        // Alleen de form actie uitvoeren als de $_POST niet leeg is
        if (!empty($_POST)){
            // Database connectie
            $mysqli = new mysqli('localhost', 'root', '', 'test');

            // Check connectie
            if ($mysqli->connect_error) {
                die('Connect Error: ' . $mysqli->connect_errno . ': ' . $mysqli->connect_error);
            }
            // Data insert
            $web_name = $_POST['webName']; 
            $ftp_adres = $_POST['ftpAdres'];
            $ftp_username = $_POST['ftpUsername'];
            $ftp_pass = $_POST['ftpPass'];
            $db_name = $_POST['dbName'];
            $db_username = $_POST['dbUsername'];
            $db_pass = $_POST['dbPass'];

            $sql = "INSERT INTO webdata (webName, ftpAdres, ftpUsername, ftpPass, dbName, dbUsername, dbPass) VALUES ('$web_name', '$ftp_adres', '$ftp_username', '$ftp_pass', '$db_name', '$db_username', '$db_pass')";
            $insert = $mysqli->query($sql);

        // Mysql antwoord uitprinten
            if ($insert) {
                echo '<div class="alert alert-success fade in">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <strong>Success!</strong> Website is toegevoegd aan de database.
            </div>';
        } else{
            die("Error: {$mysqli->errno} :  {$mysqli->error}");
        }
        // connecntie sluiten
        $mysqli->close();
    }
    ?>
    <div class="row">
        <legend>Website Toevoegen:</legend>
        <form action="toevoegen.php" method="POST" role="form" class="col-sm-5">
            <div class="form-group">
                <label for="">Website naam:</label>
                <input name="webName" type="text" class="form-control" id="" placeholder="Website naam">
            </div>
            <div class="form-group">
                <label for="">FTP adres:</label>
                <input name="ftpAdres" type="text" class="form-control" id="" placeholder="Adres">
            </div>
            <div class="form-group">
                <label for="">FTP loginnaam:</label>
                <input name="ftpUsername" type="text" class="form-control" id="" placeholder="Loginnaam">
            </div>
            <div class="form-group">
                <label for="">FTP wachtwoord:</label>
                <input name="ftpPass" type="password" class="form-control" id="" placeholder="Wachtwoord">
            </div>
            <div class="form-group">
                <label for="">Database naam:</label>
                <input name="dbName" type="text" class="form-control" id="" placeholder="Naam">
            </div>
            <div class="form-group">
                <label for="">Database gebruikersnaam:</label>
                <input name="dbUsername" type="text" class="form-control" id="" placeholder=" Gebruikersnaam">
            </div>
            <div class="form-group">
                <label for="">Database wachtwoord:</label>
                <input name="dbPass" type="password" class="form-control" id="" placeholder="Wachtwoord">
            </div>
            <div class="button">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>

        <div class="image class col-sm-7" style="padding-top:20px">
            <img src="img/hipster-cats-wallpaper-14476.jpg" style="width:100%; height:49%" alt="">
        </div>
    </div>
</div>

</body>
</html>
