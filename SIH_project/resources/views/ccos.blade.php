<!doctype html>
<html >
<head>
     <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"  content="width=device-width ,initial-scale=1.0">
        <title>Team Geeks</title>
      <!-- Latest compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
      <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    
         <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="/css/startcss.css">
        <link rel="stylesheet" href="./css/default.css">
        <link rel="stylesheet" href="./css/component.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
        <script src="/js/modernizr.custom.js"></script>

        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>           
              <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>
              <script src="/js/startjs.js"></script>
    
    
    <script src="{{asset('/js/angular.min.js')}}"></script>
    <script src="{{asset('/js/closed_courses.js')}}"></script>
    <link href="/css/css1.css" rel="stylesheet" />
</head>
<body ng-app = "myModule" class="#b2dfdb teal lighten-4" >
    
    <nav class="nav-extended wow fadeInUp">
    <div class="nav-wrapper" style="background-color: #004040;">
      <a href="#" class="brand-logo" sty\le="font-size: 3.5em;">&emsp;Find Fake</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a class="waves-effect waves-light btn">Log In<i class="material-icons right">perm_identity</i></a></li>
        <li><a class="waves-effect waves-light btn">Register<i class="material-icons right">email</i></a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a class="waves-effect waves-light btn">Log In<i class="material-icons right">perm_identity</i></a></li>
        <li><a class="waves-effect waves-light btn">Register<i class="material-icons right">email</i></a></li>
      </ul>
    </div>
    </nav>
    <br>
    <br>
    <h3 class="center">List of Closed Courses</h3>
    <br>
    <div ng-controller = "mycontroller">
        <div class="container">
    <div class="row">      
        <form>
            <div class="row"> 
    <div class="col s12 m6 ">     
        <div class="input-field">
         <input id="search" type="search" placeholder="Search Colleges" style="background-color:#e3f2fd;color:black;" ng-model="searchText">
         <i class="material-icons">close</i> </input>
                </div>
        </div>
            </div> 
            
      </form>
        </div>       
        </div>
    <!--Search : <input type="text" placeholder="Search Employee" ng-model="searchText"/>--><br>
        <div class="container-fluid">
    <table class="striped"> 
    <thead>
    <tr style="font-size:20px;">
    <th>AICTE ID</th>
    <th>INSTITUTE NAME</th>
    <th>INSTITUTE TYPE</th>
    <th>STATE</th>
    <th>DISTRICT</th>
    <th>UNIVERSITY</th>
    <th>LEVEL</th>
    <th>COURSE</th>
    </tr> 
    </thead>
    <tbody>
    <tr ng-repeat="a in mytable| filter:searchText"  style="font-size:15px;font-family:georgia,serif;">
     <td>{{a.aicte_id}}</td>
    <td>{{a.institute_name}}</td>
    <td>{{a.institute_type}}</td>
    <td>{{a.State}}</td>
     <td>{{a.district}}</td>
    <td>{{a.university}}</td>
    <td>{{a.level}}</td>
    <td>{{a.course}}</td>
    </tr>
    </tbody>
    </table>
    </div>
    </div>
    
    <footer class="page-footer wow fadeInUp" style="background-color: #004040;">
      
      <div class="footer-copyright">
        <div class="container">
        © 2017 Find Fake, All rights reserved.
        </div>
      </div>
    </footer>


       <script>
       
       </script>
</body>
</html>