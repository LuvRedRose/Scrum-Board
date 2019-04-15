<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>Scrum Board</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href ="css/jquery-ui.css" rel ="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/index.css" rel="stylesheet">

    <!-- script -->
    
 <script src="js/jquery.min.js"></script>
 <script src="js/jquery-ui.js"></script>

    <!-- style div task, sprint story -->
<style>
    #task1, #task2 {
    width: 200px; 
    height: 70px;
    padding: 0.5em;
    float: center;  
    background-color: #b0e0e6;
}
/*story 2 */
#task21, #task22 {  width: 200px;
    height: 70px;
    padding: 0.5em;
    float: center;
    background-color: #87cefa;
 }

#task31, #task32 {
    width: 200px;
    height: 70px;
    padding: 0.5em;
    float: center;
    background-color: #00bfff;
}
#droptask1, #droptask2, #droptask21, #droptask22, #droptask31, #droptask32
{
width: 230px;
height: 70px;
padding: 0.5em; 
float: center;
opacity: 20%;
}
#tr {text-align: center;} 

#story {
        width : 150px ;
        height : 100px;
        padding : 0.5em;
        float: center;
        background-color: #ffe4e1;
}

</style>

  <!-- draggable and dropabble function -->
  <script>
 $(function() {
 $( "#task1, #task2").draggable({axis : "x",
                                revert: "invalid"});
 $("#task21, #task22").draggable({axis : "x",
                                revert: "invalid"});
 $("#task31, #task32").draggable({axis : "x",
                                revert: "invalid"});
 $("#droptask2, #droptask22, #droptask32").droppable();
 $( "#droptask1, #droptask21, #droptask31" ).droppable({
      accept: "#task1, #task2, #task21, #task22, #task31, #task32",
      classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
      },
      drop: function( event, ui ) {
        $( this )
          .addClass( "ui-state-highlight" )
          .find( "p" )
      }
    });
  } );
 </script>
  </head>

  <body>
 <!-- Navigation Bar Atas -->
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

    <!-- table Scrum Board --> 
    <div class="container-fluid">
    <table border="1">
        <tr style="background-color : #FAebd7;">
            <td width="150px" height="25px" style="text-align: center;">Stories</td>
            <td width="180px" height="25px" style="text-align: center;">Sprint</td>
            <td width="230px" height="25px" style="text-align: center;">Not Done</td>
            <td width="230px" height="25px" style="text-align: center;">In Progress</td>
            <td width="230px" height="25px" style="text-align: center;">Done</td>
            <td width="250px" height="25px" style="text-align: center;">Status</td> 
        </tr>
        <tr>
            <td width="150px">
                <div id="story">
                    <p><?php echo $_POST["story1"]; ?></p>
                </div>
            </td>
            <td width="180px">
                <p><?php echo $_POST["sprint1"]; ?></p>
            </td>
            <td width="180px">
                <div id = "task1" class = "ui-widget-content">
                    <p><?php echo $_POST["task11"]; ?></p>
                </div>
                <div id="task2" class="ui-widget-content">
                    <p><?php echo $_POST["task12"]; ?></p>
                </div>
            </td>
            <td width="230px">
                <div id = "droptask2" class = "ui-widget-header">
                    <p></p>
                </div>
                <div id = "droptask2" class = "ui-widget-header">
                    <p></p>
                </div>
            </td>
            <td width="230px">
                <div id="droptask1" class="ui-widget-header">
                    <p></p>
                </div>
                <div id="droptask1" class="ui-widget-header">
                    <p></p>
                </div>
            </td>
            <td width="210px">
            <button onclick="progress1()">In Prog</button>
                <button onclick="done1()">Done</button>
                <p id="story1"></p>
            </td>
        </tr>
        <tr>
            <td width="150px">
                <div id="story">
                    <p><?php echo $_POST["story2"]; ?></p>
                </div>
            </td>
            <td width="180px">
                <p><?php echo $_POST["sprint2"]; ?></p>
            </td>
            <td width="230px">
                <div id="task21" class="ui-widget-content">
                    <p><?php echo $_POST["task21"]; ?></p>
                </div>
                <div id="task22" class="ui-widget-content">
                    <p><?php echo $_POST["task22"]; ?></p>
                </div>
            </td>
            <td width="230px">
                    <div id="droptask22" class="ui-widget-header">
                            <p></p>
                    </div>
                    <div id="droptask22" class="ui-widget-header">
                            <p></p>
                        </div>
            </td>
            <td width="230px">
                    <div id="droptask21" class="ui-widget-header">
                            <p></p>
                        </div>
                    <div id="droptask21" class="ui-widget-header">
                                <p></p>
                            </div>
            </td>
            <td width="180px">
            <button onclick="progress2()">In Prog</button>
                <button onclick="done2()">Done</button>
                <p id="story2"></p>
            </td>
        </tr>
        <tr>
            <td width="150px">
            <div id="story">
                <p><?php echo $_POST["story3"]; ?></p>
            </div>
            </td>
            <td width="180px">
                <p><?php echo $_POST["sprint3"]; ?></p>
            </td>
            <td width="230px">
                <div id="task31" class="ui-widget-content">
                    <p><?php echo $_POST["task31"]; ?></p>
                </div>
                <div id="task32" class="ui-widget-content">
                    <p><?php echo $_POST["task32"]; ?></p>
                </div>
            </td>
            <td width="230px">
                    <div id="droptask32" class="ui-widget-header">
                        <p></p>
                    </div>
                    <div id="droptask32" class="ui-widget-header">
                        <p></p>
                    </div>
            </td>
            <td width="230px">
                <div id="droptask31" class="ui-widget-header">
                            <p></p>
                        </div>
                <div id="droptask31" class="ui-widget-header">
                    <p></p>
                </div>
            </td>
            <td width="210px">
            <button onclick="progress3()">In Prog</button>
                <button onclick="done3()">Done</button>
                <p id="story3"></p>
            </td>
        </tr>
    </table>
    <br/>
    <br/>
    <p id="demo">Last Modified</p>
    </div>
<br/>
<script>	

		// membuat function status
		function progress1(){
			document.getElementById("story1").innerHTML = " Story In Progress";
        }
        
        function done1(){
            document.getElementById("story1").innerHTML = "Story Completed";
        }

        function progress2(){
			document.getElementById("story2").innerHTML = "Story In Progress";
        }
        
        function done2(){
            document.getElementById("story2").innerHTML = "Story Completed";
        }
        function progress3(){
			document.getElementById("story3").innerHTML = "Story In Progress";
        }
        
        function done3(){
            document.getElementById("story3").innerHTML = "Story Completed";
        }
        document.getElementById("demo").innerHTML = document.lastModified;
	
	</script>
  </body>
</html>
