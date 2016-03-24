<?php
/**
 * Created by PhpStorm.
 * User: sheaoneill
 * Date: 24/03/16
 * Time: 09:27
 */
foreach ($verses as $verse) :
    
?>

<tr>
    <td><?=$verse->getId() ?></td>
    <td><?=$verse->getHeading() ?></td>
    <td><?=$verse->getSubheading1() ?></td>
    <td><?=$verse->getSubheading2() ?></td>
    <td><?=$verse->getParagraph() ?></td>
    
    </tr>
    
<?php
    
endforeach;

?>