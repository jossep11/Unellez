<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset ('css/estilos.css') }}">
    <title>Document</title>
    
</head>
<body>  

            
               
                <main>
                    <div class="texto_principal">
                        <h1>CONOPAIMA</h1>
                    </div>
            
                    <div class="contenedor__todo">
                        <div class="caja__trasera">
                            <div class="caja__trasera-register">
                                <h2>Proceso Analítico Organizacional</h2>
                            </div>
                        </div>
            
                        <!--Formulario de Login-->
                        <div class="contenedor__login-register">
                            <!--Login-->
                          
                              <form class="formulario__login" action="{{route("evaluacion_login.store")}}" method="post">
                                    @csrf
                                <h2>Iniciar Sesión</h2>
                                <input type="text" name="name" placeholder="Usuario">
                                <input type="password" name="password" placeholder="Contraseña">
                                <button type="submit">Entrar</button>
                            </form>
                </main>

            </form>

        





</body>
</html>