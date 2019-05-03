<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Document</title>
</head>
<body>
<style>
    body{
        background: #0d1521;
        font-family: tahoma;
        color: #989898;
    }

    #todo-table{
        position: relative;
        width: 95%;
        background: #090d13;
        margin: 50px auto;
        padding: 20px;
        box-sizing: border-box;
    }

    #todo-table form:after{
        margin: 0;
        content: '';
        display: block;
        clear: both;
    }

    input[type="text"]{
        width: 70%;
        padding: 20px;
        background:#181c22;
        border: 0;
        float: left;
        font-size: 20px;
        color: #989898;
    }

    button{
        padding: 20px;
        width: 30%;
        float: left;
        background: #23282e;
        border: 0;
        box-sizing: border-box;
        color: #fff;
        cursor: pointer;
        font-size: 20px;
    }

    ul{
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    li{
        width: 100%;
        padding: 20px;
        box-sizing: border-box;
        font-family: arial;
        font-size: 20px;
        cursor: pointer;
        letter-spacing: 1px;
    }

    li:hover{
        text-decoration: line-through;
        background: rgba(0,0,0,0.2);
    }

    h1{
        background: url(/logo.png) no-repeat center;
        margin-bottom: 0;
        text-indent: -10000px;
    }
</style>
<nav>
   <a href="{{route("todo.create")}}">Add Items</a>
    <a href="{{route("todo.index")}}">Show Items</a>
</nav>

    @yield("content")
</body>
<script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>

<script src="js/js.js"></script>

</html>