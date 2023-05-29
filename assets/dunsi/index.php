<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Portail DUNSI | Applications Internes</title>

    <link rel="canonical" href="#">

<link href="./css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="./css/pricing.css" rel="stylesheet">
  </head>
  <body>
    


<div class="container py-3">
  <header>
    <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
        <img src="./img/logo_dunsi_petit.png" alt="logo_dunsi_petit" height="28"></img>&nbsp;&nbsp;&nbsp;<h4>Portail DUNSI | Applications Internes</h4>
        

      <nav class="d-inline-flex mt-4 mt-md-0 ms-md-auto">
        <a class="me-3 py-2 text-dark text-decoration-none" href="https://dunsi">Accueil</a>
        <a class="me-3 py-2 text-dark text-decoration-none" href="https://agents.annecy.fr" target="_blank" rel="noopener noreferrer">Intranet</a>
        <a class="me-3 py-2 text-dark text-decoration-none" href="https://www.office.com" target="_blank" rel="noopener noreferrer">Office</a>
        <a class="me-2 py-2 text-dark text-decoration-none" href="http://clarilog2-app-p.annecy.local/Authenticated/Operator/Operator.aspx" target="_blank" rel="noopener noreferrer">CLARILOG Opérateur</a>
        <a class="py-2 text-dark text-decoration-none" href="connexion.php" target="_blank" rel="noopener noreferrer">Connexion</a>
      </nav>
    </div>

    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
      <h1>Liste des Applications</h1>
      <hr class="mt-3 mb-3"/>
      <h4>Applications de Supervision</h4>
    </div>
  </header>


    <div class="row row-cols-1 row-cols-md-4 mb-4 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm" style="width:14rem;">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">CheckMK</h4>
          </div>
          <div class="card-body">
            <img src="./img/check_mk.png" alt="check_mk" height="85"></img>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Supervision de l'Infrastructure physique et du réseau informatique</li>
              <li>Supervision des services réseau et Internet</li>
              <li>Collecte des traps SNMP</li>
            </ul>
            <a href="https://checkmk/annecy/" target="_blank" rel="noopener noreferrer"><Button" class="w-100 btn btn-lg btn-secondary">Se connnecter</button></a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm" style="width:14rem;">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">PRTG</h4>
          </div>
          <div class="card-body">
            <img src="./img/prtg.png" alt="prtg" height="110"></img>
            <ul class="list-unstyled mt-3 mb-4">
              <br/>
              <li>Supervision des Serveurs</li>
              <li>Supervision des Certificats</li>
              <li>Supervision des Applications</li>
            </ul>
            <a href="https://prtg/" target="_blank" rel="noopener noreferrer"><Button" class="w-100 btn btn-lg btn-secondary">Se connnecter</button></a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm" style="width:14rem;">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Grafana</h4>
          </div>
          <div class="card-body">
            <img src="./img/grafana.png" alt="grafana" height="63"></img>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Reporting des Indices de Performance</li>
              <li>Analyse des données collectées</li>
              <li>Dashboard personnalisés</li>
              <li>Supervision des Applications</li>
            </ul>
            <a href="https://grafana/" target="_blank" rel="noopener noreferrer"><button class="w-100 btn btn-lg btn-secondary">Se connnecter</button></a>
          </div>
        </div>
        </div>
        <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm" style="width:14rem;">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Uptime Kuma</h4>
          </div>
          <div class="card-body">
            <img src="./img/uptime_kuma.png" alt="uptime_kuma" height="64"></img>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Statut des services numériques</li>
              <li>Ressenti utilisateur</li>
              <li>Notification aux utilisateurs</li>
              <li>Supervision des Sites Web et des Certificats</li>
            </ul>
            <a href="https://pannes.dunsi.annecy.local/" target="_blank" rel="noopener noreferrer"><button class="w-100 btn btn-lg btn-secondary">Se connnecter</button></a>
          </div>
        </div>
        </div>
	  </div>
	  <hr class="mt-3 mb-3"/>
	  <div class="pricing-header p-3 pb-md-2 mx-auto text-center">
      	<h4>Applications d'Automatisation et de Sauvegarde</h4>
      </div>
	  
	  <div class="row row-cols-1 row-cols-md-2 mb-2 text-center">
      <div class="col">
        <div class="card mb-2 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">rConfig</h4>
          </div>
          <div class="card-body">
            <img src="./img/rconfig.png" alt="rconfig" height="74"></img>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Sauvegarde des configurations des équipements réseau</li>
              <li>Déploiement de macro-commandes sur le réseau</li>
              <li>Déploiement de modèles de configuration réseau</li>
            </ul>
            <a href="https://rconfig/" target="_blank" rel="noopener noreferrer"><Button" class="w-100 btn btn-lg btn-secondary">Se connnecter</button></a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-2 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Ansible AWX</h4>
          </div>
          <div class="card-body">
            <img src="./img/awx.png" alt="awx" height="50"></img>
            <ul class="list-unstyled mt-3 mb-4">
              <br/>
              <li>Déploiement de Playbook Ansible sur les serveurs Linux</li>
              <li>Automatisation des tâches</li>
              <li>Gestion et orchestration des patchs</li>
            </ul>
            <a href="https://awx/" target="_blank" rel="noopener noreferrer"><Button" class="w-100 btn btn-lg btn-secondary">Se connnecter</button></a>
          </div>
        </div>
      </div>
	  </div>
	  <hr class="mt-3 mb-3"/>
	  </div>
  </body>
</html>
