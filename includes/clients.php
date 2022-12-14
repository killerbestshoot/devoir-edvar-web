<?php
require_once '../config/data_commit_fetch.php';
if (isset($_POST['ajouter'])):
    if (!empty($_POST['cli-name']) || !empty($_POST['cli-fname']) || !empty($_POST['cli-birth']) || !empty($_POST['cli-adr']) || !empty($_POST['cli-tel']) ||
    !empty($_POST['cli-ville']) || !empty($_POST['cli-pays'])):
        $id = 0;
        $cli_name = htmlspecialchars($_POST['cli-name']);
        $cli_fname = htmlspecialchars($_POST['cli-fname']);
        $cli_sex = htmlspecialchars($_POST['cli-sex']);
        $cli_birth = htmlspecialchars($_POST['cli-birth']);
        $cli_codepostal = htmlspecialchars($_POST['cli-cp']);
        $cli_ville = htmlspecialchars($_POST['cli-ville']);
        $cli_pays = htmlspecialchars($_POST['cli-pays']);
        $cli_adr = htmlspecialchars($_POST['cli-adr']);
        $cli_tel = htmlspecialchars($_POST['cli-tel']);
        $cli_num = substr($cli_name, 0, 3) . "-" . rand(100000, 1000000);
        save_client($cli_num, $cli_name, $cli_fname, $cli_sex, $cli_birth, $cli_codepostal, $cli_ville, $cli_pays, $cli_adr, $cli_tel);
    else:
        $GLOBALS['ERROR_MSG'] ="
            <div class='alert alert-warning'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                    <p>
                        Tout les champs sont Obligatoirs
                    </p>
            </div>";
    endif;
endif;
// elseif (isset($_POST['effacer'])):
    // if (!empty($_POST['cli-name']) || !empty($_POST['cli-fname']) || !empty($_POST['cli-birth']) || !empty($_POST['cli-adr']) || !empty($_POST['cli-tel']) || !empty($_POST['cli-ville']) || !empty($_POST['cli-pays'])):
        // if(isset($_SESSION['search_result']['cli_num']) && !empty($_SESSION['search_result']['cli_num'])):
            // supp_cli($_SESSION['search_result']['cli_num']);
        // endif;
        // $_SESSION['search_result']='';
    // else:
        // $GLOBALS['ERROR_MSG'] ="
                                // <div class='alert alert-info'>
                                    // <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                        // <p>
                                            // Impossible de supprimer
                                        // </p>
                                // </div>";
        // $_SESSION['search_result']='';
    // endif;
// endif;
?>
<div class="cont-r">
    <?php
    $id = 0;
    $cli_name = "";
    $cli_fname = "";
    $cli_sex = "";
    $cli_birth = "";
    $cli_codepostal = "";
    $cli_ville = "";
    $cli_pays = "";
    $cli_adr = "";
    $cli_tel = "";
    $cli_num = "";
    ?>
    <div class="title">
        <h2>Clients</h2>
    </div>
    <form method="post">
        <div id="message">

            <?php
        
        if (isset($ERROR_MSG)):
            echo "$ERROR_MSG";
            elseif (isset($SUCCES)):
                echo "$SUCCES";
                elseif (isset($FAILD)):
                    echo "$FAILD";
                endif;
                ?>
                </div>
    <input  id="num_client" value="<?= isset($_SESSION[' search_result']['num_A'])?$_SESSION['search_result']['cli_num']:''?>" style="visibility:hidden"></input>
        <div class="info">
            <div class="d e">
                <label for="client-name">Nom du client</label> <span style="color: red; font-size: 20px;"> * </span>
                <input type="text" class="form-control" name="cli-name" id="cli-name" value='<?= isset($_SESSION['
                    search_result']['num_A'])?$_SESSION['search_result']['cli_name']:''?>' placeholder="Ex : Jhon">
            </div>
            <div class="d f">
                <label for="cli-fname">Prenom du client</label><span style="color: red; font-size: 20px;"> * </span>
                <input type="text" class="form-control" name="cli-fname" id="cli-fname" value='<?= isset($_SESSION['
                    search_result']['cli_fname'])?$_SESSION['search_result']['cli_fname']:''?>' placeholder="Doe">
            </div>
        </div>
        <div class="info">
            <div class="d">
                <label for="cli-sex">Sexe du client</label>
                <select class="form-control" name="cli-sex" id="cli-sex">
                    <option value="Masculin">Masculin</option>
                    <option value="Feminin">Feminin</option>
                </select>
            </div>
            <div class="d">
                <label for="cli-birth">Date de Naissance</label><span style="color: red; font-size: 20px;"> * </span>
                <input type="text" class="form-control" name="cli-birth" id="cli-birth" value='<?= isset($_SESSION['
                    search_result']['cli_birth'])?$_SESSION['search_result']['cli_birth']:''?>'
                placeholder="AAAA-MM-dd">
            </div>
            <div class="d">
                <label for="cli-adr">Address client</label><span style="color: red; font-size: 20px;"> * </span>
                <input type="text" class="form-control" name="cli-adr" id="cli-adr" value='<?= isset($_SESSION['
                    search_result']['cli_adr'])?$_SESSION['search_result']['cli_adr']:''?>' placeholder="29 rue les
                anges">
            </div>
        </div>
        <div class="info">
            <div class="g">
                <label for="cli-cp">Code Postale</label>
                <input type="text" class="form-control" name="cli-cp" id="cli-cp" value='<?= isset($_SESSION['
                    search_result']['cli_codepostal'])?$_SESSION['search_result']['cli_codepostal']:''?>'
                placeholder="HT-7010">
            </div>
            <div class="g">
                <label for="cli-ville">Ville</label><span style="color: red; font-size: 20px;"> * </span>
                <input type="text" class="form-control" name="cli-ville" id="cli-ville" value='<?= isset($_SESSION['
                    search_result']['cli_ville'])?$_SESSION['search_result']['cli_ville']:''?>'
                placeholder="Port-au-prince">
            </div>
            <div class="g">
                <label for="cli-pays">Pays</label><span style="color: red; font-size: 20px;"> * </span>
                <input type="text" class="form-control" name="cli-pays" id="cli-pays" value='<?= isset($_SESSION['
                    search_result']['cli_pays'])?$_SESSION['search_result']['cli_pays']:''?>' placeholder="Haiti">
            </div>
            <div class="g">
                <label for="cli-tel">Tel du client</label><span style="color: red; font-size: 20px;"> * </span>
                <input type="text" class="form-control" name="cli-tel" id="cli-tel" value='<?= isset($_SESSION['
                    search_result']['cli_tel'])?$_SESSION['search_result']['cli_tel']:''?>'placeholder="+509 xxxx xx
                xx">
            </div>
        </div>
        <div class="butn">
            <input type="button" class="btn btn-primary" value="effacer" name="effacer" id="effacer-cli">
            <input type="submit" class="btn btn-primary" value="Ajouter" name="ajouter">
        </div>
    </form>
</div>
