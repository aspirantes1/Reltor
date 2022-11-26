
<body class="blur5px margin0 h100 grid">
     <div class='grid aligncontentcenter' style="justify-items: center;">
          <div class='grid marginauto background h100 w100' style="justify-items: center; max-width: 50rem; align-items: center; box-sizing: border-box;">
               <div class="center relative padding025 outline margin025 windowgain w100" style='max-height: 36rem; overflow: auto; grid-template-columns: repeat(auto-fill, minmax(11rem, 10fr));'>
                    <?php                  
                         include 'variants.php';
                    ?>
               </div>
          </div>
          <div class='grid marginauto background h100' style="justify-items: center; max-width: 50rem; align-items: center; box-sizing: border-box;">
               <div class="center relative padding025 outline margin025 windowgain">
                    <div class="grid">
                         <?php                  
                              include 'sort.php';
                         ?>
                    </div>
               </div>
          </div>
          <div class='grid marginauto background h100' style="justify-items: center; max-width: 50rem; align-items: center; box-sizing: border-box;">
               <div class="center relative padding025 outline margin025 windowgain" id='reltor'>
                    <div class="grid">
                         <?php                  
                              if (isset($_SESSION['dostup'])) include 'create.php';
                         ?>
                    </div>
               </div>
          </div>

          <div class='windowgain margin025' style="width: 12rem; height: 5rem; display: grid; justify-items: center; align-content: center;">
               <a class="s11 padding025 borderradius025" href="https://yamal.shop/bitobmen/php/oferta.php">Публичная оферта</a>
               <a class="s11 padding025 borderradius025" href="https://yamal.shop/bitobmen/php/contacts.php">Контакты</a>
               <button class='padding025' name='disconnect'>Дисконнект</button>
               <!-- <img class="padding025" style="width: 100%; box-sizing: border-box;" src=""></img> -->
          </div>
     </div>
</body>