<?php include("views/layouts/header.php"); ?>

<body id="content-register">
    <div class="container-register">
        <div class="blurred-div">
        </div>
        <div class="form-content" style="background-color:#B1ECD7">
            <div class="form-register">
                <h3>Registrarse</h3>

                <form action="?class=Usuarios&method=registerUser" method="post">
                    <label for="nombres">Nombres</label>
                        <input type="text" name="nombres" required="true">
                    <label for="apellidos">Apellidos</label>
                        <input type="text" name="apellidos" required="true">
                    <label for="descripcion">Tipo (Profesor/Administrativo)</label>
                        <textarea name="descripcion" required="true"></textarea>                    
                    <label for="email">Email</label>
                        <input type="email" name="email" required="true">
                    <label for="password">Password</label>
                        <input type="password" name="password" required="true">
                    <div class="buttons-options">
                        <button type="submit">Registrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include("views/layouts/footer.php"); ?>
</body>

</html>