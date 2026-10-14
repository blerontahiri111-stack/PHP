<?php

include_once("config.php");

if(empty($_SESSION['username'])){
    header("Location: login.php");
}

$sql="SELECT * FROM users";
$selectUsers=$conn->prepare($sql);
$selectUsers->execute();

$users=$selectUsers->fetchAll();

?>
<html>
    <head>
        <title>Dashboard</title>
        <link href="./css/bootstrap.css" rel="stylesheet">
        <link href="./css/main.css" rel="stylesheet">
    </head>

    <body>
        <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
            <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Welcome to Dashboard</a>

            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu"
                aria-expanded="false" aria-label="Toggle Navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <input type="text" class="form-control form-control-dark w-50" placeholder="Search"
                aria-label="Search">

            <div class="navbar-nav">
                <div class="nav-item text-nowrap">
                    <a href="logout.php" class="nav-link px-3">Logout</a>
                </div>
            </div>
        </header>

        
<div class="album py-5 bg-light">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <?php foreach($movies_data as $movie){ ?>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSzNSfSKz90vb1EX09gkC-F0HfIB3H2QBCsqGa-tstkc6_-3f5SaVfq_zg&s=10" height="350">

                <div class="card-body">
                    <h4 class="card-text"><?php echo $movie['emri_filmit']?></h4>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="#" class="btn btn-sm btn-outline-secondary">Details</a>
                            <a href="book.php?movie_id=<?php echo $movie['id']; ?>" class="btn btn-sm btn-outline-secondary">Book</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
</body>
</html>