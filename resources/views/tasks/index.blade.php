<html>
<head>
    <meta charset="utf-8">
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    li {
            list-style-type: none
        }
    </style>
    <title>
        Current tasks
    </title>
</head>

<body>
<div class="array">
    <ul>
        @foreach($tasks as $task)
            <li>  <a href="tasks/{{$task->id}}">{{$task->body}}</a> </li>
        @endforeach
    </ul>
</div>
</body>
</html>