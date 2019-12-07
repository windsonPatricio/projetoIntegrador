<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous">

</head>
<body class="bg-light">
<header>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="/portal">Avenger TUR</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <?php if(isset($_SESSION['usuario'])){?>
            <div class="collapse navbar-collapse " id="navbarColor01">
                <div class="float-left">
                    <h6>
                        <a href="\logout" class="text-decoration-none text-white">SAIR</a>
                    </h6>
                </div>
            </div>

        <?php } else{?>
        </div>
        <span class="navbar-text col-9">
                        <a class="login" href="/login" style="padding-right: 20px">Log In</a>
                </span>
        <a class="btn btn-light action-button" role="button" href="/cadastro-cliente-form">Cadastra-se</a>
        </div>
        <?php }?>
    </nav>
    <main class="container">
        <?php if(isset($alerts)){?>
            <?php foreach($alerts as $alert){?>
                <div class="alert alert-<?=$alert->context?> mt-2" role="alert">
                    <?=$alert->content?>
                </div>
            <?php }?>
        <?php }?>
    </main>
    <main class="container">

</header>