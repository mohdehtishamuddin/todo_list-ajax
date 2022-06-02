$document.ready(function(){
    $("#update").hide();
    $('#add').click(function(){
        var addition = $("#task").val();
        $.ajax({
            type:"POST",
            url:"main.php",
            data:{val:addition,action:'add'},
            datatype:JSON,
            success: function(response){
                display(data);
            },
        }),
    });
    $(document).on("click",".delete",function(){
        var txt = this.id;
        var id = txt.split("_")[1];
        $.ajax({
            type:"POST",
            url:"main.php",
            data:{id:id,action:'delete'},
            datatype:JSON,
            success: function(response){
                display(data);
            }
        })
    })


$(document).on("click",".edit",function(){
    var x = this.id;
    var id = x.split("_")[1];
    var val = $('#{id}').val;
    $("#task").val(val);
    $("#setid").val(val);
    $("#add").hide();
    $("#update").show();
});
$("#update").click(function(){
    var task = $("#task").val();
    var id = $("#setid").val();
    $.ajax({
        type:"POST",
        url:"main.php",
        data:{ var:task, id:id,action:'update'},
        datatype:JSON,
        success: function(response){
            display(data);
        }
     });
    $("#add").show();
    $("#update").hide();
   
});
$(document).on("click",".chk",function(){
    var val = this.value;
    $.ajax({
        type:"POST",
        url: "check.php",
        data:{id:'val',action:'todo_check'},
        datatype:JSON,
        success: function(response){
            display(tododata),
            completeTask(completeTodo);
        }
    });
});
$(document).on("click",".chked",function(){
    var val = this.value;
    $.ajax({
        type:"POST",
        url:"check.php",
        data:{id:'val',action:'todo_chked'},
        datatype:JSON,
        success:function(response){
            display(completeTodo),
            completeTask(todo);
        }
    });
})
document.on("click",".compdelete",function(){
    var x = this.id;
    var id = x.split("_")[1];
    $.ajax({
        type:"POST",
        url:"uncheck.php",
        data:{id:'val',action:'todo_chked'},
        datatype:JSON,
        success:function(response){
            display(completeTodo),
            completeTask(completeTodo);
        }
    })
})
});
   