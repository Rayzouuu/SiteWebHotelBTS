<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../CSS/test_plan.css" media="screen" type="text/css" />
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" />
</head>



<body>

    <?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';

    //On établit la connexion
    $conn = new PDO("mysql:host=$servername;dbname=sitewebhotel", $username, $password);
    $test = $conn->query('SELECT `EtatChambre`FROM `chambre`');

    ?>



    <script>
        // call Ajax
        var ajax = new XMLHttpRequest();
        var method = "GET";
        var url = "data.php";
        var asynchronous = true;

        ajax.open(method, url, asynchronous);
        //Sending ajax request
        ajax.send();

        //receiving response from data.php
        ajax.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                //alert(this.responseText);
                //converting JSON back to array
                var data = JSON.parse(this.responseText);
                console.log(data); // for debbuging


                //html value <tbody>
                var html = "";
                //looping through the data 
                for (var a = 0; a < data.length; a++) {
                    var EtatChambre = data[a].EtatChambre;
                    var IDChambre = data[a].IDChambre;
                }

                if (EtatChambre == 'Fait') {

                    var aoEle = document.getElementsByName("changementcouleur");
                    if (aoEle.length > 0) {
                        for (var i = 0; i < aoEle.length; i++) {
                            aoEle[i].style['color'] = 'green';
                        }
                    }else{
                            aoEle[i].style['color'] = 'red';
                        }
                    }

                }

                document.getElementById("data").innerHTML = html;


            }
        
    </script>




























    <div class="map_container">
        <img src=../images/planhotel.png />
        <a href="../PHP/ChambreHotel//Chambre1.php">
            <div id='one' data-id="1" name="changementcouleur" class="map-marker" aria-hidden="true" alt="Chambre 1"></div>
        </a>
        <a href="../PHP/ChambreHotel//Chambre2.php">
            <div id='two' data-id="2" name="changementcouleur" class="map-marker" aria-hidden="true" alt="Chambre 2"></div>
        </a>
        <a href="../PHP/ChambreHotel//Chambre3.php">
            <div id="three" data-id="3" name="changementcouleur" class="map-marker" aria-hidden="true" alt="Chambre 3"></div>
        </a>
        <a href="../PHP/ChambreHotel//Chambre4.php">
            <div id="four" data-id="4" name="changementcouleur" class="map-marker" aria-hidden="true" alt="Chambre 4"></div>
        </a>
        <a href="../PHP/ChambreHotel//Chambre5.php">
            <div id="five" data-id="5" name="changementcouleur" class="map-marker" aria-hidden="true" alt="Chambre 5"></div>
        </a>
        <a href="../PHP/ChambreHotel//Chambre6.php">
            <div id="six" data-id="6" name="changementcouleur" class="map-marker" aria-hidden="true" alt="Chambre 6"></div>
        </a>
        <a href="../PHP/ChambreHotel//Chambre7.php">
            <div id="seven" data-id="7 " name="changementcouleur" class="map-marker" aria-hidden="true" alt="Chambre 7"></div>
        </a>
        <a href="../PHP/ChambreHotel//Chambre8.php">
            <div id="eight" data-id="8" name="changementcouleur" class="map-marker" aria-hidden="true" alt="Chambre 8"></div>
        </a>
        <a href="../PHP/ChambreHotel//Chambre9.php">
            <div id="nine" data-id="9" name="changementcouleur" class="map-marker" aria-hidden="true" alt="Chambre 9"></div>
        </a>
    </div>





    <script type='text/javascript'>
        // Pas Nettoyer //
        function myFunction1() {

            var aoEle = document.getElementsByName("changementcouleur");
            if (aoEle.length > 0) {
                for (var i = 0; i < aoEle.length; i++) {
                    aoEle[i].style['color'] = 'red';
                }
            } else {

            }
        }

        //Nettoyer //
        function myFunction2() {

            var aoEle = document.getElementsByName("changementcouleur");
            if (aoEle.length > 0) {
                for (var i = 0; i < aoEle.length; i++) {
                    aoEle[i].style['color'] = 'green';
                }
            } else {

            }
        }


        // En cours de nettoyage //
        function myFunction3() {

            var aoEle = document.getElementsByName("changementcouleur");
            if (aoEle.length > 0) {
                for (var i = 0; i < aoEle.length; i++) {
                    aoEle[i].style['color'] = 'orange';
                }
            } else {

            }
        }
    </script>


    <input type='button' value='Dis quelque chose !' onclick='go()' />



</body>


<footer>

</footer>

</html>