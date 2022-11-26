
<form novalidate class="grid" onsubmit="event.preventDefault()" id='redreltor'>
          <p hidden id='postid'><?php echo $_POST['id']?></p>
          <strong align='center'>Релтор</br>Добавить</br></br></strong>
          <div class='flexbit'>
               <input class="form_left w100" type="text" id='redname' name="name" placeholder="Название объявления" value='<?php echo $_POST['name']?>'  required>
               <span class='form_right' style="width: 15rem;" for="name">Название объявления</span>
          </div>
</br>
          <div class='flexbit'>
               <input class="form_left w100" type="text" id='redstreet' name="street" placeholder="Название улицы" value='<?php echo $_POST['street']?>' required>
               <span class='form_right' style="width: 15rem;" for="street">Название улицы</span>
          </div>
</br>
          <div class='flexbit'>
               <input class="form_left w100" type="text" id='redhome' name="home" placeholder="Номер дома" value='<?php echo $_POST['home']?>' required>
               <span class='form_right' style="width: 15rem;" for="home">Номер дома</span>
          </div>
</br>
          <div class='flexbit'>
               <input class="form_left w100" type="text" id='redflat' name="flat" placeholder="Номер квартиры" value='<?php echo $_POST['flat']?>' required>
               <span class='form_right' style="width: 15rem;" for="flat">Номер квартиры</span>
          </div>
</br>
          <div class='flexbit'>
               <input class="form_left w100" type="text" id='redprice' name="price" placeholder="Цена" value='<?php echo $_POST['price']?>' required>
               <span class='form_right' style="width: 15rem;" for="price">Цена</span>
          </div>
</br>
          <div class='flexbit'>
               <span class='form_one' style="width: 8rem;" for="actual">Опубликовать</span>
               <input class="form_left margin0" style="width: 2rem;" type="checkbox" id='redactual' name="actual" placeholder="Опубликовать" <?php if ($_POST['actual'] == 'on') echo 'checked'?> required>
          </div>
</br>
          <form enctype="multipart/form-data" action="__URL__" method="POST">
               <input type="hidden" name="MAX_FILE_SIZE" value="5" />
               <!-- Название элемента input определяет имя в массиве $_FILES -->
               <input name="userfile" id='redfile' type="file"/>
          </form>
</br>
          <button name="btn_redact" class=''>Редактировать</button>
     </form>