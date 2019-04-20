<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Artical List</title>

    <?= link_tag("https://use.fontawesome.com/releases/v5.7.2/css/all.css") ?>
    <?= link_tag("assets/css/bootstrap.min.css") ?>
    <?= link_tag("assets/css/style.css") ?>

</head>

<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Artical</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <!-- <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a onclick="document.getElementById('id01').style.display='block'" class="nav-link" href="#">Login <span class="sr-only">(current)</span></a>
      </li>
    </ul> -->
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>