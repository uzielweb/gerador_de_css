<?php 
$coresNomes = array('azul','verde','amarelo','rosa','vermelho','azul-claro','laranja','verde-agua','verde-limao');
$coresHex = array('#1c5c98','#2FB141','#FEFE00','#D4145A','#C1272C','#83BECC','#F8931F','#03f0d0','#7df52e');
?>
<?php
require 'coresTexto.php';
require 'coresFundo.php';
require 'coresBorda.php';
?>
<?php foreach ($coresNomes as $key=>$corNome) : ?>
    <?php foreach ($classesTexto as $cc=>$classeTexto) : ?>
        <?php $estaClasseTexto = (($cc%count($classesTexto) == (count($classesTexto) - 1))) ? $classeTexto.'' : $classeTexto.',' ; ?>
        <?php  echo '.'.$corNome.' '.$estaClasseTexto.'<br />';?>
    <?php endforeach;?>
{<br />
   color:   <?php echo $coresHex[$key];?>
   <br />
  }
  <br />
  <br />
    <?php endforeach;?>

    <?php foreach ($coresNomes as $key=>$corNome) : ?>
#sp-header .sp-column .sp-module:first-child .sp-megamenu-parent>li:nth-child(<?php echo count($coresNomes);?>n+<?php echo ($key + 1);?>).active>a,<br />
#sp-header .sp-column .sp-module:last-child .sp-megamenu-parent>li:nth-child(<?php echo count($coresNomes);?>n+<?php echo (count($coresNomes) - $key);?>).active>a,<br />
#sp-header .sp-column .sp-module:first-child .sp-megamenu-parent>li:nth-child(<?php echo count($coresNomes);?>n+<?php echo ($key + 1);?>):hover>a,<br />
#sp-header .sp-column .sp-module:first-child .sp-megamenu-parent>li:nth-child(<?php echo count($coresNomes);?>n+<?php echo ($key + 1);?>):focus>a,<br />
#sp-header .sp-column .sp-module:last-child .sp-megamenu-parent>li:nth-child(<?php echo count($coresNomes);?>n+<?php echo (count($coresNomes) - $key);?>):hover>a,<br />
#sp-header .sp-column .sp-module:last-child .sp-megamenu-parent>li:nth-child(<?php echo count($coresNomes);?>n+<?php echo (count($coresNomes) - $key);?>):focus>a,<br />

    
    <?php foreach ($classesFundo as $cc=>$classeFundo) : ?>


    
        <?php $estaClasseFundo = (($cc%count($classesFundo) == (count($classesFundo) - 1))) ? $classeFundo.'' : $classeFundo.',' ; ?>
        <?php  echo '.'.$corNome.' '.$estaClasseFundo.'<br />';?>
    <?php endforeach;?>
    {<br />
   background-color:   <?php echo $coresHex[$key];?>;
   <br />
   color: #fff;
   <br />
  }
  <br />
  <br />
<?php endforeach;?>


<?php foreach ($coresNomes as $key=>$corNome) : ?>
#sp-header .sp-column .sp-module:first-child .sp-megamenu-parent>li:nth-child(<?php echo count($coresNomes);?>n+<?php echo ($key + 1);?>)>a,<br />
#sp-header .sp-column .sp-module:last-child .sp-megamenu-parent>li:nth-child(<?php echo count($coresNomes);?>n+<?php echo (count($coresNomes) - $key);?>)>a,<br />
.mynews .owl-item:nth-child(<?php echo count($coresNomes);?>n+<?php echo (count($coresNomes) - $key);?>) .inner_news,<br />
    <?php foreach ($classesBorda as $cc=>$classeBorda) : ?>
        <?php $estaClasseBorda = (($cc%count($classesBorda) == (count($classesBorda) - 1))) ? $classeBorda.'' : $classeBorda.',' ; ?>
        <?php  echo '.'.$corNome.' '.$estaClasseBorda.'<br />';?>
    <?php endforeach;?>
{<br />
   border-color:   <?php echo $coresHex[$key];?>
   <br />
  }
  <br />
  <br />
    <?php endforeach;?>