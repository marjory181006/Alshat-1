<?php
$conexion=mysqli_connect("localhost","root","","astronomia");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acerca de los Asteroides</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #1a1a1a;
            color: white;
            margin: 0;
            padding: 0;
            line-height: 1.6;
        }
        header, footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
        }
        .container {
            padding: 20px;
        }
        h1, h2 {
            color: #ffcc00;
        }
        .asteroid-section {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            margin-bottom: 20px;
        }
        .asteroid-section img {
            max-width: 200px;
            margin-right: 20px;
            border-radius: 10px;
        }
        .asteroid-section p {
            flex: 1;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
        }
        th {
            background-color: #555;
        }
        a {
            color: #ffcc00;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .form-container {
            margin-top: 20px;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #ffcc00;
            color: #333;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #e6b800;
        }
    </style>
</head>
<body>
<button class="close-button" onclick="goHome()">×</button>
    
    <audio autoplay loop>
        <source src="space-adventures-orchestral-music-star-wars-style-139660.mp3" type="audio/mp3">
        Tu navegador no soporta el elemento de audio.
    </audio>

    <header>
        <h1>Acerca de los Asteroides</h1>
    </header>
    
    <div class="container">
        <h2>Información sobre los Asteroides</h2>
        
        <div class="asteroid-section">
            <img src="Asteroid Astrology_ Ceres, Pallas, Juno, Vesta & Lilith _ Astrology Answers.jpg" alt="Asteroid">
            <p><strong>Asteroides:</strong> Los asteroides son cuerpos rocosos y metálicos que orbitan alrededor del Sol, principalmente en el cinturón de asteroides entre Marte y Júpiter. Son restos de la formación del sistema solar hace miles de millones de años.</p>
        </div>
        <img src="ASTEROIDES.gif" alt="Mercurio GIF">

        <h2>Tabla Comparativa de los Asteroides</h2>
        <table>
            <thead>
                <tr>
                    <th>Asteroide</th>
                    <th>Tipo</th>
                    <th>Diámetro (km)</th>
                    <th>Composición</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Ceres</td>
                    <td>Planeta enano</td>
                    <td>940</td>
                    <td>Composición rocosa y hielo de agua</td>
                </tr>
                <tr>
                    <td>Vesta</td>
                    <td>Asteroide grande</td>
                    <td>525</td>
                    <td>Composición rocosa</td>
                </tr>
                <tr>
                    <td>Eros</td>
                    <td>Asteroide cercano a la Tierra</td>
                    <td>34.4</td>
                    <td>Composición rocosa y metálica</td>
                </tr>
                <tr>
                    <td>Itokawa</td>
                    <td>Asteroide cercano a la Tierra</td>
                    <td>0.535</td>
                    <td>Composición rocosa</td>
                </tr>
                <tr>
                    <td>Apophis</td>
                    <td>Asteroide cercano a la Tierra</td>
                    <td>0.325</td>
                    <td>Composición rocosa y metálica</td>
                </tr>
                <tr>
                        <td>Audio</td>
                        <td><audio controls>
                            <source src="ASTEROIDES.mp3" type="audio/mpeg">
                            Tu navegador no soporta el elemento de audio.
                        </audio></td>
                    </tr>
                    <tr>
                        <td>Video</td>
                        <td><video controls>
                            <source src="Asteroides.mp4" type="video/mp4">
                            Tu navegador no soporta el elemento de video.
                        </video></td>
                    </tr>
            </tbody>
        </table>

        <div class="form-container">
            <form action="" method="post">
            <h2>Formulario de Asteroides </h2>
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
                
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="interes">¿Qué tema te interesa más?</label>
                <select id="interes" name="interes" required>
                    <option value="Planetas">Planetas</option>
                    <option value="Estrellas">Estrellas</option>
                    <option value="Galaxias">Galaxias</option>
                    <option value="Asteroides">Asteroides</option>
                    <option value="Cometas">Cometas</option>
                </select>
                
                <input type="submit" value="Enviar" name="Enviar">
                <input type="reset" value="Borrar" name="Borrar">
            </form>
            <script>
        function goHome() {
            window.location.href = "content.php"; 
        }
    </script>
            <?php
                if(isset($_POST["Enviar"])){
                    $nombre=$_POST["nombre"];
                    $email=$_POST["email"];
                    $interes=$_POST["interes"];
                    $consulta= "INSERT INTO asteroides(nombre,email,interes) 
                    VALUES ('$nombre','$email','$interes')";
                    $result= mysqli_query($conexion,$consulta);
                 }
             ?>
        </div>
        


        <div class="container">
            <h2>Video sobre los Asteroides</h2>
            <div class="video-container">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/ePYzIbbifR8?si=3ekxl1KQPYXGhcu4" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    
    <footer>
        <p>&copy; 2024 Alshat</p>
    </footer>
</body>
</html>
