<!DOCTYPE html><html lang="en"><head>  <title>Bootstrap Example</title>  <meta charset="utf-8">  <meta name="viewport" content="width=device-width, initial-scale=1">  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>       <style>    /* Remove the navbar's default rounded borders and increase the bottom margin */     .navbar {      margin-bottom: 50px;      border-radius: 0;       border:2px solid white;    }        .sendmsg{   background-color:white;                     width:100%;                   text-align: left;    }        /* Remove the jumbotron's default bottom margin */      .jumbotron {      margin-bottom: 0;    }       /* Add a gray background color and some padding to the footer */    footer {      background-color: #f2f2f2;      padding: 25px;    }  </style></head><body><nav class="navbar navbar-inverse">  <div class="container-fluid">    <div class="navbar-header">      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">        <span class="icon-bar"></span>        <span class="icon-bar"></span>        <span class="icon-bar"></span>                              </button>      <a class="navbar-brand" href="index.php">Kisan-Network</a>    </div>    <div class="collapse navbar-collapse" id="myNavbar">      <ul class="nav navbar-nav">        <li class="active"><a href="index.php">Home</a></li>        <li><a href="sent.php">Message Sent</a></li>             </ul>         </div>  </div></nav><div class="container">         <div class="table-responsive">            <table class="table">    <thead>      <tr>              <th>Contact List</th>             </tr>    </thead>    <tbody>      <tr>        <td><button class="sendmsg"  type="buttton" onclick="myFunction1()">7977061638</button></td>      </tr>      <tr><td><button class="sendmsg" type="buttton" onclick="myFunction2()">9022879660</button></td></tr>       <tr><td><button class="sendmsg" type="buttton" onclick="myFunction3()">8452094805</button></td></tr>    </tbody>  </table>  </div>    </div><br><br><p id="demo" style="text-align:center">  <b >Click on contact No to see details</b> </p> <script>function myFunction1() {   // document.getElementById("demo").innerHTML = "Pramod yadav data";   var myJSON1 = '{"name":"Pramod","last":"Yadav" ,"mob":7977061638, "city":"Mumbai"}';var myObj1 = JSON.parse(myJSON1);document.getElementById("demo").innerHTML = 'Name : '+myObj1.name+' '+myObj1.last+'<br>Mobile: '+myObj1.mob+'<br>City  : '+myObj1.city+   '<br>  <a href="send.php?na='+myObj1.name+'&la='+myObj1.last+'&mo='+myObj1.mob+'&ci='+myObj1.city+'"> <button> Send Message </button></a> ';}function myFunction2() {   // document.getElementById("demo").innerHTML = "Tarun yadav data";   var myJSON2 = '{"name":"Tarun","last":"Yadav" ,"mob":9022879660, "city":"Thane"}';var myObj2 = JSON.parse(myJSON2);document.getElementById("demo").innerHTML = 'Name : '+myObj2.name+' '+myObj2.last+'<br>Mobile: '+myObj2.mob+'<br>City  : '+myObj2.city+   '<br>  <a href="send.php?na='+myObj2.name+'&la='+myObj2.last+'&mo='+myObj2.mob+'&ci='+myObj2.city+'"> <button> Send Message </button></a> ';}function myFunction3() {  //  document.getElementById("demo").innerHTML = "Ramesh singh data";  var myJSON3 = '{"name":"Ramesh","last":"Singh" ,"mob":8452094805, "city":"Pune"}';var myObj3 = JSON.parse(myJSON3);document.getElementById("demo").innerHTML = 'Name : '+myObj3.name+' '+myObj3.last+'<br>Mobile: '+myObj3.mob+'<br>City  : '+myObj3.city+   '<br>  <a href="send.php?na='+myObj3.name+'&la='+myObj3.last+'&mo='+myObj3.mob+'&ci='+myObj3.city+'"> <button> Send Message </button></a> ';}</script>  <br><br><footer class="container-fluid text-center">  <p>Online Web Contact App</p>    <p><b>Created by Pramod Yadav</b></p></footer></body></html>