<html xmlns="http:">
<head>
    <title>mywebsite</title>

    <link href="Style/style.css" type="text/css" rel="stylesheet"/>
</head>


<body>
    <div id="Container">
        <div id="header">
            <h1>PERTEMUAN I -- SISTEM PAKAR</h1>
        </div>
    
        <div id="sidebar">
                <h3>Navigasi</h3>
                <ul id="navmenu">
                        <li><a href="Index.php" class="selected">Profil </a></li>
                        <li><a href="?module=galeri#pos" >Galeri </a></li>
                        <li><a href="?module=jadwal#pos" >Jadwal kuliah </a></li>
                </ul>
        </div>
    
        
            <div id="page">
            <?php if(isset($_GET['module']))
            include "konten/$_GET[module].php";
            else
            include "konten/home.php";?>
            </div>
        
            <div id="clear"></div>
            <div id="footer">
                <p>&copy; 2020</p>
            </div>
    </div>
</body>
</html>