<!-- <footer class="main-footer bg-dark text-white pt-5 pb-3">
  <div class="container">
    <div class="row">
      
    <?php if ( is_active_sidebar( 'footer_widgets' ) ) : ?>
        <?php dynamic_sidebar( 'footer_widgets' ); ?>
    <?php endif; ?>

    </div>
  </div>
</footer>

<div class="copy bg-dark pt-3 pb-3 border-black">
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <p class="small m-0 text-white">Copyright &copy; <?php echo date('Y'); ?>. All Rights Reserved</p>
      </div>
    </div>
  </div>
</div> -->

<!-- join_the_comunity_section -->
<section class="join_the_comunity_section" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="join_the_comunity_card">
                            <p>Are you an <b>investor, laboratory</b> or part of the <b>medical community</b> who wants
                                to be part of this <b>pioneering technology?</b></p>
                            <a href="mailto:info@oxdx.com" class="btn btn-primary">Join the community</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- join_the_comunity_section end -->

<footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="site_logo">
                            <img src="<?php echo get_template_directory_uri(); ?>/pictura/assets/images/logo-black.png" />
                        </div>
                    </div>
                    <!-- <div class="col-md-2">
                        <h6>Sitemap</h6>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">News & Resources</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div> -->
                    <div class="col-md-2">
                        <h6>Contact</h6>
                        <p>Wood Centre for Innovation, Quarry Road, Oxford, OX3 8SB
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <hr />
                        <div class="footer_bottom">
                            <div class="copyrights">
                                <p>© PicturaBio 2022</p>
                            </div>
                            <ul class="footer_navigation">
                                <li><a href="<?php echo get_site_url(); ?>/privacy-policy">Terms</a></li>
                                <li><a href="<?php echo get_site_url(); ?>/privacy-policy">Privacy</a></li>
                                <li><a href="<?php echo get_site_url(); ?>/privacy-policy">Security</a></li>
                            </ul>
                            <!-- <ul class="social_navigation">
                                <li>
                                    <a href="" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                            fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                            <path
                                                d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                            fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                            <path
                                                d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                                        </svg>
                                    </a>
                                </li>
                            </ul> -->
                        </div>
                    </div>
                </div>
            </div>
        </footer>

<!-- Sign-up Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sign-up to Get Started</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php if ( is_active_sidebar( 'sign_up_form' ) ) : ?>
            <?php dynamic_sidebar( 'sign_up_form' ); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>

    <?php wp_footer(); ?>
  </body>
</html>
