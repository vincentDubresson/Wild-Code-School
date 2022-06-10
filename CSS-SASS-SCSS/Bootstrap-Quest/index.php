<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Discovering Bootstrap 5.1</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Categories
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="#">Photos</a></li>
                  <li><a class="dropdown-item" href="#">Articles</a></li>
                  <li><a class="dropdown-item" href="#">Projects</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
    </nav>

    <h1>Journey into Bootstrap classes</h1>
    </header>

    <main>
        <section class="container">
            <div class="row justify-content-center">
                <div class="card col-md-6 col-lg-3 p-0 mb-2 mx-2" style="width: 15rem;">
                    <img class="card-img-top" src="https://picsum.photos/id/1000/150/100" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text d-none d-lg-block">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="d-grid gap-2">
                            <a href="#" class="btn btn-primary ">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="card col-md-6 col-lg-3 p-0 mb-2 mx-2" style="width: 15rem;">
                    <img class="card-img-top" src="https://picsum.photos/id/1001/150/100" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text d-none d-lg-block">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="d-grid gap-2">
                            <a href="#" class="btn btn-primary ">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="card col-md-6 col-lg-3 p-0 mb-2 mx-2" style="width: 15rem;">
                    <img class="card-img-top" src="https://picsum.photos/id/1002/150/100" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text d-none d-lg-block">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="d-grid gap-2">
                            <a href="#" class="btn btn-primary ">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="card col-md-6 col-lg-3 p-0 mb-2 mx-2" style="width: 15rem;">
                    <img class="card-img-top" src="https://picsum.photos/id/1003/150/100" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text d-none d-lg-block">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="d-grid gap-2">
                            <a href="#" class="btn btn-primary ">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <h3>The CSS Frameworks are very useful</h3>
        <p>Learning them comes with practice.</p>
    </main>
    <footer class="bg-primary text-center text-lg-start mt-2 pt-2 pb-2">
        <p>
        © 2022 Wilders | Images <a href="https://picsum.photos">@Picsum</a>
        </p>
    </footer>
    
    
    

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>