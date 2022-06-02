<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="style.php">
    <title>PHP Ajax</title>
</head>
<body>
    <h3><a href="destroy.php">Destroy</a></h3>
<div class="container">
            <h2>TODO LIST</h2>
            <h3>Add Item</h3>
            <p>
        <input id="task" type="text"><input type="text" hidden id="setid"><button id="add">Add</button><button id="update">Update</button>
            </p>

            <h3>Todo</h3>
            <ul id="incomplete-task">
                <li><input type="checkbox"><label>Pay Bills</label><input type="text"><button id="edit" class="edit">Edit</button><button class="delete" id="delete">Delete</button></li>
                <!-- <li><input type="checkbox"><label>Go Shopping</label><input type="text" value="Go Shopping"><button class="edit">Edit</button><button class="delete">Delete</button></li> -->
            </ul>
    
            <h3>Completed</h3>
            <ul id="completed-task">
                <li><input type="checkbox" checked><label>See the Doctor</label><input type="text"><button class="edit">Edit</button><button class="delete">Delete</button></li>
            </ul>
        </div>
    <script>
        function display(data){
            $("#incomplete-task").empty();
            list = "";
            $.each(data,function(key,element){
             list+= `li
             <form action='check.php' method='POST'>
                            <input type='checkbox'class = 'chk' value='${key}' name='chk'>
                        </form>  
                        <label>${element}</label>
                        <input type = "text" hidden  id = "${key}" value = "${element}">
                        <button id='edit_${key}'class='edit'>Edit</button>
                        <button id='delete_${key}' class='delete'>Delete</button>
                        </li>;`;
            });
            $("#incomplete-task").append(list);
        }
        function complete(data){
            $("#completed-task").empty();
            list = "";
            $.each(data,function(key,element){
                list = `li
                <form action=uncheck.php method = "POST">
                <input type='checkbox'class = 'unchk' value='$key' name='unchk'>
                        </form>  
                        <label>${element}</label>
                        <input type = "text" id = "${key}" value = "${element}">
                        <button id='delete_${key}' class='delete'>Delete</button>
                        </li>;`
            });
            $("#completed-task").append(list);
        }
        </script>
</body>
</html>
 