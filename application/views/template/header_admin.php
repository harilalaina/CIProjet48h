<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">COMME J'AIME</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">        
        <li class="nav-item dropdown pe-3">
          <a class="dropdown-item d-flex align-items-center" href="#">
            <i class="bi bi-box-arrow-right"></i>
            <a class="btn" href="<?php echo ('login'); ?>">Se deconnected</a>
          </a>
        </li><!-- End Profile Nav -->
      </ul>
    </nav><!-- End Icons Navigation -->
  </header><!-- End Header -->

  <head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link  rel="icon" href="<?php echo base_url()?>assets/img/favicon.png?>">
  <link href="<?php echo base_url()?>assets/img/apple-touch-icon.png?> " rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href=" <?php echo base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href=" <?php echo base_url()?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href=" <?php echo base_url()?>assets/vendor/boxicons/css/boxicons.min.css?>" rel="stylesheet">
  <link href=" <?php echo base_url()?>assets/vendor/quill/quill.snow.css?>" rel="stylesheet">
  <link href=" <?php echo base_url()?>assets/vendor/quill/quill.bubble.css?>" rel="stylesheet">
  <link href=" <?php echo base_url()?>assets/vendor/remixicon/remixicon.css?>" rel="stylesheet">
  <link href=" <?php echo base_url()?>assets/vendor/simple-datatables/style.css?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url()?>assets/css/style.css?>" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/activite_details.css?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/credit.css?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/sport_activitie.css?>">

</head>


<body>
  <!-- ======= Header ======= -->
 
  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">
  
    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url('template')?>">
          <i class="bi bi-bar-chart"></i>
          <span>Tableau de bord</span>
        </a>
      </li><!-- End Profile Page Nav -->
  
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url('grapheCont/index')?>">
          <i class="bi bi-piggy-bank"></i>
          <span>Graphe et Tableau croiser</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url('code_control/index')?>">
          <i class="bi bi-people"></i>
          <span>Gestion des codes</span>
        </a>
      </li><!-- End Profile Page Nav -->
  
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url('CategorieController/insert')?>">
          <i class="bi bi-question-circle"></i>
          <span>Regime Necessaire</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->
  
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url('SportController/index')?>">
          <i class="bi bi-tools"></i>
          <span>Activite Sportif</span>
        </a>
      </li><!-- End Contact Page Nav -->  
    </ul>
  
  </aside><!-- End Sidebar-->
  <main id="main" class="main">    
    <section class="section">