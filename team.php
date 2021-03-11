<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include './header.php';
?>






    <section class="bg-white text-dark pt-5 pb-5" style="user-select: auto;">
      <div class="container" style="user-select: auto;">
        <div class="row text-center" style="user-select: auto;">
          <div class="col" style="user-select: auto;">
            <h3 class="display-5 mb-4" style="user-select: auto;">Our Team</h3>
          </div>
        </div>
          
          
          
        <div class="row text-center mt-md-5 justify-content-center"
          style="user-select: auto;">
            
            
          <?php 
          
          //$photo='https://via.placeholder.com/200/007bff/ffffff';
          $photo=array("https://via.placeholder.com/200/007bff/ffffff", "https://via.placeholder.com/200/007bff/ffffff", "https://via.placeholder.com/200/007bff/ffffff", "https://via.placeholder.com/200/007bff/ffffff","https://via.placeholder.com/200/007bff/ffffff");
          //$name='Name';
          $name = array("name1", "name2", "name3", "name4","name5");
          $designation=array("designation1", "designation2", "designation3", "designation4","designation5");
          $staff='5';
          

          for ($x = 0; $x < $staff; $x++) {
                ?>  
                        
          <div class="col-md-4 col-12 mb-5" style="user-select: auto;">
            <img alt="image" class="img-fluid rounded-circle mt-3 mb-4 shadow"
              src="<?php echo $photo[$x] ?>"
              style="user-select: auto;">
            <h3 style="user-select: auto;"><strong
                style="user-select: auto;"><?php echo $name[$x] ?></strong></h3>
            <p style="user-select: auto;"><?php echo $designation[$x] ?></p>
           </div>
          
           <?php 
              }
             ?>
          
            
            
          

        </div>
      </div>
    </section>


<?php
include './footer.php';

