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
    <script src="https://cdn.jsdelivr.net/npm/chart,js@2.9.4/dist/Chart.min.js"> </script>
    <div class="logo">
        <img src="{{ url_for('static', filename='img/Logo.png' ) }}" alt="Logo Machine Learning" />
    </div> 
    
    <title>Dendogram</title>

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
            <a class="navbar-brand" href="{{ url_for('documentos')}}">Papers </a> 
                <a class="navbar-brand" href="{{ url_for('dendograma')}}">Dendrogram</a>
                <a class="navbar-brand" href="{{ url_for('grafo')}}">MDS</a>
                <a class="navbar-brand" href="{{ url_for('cluster')}}">Wordmap</a>
                <a class="navbar-brand" href="Schedule.php">Schedule</a>
        </ul>
        </div>
    </div>
    </nav>
    <ul>
        <li><a href="/dendo/1">Papers General</a></li>
        <li><a href="/dendo/2">Social Sciences --> General all</a></li>
        <li><a href="/dendo/3">Social Sciences --> Titles</a></li>
        <li><a href="/dendo/4">Social Sciences --> Keywords</a></li>
        <li><a href="/dendo/5">Social Sciences --> Abstract</a></li>
        <li><a href="/dendo/6">Computing --> General all</a></li>
        <li><a href="/dendo/7">Computing --> Titles</a></li>
        <li><a href="/dendo/8">Computing --> Keywords</a></li>
        <li><a href="/dendo/9">Computing --> Abstract</a></li>
        <li><a href="/dendo/10">Medicine --> General all</a></li>
        <li><a href="/dendo/11">Medicine --> Titles</a></li>
        <li><a href="/dendo/12">Medicine --> Keywords</a></li>
        <li><a href="/dendo/13">Medicine --> Abstract</a></li>
        <li><a href="/dendo/14">Exact Sciencies --> General all</a></li>
        <li><a href="/dendo/15">Exact Sciencies --> Titles</a></li>
        <li><a href="/dendo/16">Exact Sciencies --> Keywords</a></li>
        <li><a href="/dendo/17">Exact Sciencies --> Abstract</a></li>
    </ul>
        <div>
        <img src="{{ url_for('static', filename='img/mapa1.png' ) }}" alt="Heat Map" />
        </div>
    <div id="salida_tabla"> 
       <table><tr>
       {%for i in range(0, tam+1)%}
             <td  >D{{i}}  </td>
       {%endfor%}
        </tr>
         {%for i in range(0, tam)%}
         <tr>
                
                <td  >D{{i+1}} </td>
                
            {%for j in range(0, tam)%}
               
                    <td class ="script" id="{{i,j,matriz_keywords[i][j]}}">{{matriz_keywords[i][j]}}</td>
                
               
               
            {%endfor%}
        </tr>
        {%endfor%}
      </table>
    </div>
    <canvas id="chart" width="900" height="400"> </canvas>

    <script>
        var ctx = document.getElementById("chart").getContext("2d")
        
    </script>
   
</body>
<footer>
<p>
Elaborado por: Estudiantes de la Universidad Politécnica Salesiana.
</p>
</footer>
</html>