


    <?php include 'header.php';?>
    
    <!-- Slideshow -->
    <div class="slideshow-container">

        <div class="mySlides fade">
            <img src="img/img-carroussel-2.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="img/img-carroussel-3.jpg" style="width:100%">
        </div>
        
        <div class="mySlides fade">
            <img src="img/img-carroussel-4.jpg" style="width:100%">
        </div>

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>

    <!-- Novidades -->
    <div class="conteiner-pequeno">
        <div class="novidades">
            <div>
                <h3>NOVIDADES</h3>
            </div>
        </div>
    </div>

    <!-- Galeria -->
    <section>
        <div class="conteiner-pequeno">
            <div class="galeria">
                <div class="box">
                    <a href="computadores/workstation-1.php"><img class="imagem" src="img/pc1.jpg" alt="Workstation DELL xzf2215"></a>
                        <p>Workstation DELL xzf2215</p>
                        <button>999,99€</button></a>
                </div>
                <div class="box">
                    <a href="computadores/portatilli320.php"><img src="img/portatil1.jpg" alt="Portátil Lenovo Ideapad 320 15.6"></a>
                    <p>Portátil Lenovo Ideapad 320 15.6</p>
                    <button>899,99€</button>
                </div>
                <div class="box">
                    <a href="redes/asusrtn12e.php"><img src="img/router1.jpg" alt="Router Asus RT-N12E"></a>
                    <p>Router Asus RT-N12E</p>
                    <button>1999,99€</button>
                </div>
                <div class="box">
                    <a href="smartphones/tplinkc5.php"><img src="img/smartphone1.jpg" alt="Smartphone TP-Link Neffos C5"></a>
                    <p>Smartphone TP-Link Neffos C5</p>
                    <button>799,99€</button>
                </div>
                <div class="box">
                    <a href="componentes/ramdimmgskill.php"><img src="img/ram1.jpg" alt="Memória RAM SO-DIMM G.SKILL"></a>
                    <p>Memória RAM SO-DIMM G.SKILL</p>
                    <button>199,99€</button>
                </div>
                <div class="box">
                    <a href="redes/switchleverone.php"><img src="img/switch1.jpg" alt="Switch LevelOne GSW-0507"></a>
                    <p>Switch LevelOne GSW-0507</p>
                    <button>699,99€</button>
                </div>
            </div>
        </div>
    </section>
    
    <div id="map"></div>
    <script>
      function initMap() {
        var uluru = {lat: 39.2332829549571, lng: -8.686999405051058};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 18,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAlF2OM-oIkqxuJlMXpFpVey30zRW_qcOc&callback=initMap">
    </script>
    
    <script src="javascript.js"></script>
    
    <?php include 'footer.php';?>

