<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acerca de</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            color: white;
            overflow-y: auto; /* Permite el desplazamiento vertical */
            height: 100vh; /* Asegura que el body tome la altura completa de la ventana */
        }
        .background-video {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            z-index: -1;
        }
        .content {
            position: relative;
            z-index: 1;
            padding: 20px;
            padding-bottom: 200px; /* Espacio adicional al final para permitir el desplazamiento completo */
        }
        .dropdown-container {
            display: flex;
            justify-content: space-around; 
            margin-top: 20px;
        }
        .dropdown {
            position: relative;
            display: inline-block;
            margin-right: 20px;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            z-index: 1;
        }
        .dropdown:hover .dropdown-content {
            display: block;
        }
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }
        h2 {
            color: rgba(255, 251, 251, 0.507);
        }
        .centered {
            text-align: center;
            margin: 20px 0;
        }
        .content-section {
            margin: 20px 0;
        }
        .content-section h2 {
            color: white;
        }
        .content-section p {
            color: #9932CC;
            font-size: 1em;
            text-align: right;
            margin-right: 20px;
        }
        .content-section ul, .content-section ol {
            margin-left: 40px;
        }
        hr {
            border: 1px solid white;
            margin: 20px 0;
        }

    }
        .close-button {
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: #fff;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            padding: 0.5rem 1rem;
            border-radius: 50%;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .close-button:hover {
            background-color: #ccc;
        }

    </style>
</head>
<body>

       <button class="close-button" onclick="goHome()">×</button>
       
    <video class="background-video" autoplay muted loop>
        <source src="Planetas.mp4" type="video/mp4">
    </video>
    <audio autoplay loop>
        <source src="industrial-pulse-drone-27456.mp3" type="audio/mp3">
    </audio>

    <div class="content">
        <h2>Vamos a aprender sobre la astronomía empezando por:</h2>
        <div class="dropdown-container">
            <div class="dropdown">
                <button>Planetas</button>
                <div class="dropdown-content">
                    <a href="Mer.php">Mercurio</a>
                    <a href="Venus.php">Venus</a>
                    <a href="Tierra.php">Tierra</a>
                    <a href="Marte.php">Marte</a>
                    <a href="Jupiter.php">Júpiter</a>
                    <a href="Saturno.php">Saturno</a>
                    <a href="Urano.php">Urano</a>
                    <a href="Neptuno.php">Neptuno</a>
                    <a href="Luna.php">Luna</a>
                </div>
            </div>
            <div class="dropdown">
                <button>Estrellas</button>
                <div class="dropdown-content">
                    <a href="Sol.php">Sol</a>
                    <a href="Sirio.php">Sirio (α Canis Majoris)</a>
                    <a href="Betelgeuse.php">Betelgeuse (α Orionis)</a>
                    <a href="Rigel ( Orionis).php">Rigel (β Orionis)</a>
                    <a href="Proxima centauri.php">Próxima Centauri</a>
                </div>
            </div>
            <div class="dropdown">
                <button>Galaxias</button>
                <div class="dropdown-content">
                    <a href="Vía Láctea.php">Vía Láctea</a>
                    <a href="Galaxia de Andrómeda (M31).php">Galaxia de Andrómeda</a>
                    <a href="Galaxia del Sombrero.php">Galaxia Sombrero</a>
                    <a href="Galaxia del Triángulo.php">Galaxia del Triángulo</a>
                    <a href="Galaxia de Antenas.php">Galaxia Antenas</a>
                </div>
            </div>
            <div class="dropdown">
                <button>Cometas</button>
                <div class="dropdown-content">
                    <a href="Cometa Halley.php">Cometa Halley</a>
                    <a href="Cometa Hale-Bopp.php">Cometa Hale-Bopp</a>
                    <a href="Cometa encke.php">Cometa Encke</a>
                    <a href="Cometa 67P.php">Cometa 67P/Churyumov-Gerasimenko</a>
                    <a href="Cometa Hyakutake.php">Cometa Hyakutake</a>
                </div>
            </div>
            <div class="dropdown">
                <button>Asteroides</button>
                <div class="dropdown-content">
                    <a href="Ceres.php">Ceres</a>
                    <a href="Vesta.php">Vesta</a>
                    <a href="Eros.php">Eros</a>
                    <a href="Itokawa.php">Itokawa</a>
                    <a href="Apophis.php">Apophis</a>
                </div>
            </div>
        </div>

        <div class="centered">
            <h2>¿Te gustaría escuchar cómo suenan?</h2>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/Qnwmj-7Eqmg?si=wc9s1qG_q6uh6vn7" frameborder="0" allowfullscreen></iframe>
        </div>

        <hr>

        <div class="content-section">
            <h2>GALAXIAS</h2>
            <p>Las galaxias son enormes sistemas de estrellas, gas, polvo y materia oscura, todos unidos por la gravedad. Forman estructuras en el universo y pueden contener desde millones hasta billones de estrellas. Las galaxias se agrupan en cúmulos y supercúmulos, y están distribuidas por todo el cosmos. Tipos de Galaxias:</p>
            <ul>
                <li>Espirales: Tienen brazos espirales que se extienden desde un núcleo central. Ejemplo: Vía Láctea.</li>
                <li>Elípticas: Tienen formas redondeadas o elípticas y contienen estrellas viejas. Ejemplo: M87.</li>
                <li>Lenticulares: Tienen un disco como las espirales pero sin brazos prominentes. Ejemplo: NGC 2787.</li>
                <li>Irregulares: No tienen una forma definida y a menudo resultan de interacciones gravitacionales. Ejemplo: Gran Nube de Magallanes.</li>
            </ul>
        </div>

        <hr>

        <div class="content-section">
            <h2>Tipos de Estrellas</h2>
            <p>Las estrellas son enormes bolas de gas caliente, principalmente hidrógeno y helio, que generan energía a través de la fusión nuclear en sus núcleos. Tipos de Estrellas:</p>
            <ol>
                <li>Enanas Rojas: Estrellas pequeñas y frías, con una larga vida.</li>
                <li>Estrellas de Secuencia Principal: Estrellas que están fusionando hidrógeno en helio en sus núcleos, como nuestro Sol.</li>
                <li>Gigantes y Supergigantes: Estrellas más grandes y luminosas en etapas avanzadas de su evolución.</li>
                <li>Enanas Blancas: Restos estelares de estrellas de masa baja a media después de haber agotado su combustible nuclear.</li>
                <li>Estrellas de Neutrones y Agujeros Negros: Restos compactos de estrellas masivas después de supernovas.</li>
            </ol>
        </div>

        <hr>

        <div class="content-section">
            <h2>Tipos de Cometas</h2>
            <p>Los cometas son cuerpos celestes compuestos principalmente de hielo, polvo y roca que orbitan alrededor del Sol en trayectorias elípticas. Cuando se acercan al Sol, el calor provoca la sublimación del hielo, creando una atmósfera difusa llamada coma y, a menudo, una cola que siempre apunta en dirección opuesta al Sol debido a la presión del viento solar y la radiación.</p>
            <ul>
                <li>Cometas de período corto: Orbitan el Sol en menos de 200 años. Ejemplo: Cometa Halley.</li>
                <li>Cometas de período largo: Tienen órbitas que superan los 200 años. Ejemplo: Cometa Hale-Bopp.</li>
                <li>Cometas de período intermedio: Tienen órbitas entre los cometas de período corto y largo. Ejemplo: Cometa Chiron.</li>
                <li>Cometas de la familia de Júpiter: Influenciados gravitacionalmente por Júpiter, tienen períodos cortos. Ejemplo: Cometa 67P/Churyumov-Gerasimenko.</li>
            </ul>
        </div>

        <hr>

        <div class="content-section">
            <h2>Tipos de Asteroides</h2>
            <p>Los asteroides son cuerpos rocosos y metálicos que orbitan el Sol, principalmente en el cinturón de asteroides entre Marte y Júpiter. A diferencia de los cometas, los asteroides no tienen coma ni cola visible porque no contienen cantidades significativas de hielo que puedan sublimarse.</p>
            <ol>
                <li>Asteroides de tipo C (Carbonáceos): Ricos en carbono y materiales orgánicos, son los más comunes y representan alrededor del 75% de los asteroides conocidos.</li>
                <li>Asteroides de tipo S (Silíceos): Compuestos principalmente de silicato y hierro, representan alrededor del 17% de los asteroides.</li>
                <li>Asteroides de tipo M (Metálicos): Compuestos en su mayoría de metales como el hierro y el níquel, representan alrededor del 8% de los asteroides.</li>
            </ol>
        </div>

        <style>
            body {
                font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
                background-color: #f7eeee;
                margin: 20px;
            }
            table {
                width: 100%;
                border-collapse: collapse;
                margin-bottom: 20px;
            }
            th, td {
                border: 1px solid #000000;
                text-align: left;
                padding: 8px;
            }
            th {
                background-color: #353ee2;
                color: white;
            }
            tr:nth-child(even) {
                background-color: #969191f5;
            }
            h2 {
                color: #725e5e;
            }

       

        </style>
    </head>
    <body>
    

        <audio autoplay loop>
            <source src="industrial-pulse-drone-27456.mp3" type="audio/mp3">
        </audio>
    
    <h1>Tablas de Astronomía</h1>
    
    <h2>Tabla de Estrellas Más Cercanas a la Tierra</h2>
    <table>
        <tr>
            <th>Estrella</th>
            <th>Distancia (años luz)</th>
            <th>Tipo Espectral</th>
            <th>Magnitud Aparente</th>
        </tr>
        <tr>
            <td>Sol</td>
            <td>0.0000158</td>
            <td>G2V</td>
            <td>-26.74</td>
        </tr>
        <tr>
            <td>Proxima Centauri</td>
            <td>4.24</td>
            <td>M5.5V</td>
            <td>11.05</td>
        </tr>
        <tr>
            <td>Alpha Centauri A</td>
            <td>4.37</td>
            <td>G2V</td>
            <td>0.01</td>
        </tr>
        <tr>
            <td>Alpha Centauri B</td>
            <td>4.37</td>
            <td>K1V</td>
            <td>1.33</td>
        </tr>
    </table>
    
    <h2>Tabla de Fases de la Luna</h2>
    <table>
        <tr>
            <th>Fecha</th>
            <th>Fase Lunar</th>
        </tr>
        <tr>
            <td>1 de Mayo</td>
            <td>Luna Llena</td>
        </tr>
        <tr>
            <td>8 de Mayo</td>
            <td>Cuarto Menguante</td>
        </tr>
        <tr>
            <td>15 de Mayo</td>
            <td>Luna Nueva</td>
        </tr>
        <tr>
            <td>22 de Mayo</td>
            <td>Cuarto Creciente</td>
        </tr>
    </table>
    
    <h2>Tabla de Misiones Espaciales</h2>
    <table>
        <tr>
            <th>Misión</th>
            <th>Fecha de Lanzamiento</th>
            <th>Objetivo</th>
            <th>Resultado</th>
        </tr>
        <tr>
            <td>Apollo 11</td>
            <td>16 de Julio de 1969</td>
            <td>Primer alunizaje tripulado</td>
            <td>Éxito</td>
        </tr>
        <tr>
            <td>Voyager 1</td>
            <td>5 de Septiembre de 1977</td>
            <td>Exploración del Sistema Solar exterior</td>
            <td>En curso</td>
        </tr>
        <tr>
            <td>Curiosity</td>
            <td>26 de Noviembre de 2011</td>
            <td>Exploración de Marte</td>
            <td>En curso</td>
        </tr>
    </table>
    
    <h2>Tabla de Constelaciones</h2>
    <table>
        <tr>
            <th>Constelación</th>
            <th>Estrella Más Brillante</th>
            <th>Magnitud</th>
            <th>Mitología</th>
        </tr>
        <tr>
            <td>Orión</td>
            <td>Rigel</td>
            <td>0.18</td>
            <td>El cazador</td>
        </tr>
        <tr>
            <td>Canis Major</td>
            <td>Sirius</td>
            <td>-1.46</td>
            <td>El perro mayor</td>
        </tr>
        <tr>
            <td>Taurus</td>
            <td>Aldebarán</td>
            <td>0.87</td>
            <td>El toro</td>
        </tr>
    </table>
    
    <h2>Tabla de Galaxias</h2>
    <table>
        <tr>
            <th>Galaxia</th>
            <th>Tipo</th>
            <th>Distancia (millones de años luz)</th>
            <th>Diámetro (años luz)</th>
        </tr>
        <tr>
            <td>Vía Láctea</td>
            <td>Espiral</td>
            <td>0</td>
            <td>100,000</td>
        </tr>
        <tr>
            <td>Andrómeda</td>
            <td>Espiral</td>
            <td>2.537</td>
            <td>220,000</td>
        </tr>
        <tr>
            <td>Triángulo</td>
            <td>Espiral</td>
            <td>3</td>
            <td>60,000</td>
        </tr>
    </table>
    
    <h2>Tabla de Cometas</h2>
    <table>
        <tr>
            <th>Cometa</th>
            <th>Período Orbital (años)</th>
            <th>Diámetro (km)</th>
            <th>Última Aparición</th>
        </tr>
        <tr>
            <td>Halley</td>
            <td>75-76</td>
            <td>11</td>
            <td>1986</td>
        </tr>
        <tr>
            <td>Hale-Bopp</td>
            <td>~2533</td>
            <td>60</td>
            <td>1997</td>
        </tr>
        <tr>
            <td>Encke</td>
            <td>3.3</td>
            <td>4.8</td>
            <td>2017</td>
        </tr>
    </table>
    
    <h2>Tabla de Asteroides</h2>
    <table>
        <tr>
            <th>Asteroide</th>
            <th>Diámetro (km)</th>
            <th>Órbita</th>
            <th>Descubrimiento</th>
        </tr>
        <tr>
            <td>Ceres</td>
            <td>939</td>
            <td>Cinturón de asteroides</td>
            <td>1801</td>
        </tr>
        <tr>
            <td>Vesta</td>
            <td>525</td>
            <td>Cinturón de asteroides</td>
            <td>1807</td>
        </tr>
        <tr>
            <td>Pallas</td>
            <td>512</td>
            <td>Cinturón de asteroides</td>
            <td>1802</td>
        </tr>
    </table>
    
    </body>
        
            
            <div class="content-section">
                <h2>Imágenes de Galaxias</h2>
                <img src="Via lacteaa.jpg" alt="Vía Láctea" width="300">
                <img src="Galaxia de Andrómeda (M31).jpg" alt="Galaxia de Andrómeda" width="300">
            </div>
        
            <div class="content-section">
                <h2>Explora más sobre las Galaxias</h2>
                <p>Para obtener más información, visita nuestra <a href="Galaxias.php">página de galaxias</a>.</p>
            </div>
        </div>
        
        <hr>

        <a href="content.php">
            <center><img src="Gif.gif" alt="GIF"></center>
        </a>
    </div>

<script>
        function goHome() {
            window.location.href = "content.php"; 
        }
    </script>

</body>
</html>
