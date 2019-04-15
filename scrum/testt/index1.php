<!DOCTYPE html>
<html>
<head>
	<title>Scrum Board</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
 
	<div class="container-fluid">
    <div class="row" style="background: #4682b4; color: white; text-align:center">
		<h3>INPUT STORIES AND TASKS HERE</h3> 
    </div>
    <br/>
        <!-- Input Story and Task 1 -->
		<form class="form-horizontal" method="post" action="scrum.php">
			<div class="form-group">
				<label class="control-label col-sm-1" for="story1">Story 1</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="story1">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-1" for="task11">Task 1.1</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="task11">
				</div>
			</div>		
            <div class="form-group">
				<label class="control-label col-sm-1" for="task12">Task 1.2</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="task12">
				</div>
			</div>
            <div class="form-group">
				<label class="control-label col-sm-1" for="task13">Task 1.3</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="task13">
				</div>
			</div>
        <!-- Input Story and Task 1 -->
            <div class="form-group">
                <label class="control-label col-sm-1" for="story2">Story 2</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="story2">
                </div>
            </div>
            <div class="form-group">
				<label class="control-label col-sm-1" for="task21">Task 2.1</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="task21">
				</div>
			</div>
            <div class="form-group">
				<label class="control-label col-sm-1" for="task22">Task 2.2</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="task22">
				</div>
			</div>
        <!-- input story and task story 3 -->
        <div class="form-group">
				<label class="control-label col-sm-1" for="story3">Story 3</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="story3">
				</div>
			</div>
            <div class="form-group">
				<label class="control-label col-sm-1" for="task31">Task 3.1</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="task31">
				</div>
			</div>
            <div class="form-group">
				<label class="control-label col-sm-1" for="task32">Task 3.2</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="task32">
				</div>
			</div>
			<button type="submit" class="btn btn-danger">Simpan</button>
		</form><br/>		
        <div class="row" style="background: #4682b4; color: white; text-align:center">
        <div class="col-md-12">
        <p>Group Icebears</p>
        </div>
	</div>
 
</body>
</html>