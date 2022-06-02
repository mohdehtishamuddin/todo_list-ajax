/* Basic Style */

body {
	background: #fff;
	color: #333;
	font-family: Lato, sans-serif;
	background-color:#e4e4e4;
}

.container {
	display: block;
	width: 400px;
	margin: 10px auto 100px;
	background-color:#fff;
	padding:0px 10px 10px 10px;
	border-radius:10px
}

h2 {
	text-align:center;
	padding-top:10px;
	margin-bottom:0px;
}

ul {
	margin: 0;
	padding: 0;
}

li * {
	float: left;
}

li,
h3 {
	clear: both;
	list-style: none;
}

input,
button {
	outline: none;
}

button {
	background: none;
	border: 0px;
	color: #888;
	font-size: 15px;
	width: 60px;
	margin: 10px 0 0;
	font-family: Lato, sans-serif;
	cursor: pointer;
}

button:hover {
	color: #333;
}


/* Heading */

h3,
label[for='new-task'] {
	color: #333;
	font-weight: 700;
	font-size: 15px;
	border-bottom: 2px solid #333;
	padding: 20px 0 10px;
	margin: 0;
	text-transform: uppercase;
}

input[type="text"] {
	margin: 0;
	font-size: 18px;
	line-height: 18px;
	height: 18px;
	padding: 10px;
	border: 1px solid #ddd;
	background: #fff;
	border-radius: 6px;
	font-family: Lato, sans-serif;
	color: #888;
}

input[type="text"]:focus {
	color: #333;
}


/* New Task */

label[for='new-task'] {
	display: block;
	margin: 0 0 20px;
}

input#new-task {
	float: left;
	width: 318px;
}

p > button:hover {
	color: #0FC57C;
}


/* Task list */

li {
	overflow: hidden;
	padding: 20px 0;
	border-bottom: 1px solid #eee;
}

li > input[type="checkbox"] {
	margin: 0 10px;
	position: relative;
	top: 15px;
}

li > label {
	font-size: 18px;
	line-height: 40px;
	width: 237px;
	padding: 0 0 0 11px;
}

li > input[type="text"] {
	width: 226px;
}

li > .delete:hover {
	color: #CF2323;
}


/* Completed */

#completed-tasks label {
	text-decoration: line-through;
	color: #888;
}


/* Edit Task */

ul li input[type=text] {
	display: none;
}

ul li.editMode input[type=text] {
	display: block;
}

ul li.editMode label {
	display: none;
}