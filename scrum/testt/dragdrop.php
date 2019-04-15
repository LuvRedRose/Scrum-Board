<!DOCTYPE html>
<html>
    <head>
        <title>Index</title>
        <link href ="css/jquery-ui.css" rel = "stylesheet">
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery-ui.js"></script>
        <style>
            /* story 1 */
        #task1 {
                        width: 230px; height: 50px; padding: 0.5em; float: center;  
                        background-color: darkcyan;
                        }
        #task2      {
                        width: 230px;
                        height: 50px;
                        padding: 0.5em;
                        float: center;
                        background-color:darkcyan;
        }
        #droptask1 {
                        width: 230px; height: 50px;padding: 0.5em; float: center;
                        opacity: 30%;
                        }
        #droptask2 {   
                        width: 230px;
                        height: 50px;
                        padding: 0.5em;
                        float: center;
        }
        /*story 2 */

        #task21 {       width: 230px;
                        height: 50px;
                        padding: 0.5em;
                        float: center;
                        background-color:fuchsia;  }
        #task22 {       width: 230px;
                        height: 50px;
                        padding: 0.5em;
                        float: center;
                        background-color:fuchsia;  }
        #droptask21 {
                        width: 230px;
                        height: 50px;
                        padding: 0.5em;
                        float: center;
        }
        #droptask22 {
                        width: 230px;
                        height: 50px;
                        padding: 0.5em;
                        float: center;
        }
        </style>
        <script>
        $(function() {
        $( "#task1" ).draggable();
        $(  "#task2").draggable();
        $("#task21").draggable();
        $("#task22").draggable();
        $( "#droptask1" ).droppable();
        $("#droptask2").droppable();
        $("#droptask21").droppable();
        $("#droptask22").droppable();
        });
    </script>
    </head>
    <body>
        <table border="1">
            <tr>
                <td width="250px">Story</td>
                <td width="250px"></td>
                <td width="250px"></td>
                <td width="250px"></td>
                <td width="250px"></td>
            </tr>
            <tr>
                <td width="250px" height="100px"></td>
                <td width="250px" height="100px">
                    <div id = "task1" class = "ui-widget-content">
                    <p><?php echo $_POST['task11']; ?></p>
                    </div>
                    <div id="task2" class="ui-widget-content">
                    </div>
                </td>
                <td width="250px" height="100px">
                    <div id = "droptask1" class = "ui-widget-header">
                    <p>Drop here</p>
                    </div>
                    <div id="droptask2" class="ui-widget-header">
                        <p>drop here!</p>
                    </div>
                </td>
                <td width="250px" height="100px">
                        <div id = "droptask1" class = "ui-widget-header">
                        <p>Drop here</p>
                        </div>
                        <div id="droptask2" class="ui-widget-header">
                            <p>drop here!</p>
                        </div>
                    </td>
                    <td width="250px" height="100px">
                            <div id = "droptask1" class = "ui-widget-header">
                            <p>Drop here</p>
                            </div>
                            <div id="droptask2" class="ui-widget-header">
                                <p>drop here!</p>
                            </div>
                        </td>
            </tr>
            <tr>
                    <td></td>
                    <td width="250px" height="100px">
                            <div id = "task21" class = "ui-widget-content">
                            <p>Drag me to my target</p>
                            </div>
                            <div id="task22" class="ui-widget-content">
                            </div>
                        </td>
                        <td width="250px" height="100px">
                                <div id = "droptask21" class = "ui-widget-header">
                                <p>Drop here</p>
                                </div>
                                <div id="droptask22" class="ui-widget-header">
                                    <p>drop here!</p>
                                </div>
                            </td>
                            <td width="250px" height="100px">
                                    <div id = "droptask1" class = "ui-widget-header">
                                    <p>Drop here</p>
                                    </div>
                                    <div id="droptask2" class="ui-widget-header">
                                        <p>drop here!</p>
                                    </div>
                                </td>
                                <td width="250px" height="100px">
                                        <div id = "droptask1" class = "ui-widget-header">
                                        <p>Drop here</p>
                                        </div>
                                        <div id="droptask2" class="ui-widget-header">
                                            <p>drop here!</p>
                                        </div>
                                    </td>
            </tr>
            <tr>
                    
            </tr>
        </table>
    </body>
</html>