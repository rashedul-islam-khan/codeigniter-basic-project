<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title> Home Page </title>

    <style type="text/css">
        body,html{margin: 0; padding: 0;}

        body{
            background-color: #EEE;
        }
        h1,h2,h3,h4,p,a,li,ul{
            font-family: arial,sans-serif;
            color: black;
            text-decoration: none;
        }

        #nav{
            margin: 50px auto 0 auto;
            width: 1000px;
            background-color: #888;
            height: 15px;
            padding: 20px;
        }

        #nav a:hover{
            color: green;
        }

        #nav ul{
           list-style: none;
           float: left;
           margin: 0 50px; 
        }

        #nav ul li{
            display: inline;
        }

        #content{
            width: 1000px;
            min-height: 100%;
            margin: 0 auto;
            padding: 20px;
        }

        #footer{
            width: 400px;
            height: 15px;
            margin: 0 auto;
            padding: 20px;
        }
        #footer p{
            color: #777;
        }

    </style>

</head>
<body>

<div id="container">
     <div id="nav">
         <ul>
             <li><a href="#">Home</a></li>
             <li><a href="#">About</a></li>
             <li><a href="#">Contact</a></li>
         </ul>
     </div>

    <div id="content">
        <h1>Home Page</h1>
        <p>Welcome to my awesome site</p>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    </div>

    <div id="footer">
        <p> Copyright &copy; 2017 basicsite.com All rights reserved.</p>
    </div>

</div>

</body>
</html>