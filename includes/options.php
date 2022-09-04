<?php
switch ($POSTE) {
    case $POSTE === "vendeur":
        echo "
<nav class='navbar navbar-default' role='navigation'>
  <div class='navbar-header'>
    <h4 class=''>Insertion</h4>
  </div>

  <div class='collapse navbar-collapse navbar-ex1-collapse'>
    <form action=''>
      <ul class='nav navbar-nav'>
        <li class='active'><a href='#'>client</a></li>
        <li><a href='#'>article</a></li>
        <li><a href='#'>achat</a></li>
      </ul>
    </form>
    <div class='navbar-header'>
      <h4 class=''>Modiffication</h4>
    </div>

    <ul class='nav navbar-nav'>
      <li class='active'><a href='#'>client</a></li>
      <li><a href=''>article</a></li>
      <li><a href=''>achat</a></li>
    </ul>
    <div class='navbar-header'>
      <h4 class=''>Consultation</h4>
    </div>
    <ul class='nav navbar-nav'>
      <li class='active'><a href=''>client</a></li>
      <li><a href=''>article</a></li>
      <li><a href=''>achat</a></li>
    </ul>
  </div>
</nav>";
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
