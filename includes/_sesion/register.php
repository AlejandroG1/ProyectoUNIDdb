<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/login.css">
    
    <title>Document</title>
</head>
<body>
    <form>
    <input type="text" name="user" id="user" value="null" class="user">
        <input type="text" name="estado" id="estado" value="null" class="user">
        <div id="registro">
            <div class="container">
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column"  class="col-md-4">
                        <div id="login-box">
                            <div id="login-form" class="form">
                        <h3 class="text-center">REGISTRO</h3>
                        <div class="form-group">
                            <label for="usuario">Usuario:</label>
                            <input type="text" name="usuario" id="usuario" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña:</label>
                            <input type="password" name="password" id="password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Repetir contraseña:</label>
                            <input type="password" name="password2" id="password2" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <button type="button" id="btnSubmit" class="btn btn-success btn-md space">siguiente paso</button>
                            <div class="text-right">
                            </div>
                              </div>
                            </div>
                        </div>
                    </div>
</div>
</div>
                </div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="../../js/registro.js"></script>
</html>