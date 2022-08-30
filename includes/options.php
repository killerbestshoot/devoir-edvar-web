<?php
$poste = "comptable";
switch ($poste) {
    case $poste === "vendeur":
        echo "
<div>
    
    <div>
        <h3>Insertion</h3>
        <li><a href='http://'>Clients</a></li>
        <li><a href='http://'>Articles</a></li>
        <li><a href='http://'>Achats</a></li>
    </div>
    <div>
        <h3>Modidfication</h3>
        <li><a href='http://'>Clients</a></li>
        <li><a href='http://'>Articles</a></li>
        <li><a href='http://'>Achats</a></li>
    </div>
    <div>
        <h3>Consultation</h3>
        <li><a href='http://'>Clients</a></li>
        <li><a href='http://'>Articles</a></li>
        <li><a href='http://'>Achats</a></li>
    </div>
</div>";
        break;
    case $poste === "comptable":
        echo "
<div>
    
    <div>
        <h3>Insertion</h3>
        <li><a href='http://'>Clihents</a></li>
        <li><a href='http://'>Articles</a></li>
        <li><a href='http://'>Achats</a></li>
    </div>
    <div>
        <h3>Modidfication</h3>
        <li><a href='http://'>Clients</a></li>
        <li><a href='http://'>Articles</a></li>
        <li><a href='http://'>Achats</a></li>
    </div>
    <div>
        <h3>Consultation</h3>
        <li><a href='http://'>Clients</a></li>
        <li><a href='http://'>Articles</a></li>
        <li><a href='http://'>Achats</a></li>
    </div>
</div>";
        break;
    default:
        echo "
<div>
    
    <div>
        <h3>Insertion</h3>
        <li><a href='http://'>Clients</a></li>
        <li><a href='http://'>Articles</a></li>
        <li><a href='http://'>Achats</a></li>
    </div>
    <div>
        <h3>Modidfication</h3>
        <li><a href='http://'>Clients</a></li>
        <li><a href='http://'>Articles</a></li>
        <li><a href='http://'>Achats</a></li>
    </div>
    <div>
        <h3>Consultation</h3>
        <li><a href='http://'>Clients</a></li>
        <li><a href='http://'>Articles</a></li>
        <li><a href='http://'>Achats</a></li>
    </div>
</div>";
        break;

}
