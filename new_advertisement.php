<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Add Advertisement</title>
    <link rel="stylesheet" href="./Assets/CSS/AddAdvertisement.css">
    <link rel="stylesheet" href="./Assets/CSS/style.css">
</head>

<body>
    <!-- TOP NAVIGATION BAR SECTION -->
    <header>
        <figure class="brand"><img src="./Assets/Images/logo.png" alt="" class="header-logo"></figure>
        <nav class="menu">
            <input type="checkbox" id="menuToggle">
            <label for="menuToggle" class="menu-icon"><i class="fa fa-bars"></i></label>
            <ul>
                <a href="./index.html">
                    <li>Home</li>
                </a>
                <a href="./ViewAdvertisements.html">
                    <li>View Advertisements</li>
                </a>
                <a href="./AddAdvertisement.html">
                    <li>Add Advertisements</li>
                </a>
                <a href="./index.html">
                    <li>Login</li>
                </a>
                <a href="./index.html">
                    <li>Register</li>
                </a>
            </ul>
        </nav>
    </header>
    <!-- TOP NAVIGATION BAR SECTION -->
    <form action="" class="add-advertisement-form clear-both">
        <h1 class="heading">Add Advertisement</h1>
        <form method = "POST" action="add_employee.php">
        <table>
            <tr><td> Title: </td><td><input type="text" name="Title"></tr></td>
            <tr><td> Details: </td><td><input type="varchar" name="Details"></tr></td>
            <tr><td> Date: </td><td><input type="date" name="Date_p"></tr></td>
            <tr><td> Price: </td><td><input type="int" name="Price"></tr></td>
            <tr><td> Category ID: </td><td><input type="varchar" name="Category_ID"></tr></td>
            <tr><td> User ID: </td><td><input type="varchar" name="User_ID"></tr></td>
            <tr><td> Moderator ID: </td><td><input type="varchar" name="Moderator_ID"></tr></td>
            <tr><td> Status ID: </td><td><input type="varchar" name="Status_ID"></tr></td>
        </table>
        </form>

    </form> 

</body>
</html>