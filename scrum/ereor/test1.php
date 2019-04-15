<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Index</title>
     
     <!-- bootstrap core -->
     <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- custom style -->
    <link href="css/navbar.css" rel="stylesheet">

    <!-- js -->
    <script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
<!-- Navigation Bar Top -->
<nav class="navbar navbar-expand navbar-dark" style="background: #4682b4">
      <a class="navbar-brand" href="i.php">SCRUM BOARD</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample02">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="2.php">Input<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Tables</a>
          </li>
        </ul>
      </div>
    </nav>
 <!-- Form -->
 <div class="container-fluid">
 <form class="form-horizontal" method="post" action="proses.php">
  <!-- input story 1 and task -->
			<div class="form-group">
				<label class="control-label col-sm-1" for="story1">Story 1</label>
				<div class="col-sm-12">
					<input type="text" class="form-control" name="story">
				</div>
			</div>
      <div class="form-group">
				<label class="control-label col-sm-1" for="task11">Task 1.1</label>
				<div class="col-sm-12">
					<input type="text" class="form-control" name="task">
				</div>
			</div>
      <div class="form-group">
				<label class="control-label col-sm-1" for="task12">Task 1.2</label>
				<div class="col-sm-12">
					<input type="text" class="form-control" name="task1">
				</div>
			</div>
      <!-- input story 2 and task -->
			<div class="form-group">
				<label class="control-label col-sm-1" for="story2">Story 2</label>
				<div class="col-sm-12">
					<input type="text" class="form-control" name="story">
				</div>
			</div>
      <div class="form-group">
				<label class="control-label col-sm-1" for="task21">Task 2.1</label>
				<div class="col-sm-12">
					<input type="text" class="form-control" name="task">
				</div>
			</div>
      <div class="form-group">
				<label class="control-label col-sm-1" for="task22">Task 2.2</label>
				<div class="col-sm-12">
					<input type="text" class="form-control" name="task1">
				</div>
			</div>
      <!-- input story 3 and task -->
			<div class="form-group">
				<label class="control-label col-sm-1" for="story3">Story 3</label>
				<div class="col-sm-12">
					<input type="text" class="form-control" name="story">
				</div>
			</div>
      <div class="form-group">
				<label class="control-label col-sm-1" for="task31">Task 3.1</label>
				<div class="col-sm-12">
					<input type="text" class="form-control" name="task">
				</div>
			</div>
            <div class="form-group">
				<label class="control-label col-sm-1" for="task31">Task 3.2</label>
				<div class="col-sm-12">
					<input type="text" class="form-control" name="task1">
				</div>
			</div>
      <button type="submit" class="btn btn-danger">Save</button>
      <button type="reset" class="btn btn-danger">Reset</button>
				</form>
</div>

<!-- footer -->
<footer class="footer">
      <div class="container-fluid">
        <span class="text>#######33</span>
      </div>
    </footer>
</body>
</html>