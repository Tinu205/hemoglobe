<?php
    include 'libs/load.php';
?>

<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="assets/dist/js/bootstrap.bundle.min.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <title>hemoglobe</title>
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      #hom,#reg,#don,#abt,#sout{
        height: 100vh;
        padding-top: 50px;
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

      .btn-bd-primary {
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
      }
      .bd-mode-toggle {
        z-index: 1500;
      }


      .form-signin {
            text-align: center;
            max-width: 330px;
            padding-top:7em ;
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
        // Close the current window
        window.close();
        // Open a new window with the desired URL (index.php in this case)
        window.open('index.php', '_blank');
      }
    </script>

  </head>
<body>  
<header data-bs-theme="dark">
  <?php
    load_template("nav_bar");
  ?>
</header>

<main>
    
  <div id="hom">    
  <?php
    load_template("home");
  ?>
  </div>
  <div id="reg">
  <?php

$username = $_POST['email_address'];
$password = $_POST['password'];
$page = $_POST[''];
$result = FALSE;
if($username == "panda@mail.com" && $password == "pandaman"){
  $result = TRUE;
}

if ($result) {
    ?>
<main class="container">
    <div class="bg-light p-5 rounded mt-3">
        <h1>Login success</h1>
        <pre><?php
            load_template("reg_anal");
        ?></pre>
    </div>
</main>
<?php
} else {
        ?>
<main class="form-signin">
    <form method="post" action="index.php#reg">
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

        <div class="form-floating">
            <input name="email_address" type="email" class="form-control" id="floatingInput"
                placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary hvr-grow-rotate" type="submit">Sign in</button>
    </form>
</main>

<?php
    }
?>
  </div>
  <div id="don">
  <?php

$username = $_POST['email_address'];
$password = $_POST['password'];
$page = $_POST[''];
$result = FALSE;
if($username == "panda@mail.com" && $password == "pandaman"){
  $result = TRUE;
}

if ($result) {
    ?>
<main class="container">
    <div class="bg-light p-5 rounded mt-3">
        <h1>Login success</h1>
        <pre><?php
            load_template("don");
        ?></pre>
    </div>
</main>
<?php
} else {
        ?>
<main class="form-signin">
    <form method="post" action="login.php">
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

        <div class="form-floating">
            <input name="email_address" type="email" class="form-control" id="floatingInput"
                placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary hvr-grow-rotate" type="submit">Sign in</button>
    </form>
</main>

<?php
    }
?>
  </div>
  <div id="abt">
    <?php
    load_template("about");
    ?>
  </div>

</main>    
  </body>
</html>