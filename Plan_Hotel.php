<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>

    <?php
    require('Header.php');
    
    ?>

    <div class="container container_titleimg" align="center">
        <div class="stroke_red"></div>
        <p class="name_etage" id="name_etage">Actuellement: Etage 1</p>
    </div>



    
    <div class="box_imgmap">
        <div id="point_rouge"></div>
        <img id="img_map" src="../images/planhotel.png" usemap="#image-map">
    </div>







    <map name="image-map">
        <area data-id="1"  target="" onmouseover="over(this)" onmouseout="" id="area1" alt="Chambre 1" title="Chambre 1" href="ChambreHotel//Chambre1.php" coords="103,84,75" shape="circle">
        <area data-id="2" target="" onmouseover="over(this)" onmouseout="" id="area2" alt="Chambre 2" title="Chambre 2" href="ChambreHotel//Chambre2.php" coords="319,87,71" shape="circle">
        <area data-id="3" target="" onmouseover="over(this)" onmouseout="" id="area3" alt="Chambre 3" title="Chambre 3" href="ChambreHotel//Chambre3.php" coords="531,87,74" shape="circle">
        <area data-id="4" target="" onmouseover="over(this)" onmouseout="" id="area4" alt="Chambre 4" title="Chambre 4" href="ChambreHotel//Chambre4.php" coords="745,86,75" shape="circle">
        <area data-id="5" target="" onmouseover="over(this)" onmouseout="" id="area5" alt="Chambre 5" title="Chambre 5" href="ChambreHotel//Chambre5.php" coords="965,87,73" shape="circle">
        <area data-id="6" target="" onmouseover="over(this)" onmouseout="" id="area6" alt="Chambre 6" title="Chambre 6" href="ChambreHotel//Chambre6.php" coords="111,355,71" shape="circle">
        <area data-id="7" target="" onmouseover="over(this)" onmouseout="" id="area7" alt="Chambre 7" title="Chambre 7" href="ChambreHotel//Chambre7.php" coords="325,355,74" shape="circle">
        <area data-id="8" target="" onmouseover="over(this)" onmouseout="" id="area8" alt="Chambre 8" title="Chambre 8" href="ChambreHotel//Chambre8.php" coords="542,355,75" shape="circle">
        <area data-id="9" target="" onmouseover="over(this)" onmouseout="" id="area9" alt="Chambre 9" title="Chambre 9" href="ChambreHotel//Chambre9.php" coords="763,355,77" shape="circle">
        <area data-id="10" target="" onmouseover="over(this)" onmouseout="" id="area10" alt="Chambre 10" title="Chambre 10" href="ChambreHotel//Chambre12.php" coords="110,85,75" shape="circle">
        <area data-id="11" target="" onmouseover="over(this)" onmouseout="" id="area11" alt="Chambre 11" title="Chambre 11" href="ChambreHotel//Chambre11.php" coords="320,84,73" shape="circle">
        <area data-id="12" target="" onmouseover="over(this)" onmouseout="" id="area12" alt="Chambre 12" title="Chambre 12" href="ChambreHotel//Chambre12.php" coords="533,85,74" shape="circle">
        <area data-id="13" target="" onmouseover="over(this)" onmouseout="" id="area13" alt="Chambre 13" title="Chambre 13" href="ChambreHotel//Chambre13.php" coords="742,88,69" shape="circle">
        <area data-id="14" target="" onmouseover="over(this)" onmouseout="" id="area14" alt="Chambre 14" title="Chambre 14" href="ChambreHotel//Chambre14.php" coords="951,85,72" shape="circle">
        <area data-id="15" target="" onmouseover="over(this)" onmouseout="" id="area15" alt="Chambre 15" title="Chambre 15" href="ChambreHotel//Chambre15.php" coords="107,355,75" shape="circle">
        <area data-id="16" target="" onmouseover="over(this)" onmouseout="" id="area16" alt="Chambre 16" title="Chambre 16" href="ChambreHotel//Chambre16.php" coords="329,356,72" shape="circle">

    </map>












    





    <div class="container" align="center">
        <button type="button" id="btn_imgmap" onclick="changeImage()">Etage 2</button>

    </div>




    <footer>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="/PHP/../JavaScript/script.js"></script>
    </footer>

</body>


</html>