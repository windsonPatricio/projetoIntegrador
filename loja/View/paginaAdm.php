<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pagina Administradora</title>

    <link rel="stylesheet" href="Designer/css/demo.css">
    <link rel="stylesheet" href="Designer/css/navigation-dark.css">


    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">


</head>

<body>
<br><br>

<div class="align-content-center">
    <nav class="menu-navigation-dark">
        <?php var_dump($usuario->tipoUsuario)?>
       <?php if ($usuario->tipoUsuario==1){?>
         <div class="container row-2">
            <div class="card-columns">
                <div class="card">
                    <div class="card text-white bg-primary">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <h4 class="card-title">Listar Pacote</h4>
                            <a href="#"><i class="fa fa-archive fa-1x"></i></a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card text-white bg-primary">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <h4 class="card-title">Listar Usuarios</h4>
                            <a href="/listar-produtos"><i class="fa fa-list fa-1x"></i></a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card text-white bg-primary">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <h4 class="card-title">Incluir Agente de Viagem</h4>
                            <a href="/cadastro-agente-form"><i class="fa fa-user fa-1x"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <?php } else{?>
            <div class="container row-2">
                <div class="card-columns">
                    <div class="card">
                        <div class="card text-white bg-primary">
                            <div class="card-header">Header</div>
                            <div class="card-body">
                                <h4 class="card-title">Incluir Pacote</h4>
                                <a href="#"><i class="fa fa-archive fa-1x"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card text-white bg-primary">
                            <div class="card-header">Header</div>
                            <div class="card-body">
                                <h4 class="card-title">Cadastrar Hotel</h4>
                                <a href="/cadastro-Estadia-form"><i class="fa fa-hotel fa-1x"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card text-white bg-primary">
                            <div class="card-header">Header</div>
                            <div class="card-body">
                                <h4 class="card-title">Cadastrar Transporte</h4>
                                <a href="/cadastro-Transporte-form"><i class="fa fa-car fa-1x"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

           <div class="container row-2">
               <div class="card-columns">
                   <div class="card">
                       <div class="card text-white bg-primary">
                           <div class="card-header">Header</div>
                           <div class="card-body">
                               <h4 class="card-title">Cadastrar eventos</h4>
                               <a href="/cadastro-Evento-form"><i class="fa fa-file-picture-o fa-1x"></i></a>
                           </div>
                       </div>
                   </div>
                   <div class="card">
                       <div class="card text-white bg-primary">
                           <div class="card-header">Header</div>
                           <div class="card-body">
                               <h4 class="card-title">Cadastrar Local de Visita</h4>
                               <a href="/cadastro-local-form"><i class="fa fa-road fa-1x"></i></a>
                           </div>
                       </div>
                   </div>
                   <div class="card">

                   </div>
               </div>
           </div>
            <?php }?>
        </nav>

</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="assets/slicknav/jquery.slicknav.min.js"></script>


</body>

</html>
