  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('Trying')</title>
    <link rel= "stylesheet" href="css/new2.css">
    

</head>
<body>
	</div>
    <div class="container m">
        <ul>
        <li><a href="/uts1/public/syntax"><h3>Code</h3></a></li>
            <li><a href="/uts1/public/alat"><h3>Komponent</h3></a></li>
            <li><a href="/uts1/public/project"><h3>Project</h3></a></li>
            <li><a href="/uts1/public"><h3>Beranda</h3></a></li>
            <div class="logo">
                <h1>Sensor and Transduser</h1>
            </div>
        </ul>
    </div>

    <div class="container w">
        <h2> @yield('Konten')</h2>
   
        
    </div>
    <div class="container s">
         <h3>@yield('isi')</h3>
        <center><img src="img/code sensor.png" alt="code1" width="1200px" height="auto" margin-bottom="50px"></center>

    <div class="container i">
         @yield('codingan')

        
    </div>
    
    </div>
    <div class="container footer">
    <small>Copyright &copy; 2022 - NANA</small>
    
    </div>


</body>
</html>