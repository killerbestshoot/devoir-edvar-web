<?php
switch ($POSTE) {
    case $POSTE === "vendeur":
        echo "
            <div class='container'>
                <div class='action-head'>
                    <h4 class=''>Insertion</h4>
                </div>
                <form>
                    <ul class='l-option'>
                        <li ><button type='submit' id='selectedoption' name='insert-client'>client</button></li>
                        <li><button type='submit' id='selectedoption1' name='insert-article'>article</button></li>
                        <li><button type='submit' id='selectedoption2'name='insert-achat'>achat</button></li>
                    </ul>
                </form>
                <div class='action-head'>
                <h4 class=''>Modiffication</h4>
                </div>
                <form>
                        <ul class='l-option'>
                            <li><button  id='selectedoption3' name='mod-client'>client</button></li>
                            <li><button id='selectedoption4' name='mod-article'>article</button></li>
                            <li><button id='selectedoption5' name='mod-achat'>achat</button></li>
                        </ul>
                    </form>
                    <div class='action-head'>
                    <h4 class=''>Consultation</h4>
                    </div>
                    <form>
                        <ul class='l-option'>
                            <li class=''><button id='selectedoption8' name='cn-clients'>client</button></li>
                            <li><button id='selectedoption7' name='cn-article'>article</button></li>
                            <li><button id='selectedoption8' name='cn-achat'>achat</button></li>
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
