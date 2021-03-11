<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include './header.php';
?>







     <section class="pt-5 pb-5" style="user-select: auto;">
      <div class="container" style="user-select: auto;">
        <div class="row" style="user-select: auto;">
          <div class="col-md-3 col-sm-12" style="user-select: auto;">
            <div class="list-group" id="list-tab" role="tablist"
              style="user-select: auto;">
                
                <?php

$tablist = array("Home", "Profile", "Messages", "Settings");
$tablistnote= array("Cupidatat quis ad sint excepteur
                  laborum in esse qui. Et excepteur consectetur ex nisi eu do
                  cillum ad laborum. Mollit et eu officia dolore sunt Lorem
                  culpa qui commodo velit ex amet id ex. Officia anim incididunt
                  laboris deserunt
                  anim aute dolor incididunt veniam aute dolore do exercitation.
                  Dolor nisi culpa ex ad irure in elit eu dolore. Ad laboris
                  ipsum reprehenderit irure non commodo enim culpa commodo
                  veniam incididunt veniam ad.", "Cupidatat quis ad sint excepteur
                  laborum in esse qui. Et excepteur consectetur ex nisi eu do
                  cillum ad laborum. Mollit et eu officia dolore sunt Lorem
                  culpa qui commodo velit ex amet id ex. Officia anim incididunt
                  laboris deserunt
                  anim aute dolor incididunt veniam aute dolore do exercitation.
                  Dolor nisi culpa ex ad irure in elit eu dolore. Ad laboris
                  ipsum reprehenderit irure non commodo enim culpa commodo
                  veniam incididunt veniam ad.", "Cupidatat quis ad sint excepteur
                  laborum in esse qui. Et excepteur consectetur ex nisi eu do
                  cillum ad laborum. Mollit et eu officia dolore sunt Lorem
                  culpa qui commodo velit ex amet id ex. Officia anim incididunt
                  laboris deserunt
                  anim aute dolor incididunt veniam aute dolore do exercitation.
                  Dolor nisi culpa ex ad irure in elit eu dolore. Ad laboris
                  ipsum reprehenderit irure non commodo enim culpa commodo
                  veniam incididunt veniam ad.", "Cupidatat quis ad sint excepteur
                  laborum in esse qui. Et excepteur consectetur ex nisi eu do
                  cillum ad laborum. Mollit et eu officia dolore sunt Lorem
                  culpa qui commodo velit ex amet id ex. Officia anim incididunt
                  laboris deserunt
                  anim aute dolor incididunt veniam aute dolore do exercitation.
                  Dolor nisi culpa ex ad irure in elit eu dolore. Ad laboris
                  ipsum reprehenderit irure non commodo enim culpa commodo
                  veniam incididunt veniam ad.");
$activetab= "Home";
$tabno='4';

for ($x = 0; $x < $tabno; $x++) {
 ?>
              <a class="list-group-item list-group-item-action show <?php
if ($activetab == $tablist[$x] ) {echo "active";}
?>"
                id="list-<?php echo strtolower($tablist[$x]) ?>-list" data-toggle="tab" href="#list-<?php echo strtolower($tablist[$x]) ?>"
                role="tab" aria-controls="list-<?php echo strtolower($tablist[$x]) ?>" aria-expanded="true"
                aria-selected="true" style="user-select: auto;"><?php echo $tablist[$x] ?></a>
              
                <?php
}
?>
            </div>
          </div>
          <div class="col-md-9 col-xs-12" style="user-select: auto;">
            <div class="tab-content" id="nav-tabContent"
              style="user-select: auto;">
                <?php
                for ($y = 0; $y < $tabno; $y++) {
                    ?>
                
              <div class="tab-pane fade <?php
if ($activetab == $tablist[$y] ) {echo 'active show';}
?>" id="list-<?php echo strtolower($tablist[$y]) ?>"
                role="tabpanel" aria-labelledby="list-<?php echo strtolower($tablist[$y]) ?>-list"
                aria-expanded="<?php
if ($activetab == $tablist[$y] ) {echo 'true';}else{echo 'false';}
?>" style="user-select: auto;">
                <h3 style="user-select: auto;"><?php echo $tablist[$y] ?></h3>
                <p style="user-select: auto;"><?php echo $tablistnote[$y] ?>
                </p>
              </div>
                
                <?php
                }
?>
               
              
              
            </div>
          </div>
        </div>
      </div>
    </section>


<?php
include './footer.php';

