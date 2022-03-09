<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Shazam Coding</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
	<link rel="icon" type="image/x-icon" href="assets/shazam-ico.png">
</head>
<body>


<style>
html,body{
	background-color: whitesmoke;
}

#p-introducao{
	font-size: 23px;
}
.p-generic{
	font-size: 18px;
}
.footer{
		height: 130px;
}
.link{
	color: whitesmoke;
}
.link:hover{
	color:darkslategray ;
}
.color-golden{
	color: palegoldenrod !important;
}
.link-menu{
	text-decoration: none;
	color:white;
	font-weight: 600;
}
</style>

<!--HEADER COM NAVBAR-->	
<header>
	<nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand ms-3 color-golden" href="index.php">Shazam <i class="bi bi-lightning-fill color-golden"></i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2" id="navbarNavAltMarkup">

                
                <!--ul class="navbar-nav">

                    <a href="#" class="link-menu"> <div class="nav-link active" aria-current="page" >Cursos</div></a> <!-- trocar hyperlinks por divs --
                    <a href="#" class="link-menu"><div class="nav-link active ms-auto" href="login.php"><i class="bi bi-person-circle"></i></div></a>
                    
                </ul-->


                <!-- Nova navbar teste-->

                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active link-menu">
                        <a class="nav-link" style="color:white;" href="#">Item 1</a>
                    </li>
                    <li class="nav-item link-menu">
                        <a class="nav-link " style="color:white;" href="#">item 2</a>
                    </li>
                    <li class="nav-item link-menu">
                        <a class="nav-link" style="color:white;" href="#">item 3</a>
                    </li>
                    <li class="nav-item link-menu">
                        <a class="nav-link" style="color:white;" href="#">item 4</a>
                    </li>
                </ul>



            </div>
        </div>
    </nav>
</header>
<!--//HEADER COM NAVBAR-->

<div class="container">
	<div class="row">

		<!--Slider com imagens-->
		<div class="col-lg-6 mt-4">
			<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/ilustracao1.jpg" style="height:350px; width:auto" class="d-block w-100 rounded" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/ilustracao2.jpg" style="height:350px; width:auto" class="d-block w-100 rounded" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/ilustracao3.jpg" style="height:350px; width:auto"  class="d-block w-100 rounded" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
		</div>
