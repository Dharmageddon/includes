<?php
$site = 'localhost';
$page = $_SERVER["REQUEST_URI"];
$_SESSION['page'] = $page;
echo "http://".$_SERVER['SERVER_NAME'].$_SESSION['page'];
$title = $site;
if ($page == '/crud/index.php') $title = 'Crud';
?>

<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Dharmageddon">
    <title><?php echo $title; ?></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Site CSS -->
    <link rel="stylesheet" href="site.css">

  </head>

<body class="d-flex flex-column h-100">
  <header>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="../pages/welcome.php">
        <i class="fas fa-fist-raised"></i> Stark Fist
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">

        <?php if (isset($_SESSION['username'])) { ?>

        <ul class="navbar-nav mr-auto">
          <li class="nav-item <?php if ($page == '/crud/index.php') echo 'active'; ?>">
            <a class="nav-link" href="<?php $site; ?>/crud/index.php">Crud</a>
          </li>
        </ul>

          <span class="ml-auto">
      		<button class="btn btn-danger btn-sm" onclick="window.location.href='../logout.php'">Logout</button>
      		</span>
        
    		<?php } else { ?>

          <span class="ml-auto">
      		<button class="btn btn-primary btn-sm" onclick="window.location.href='../login.php'">Login</button>
      		</span>
        
    		<?php } ?>
        
      </div>
    </nav>
  </header>
