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

<title>Papers</title>
</head>
<body>
  

    <div class="logo">
        <img src="{{ url_for('static', filename='img/Logo.png' ) }}" alt="Logo Machine Learning" />
    </div>
          


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ url_for('principal')}}">Index</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
    <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Papers
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="/doc/1">All Papers</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/doc/2">Social Sciences</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/doc/3">Computing</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/doc/4">Medicine</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/doc/5">Exact Sciences</a></li>
          </ul>
        </li>
            <a class="navbar-brand" href="{{ url_for('dendograma')}}">Dendrogram</a>
            <a class="navbar-brand" href="{{ url_for('grafo')}}">MDS</a>
            <a class="navbar-brand" href="{{ url_for('cluster')}}">Wordmap</a>
            <a class="navbar-brand" href="Schedule.php">Schedule</a>
    </ul>
    </div>
  </div>
</nav>


   
    <div id="papernumber">  

    <h3>Number of Papers {{tam}}</h3>
    </div>
    
   
    
    <label><input type="checkbox" checked id="cbox1"> Show Title</label><br>
    <label><input type="checkbox" checked id="cbox2"> Show Keywords</label><br>
    <label><input type="checkbox" checked id="cbox3"> Show Abstract</label><br>
    
   
       
   
  
    <div id="salida_tabla"> 
       <table>
         <thead>
            <tr>
                <th>ID</th>
                <th class="tit">Titles</th>
                <th class="key">Keywords</th>
                <th class="asb">Abstract</th>
            </tr>
         </thead>
         {%for i in range(0, tam)%}
         <tr>
            
            <td>{{i+1}}</td>
            <td class="tit"> {{titulos[i]}}</td>
            <td class="key">{{keyword[i]}}</td>
            <td class="asb">{{abstract[i]}}</td>
        </tr>
        {%endfor%}
      </table>
    </div>

    <script src="{{ url_for('static', filename='scripts/check.js' ) }}"> </script>

    <footer>
    <p>
    Elaborado por: Estudiantes de la Universidad Politécnica Salesiana.
    </p>
</footer>

</body>




</html>