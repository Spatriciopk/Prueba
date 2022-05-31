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
    <!-- SCRIPT  -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/chart,js@2.9.4/dist/Chart.min.js"> </script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
    


    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js"></script>
    <script src="{{ url_for('static', filename='scripts/canvas.js' ) }}"></script>
    <script src="{{ url_for('static', filename='scripts/dropdown_dendrogram.js' ) }}">  </script> 


    <title>Heart Map</title>

</head> 
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
            <a class="navbar-brand" href="{{ url_for('documentos')}}">Papers </a>  
                <li class="nav-item dropdown"> 
                    
                
                
                
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Heart Map</a>
                <ul class="dropdown-menu dropdown-menu-dark">

                    <li><a class="dropdown-item" href="/dendo/1">Papers General</a></li>                    
                    <li><hr class="dropdown-divider"></li>

                    
                    <li><a class="dropdown-item" href="#"> Social Sciences &raquo; </a>
                    <ul class="submenu dropdown-menu">
                        <li><a class="dropdown-item" href="/dendo/2">General all</a></li>
                        <li><a class="dropdown-item" href="/dendo/3">Titles</a></li>
                        <li><a class="dropdown-item" href="/dendo/4">Keywords</a></li>
                        <li><a class="dropdown-item" href="/dendo/5">Abstract</a></li>
                    </ul>
                    </li>


                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Computing &raquo; </a>
                        <ul class="submenu dropdown-menu">
                            <li><a class="dropdown-item" href="/dendo/6">General all</a></li>
                            <li><a class="dropdown-item" href="/dendo/7">Titles</a></li>
                            <li><a class="dropdown-item" href="/dendo/8">Keywords</a></li> 
                            <li><a class="dropdown-item" href="/dendo/9">Abstract</a></li> 
                        </ul>
                    </li>	

                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#"> Medicine &raquo; </a>
                    <ul class="submenu dropdown-menu">
                            <li><a class="dropdown-item" href="/dendo/10">General all</a></li>
                            <li><a class="dropdown-item" href="/dendo/11">Titles</a></li>
                            <li><a class="dropdown-item" href="/dendo/12">Keywords</a></li> 
                            <li><a class="dropdown-item" href="/dendo/13">Abstract</a></li> 
                        </ul>
                    </li>	

                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#"> Exact Sciencies &raquo; </a>
                    <ul class="submenu dropdown-menu">
                            <li><a class="dropdown-item" href="/dendo/14">General all</a></li>
                            <li><a class="dropdown-item" href="/dendo/15">Titles</a></li>
                            <li><a class="dropdown-item" href="/dendo/16">Keywords</a></li> 
                            <li><a class="dropdown-item" href="/dendo/17">Abstract</a></li> 
                        </ul>
                    </li> 
				</ul>
              </li> 
                    <a class="navbar-brand" href="{{ url_for('grafo')}}">MDS</a>
                    <a class="navbar-brand" href="{{ url_for('cluster')}}">Dendogram</a>
                    <!-- <a class="navbar-brand" href="Schedule.php">Schedule</a> -->
            </ul>
           </div> 
        </div>
    </nav> 

    <h1>HEART MAP</h1>
    <body onmousedown="return false;">
    <div id="wrapper" style="margin-top: 50px">
        <canvas id="myCanvas" width="400" height="475">
        </canvas>
        <div id="buttonWrapper">
        <input type="button" id="plus" value="+"><input type="button" id="minus" value="-">
        </div>
    </div> 
 

<!-- <div style="margin-left: 50px; margin-right:50px"> -->
    <div>

        <div class="alert alert-dark" role="alert" style="margin-top: 20px;">
            <div id="Resultado" style="text-align:center"></div>
        </div>


    <div id="salida_tabla"> 
    <div class="table-responsive-xxl">
    <div style="width:80%; height:400px;overflow:auto; margin: 0 auto; margin-top:30px; cursor:pointer">
    
       <table class="table table-striped table-hover">
       <thead class="table-dark"> 
            <tr>
                {%for i in range(0, tam+1)%}
                        <th  >D{{i}}  </th>
                {%endfor%}
            </tr> 
        </thead> 
                {%for i in range(0, tam)%}
            <tr>    
                <td>D{{i+1}} </td>
            
              
                {%for j in range(0, tam)%}
                <td class ="script" id="{{i,j,matriz_keywords[i][j]}}">{{matriz_keywords[i][j]}}</td>
                {%endfor%}
            </tr>
            {%endfor%}
        </table>
        </div>
        </div>
    </div>
</div>

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

    <script src="{{ url_for('static', filename='scripts/tabla_dendrogram.js' ) }}">  </script> 

</body>
<footer>
<p>
Elaborated by: Students of the Salesian Polytechnic University. 
</p>
</footer>
</html>