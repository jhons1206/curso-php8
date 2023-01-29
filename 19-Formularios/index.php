<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="procesar.php" method="POST" enctype="multipart/form-data">
    <label>
        Nombre:
        <input type="text" name="nombre">
    </label> 

    <br>

    <label>
        Edad:
        <input type="number" name="edad">
    </label>

    <p>Nivel Educativo:</p>

    <select name="educacion">
        <option value="Inicial">Inicial</option>
        <option value="Primaria">Primaria</option>
        <option value="Sedundaria">Sedundaria</option>
        <option value="Superior">Superior</option>
    </select>

    <br>
    <br>

    <label>
        <input type="radio" name="sexo" value="Masculino">
        Masculino:
    </label>

    <label>
        <input type="radio" name="sexo" value="Femenino">
        Femenino:
    </label>

    <br>
    <br>

    <label>
        <input type="checkbox" name="roles[]" value="Administrador">
        Administrador
    </label>

    <label>
        <input type="checkbox" name="roles[]" value="Editor">
        Editor
    </label>

    <label>
        <input type="checkbox" name="roles[]" value="Moderador">
        Moderador
    </label>

    <br>
    <br>

    <label>
        Imagen:
        <br>
        <input type="file" name="imagen">
    </label>

    <br>
    <br>

    <label>Mensaje:</label>

    <br>

    <textarea name="mensaje" cols="35" rows="8"></textarea>

    <br>

    <button type="submit">Enviar</button>



    </form>
</body>
</html>

