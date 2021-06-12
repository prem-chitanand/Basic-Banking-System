<html>
<head>
<?php include 'link.php'; ?>

</head>
<title>transfer money</title>
<body>
<nav class="navbar navbar-inverse navbar-fixed top">
        <div class="conatiner">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        <a href="index.php" class="navbar-brand"><span class="glyphicon glyphicon-home"></span>
            Sparks Foundation Bank</a>
        </div>
        <div class="collapse navbar-collapse" id="mynavbar">
        <ul class="nav navbar-nav navbar-right">
        
        <div>
        </nav>
<div class="jumbotron">
<div class="conatiner">
<div class="modal fade" id="modal-1">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h3 class="modal-title"> transaction histroy</h3>
</div>
<div class="modal-body">
<p id="content"></p>
</div>
<div class="modal-footer">
<button class="btn btn-warning" data-dismiss="modal">close</button>

</div>
</div>
</div>
</div>
<center>
<h2 id="state" style="font-family: roboto; font-weight: bolder"></h2>


</ul>
<div class="container">
<div class="col-xs-12">
<div class="panel panel-success">
<div class="panel-heading">
<center><h1>Transfer money</h1><center>
</div>
<div class="panel-body">

<div class="form-group form-inline">
<label>sender name:  </label>
<input type="text" class="form-control"  placeholder="sender name" id="sender" name="sender"><br><br>
<label>reciver name: </label>
<input type="text" class="form-control" placeholder="reciver name" id="reciver" name="to"><br><br>
<label>amount: </label>
<input type="number" class="form-control" placeholder="amount" id="amount" name="amount"><br><br>
<label>security pin: </label>
<input type="password" class="form-control" placeholder="pin" id="pin"><br><br>
<label>date: </label>
<input type="date" class="form-control" placeholder="date" id="date"><br><br>


</div>
<div class="panel-footer">
<a href="#"><button class="btn btn-primary" id="transfer">Transfer</button><br><br>
<center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-1"id="btn">history</button><center>

</div>
</div>
</div>
</div>
</div>
</div>


</form>
<nav class="navbar-wrapper navbar-inverse navbar-fixed-bottom">
        <div class="container-fluid">
            <p class="navbar-text pull-left">&copy; Sparks Foundation Bank. All rights reserved.</p>
            <?php include 'script2.php';?>
           
            
</body>
</html>

