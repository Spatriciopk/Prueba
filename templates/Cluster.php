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
 
    <div class="logo">
        <img src="{{ url_for('static', filename='img/Logo.png' ) }}" alt="Logo Machine Learning" />
    </div>
    
    <title>Cluster</title>

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
                <a class="navbar-brand" href="{{ url_for('cluster')}}">Cluster</a>
                <a class="navbar-brand" href="    ">Schedule</a>
        </ul>
        </div>
    </div>
    </nav>
    <div class="container-img">
        <img src="{{ url_for('static', filename='img/cluster.png' ) }}" alt="Cluster" class="tam_imagen" />
    </div>

    <h1>CLUSTERING</h1>
    <!-- <label><input type="checkbox" checked id="cbox0"> Cluster 0</label><br>
    <label><input type="checkbox" checked id="cbox1"> Cluster 1</label><br>
    <label><input type="checkbox" checked id="cbox2"> Cluster 2</label><br>
    <label><input type="checkbox" checked id="cbox3"> Cluster 3</label><br> -->
     

<div class="form-check form-switch">
    <input class="form-check-input" type="checkbox" role="switch" id="cbox0" checked>
    <label class="form-check-label" for="cbox0">Cluster 0</label>
</div>
<br>    
<div class="form-check form-switch">
    <input class="form-check-input" type="checkbox" role="switch" id="cbox1" checked>
    <label class="form-check-label" for="cbox1">Cluster 1</label>
</div>
<br>
<div class="form-check form-switch">
    <input class="form-check-input" type="checkbox" role="switch" id="cbox2" checked>
    <label class="form-check-label" for="cbox2">Cluster 2</label>
</div>
<br>
<div class="form-check form-switch">
    <input class="form-check-input" type="checkbox" role="switch" id="cbox3" checked>
    <label class="form-check-label" for="cbox3">Cluster 3</label>
</div>
<br>
    
    
    <div id="salida_tabla">
        <div style="height:325px;overflow:auto;"> 
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th class="tit" scope="col">Titles</th>
                        <th class="cluster" scope="col">Cluster</th>
                    </tr>
                </thead>
                {%for i in range(0, tam)%}
                <tr>
                    
                    <th scope="col" class="grupo{{clust[i]}}">{{i+1}}</th>
                    <td class="grupo{{clust[i]}}"> {{data[i]}}</td>
                    <td class="grupo{{clust[i]}}">{{clust[i]}}</td>           
                </tr>
                {%endfor%}
            </table>
        </div>
    </div> 
    
    
    <script src="{{ url_for('static', filename='scripts/check_cluster.js' ) }}"> </script>

</body>


<footer>
<p>
Elaborated by: Students of the Salesian Polytechnic University.
</p>
</footer>
</html>