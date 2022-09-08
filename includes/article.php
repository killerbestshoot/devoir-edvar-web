<?php
require_once '../config/fetch_article_data.php';
if (isset($_POST['valider_article'])):
    if (empty($_POST["Nom_article"]) || empty($_POST['P_article']) || empty($_POST['Nb-article']) || empty($_POST['desc'])):
        $_SESSION['fields_data_text'] = array(
            'nom_a'=>htmlspecialchars($_POST['Nom_article']),
            'prix_a'=>htmlspecialchars($_POST['P_article']),
            'nombre_a'=>htmlspecialchars($_POST['Nb-article']),
            'desc_a'=>htmlspecialchars($_POST['desc']),
        );
        $ERROR_MSG = "<div class='col-lg-11' style='margin-bottom:15px;'>
        <div class='alert alert-danger'>
        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
        <p>
        Veuillez remplir toutes les champs
        </p></div>
        </div>
        ";
    else:
        $nom_A = htmlspecialchars($_POST['Nom_article']);
        $prix_A = htmlspecialchars($_POST['P_article']);
        $Nombre_A = htmlspecialchars($_POST['Nb-article']);
        $desc_A = htmlspecialchars($_POST['desc']);
        $num_A = substr($nom_A, 0, 3) . "-" . rand(10000, 1000000);
        save_article($num_A,$nom_A, $prix_A, $Nombre_A, $desc_A);
    endif;
elseif(isset($_POST['annuler_article'])):
     if (empty($_POST["Nom_article"]) || empty($_POST['P_article']) || empty($_POST['Nb-article']) || empty($_POST['desc'])):
     $ERROR_MSG = "<div class='col-lg-11' style='margin-bottom:15px;'>
     <div class='alert alert-danger'>
     <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
     <p>
     Impossible de supprimer
     </p></div>
     </div>
     ";
    endif;
endif;

?>
<div class="article">
    <div class="title">
        <h2>Articles</h2>
    </div>
    <?php
if (isset($ERROR_MSG)):
    echo $ERROR_MSG;
elseif(isset($SUCCES)):
    echo $SUCCES;
elseif(isset($FAILD)):
    echo $FAILD;
endif;
?>
<form method="post">
    <div class="row ">
        <div class="col-lg-5">
            <div>
                <label for="N-client">NOM article</label>
                <input type="text" class="form-control txt" name="Nom_article" placeholder="Ex : CL-2347 ">
            </div>
        </div>
        <div class="col-lg-3">
            <div>
                <label for="N-client">Prix article</label>
                <input type="text" class="form-control txt" name="P_article" placeholder="Ex :16000 gds ">
            </div>
        </div>
        <div class="col-lg-3">
            <div>
                <label for="Nb-article">Nombre article</label>
                <input type="number" name="Nb-article" id="input" class="form-control txt" value="0" max="" step="1"
                    required="required" title="nombre article" aria-valuemin="0">
            </div>
        </div>

        <div class="col-lg-11">
            <div>
                <label for="textarea" class="col-sm-2 control-label">Description</label>
                <div class="col-sm-14">

                    <textarea name="desc" id="textarea" class="form-control" rows="3" maxlength="120"
                        placeholder="Descriptionde l'article..." title="un bref description"></textarea>
                </div>
            </div>
        </div>

        <div class="btnpos">

            <div class="col-lg-5 btnpos">
                <input class="btn btn-primary" type="submit" value="Annuler" name="annuler_article">
                <input class="btn btn-primary" type="submit" value="Valider" name="valider_article">
            </div>
        </div>
</form>
</div>
