<!DOCTYPE html>
<html lang="en" ng-app="app" manifest="manifest.appcache">
<head>
  <meta charset="utf-8">
  <title>pouchDB</title>
  <link rel="stylesheet" href="fontello/fontello.css"/>
  <link rel="stylesheet" href="style.css"/>

</head>
<body ng-controller="TodoCtrl">


    <h1>Almacenamiento en la Nube<i class="icon-emo-thumbsup"></i></h1>
  </div>

  <div class="task" ng-repeat="todo in todos" ng-cloak>
    <i class="icon-angle-right"></i>
    <span class="align-text">{{ todo.text }}</span>
    <i class="icon-cancel" ng-click="remove(todo)"></i>
  </div>

  <input type="text" placeholder="Ingrese un texto" 
    ng-model="text" 
    ng-keyup="$event.keyCode == 13 ? submit() : null"></input>

  <footer>
   
    <a href="index"><h2>Inicio</h2>
  </footer>

  <script src="libs/angular.js"></script>
  <script src="libs/pouchdb.min.js"></script>
  <script src="pouch-todo.js"></script>
</body>
</html>
