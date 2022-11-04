<?php
$nav = "Contact";
require_once('./elements/header.php')
?>

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/contact-header0.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center">

      <h2>Contact</h2>
      <ol>
        <li><a href="index.php">Acceuil</a></li>
        <li>Contact</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container position-relative" data-aos="fade-up">

      <div class="row gy-4 d-flex justify-content-end">

        <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">

          <div class="info-item d-flex">
            <i class="bi bi-geo-alt flex-shrink-0"></i>
            <div>
              <h4>Location:</h4>
              <p>Headquarters Canada : 3709 rue Jérémie Laval(Québec) H7P5G4 Canada</p>
              <p>1er Arrondissement Bas de Gué-Gué, Avenue Henri MOUKILI, Libreville GABON</p>
            </div>
          </div><!-- End Info Item -->

          <div class="info-item d-flex">
            <i class="bi bi-envelope flex-shrink-0"></i>
            <div>
              <h4>Email:</h4>
              <p>contact@afriknegoce.com</p>
            </div>
          </div><!-- End Info Item -->

          <div class="info-item d-flex">
            <i class="bi bi-phone flex-shrink-0"></i>
            <div>
              <h4>Téléphone:</h4>
              <p>+1 (514) 224-7012</p>
              <p>+241 62 11 02 71</p>
            </div>
          </div><!-- End Info Item -->

        </div>

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">

          <form action="" method="post" role="form" class="">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Votre Nom" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Votre Adresse Mail" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading"></div>
              <div class="error-message"></div>
              <div class="sent-message"></div>
            </div>
            <div class="text-center"><button type="submit" class="btn btn-primary">Envoyer</button></div>
          </form>

        </div><!-- End Contact Form -->

      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->



<?php
require_once('./elements/footer.php')
?>