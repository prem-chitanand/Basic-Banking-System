<!DOCTYPE html>
<html>
	<head>
		<title>Sparks Customers</title>
		<?php include 'link.php'; ?>
		<?php include 'customer_style.php'; ?>
	</head>
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
        </ul>
        </div>
        <div>
        </nav>
        <div class="conatiner">
        <div class="jumbotron">
       <center> <a href=""><button class="btn-success btn-lg" id="history">tranaction History</button></a></center><br>
       <center> <a href="index.php"><button class="btn-primary btn-lg" id="home">Home</button></a></center>
    <div class="customer_table">
    <center><h1 id="head">customers</h1></center>
    <table class="table table-striped table-responsive table-bordered table-hover">
    <thead>
    <tr>
    <th>Sno</th>
    <th>name</th>
    <th>email</th>
    <th>balance</th>
    <th>action</th>
    </tr>
    </thead>
    <tbody>
							<?php
													include 'connect.php';
													$selectquery = "select * from userdata";
													$query = mysqli_query($con,$selectquery);
													$num = mysqli_num_rows($query);
													while($result = mysqli_fetch_array($query)){
													
							?>
							<tr>
								<td> <?php echo $result['sno']; ?> </td>
								<td> <?php echo $result['name']; ?> </td>
								<td> <?php echo $result['email']; ?> </td>
								<td> <?php echo $result['balance']; ?> </td>
								<td ><a href="customer_view.php?id=<?php echo $result['sno']; ?>" data-toggle="tooltip"
									data-placement="top" title="View" style="color: #00cc66;">
									<button class="button btn btn-warning">
									View
								</button></a></td>
							</tr>
							<?php
								}
								
							?>
							
						</tbody>
					</table>
                    </div>
				</div>
			</div>
		</div>
        <nav class="navbar-wrapper navbar-inverse navbar-fixed-bottom">
        <div class="container-fluid">
            <p class="navbar-text pull-left">&copy; Sparks Foundation Bank. All rights reserved.</p>

	</body>
</html>