<?php include("views/layouts/header.php"); ?>
<body id="content-login">

<div class="container-login">
    <div class="blurred-div">
    </div>
    <div class="form-content" style="background-color:#B1ECD7">
        <div class="form-login">
            <h3>Inicio de sesión</h3>

            <form action="?class=Login&method=auth" method="post" style="background-color:rgba(5, 58, 68, 0.719)">
                <label for="email">Correo</label>
                    <input type="email" name="email" required="true">
                <label for="password">Contraseña</label>
                    <input type="password" name="password" required="true">
                    <div class="buttons-options d-grid gap-2 col-4 mx-auto">                    
                        <button type="submit" id="user_login">Ingresar</button>
                        <button type="submit" id="register">Registrarse</button>
                        <?php if(isset($_REQUEST['ErrorLogin'])):?>
                            <span>Correo o contraseña incorrecta!</span>
                        <?php  endif;?>
                    </div>
                
            </form>
        </div>        
    </div>
</div>

<?php include("views/layouts/footer.php"); ?>
</body>
</html>