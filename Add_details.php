<?php
include 'libs/load.php';
?>

<!doctype html>
<html lang="en" data-bs-theme="auto">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>hemoglobe</title>
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Your CSS styles */

      .btn-danger{
        margin-left: 25em;
        margin-top: 1em;

      }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }
      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }
      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }
      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }
      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
      /* .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;
        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      } */
      .bd-mode-toggle {
        z-index: 1500;
      }
      .form-signin {
        text-align: center;
        max-width: 330px;
        padding-top: 7em;
        margin-left: 35vw;
      }
      .form-signin .form-floating:focus-within {
        z-index: 2;
      }
      .form-signin input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
      }
      .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
      }
    </style>

    <script>
        function signOut() {
            window.location.href = 'Add_details.php?logout=true'; // Redirect to logout page
        }
    </script>

</head>
<body>

<main>
<div id="reg">
        
        <?php
        $result = false;
        $username = $_POST['email_address'];
        $password = $_POST['password'];
        $result = User::login($username, $password);

        if (isset($_GET['logout'])) {
          Session::destroy();
          // die("Session destroyed, <a href='Add_details.php'></a>");
          header("Location: ".$_SERVER['PHP_SELF']);
          exit();
          
        }
        if ($result) {
            ?>
            <main class="container">
                <?php
                load_template("add_details");
                ?>
            </main>

            <!-- Sign-out button -->
            <!-- <button onclick="signOut()" class="btn btn-lg btn-danger">Sign Out</button> -->

            <?php
        } else {
            ?>
            <main class="form-signin">
                <form method="post" action="Add_details.php">
                    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
                    <div class="form-floating">
                        <input name="email_address" type="email" class="form-control" id="floatingInput"
                               placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input name="password" type="password" class="form-control" id="floatingPassword"
                               placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary hvr-grow-rotate" type="submit">Sign in</button>
                </form>
            </main>
            <?php
        }
        ?>
    </div>
</main>
<?php
          if(isset($_POST['month']) && isset($_POST['blood_group']) && isset($_POST['blood_collected']) && isset($_POST['blood_used']) && isset($_POST['year'])){
            $month = $_POST['month'];
            $blood_group = $_POST['blood_group'];
            $blood_collected = $_POST['blood_collected'];
            $blood_used = $_POST['blood_used'];
            $year = $_POST['year'];
            $result = database::add_data($month, $blood_group, $blood_collected, $blood_used, $year);
        }

?>

</body>
</html>