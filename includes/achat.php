<?php
require_once '../config/data_commit_fetch.php';
require_once '../config/fetch_article_data.php';
// var_dump(listing_cli());
// print_r(listing_arti());

?>
<div class="achat">
    <div class="title">
        <h2>Achats</h2>
    </div>
    <form method="post">
        <div class="row ">
            <div class="col-lg-4">
                <div>
                    <label for="N-client">No clients</label>

                    <select name="cli-num" id="input" class="form-control" required="required">
                        <?php
foreach (listing_cli() as $num => $rows) {
    $num_name = $rows['NOCLIENTS'] . "  " . $rows["NOM"] . " " . $rows['PRENOM'];
    $num = $rows["NOCLIENTS"];
    echo " <option value='$num'>$num_name</option>";
    echo "ok";
}
?>
                    </select>

                </div>
            </div>
            <div class="col-lg-7">
                <div>
                    <label for="N-client">Nom client</label>
                    <input type="text" class="form-control txt" name="N-clients" placeholder="Ex : CL-2347 ">
                </div>
            </div>


            <div class="col-lg-5">
                <div>

                    <label for="N-article">Numero article</label>
                    <select name="num_a" id="input" class="form-control" required="required">
                        <?php
foreach (listing_arti() as $num => $rows) {
    $nums = $rows["NUM_A"];
    echo " <option value='$nums'>$nums</option>";
    echo "ok";
}
?>
                    </select>
                </div>
            </div>
            <div class="col-lg-6">
                <div>
                    <label for="Nb-article">Nombre article</label>
                    <input type="number" name="Nb-article" id="input" class="form-control txt" value="0" max="" step="1"
                        required="required" title="nombre article" aria-valuemin="0">
                </div>
            </div>

            <div class="col-lg-6">
                <div>
                    <label for="a-date">Date achat</label>
                    <input type="date" class="form-control txt" name="a-date" placeholder="Ex : 12-12-2022">
                </div>
            </div>
            <div class="col-lg-5">

                <label for="P-achat">Prix Achat</label>
                <input type="text" class="form-control txt" name="P-achat" placeholder="Ex : 1800">
            </div>
            <div class="btnpos">

                <div class="col-lg-5 btnpos">
                    <input class="btn btn-primary" type="submit" value="Annuler">
                    <input class="btn btn-primary" type="submit" value="Valider">
                </div>
            </div>
    </form>
</div>
