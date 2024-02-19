<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
  .navbar {
    background-color: #F1ECCE;
  }
  .navbar-nav .nav-link {
    text-align: center;
  }
  .navbar-nav .nav-link:hover {
    background-color: #FFA361; 
    border-radius: 25px;
  }

  .nav-item {
    padding-left: 50px; 
  }
</style>

<nav class="navbar navbar-expand-md fixed-top">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-around" id="navbarCollapse">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#hom" style="color:black">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#reg" style="color:black">Regional analysis / donor list</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#abt" style="color:black">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#" onclick="signOut()" style="color:black">Sign out</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
