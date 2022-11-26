
     <form novalidate class="grid" onsubmit="event.preventDefault()">
          <strong align='center'>Релтор</br>Добавить</br></br></strong>
          <div class='flexbit'>
               <input class="form_left w100" type="text" id='name' name="name" placeholder="Название объявления" required>
               <span class='form_right' style="width: 15rem;" for="name">Название объявления</span>
          </div>
</br>
          <div class='flexbit'>
               <input class="form_left w100" type="text" id='street' name="street" placeholder="Название улицы" required>
               <span class='form_right' style="width: 15rem;" for="street">Название улицы</span>
          </div>
</br>
          <div class='flexbit'>
               <input class="form_left w100" type="text" id='home' name="home" placeholder="Номер дома" required>
               <span class='form_right' style="width: 15rem;" for="home">Номер дома</span>
          </div>
</br>
          <div class='flexbit'>
               <input class="form_left w100" type="text" id='flat' name="flat" placeholder="Номер квартиры" required>
               <span class='form_right' style="width: 15rem;" for="flat">Номер квартиры</span>
          </div>
</br>
          <div class='flexbit'>
               <input class="form_left w100" type="text" id='price' name="price" placeholder="Цена" required>
               <span class='form_right' style="width: 15rem;" for="price">Цена</span>
          </div>
</br>
          <div class='flexbit'>
               <span class='form_one' style="width: 8rem;" for="actual">Опубликовать</span>
               <input class="form_left margin0" style="width: 2rem;" type="checkbox" id='actual' name="actual" placeholder="Опубликовать" required>
          </div>
</br>
          <form enctype="multipart/form-data" action="__URL__" method="POST">
               <input type="hidden" name="MAX_FILE_SIZE" value="5" />
               <!-- Название элемента input определяет имя в массиве $_FILES -->
               <input name="userfile" id='file' type="file"/>
          </form>
</br>
          <button name="btn_add" class=''>Добавить</button>
     </form>