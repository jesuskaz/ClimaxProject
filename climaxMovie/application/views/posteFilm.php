<!DOCTYPE html>
<html lang="en">


<!-- auth-register.html  21 Nov 2019 04:05:01 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Climax</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/css/app.min.css'; ?>">
  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/css/style.css' ;?>">
  <link rel="stylesheet" href="<?php echo base_url().'assets/css/components.css'; ?>">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/css/custom.css'; ?>">
  <link rel='shortcut icon' type='image/x-icon' href="<?php echo base_url().'assets/img/favicon.ico';?>"/>
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="card card-primary">
              <!-- Display Message -->
              <b><?php if(isset($filenames)) echo "Success uploaded ".count($filenames)." files"; ?></b>
              <b><?php if(isset($error)) echo "Erreur, verifiez très bien votre fichier"; ?></b>
              <!-- Form -->
              <div class="card-header">
                <h4>Poster FIlm</h4>
              </div>
              <div class="card-body">
                <form method="post" action="<?php echo site_url('poster/uploader'); ?>" class="needs-validation" novalidate="" enctype="multipart/form-data">
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="titre">Titre</label>
                      <input id="titre" type="text" class="form-control" name="titre" tabindex="1" required autofocus>
                      <div class="invalid-feedback">
                        Veuillez remplir ce champs.
                      </div>
                    </div>
                    <div class="form-group col-6">
                      <label for="type">Type</label>
                      <select id="type" type="text" class="form-control" name="type" tabindex="2">
                        <option value="type1"> Type1 </option>
                        <option value="type2"> Type2 </option>
                        <option value="type3"> Type3 </option>
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="heureDebut">Heure début</label>
                      <input id="heureDebut" type="time" class="form-control" name="heureDebut" required>
                      <div class="invalid-feedback">
                        Veuillez remplir ce champs.
                      </div>
                    </div>
                    <div class="form-group col-6">
                        <label for="heureFin" class="d-block">Heure fin</label>
                        <input id="heureFin" type="time" class="form-control pwstrength" data-indicator="pwindicator" required
                          name="heureFin">
                        <div id="pwindicator" class="pwindicator">
                          <div class="bar"></div>
                          <div class="label"></div>
                        </div>
                        <div class="invalid-feedback">
                        Veuillez remplir ce champs.
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="jourDiffusion" class="d-block">Jour diffusion </label>
                      <input id="jourDiffusion" type="date" class="form-control" name="jourDiffusion" required>
                      <div class="invalid-feedback">
                        Veuillez remplir ce champs.
                      </div>
                    </div>
                    <div class="form-group col-6">
                      <label for="film" class="d-block"> Film </label>
                      <input id="film" type="file" class="form-control" name="files[]" required multiple="">
                      <div class="invalid-feedback">
                        Veuillez remplir ce champs.
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="desc" class="d-block">Description </label>
                      <textarea id="desc" type="text" class="form-control" name="des" cols="100" rows="20" required></textarea>
                      <div class="invalid-feedback">
                        Veuillez remplir ce champs.
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="submit" name="upload" class="btn btn-primary btn-lg btn-block" value = "Valider" id="swal-2"/>
                  </div>
                  <div class="form-group">
                    <a href="<?php echo site_url('poster/espaceAdmin'); ?>">
                        <p type="text" class="btn btn-primary btn-lg btn-block"> Retour </p>
                    </a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- General JS Scripts -->
  <script src="<?php echo base_url().'assets/js/app.min.js'; ?>"></script>
  <!-- JS Libraies -->
  <script src="<?php echo base_url().'assets/bundles/jquery-pwstrength/jquery.pwstrength.min.js'; ?>"></script>
  <script src="<?php echo base_url().'assets/bundles/jquery-selectric/jquery.selectric.min.js'; ?>"></script>
  <!-- Page Specific JS File -->
  <script src="<?php echo base_url().'assets/js/page/auth-register.js'; ?>"></script>
  <!-- Template JS File -->
  <script src="<?php echo base_url().'assets/js/scripts.js'; ?>"></script>
  <!-- Custom JS File -->
  <script src="<?php echo base_url().'assets/js/custom.js'; ?>"></script>
  <script src="<?php echo base_url().'assets/bundles/sweetalert/sweetalert.min.js'; ?>"></script>
  <!-- Page Specific JS File -->
  <script src="<?php echo base_url().'assets/js/page/sweetalert.js'; ?>"></script>
</body>

<!-- auth-register.html  21 Nov 2019 04:05:02 GMT -->
</html>