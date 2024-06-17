<?php
$conexion=mysqli_connect("localhost","root","","astronomia");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Betelgeuse</title>
    <style>
       body {
            background-color: #1a1a1a;
            color: #e0e0e0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            background-color: #333;
            padding: 20px 0;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 36px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        main {
            padding: 20px;
            text-align: justify;
        }

        section {
            margin-bottom: 30px;
        }

        section h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        section p {
            line-height: 1.6;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            background-color: #444;
        }

        table,
        th,
        td {
            border: 1px solid #555;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
        }

        caption {
            font-weight: bold;
            margin-bottom: 10px;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        ul li {
            margin-bottom: 5px;
        }

        footer {
            background-color: #333;
            padding: 10px 0;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        footer p {
            margin: 0;
        }

        a {
            color: #4CAF50;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        figure {
            margin: 0;
            text-align: center;
        }

        figcaption {
            font-style: italic;
            font-size: 14px;
            margin-top: 5px;
        }

        form {
            margin-top: 30px;
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        form .form-group {
            flex: 1;
            min-width: 250px;
        }

        input[type="text"],
        input[type="email"],
        input[type="number"],
        textarea,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #888;
            border-radius: 5px;
            background-color: #333;
            color: #fff;
        }

        .buttons {
            display: flex;
            gap: 10px;
        }

        .buttons input[type="submit"],
        .buttons input[type="reset"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            flex: 1;
        }

        .buttons input[type="reset"] {
            background-color: #e74c3c;
        }

        .buttons input[type="submit"]:hover {
            background-color: #45a049;
        }

        .buttons input[type="reset"]:hover {
            background-color: #c0392b;
        }

        .nav-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .nav-buttons a {
            color: #4CAF50;
            font-size: 24px;
            text-decoration: none;
        }

        .form-image {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>

<body>
    <button class="close-button" onclick="goHome()">×</button>
    <header>
        <h1>Betelgeuse</h1>
    </header>

    <main>
        <section>
            <h2>¿Qué es?</h2>
            <p>Betelgeuse, también conocida como α Orionis, es una de las estrellas más brillantes del cielo nocturno y parte de la constelación de Orión. Es una supergigante roja que está en una fase avanzada de su evolución.</p>
            <figure>
                <img src="Betelgeuse.gif" alt="Betelgeuse GIF">
                <figcaption>Imagen animada de Betelgeuse</figcaption>
            </figure>
        </section>

        <section>
            <h2>Características</h2>
            <ul>
                <li>Tipo de estrella: Supergigante roja</li>
                <li>Distancia a la Tierra: Aproximadamente 642.5 años luz</li>
                <li>Radio: Aproximadamente 1,000 veces el del Sol</li>
                <li>Luminosidad: Aproximadamente 100,000 veces la del Sol</li>
            </ul>
        </section>

        <section>
            <h2>¿Sabías qué..?</h2>
            <p>Betelgeuse es tan grande que si estuviera en el centro de nuestro sistema solar, se extendería más allá de la órbita de Marte e incluso podría llegar a la de Júpiter. Su tamaño y la cantidad de energía que emite la hacen una de las estrellas más interesantes para los astrónomos.</p>
        </section>

        <section>
            <center><h2>Datos de Betelgeuse</h2></center>
            <table>
                    <tr>
                        <th>Dato</th>
                        <th>Descripción</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tipo de estrella</td>
                        <td>Supergigante roja</td>
                    </tr>
                    <tr>
                        <td>Distancia a la Tierra</td>
                        <td>642.5 años luz</td>
                    </tr>
                    <tr>
                        <td>Radio</td>
                        <td>1,000 veces el del Sol</td>
                    </tr>
                    <tr>
                        <td>Luminosidad</td>
                        <td>100,000 veces la del Sol</td>
                    </tr>
                    <tr>
                        <td>Temperatura superficial</td>
                        <td>Aproximadamente 3,500 K</td>
                    </tr>
                    <tr>
                        <td>Audio</td>
                        <td><audio controls>
                            <source src="Betelgeuse.mpeg" type="audio/mpeg">
                            Tu navegador no soporta el elemento de audio.
                        </audio></td>
                    </tr>
                    <tr>
                        <td>Video</td>
                        <td><video controls>
                            <source src="Betelgeuse.mp4" type="video/mp4">
                            Tu navegador no soporta el elemento de video.
                        </video></td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section>
            <form action="#" method="post">
                <div class="form-group">
                    <h2>Formulario sobre Betelgeuse</h2>
                    <label for="nombre">Nombre:</label><br>
                    <input type="text" id="nombre" name="nombre" required><br>
                    <label for="email">Correo electrónico:</label><br>
                    <input type="email" id="email" name="email" required><br>
                    <label for="mensaje">Mensaje:</label><br>
                    <textarea id="mensaje" name="mensaje" rows="4" required></textarea><br>
                    <label for="edad">Edad:</label><br>
                    <input type="number" id="edad" name="edad" min="1" max="120" required><br>
                    <label for="pais">País:</label><br>
                    <select id="pais" name="pais" required>
                        <option value="Argentina">Argentina</option>
                        <option value="España">España</option>
                        <option value="México">México</option>
                        <option value="Otros">Otros</option>
                    </select><br>
                    <label for="interes">Interés en Betelgeuse:</label><br>
                    <input type="radio" id="si" name="interes" value="si" required>
                    <label for="si">Sí</label>
                    <input type="radio" id="no" name="interes" value="no" required>
                    <label for="no">No</label><br>
                    <div class="buttons">
                        <input type="submit" value="Enviar" name="Enviar">
                        <input type="reset" value="Borrar" name="Borrar">
                    </div>
                </div>
                <div class="form-group">
                    <img src="Betelgeuse.jpg" alt="Imagen relacionada con Mercurio" class="form-image">
                </div>
                <ul>
        <li><a href="https://www.nationalgeographicla.com/espacio/2022/11/que-esta-ocurriendo-con-la-estrella-betelgeuse">Ir a otra página sobre Betelgeuse</a></li>
    </ul>
    </form>
    <script>
        function goHome() {
            window.location.href = "about.php"; 
        }
    </script>
    <?php
if(isset($_POST["Enviar"])){
            $nombre=$_POST["nombre"];
            $email=$_POST["email"];
            $mensaje=$_POST["mensaje"];
            $edad=$_POST["edad"];
            $pais=$_POST["pais"];
            $interes=$_POST["interes"];
            $consulta= "INSERT INTO betelgeuse(nombre,email,mensaje,edad,pais,interes) 
            VALUES ('$nombre','$email','$mensaje','$edad','$pais','$interes')";
            $result= mysqli_query($conexion,$consulta);
}
?>
</section>

    </main>

    <footer>
        <p>&copy; 2024 Alshat</p>
    </footer>
</body>

</html>
