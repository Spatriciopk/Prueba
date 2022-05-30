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
                <a class="navbar-brand" href="{{ url_for('dendograma')}}">Dendrogram</a>
                <a class="navbar-brand" href="{{ url_for('grafo')}}">MDS</a>
                <a class="navbar-brand" href="{{ url_for('cluster')}}">Cluster</a>
                <!-- <a class="navbar-brand" href="Schedule.php">Schedule</a> -->
        </ul>
        </div>
    </div>
    </nav>
    
<h1>DESCRIPTION OF THE PROJECT</h1>
<div id="abstract"> 
    <div id="abstract1">
In this document a comparative analysis of the similarity of three main documents will be carried out,
which are the following: social sciences, computer science, medicine, and exact sciences with their 
fifteen references, using three variables (title, summary and keywords). <br>
Once the database is made, we proceed to make the processes and analysis of the documents with the 
same topics, each document goes through the NLP process, to obtain a database ready to use, then the
 process of similarity between documents of the same type, distance matrix of documents, graphs to 
 indicate the distance matrix of the entire database and each document, also runs a clustering task 
 using the DHC algorithm with the purpose that each document must show some graph that identifies the 
 resulting articles and a list with the titles of the articles of each group. <br>
In this case, Visual Studio Code has been used, as it is an application that helps the creation of
 programs through Python, and the construction of the dataset was also made by the members of the group
  themselves, it contains different diagrams to have a better abstraction of the program and the project
   in general, to understand each of the implemented algorithms.
   </div>
</div> 

    <div class="sticky-container">
        <ul class="sticky">
            <li>
            <i class="bi bi-github"></i>
                <p><a href="https://github.com/Spatriciopk/Prueba" target="_blank">Github Repository  <br>Project </a></p>
            </li>
            <li>
            <i class="bi bi-git"></i>
                <p><a href="https://github.com/Freddy8-C/Proyecto_MachineLearning" target="_blank">Github Repository <br>CSV </a></p>
            </li>

            <li>
            <i class="bi bi-globe"></i>
                <p><a href="https://machinlearning2.herokuapp.com/" target="_blank">Website Machine <br> Learning </a></p>
            </li> 

            <li>
                <img src="{{ url_for('static', filename='img/Flask.png')}}" width="10" height="10">
                <p><a href="https://flask.palletsprojects.com/en/2.1.x/installation/" target="_blank">Website Flask</a></p>
            </li>

            <li>
                <img src="{{ url_for('static', filename='img/Heroku.png')}}" width="32" height="32">
                <p><a href="https://www.heroku.com/" target="_blank">Website Heroku</a></p>
            </li>
            <li>
                <img src="{{ url_for('static', filename='img/VisualSC.png')}}" width="32" height="32">
                <p><a href="https://code.visualstudio.com/" target="_blank">Website Visual <br> Studio Code</a></p>
            </li>
        </ul>
    </div>




</body>


<footer>
<p>
Elaborated by: Students of the Salesian Polytechnic University.
</p>
</footer>

</html>