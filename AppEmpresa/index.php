<!DOCTYPE html> 
<html> 
<head> 
    <title>Taller el Gato - Inicio de Sesión</title> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
>     <style>         body {             background-color: beige;             color: blue; 
        } 
    </style> 
</head> 
<body> 
    <div class="container mt-5"> 
        <h1 class="text-center mb-4">Taller el Gato</h1> 
        <form action="login.php" method="post"> 
            <div class="form-group"> 
                <label for="username">Nombre de Usuario:</label>                 <input type="text" class="form-control" id="username" name="username" required> 
            </div> 
            <div class="form-group"> 
                <label for="password">Password:</label> 
                <input type="password" class="form-control" id="password" name="password" required> 
            </div> 
            <button type="submit" class="btn btn-primary">Ingresar</button> 
            
        </form> 
         
    </div> 
</body> 
</html> 
