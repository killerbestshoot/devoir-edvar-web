<?php
require_once 'db_linking/connect.php';
function authentif($nom_utilisateur, $password)
{
    /**fonction qui permet l'authentifiication de l'utilisateur qui essaie de se connecter 
     * requiert une nom d'utilisateur et un mot de passe comme parametres et ensuit fait appel a la base de donnee,
     * dans cette fonction une fontion il existe une fonction password_verify qui permet de verifier si le mot de passe 
     * saisie correspond bien au nom utilisateur saisie et verifie aussi si le compte est active. il retourne une message d'erreur si 
     * une chose s'est mal passe et initialise la variable de session utilisateur pour les prochaine operation de cette utilisateur
     * */
    try {
        $result = conn()->query("SELECT * FROM employee WHERE NOM_UTILISATEUR ='$nom_utilisateur' AND MOT_DE_PASSE='$password'");
        if ($result->num_rows):
            while ($row = $result->fetch_assoc()) {
                if ($row['ETAT'] === "active"):
                    session_start();
                    $_SESSION['Auth_user_session'] = array(
                        "ID" => $row['ID'],
                        "postes" => $row['POSTES'],
                        "user_session" => true,
                        "user_name" => $nom_utilisateur,
                        "user_mail" => $row['E_MAIL'],
                        "nom" => $row['NOM'],
                        "prenom" => $row['PRENOM'],
                        "tel" => $row['TELEPHONE']
                    );
                if(!$_SESSION['Auth_user_session']['poste']==="administrator"):
                    header("Location:/homepages/userpages.php");
                else:
                header("Location:/administration/administrator.php");
                endif;
                elseif ($row['ETAT'] === "inactive"):
                    $GLOBALS['error_msg'] = "Compte inactive";
                else:
                    $GLOBALS['error_msg'] = "Nom utilisateur et/ou Mot de passe invalide";
                endif;
            }
        else:
            $GLOBALS['error_msg'] = "Nom utilisateur et/ou Mot de passe invalide";
        endif;
        conn()->close();
    }
    catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

}
/**
 * Summary of save_user
 * @param mixed $nom
 * @param mixed $prenom
 * @param mixed $nom_utilisateur
 * @param mixed $email
 * @param mixed $telephone
 * @param mixed $mot_de_pass
 * @param mixed $mot_de_pass_conf
 * @param mixed $user_type
 * @param mixed $etat_user
 * @return void
 */
/**
 * fonction save user:
 * cette fonction esr appelle par le scripte creer compter pour enregistre les donnees de l'utilisateur nouvelement inscrit sur le site 
 * il prend plusieurs parametre et fait appel a la base de donnee pour la persistance des donnees ne rertoune aucune valeur mais initialise les
 * variables de session de l'utilisateur nouvellement inscrit.
 */
function save_user($nom, $prenom, $nom_utilisateur, $email,
    $telephone, $mot_de_pass, $mot_de_pass_conf, $user_type = 'user_simple',
    $etat_user = 'inactive')
{
    $mysqli = conn();
    try {
        if ($statement = $mysqli->prepare("INSERT INTO members(
        NOM,
         PRENOM,
          NOM_UTILISATEUR,
           E_MAIL,
            TELEPHONE,
            MOT_DE_PASSE,
             MOT_DE_PASSE_CONF,
              USER_TYPE,
               ETAT) 
        VALUES 
        (?,?,?,?,?,?,?,?,?)")) {
            $statement->bind_param("sssssssss", $nom, $prenom, $nom_utilisateur, $email, $telephone, $mot_de_pass, $mot_de_pass_conf, $user_type, $etat_user);
            try {
                if ($statement->execute()) {
                    $ID = mysqli_stmt_insert_id($statement);
                    // mysqli_insert_id(conn());
                    session_start();
                    $_SESSION['Auth_user_session'] = array(
                        'ID' => $ID,
                        'etat_user' => $etat_user,
                        'user_session' => true,
                        'user_name' => $nom_utilisateur,
                        'user_mail' => $email, "nom" => $nom,
                        "prenom" => $prenom,
                        "tel" => $telephone
                    );
                    header("Location:/pages/home-page/welcom.php");
                }
                else {
                    header("Location:/pages/account/createaccount.php");
                }
            }
            catch (Exception $e) {
                switch ($e) {
                    case str_contains($e->getMessage(), 'TELEPHONE') && $e->getCode():
                        header("Location:/pages/account/createaccount.php");
                        die('le numero ' . $telephone . ' que vous avez saisie correspond est deja associe a une autre compte');
                    case str_contains($e->getMessage(), 'E_MAIL') && $e->getCode():
                        header("Location:/pages/account/createaccount.php");
                        die('l\'addresse ' . $email . ' que vous avez saisie correspond est deja associe a une autre compte');
                    case str_contains($e->getMessage(), 'NOM_UTILISATEUR') && $e->getCode():
                        header("Location:/pages/account/createaccount.php");
                        die('le nom utilisateur ' . $nom_utilisateur . ' est deja pris');
                    default:
                        die('erreur' . $e->getCode());
                }
            }
        }
        else {
            echo "Echec lors de la preparation de la requette suivant : (" . $GLOBALS['mysqli']->errno . ")" . $GLOBALS['mysqli']->error;
        }
        $mysqli->close();
    }
    catch (Exception $e) {
        die('Erreur : ->' . $e->getMessage());
    }
}

if (isset($_POST['user_name'], $_POST['user_pass'])):
    authentif(htmlspecialchars($_POST['user_name']), htmlspecialchars($_POST['user_pass']));
else:
    $GLOBALS['error_msg'] = "Veuillez remplir tout les champs";
endif;
?>
