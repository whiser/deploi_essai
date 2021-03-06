<!DOCTYPE html>
<html>
<title>10-20 Technologies</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<link rel="stylesheet" href="css_maintenance.css">
<script type="text/javascript" src="js_maintenance.js"></script>
<?php
require "mail.php";
?>
<body>


  <div class="container-fluid">
    <div class="row" style="margin-top: 20px;">
      <div class="col-lg-2 col-md-1 col-xm-0"></div>
      <div class="col-lg-8 col-md-10 col-xm-12 "><img style="height: 120px;" src="images/logo.png" alt=""></div>
      <div class="col-lg-2 col-md-1 col-xm-0"></div>
    </div>

    <div class="row" style="margin-top: 40px;">
      <div class="col-lg-2 col-md-1 col-xm-0"></div>
      <div class="col-lg-8 col-md-10 col-xm-12">

        <article>
          <h1>Nous reviendrons bientôt . . .</h1>
          <div style="text-align: left;">
          <p>Email : info@1020technologies.com</p>
          <p>Tel : (+229) 62-26-77-77</p>
            <p>&mdash; Cordialement l'équipe</p>
          </div>
          <form id="form" enctype="multipart/form-data" onsubmit="return validate()" method="post">
            <h3>Formulaire de contact</h3>
            <article style="text-align: left;"><label>Nom: <span>*</span></label></article>
            <input type="text" id="name" name="name" placeholder="Nom" />
            <article style="text-align: left;"><label>Email: <span>*</span></label><span id="info" class="info"></span></article>
            <input type="text" id="email" name="email" placeholder="Email" />
            <article style="text-align: left;"><label>Sujet: <span>*</span></label></article>
            <input type="text" id="subject" name="subject" placeholder="Demande de renseignement" />
            <article style="text-align: left;"><label>Message:</label></article>
            <textarea id="message" name="message" placeholder="Message..."></textarea>
            <input type="submit" name="send" value="Envoyer le message" />
            <div id="statusMessage">
              <?php if (!empty($db_msg)) { ?>
                <p class='<?php echo $type_db_msg; ?>Message'><?php echo $db_msg; ?></p>
              <?php } ?>
              <?php if (!empty($mail_msg)) { ?>
                <p class='<?php echo $type_mail_msg; ?>Message'><?php echo $mail_msg; ?></p>
              <?php } ?>
            </div>
          </form>


        </article>

      </div>
      <div class="col-lg-2 col-md-1 col-xm-0"></div>
    </div>

    <div class="row align-items-end">
      <div class="col-lg-2 col-md-1 col-xm-0"></div>
      <div class="col-lg-8 col-md-10 col-xm-12 "><p style="font-size: 12px;">10-20Technologies: Tous droits réserves</p></div>
      <div class="col-lg-2 col-md-1 col-xm-0"></div>
    </div>

  </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
  </script>
</body>

</html>
