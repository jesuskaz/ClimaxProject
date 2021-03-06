<!DOCTYPE html>
<html lang="en">


<!-- datatables.html  21 Nov 2019 03:55:21 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Otika - Admin Dashboard Template</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/css/app.min.css' ;?>">
  <link rel="stylesheet" href="<?php echo base_url().'assets/bundles/datatables/datatables.min.css' ;?>">
  <link rel="stylesheet" href="<?php echo base_url().'assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css' ;?>">
  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/css/style.css' ;?>">
  <link rel="stylesheet" href="<?php echo base_url().'assets/css/components.css' ;?>">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/css/custom.css' ;?>">
  <link rel='shortcut icon' type='image/x-icon' href="<?php echo base_url().'assets/img/favicon.ico' ;?>">
</head>
<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a></li>
          </ul>
        </div>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html"> <img alt="image" src="<?php echo base_url().'/assets/img/logo.png';?>" class="header-logo" />
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown">
              <a href="<?php echo site_url('poster/index'); ?>" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <li><a class="nav-link" href="<?php echo site_url('poster/posteFilm'); ?>"><i data-feather="image"></i><span>Poster Film
              </span></a></li>
            <li class="menu-header">Pages</li>
            <li><a class="nav-link" href="<?php echo site_url('credential/deconnecter');?>"><i data-feather="user-check"></i><span>Se Deconnecter
              </span></a></li>
          </ul>
        </aside>
      </div>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Gestion de film</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th class="text-center">Id</th>
                            <th>Titre</th>
                            <th>Type</th>
                            <th>Heure Debut</th>
                            <th>Heure Fin</th>
                            <th>Jour Diffusion</th>
                            <th>Affiche1</th>
                            <th>Affiche2</th>
                            <th>Affiche3</th>
                            <th>Description</th>
                            <th>Edit</th>
                            <th>Delete</th>
                          </tr>
                        </thead>
                        <?php
                          //echo count($element);
                          //print_r($element);
                         //echo $element->num_rows();
                         if($element->num_rows() > 0)
                         {
                            foreach($element->result() as $elem)
                            {
                        ?>
                          <tbody>
                              <tr>
                                <td><?php echo $elem->id; ?></td>
                                <td><?php echo $elem->titre; ?></td>
                                <td><?php echo $elem->type; ?></td>
                                <td><?php echo $elem->heureDebut; ?></td>
                                <td><?php echo $elem->heureFin; ?></td>
                                <td><?php echo $elem->jourDiff; ?></td>
                                <td><?php echo $elem->affiche1; ?></td>
                                <td><?php echo $elem->affiche2; ?></td>
                                <td><?php echo $elem->affiche3; ?></td>
                                <td><?php echo $elem->description; ?></td>
                                <td>
                                  <a href="<?php echo base_url(); ?>poster/getElementUpdate/<?php echo $elem->id; ?>" class="btn btn-primary">Edit</a>
                                </td>
                                <td>
                                  <a href="<?php echo base_url(); ?>poster/delete/<?php echo $elem->id; ?>" class="btn btn-danger">Delete</a>
                                </td>
                              </tr>
                          </tbody>
                        <?php
                            }
                         }
                         else
                         {
                        ?>
                              <tr>
                                <td colspan="3"> Aucune donnée clonnée </td>
                              </tr>
                        <?php
                         }
                         ?>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <div class="settingSidebar">
          <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
          </a>
          <div class="settingSidebar-body ps-container ps-theme-default">
            <div class=" fade show active">
              <div class="setting-panel-header">Setting Panel
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Select Layout</h6>
                <div class="selectgroup layout-color w-50">
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>
                    <span class="selectgroup-button">Light</span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
                    <span class="selectgroup-button">Dark</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Sidebar Color</h6>
                <div class="selectgroup selectgroup-pills sidebar-color">
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Color Theme</h6>
                <div class="theme-setting-options">
                  <ul class="choose-theme list-unstyled mb-0">
                    <li title="white" class="active">
                      <div class="white"></div>
                    </li>
                    <li title="cyan">
                      <div class="cyan"></div>
                    </li>
                    <li title="black">
                      <div class="black"></div>
                    </li>
                    <li title="purple">
                      <div class="purple"></div>
                    </li>
                    <li title="orange">
                      <div class="orange"></div>
                    </li>
                    <li title="green">
                      <div class="green"></div>
                    </li>
                    <li title="red">
                      <div class="red"></div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="mini_sidebar_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Mini Sidebar</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="sticky_header_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Sticky Header</span>
                  </label>
                </div>
              </div>
              <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                  <i class="fas fa-undo"></i> Restore Default
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          <a href="templateshub.net">Templateshub</a></a>
        </div>
        <div class="footer-right">
        </div>
      </footer>
    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="<?php echo base_url().'assets/js/app.min.js'; ?>"></script>
  <!-- JS Libraies -->
  <script src="<?php echo base_url().'assets/bundles/datatables/datatables.min.js'; ?>"></script>
  <script src="<?php echo base_url().'assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js'; ?>"></script>
  <script src="<?php echo base_url().'assets/bundles/jquery-ui/jquery-ui.min.js'; ?>"></script>
  <!-- Page Specific JS File -->
  <script src="<?php echo base_url().'assets/js/page/datatables.js'; ?>"></script>
  <!-- Template JS File -->
  <script src="<?php echo base_url().'assets/js/scripts.js'; ?>"></script>
  <!-- Custom JS File -->
  <script src="<?php echo base_url().'assets/js/custom.js'; ?>"></script>
</body>


<!-- datatables.html  21 Nov 2019 03:55:25 GMT -->
</html>