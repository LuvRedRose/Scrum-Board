
        $(function() {
        $( "#task1" ).draggable();
        $(  "#task2").draggable();
        $("#task21").draggable();
        $("#task22").draggable();
        $("#task31").draggable();
        $("#task32").draggable();
        $( "#droptask1" ).droppable();
        $("#droptask2").droppable();
        $("#droptask21").droppable();
        $("#droptask22").droppable();
        $("#droptask31").droppable();
        $("#droptask32").droppable({
            drop: function(event,ui){
                $(this)
                    .addClass("ui-state-highlight")
                    .find("p")
                    .html("Dropped");
            }
        });
        });