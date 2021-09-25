<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <style>
        header{
            border: 1px solid lightskyblue;
            background-color: lightskyblue;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-family: sans-serif;
            padding: 0 2rem;
        }
        header h2{
            font-size: 15px;
        }
        header .link{
            position: relative;
        }
        header .link ul{
            display: block;
            list-style: none;
        }
        header .link ul li{
            display: inline-block;
            margin: 0 2px;
        }
        header .link ul li a{
            padding: 0.5rem 1rem;
            text-decoration: none;
            color: seashell; 
        }
        header .link ul li a:hover{
            background-color: rgb(209, 173, 230);
            border-radius: 4px;
        }
        body{
            padding: 0;
            margin: 0;
        }
        nav h2{
            margin:0;
        }
        nav{
            border: 1px solid rgb(8, 49, 230);
            background-color: rgb(8, 49, 230);
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-family: sans-serif;
            padding: 0 2rem;
        }
        nav .link{
            position: relative;
        }
        nav .link ul{
            display: block;
            list-style: none;
        }
        nav .link ul li{
            display: inline-block;
            margin: 0 2px;
            
        }
        nav .link ul li a{
            padding: 0.5rem 1rem;
            text-decoration: none;
            color: seashell;     
        }
        nav .link ul li a:hover{
            background-color: rgb(209, 173, 230);
            border-radius: 4px;
        }
        footer{
            width: 100%;
            height: 70vh;
            border: 1px solid rgb(24, 23, 23);
            background-color: rgb(24, 23, 23);
            color: white;
            font-family: Arial, Helvetica, sans-serif;
        }
        footer .row{
            border-bottom: 2px solid white;
            height: 250px;
            width: 80%;
            margin-left: auto;
            margin-right: auto;
            margin-top: 2%;
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            font-family: Arial, Helvetica, sans-serif;
        }
        footer .row .box{
            width: 300px;
            height: 100px;
            padding: 10px 20px;
        }
        footer .center{
            width: 80%;
            height: 150px;
            border: 1px solid red;
            margin: 5px auto;
            text-align: center;
        }
        footer .row .box p{
            margin: 2px;
            text-transform: uppercase;
        }
        footer .row .box h2{
            margin: 2px;
            font-size: 3rem;
        }
    </style>
</head>
<body>
    <header>
        <h2>Kerabari, Morang</h2>
        <div class="link">
            <ul>
                <li><a href="">Carreer</a></li>
                <li><a href="">Blog</a></li>
                <li><a href="">Content</a></li>
                <li><a href="">Result</a></li>
            </ul>
        </div>
    </header>
    <nav>
        <h2>GMES</h2>
        <div class="link">
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">About Page</a></li>
                <li><a href="">Gallery</a></li>
                <li><a href="">Events</a></li>
                <li><a href="">Facilities</a></li>
            </ul>
        </div>
    </nav>
    <footer>
        <div class="row">
            <div class="box">
                <h2>Logo</h2>
                <p>Slogon bording </p>
            </div>
            <div class="box">
                <p>Carreer</p>
                <p>Blogs</p>
                <p>Contact</p>
                <p>Exam Result</p>
            </div>
            <div class="box">
                <p>Home</p>
                <p>About Page</p>
                <p>Gallery</p>
                <p>Events</p>
                <p>Facilities</p>
            </div>
        </div>
        <div class="center">
            &copy;Copyright. All right reserved
        </div>
    </footer>
</body>
</html>