<?php
     $connection = new mysqli('127.0.0.1', 'root', '', 'bdb'); 
     $query = $connection->query('SELECT * FROM relts');

     foreach ($query as $prod) { 
          // Путь картинки.
          if ($prod['actual'] == 'on' or isset($_SESSION['dostup'])) {
               $img = $prod["image"];
               $exists = false;
               if (isset($img) and @file($img)) $exists = true;
               if (!$exists) $img = '../img/no__image.svg';
?>   
               <div class="grid center padding025" name='vars'>
                    <p hidden id='actual<?php echo $prod['id'];?>'><?php echo $prod['actual'];?></p>
                    <img id='img<?php echo $prod['id'];?>' style='max-width: 10rem;'  src="<?php echo $img;?>">
                    <p>Цена: </p><p name='price' id='price<?php echo $prod['id'];?>' ><?php echo $prod['price'];?></p>
                    <p id='name<?php echo $prod['id'];?>'  title="<?php echo $prod['name'];?>"><b><?php echo $prod['name'];?></b></p>
                    <p><?php echo 'ул.<span id="street'.$prod['id'].'">'.$prod['street'].'</span> <span name="home" id="home'.$prod['id'].'">'.$prod['home'].'</span>-<span id="flat'.$prod['id'].'">'.$prod['flat'].'</span>';?> </p>
                         <?php
                              if (isset($_SESSION['dostup']) and $_SESSION['dostup'] == 'reltor') {
                         ?>
                                   <button name="btn_red" id='<?php echo $prod['id'];?>' class=''>Редактировать</button>
                                   <?php 
                              }
               echo '</div>';
          }
     }
     $query->close();
?>
