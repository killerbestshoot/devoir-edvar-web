<?php
$poste = $_session[´Auth_user_sessio´][´poste´];
switch ($poste) {
    case $poste === "vendeur":
        echo "
<div>
    
    <div>
        <h3>Insertion</h3>
        <form method=´get´>
        <li><a href=''>Clients</a></li>
        <li><a href=''>Articles</a></li>
        <li><a href=''>Achats</a></li>
        </form>
    </div>
    <div>
        <h3>Modidfication</h3>
        <form method=´get´>
        <li><a href=''>Clients</a></li>
        <li><a href=''>Articles</a></li>
        <li><a href=''>Achats</a></li>
        </form>
    </div>
    <div>
        <h3>Consultation</h3>
        <form method=´get´>
        <li><a href=''>Clients</a></li>
        <li><a href=''>Articles</a></li>
        <li><a href=''>Achats</a></li>
        </form>
    </div>
</div>";
        break;
    case $poste === "comptable":
        echo "
<div>
    
    <div>
        <h3>Insertion</h3>
        <form method=´get´>
        <li><a href=''>Clients</a></li>
        <li><a href=''>Articles</a></li>
        <li><a href=''>Achats</a></li>
        </form>
    </div>
    <div>
        <h3>Modidfication</h3>
        <form method=´get´>
        <li><a href=''>Clients</a></li>
        <li><a href=''>Articles</a></li>
        <li><a href=''>Achats</a></li>
        </form>
    </div>
    <div>
        <h3>Consultation</h3>
        <form method=´get´>
        <li><a href=''>Clients</a></li>
        <li><a href=''>Articles</a></li>
        <li><a href=''>Achats</a></li>
        </form>
    </div>
</div>";
        break;
    default:
        echo "
<div>
    
    <div>
        <h3>Insertion</h3>
        <form method=´get´>
        <li><a href=''>Clients</a></li>
        <li><a href=''>Articles</a></li>
        <li><a href=''>Achats</a></li>
        </form>
    </div>
    <div>
        <h3>Modidfication</h3>
        <form method=´get´>
        <li><a href=''>Clients</a></li>
        <li><a href=''>Articles</a></li>
        <li><a href=''>Achats</a></li>
        </form>
    </div>
    <div>
        <h3>Consultation</h3>
        <form method=´get´>
        <li><a href=''>Clients</a></li>
        <li><a href=''>Articles</a></li>
        <li><a href=''>Achats</a></li>
        </form>
    </div>
</div>";
        break;

}
