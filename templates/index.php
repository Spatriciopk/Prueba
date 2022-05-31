<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  

<!-- LIBRERÍA BOOSTRAP -->
    

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css"> 
<!-- Estilos -->
<link rel="stylesheet" href="{{ url_for('static', filename='css/Estilos.css' ) }}">
<link rel="stylesheet" href="{{ url_for('static', filename='css/Estilo_botones.css' ) }}">
<!-- Script --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 



<!-- <link  href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link  href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link  href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link  href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
 -->



<div class="logo">
    <img src="{{ url_for('static', filename='img/Logo.png' ) }}" alt="Logo Machine Learning" />
</div>


    <title>Machine Learning</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url_for('principal')}}">Index</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
        <ul class="navbar-nav"> 
            <a class="navbar-brand" href="{{ url_for('documentos')}}" >Papers </a> 
                <a class="navbar-brand" href="{{ url_for('dendograma')}}">Heart Map</a>
                <a class="navbar-brand" href="{{ url_for('grafo')}}">MDS</a>
                <a class="navbar-brand" href="{{ url_for('cluster')}}">Dendogram</a>
                <a class="navbar-brand" href="Schedule.php">Schedule</a>  
        </ul>
        </div>
    </div>
    </nav>
    
 









    <div class="sticky-container">
        <ul class="sticky">
            <li>
            <i class="bi bi-github"></i>
                <a href="https://github.com/Spatriciopk/Prueba" target="_blank">Repository<br>Project </a> 
            </li>
            <li>
            <i class="bi bi-git"></i>
               <a href="https://github.com/Freddy8-C/Proyecto_MachineLearning" target="_blank">Repository<br>CSV </a>
            </li>

            <li>
            <i class="bi bi-globe"></i>
                <a href="https://machinlearning2.herokuapp.com/" target="_blank">Website<br>Machine Learning</a>
            </li> 

            <li>
                <img src="{{ url_for('static', filename='img/Flask.png')}}" width="25" height="25">
                <a href="https://flask.palletsprojects.com/en/2.1.x/installation/" target="_blank">Website<br>Flask</a>
            </li>

            <li>
                <img src="{{ url_for('static', filename='img/Heroku.png')}}" width="25" height="25">
                <a href="https://www.heroku.com/" target="_blank">Website<br>Heroku</a>
            </li>
            <li>
                <img src="{{ url_for('static', filename='img/VisualSC.png')}}" width="25" height="25">
                <a href="https://code.visualstudio.com/" target="_blank"> Visual<br>Studio Code</a>
            </li>
        </ul>
    </div> 


    <!-- <ul class="sticky-social-bar">
  <li class="social-icon">
    <a href="https://facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwal.ee%2F" target="_blank">
      <i class="bi bi-github" aria-hidden="true"></i>
      <span class="social-icon-text">Github Repository Project</span>
    </a>
  </li>
  <li class="social-icon">
    <a href="https://twitter.com/intent/tweet/?text=Super%20fast%20and%20easy%20Social%20Media%20Sharing%20Buttons.%20No%20JavaScript.%20No%20tracking.&amp;url=https%3A%2F%2Fwal.ee%2F" target="_blank">
      <i class="bi bi-git" aria-hidden="true"></i>
      <span class="social-icon-text">Github Repository CSV</span>
    </a>
  </li>
  <li class="social-icon">
    <a href="https://pinterest.com/pin/create/button/?url=https%3A%2F%2Fwal.ee%2F&amp;media=https%3A%2F%2Fwal.ee%2F&amp;description=Super%20fast%20and%20easy%20Social%20Media%20Sharing%20Buttons.%20No%20JavaScript.%20No%20tracking." target="_blank">
    <img src="{{ url_for('static', filename='img/Heroku.png')}}" width="10" height="10">
      <span class="social-icon-text">Website Machine Learning </span>
    </a>
  </li>
  <li class="social-icon">
    <a href="https://t.me/share/url?url=https://wal.ee&amp;text=Walee - URL Shortener" target="_blank">
    <img src="{{ url_for('static', filename='img/Heroku.png')}}" width="10" height="10">
      <span class="social-icon-text">Website Flask</span>
    </a>
  </li>

  <li class="social-icon">
    <a href="https://t.me/share/url?url=https://wal.ee&amp;text=Walee - URL Shortener" target="_blank">
    <img src="{{ url_for('static', filename='img/Heroku.png')}}" width="10" height="10">
      <span class="social-icon-text">Website Visual Studio Code</span>
    </a>
  </li>

</ul> -->
 

</body>


<footer>
<p>
Elaborated by: Students of the Salesian Polytechnic University.
</p>
</footer>

</html>