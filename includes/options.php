<?php
switch ($POSTE) {
    case $POSTE === "vendeur":
        echo "
            <div class='container'>
                <div class='action-head'>
                    <h4 class=''>Insertion</h4>
                </div>
                <form action=''>
                    <ul class='l-option'>
                        <li ><a href='#'id='selectedoption'>client</a></li>
                        <li><a href='#'id='selectedoption1'>article</a></li>
                        <li><a href='#'id='selectedoption2'>achat</a></li>
                    </ul>
                </form>
                <div class='action-head'>
                <h4 class=''>Modiffication</h4>
                </div>
                <form>
                        <ul class='l-option'>
                            <li><a href='#' id='selectedoption3'>clienct</a></li>
                            <li><a href=''id='selectedoption4'>article</a></li>
                            <li><a href=''id='selectedoption5'>achat</a></li>
                        </ul>
                    </form>
                    <div class='action-head'>
                    <h4 class=''>Consultation</h4>
                    </div>
                    <form>
                        <ul class='l-option'>
                            <li class=''><a href=''id='selectedoption8'>client</a></li>
                            <li><a href=''id='selectedoption7'>article</a></li>
                            <li><a href=''id='selectedoption8'>achat</a></li>
                        </ul>
                    </form>
         </div>";
        break;
    case $POSTE === "comptable":
        echo "
<div>
    
    <div>
        <h3>Insertion</h3>
        <form method='get'>
        <li><a href=''>Clients</a></li>
        <li><a href=''>Articles</a></li>
        <li><a href=''>Achats</a></li>
        </form>
    </div>
    <div>
        <h3>Modidfication</h3>
        <form method='get'>
        <li><a href=''>Clients</a></li>
        <li><a href=''>Articles</a></li>
        <li><a href=''>Achats</a></li>
        </form>
    </div>
    <div>
        <h3>Consultation</h3>
        <form method='get'>
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
        <form method='get'>
        <li><a href=''>Clients</a></li>
        <li><a href=''>Articles</a></li>
        <li><a href=''>Achats</a></li>
        </form>
    </div>
    <div>
        <h3>Modidfication</h3>
        <form method='get'>
        <li><a href=''>Clients</a></li>
        <li><a href=''>Articles</a></li>
        <li><a href=''>Achats</a></li>
        </form>
    </div>
    <div>
        <h3>Consultation</h3>
        <form method='get'>
        <li><a href=''>Clients</a></li>
        <li><a href=''>Articles</a></li>
        <li><a href=''>Achats</a></li>
        </form>
    </div>
</div>";
        break;

}
