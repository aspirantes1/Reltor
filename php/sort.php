<button class='margin025' name='sortup'>По возрастанию цены</button>
<button class='margin025' name='sortdown'>По убыванию цены</button>
<label for="selected">Выберите по номеру дома</label>
<select name="" id="selected">
     <option selected disabled>Выберите по номеру дома</option>
     <option selected>Все</option>
     <?php
          $connection = new mysqli('127.0.0.1', 'root', '', 'bdb'); 
          $query = $connection->query('SELECT home FROM relts');
          foreach ($query as $prod) {
               echo '<option name="opt">'.$prod['home'].'</option>';
          }
     ?>
</select>
