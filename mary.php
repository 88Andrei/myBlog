<?php
      $friends = array( array("#"=>"1", "Name"=>"Вася" , "number"=>380955005555),
                        array("#"=>"2", "Name"=>"Света", "number"=>380955005551),
                        array("#"=>"3", "Name"=>"Саша", "number"=>380955005552) 
                        ); 
      if (count($friends) > 0): ?>
          <table border="1";>
            <thead>
              <tr>
                <th><?php echo implode('</th><th>', array_keys(current($friends))); ?></th>
              </tr>
             </thead>
                <tbody>
      <?php foreach ($friends as $row): array_map('htmlentities', $row); ?>
          <tr>
            <td><?php echo implode('</td><td>', $row); ?></td>
          </tr>
      <?php endforeach; ?>
        </tbody>
      </table>
      <?php endif; 
      ?>