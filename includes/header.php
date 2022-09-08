<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css-styles/userpage-css.css">
    <title>Plezi shipping | Vendeur
        <?= $USERNAME ?>
    </title>
</head>

<body>
    <div class="loader">

    </div>
    <header>
        <nav>
            <link rel="stylesheet" href="../css-styles/userpage-css.css" />
            <div class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="navbar-header">
                                <button class="navbar-toggle" data-target="#mobile_menu" data-toggle="collapse">
                                    <span class="icon-bar"></span><span class="icon-bar"></span><span
                                        class="icon-bar"></span>
                                </button>
                                <a href="#" class="navbar-brand">Plezi Shipping</a>
                            </div>

                            <div class="navbar-collapse collapse" id="mobile_menu">
                                <ul class="nav navbar-nav">
                                    <li>
                                        <form action="" class="navbar-form">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="search" name="search" id="t-search"
                                                        placeholder="Rechercher..." value='<?= isset($_SESSION['
                                                        session_fields_search_data'])?$_SESSION['session_fields_search_data']['searched_txt']:'';?>'
                                                    class="form-control" />
                                                    <span class="input-group-addon"><span
                                                            class="glyphicon glyphicon-search"
                                                            id="searchb"></span></span>
                                                </div>
                                            </div>
                                        </form>
                                    </li>
                                </ul>
                                <ul class="nav navbar-nav navbar-right">
                                    <li>
                                        <a href="#">
                                            <img src="<?=$PROFILE?>" class="img-circle" height="30"
                                                alt="image de votre profile" loading="lazy" />
                                            <?=$USERNAME?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
                                                class="glyphicon glyphicon-log-in"></span> Plus
                                            <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Parametre</a></li>
                                            <li><a href="../config/de_auth.php">Deconnection</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        </nav>
        <!-- Navbar -->
    </header>
