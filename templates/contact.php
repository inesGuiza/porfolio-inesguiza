<!-- SECTION GET IN TOUcH -->
<div id="contact" class="section">
  <div class="fullpage__slide">
    <!-- texte & buton link-->
    <div id="mail" class="title">
      <h2 class="title__text js-letter">Get In Touch</h2>
      <div class="border-yellow js-letter">
        <span class="barre1"></span>
        <span class="barre2 js-letter"></span>
      </div>
      <ul class="get">
        <li class="js-letter">
          <a href="mailt0:ins.guiza@gmail.com">ins.guiza@gmail.com</a>
        </li>
        <li class="js-letter last"> 
          <a class="last" href="https://twitter.com/Ines_gza" target="_blank"><i class="fab fa-twitter"></i></a>
          <a class="last"  href="https://www.instagram.com/ines_gza/?hl=fr" target="_blank"><i class="fab fa-instagram"></i></a>
          <a class="last" href="https://www.linkedin.com/in/in%C3%A8s-guiza-b510b8109/" target="_blank"><i class="fab fa-linkedin"></i></a>
         
        </li>
        <li class="js-letter">
          <p>to have a look at my C.V.</p>
          <a href="<?php echo get_template_directory_uri(); ?>/img/cv_2019_ines.pdf" download>
          <i class="fas fa-file-download fa-lg"></i>
        </a>
        </li>
        <div  id="contact-ines" class="btn-wrap js-letter">
        <a  class="btn" href="#contact-ines">Let's talk</a>
        </div>
      </ul>
    </div>
      <!-- image link -->
    <a class="image image_contact" href="/about.html">
      <div class="couverture">
        <div class="image__over">
          <div class="image__cover"></div>
          <div class="image__cover"></div>
        </div>
      </div>
    </a>
    <div class="border-jaune"></div>
    <!-- number page 03 -->
    <div class="page-num">
      <p>03</p>
    </div>
<div id="contact-form-fond">
<div id="contact-form-ines" class="container contact-form">
    
    <!-- contact form -->
    
        <?php view('partials/notice'); ?>

           <form class="form-class" id="con_form" action="<?= admin_url('admin-post.php') . '?action=send-mail'; ?>#mail" method="post">

 <!-- cette fonction permet une sécurité pour vérifier que le formulaire est authentique -->	 
          <?php wp_nonce_field('send-mail'); ?>
            <div class="row col-pull">
                <div data-ix="close-interaction" class="close-icon btn" ></div>

              <!-- Name -->
              <div class="container pt-3">              
                <div class="title-contact">Hello! Let's work together.</div>
                <div class="row name">
                  <div class="col-sm-6">
                    <input class="text-field w-input" type="text" name="firstname" placeholder="First name" id="firstname" maxlength="256" value="<?= isset($old['firstname']) ? $old['firstname'] : '' ?>">	                
                  </div>

                  <div class="col-sm-6">
                    <input class="text-field w-input" type="text" name="name" placeholder="Last name" id="name" maxlength="256" value="<?= isset($old['name']) ? $old['name'] : '' ?>">	                
                  </div>
                </div>
              </div>

              <!-- email -->
              <div class="col-sm-12">
                <input class="text-field email w-input" type="text" name="email"  id="email" maxlength="256" value="<?= isset($old['email']) ? $old['email'] : '' ?>" placeholder="Email adress"></div>
              <!-- Prénom / subject -->
              <div class="col-sm-12">
                <input class="text-field email w-input" type="text" name="subject" id="subject" maxlength="256" value="<?= isset($old['subject']) ? old['subject'] : '' ?>" placeholder="Subject">
                <!-- message -->
                <textarea class="text-field message-field" name="message" placeholder="Project Description" id="message" maxlength="5000" ><?= $old['message']; ?></textarea>
                <button class="site-btn submit-button w-button" type="submit">send request</button>
              </div>

            </div>
          </form>
   </div>
</div>
</div>
<p class="scrollDown">SCROLL</p>

</main>
</div>