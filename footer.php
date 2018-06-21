 <footer> 
  <section> 
   
       <div class="container footer">
        <div class="row">
        <div class="col-md-4">
          
          <?php dynamic_sidebar('footer-1'); ?>

        </div>
        <div class="col-md-4">

        <?php dynamic_sidebar('footer-2'); ?>

        </div>
        <div class="col-md-4">

         <?php dynamic_sidebar('footer-3'); ?> 
         
        </div>
    </div>
 </div>

<!-- copy-right area -->
<div class="container-fluid bc-color"> 
  <div class="copyright text-center">
          <span><?php
        /* translators: 1: Theme name, 2: Theme author. */
        printf( esc_html__( 'Copyright @ 2018 -Theme: %1$s by %2$s.', 'biztechub' ), 'Make', '<a href="https://biztechub.com/">biztechub</a>' );
        ?></span>
        </div>
      </div>
</div>
  </section>

    <?php wp_footer(); ?>
   </footer>

</body>
</html>