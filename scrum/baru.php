<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Scrum Board</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/index.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="baru1.php">Scrum Board</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="baru.php">Input<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="board.php">Table</a>
          </li>
      </div>
    </nav>

    <div class="container-fluid">
 <form class="form-horizontal" method="post" action="board1.php">
  <!-- input story 1 and task -->
			<div class="form-group">
				<label class="control-label col-sm-1" for="story1">Story 1</label>
				<div class="col-sm-12">
					<input type="text" class="form-control" name="story1">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-1" for="sprint1">Sprint</label>
				<div class="col-sm-12">
					<input type="text" class="form-control" name="sprint1">
				</div>
				<div>
      <div class="form-group">
				<label class="control-label col-sm-1" for="task11">Task 1.1</label>
				<div class="col-sm-12">
					<input type="text" class="form-control" name="task11">
				</div>
			</div>
      <div class="form-group">
				<label class="control-label col-sm-1" for="task12">Task 1.2</label>
				<div class="col-sm-12">
					<input type="text" class="form-control" name="task12">
				</div>
			</div>
      <!-- input story 2 and task -->
			<div class="form-group">
				<label class="control-label col-sm-1" for="story2">Story 2</label>
				<div class="col-sm-12">
					<input type="text" class="form-control" name="story2">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-1" for="sprint1">Sprint</label>
				<div class="col-sm-12">
					<input type="text" class="form-control" name="sprint2">
				</div>
				<div>
      <div class="form-group">
				<label class="control-label col-sm-1" for="task21">Task 2.1</label>
				<div class="col-sm-12">
					<input type="text" class="form-control" name="task21">
				</div>
			</div>
      <div class="form-group">
				<label class="control-label col-sm-1" for="task22">Task 2.2</label>
				<div class="col-sm-12">
					<input type="text" class="form-control" name="task22">
				</div>
            </div>
      <!-- input story 3 and task -->
			<div class="form-group">
				<label class="control-label col-sm-1" for="story3">Story 3</label>
				<div class="col-sm-12">
					<input type="text" class="form-control" name="story3">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-1" for="sprint1">Sprint</label>
				<div class="col-sm-12">
					<input type="text" class="form-control" name="sprint3">
				</div>
				<div>
      <div class="form-group">
				<label class="control-label col-sm-1" for="task31">Task 3.1</label>
				<div class="col-sm-12">
					<input type="text" class="form-control" name="task31">
				</div>
			</div>
      <div class="form-group">
				<label class="control-label col-sm-1" for="task32">Task 3.2</label>
				<div class="col-sm-12">
					<input type="text" class="form-control" name="task32">
				</div>
            </div>
            <button type="submit" class="btn btn-danger">Save</button>
      <button type="reset" class="btn btn-danger">Reset</button>
</form>
<br/>
<br>
<p id="demo">Last Modified : </p>
<script>	


        document.getElementById("demo").innerHTML = document.lastModified;
	
	</script>
  </body>
</html>
