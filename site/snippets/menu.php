<nav role="navigation">

  <ul class="menu cf">
    <?php foreach($pages->visible() as $p): ?>
    <li>

      <?php if($p->title()->html() == "Artwork" || $p->title()->html() == "Exibithions") { ?>
        <a <?php e($p->isOpen(), ' class="active"') ?> href="#"><?php echo $p->title()->html() ?></a>
      <?php } else { ?>
        <a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
      <?php } ?>      

      <?php if($p->title()->html() == "Artwork") { ?>
        <ul class="submenu">          
          <li>
            <a href=<?php echo $p->url()."/tag:drawing"?>>Drawings</a>
          </li>
          <li>
            <a href=<?php echo $p->url()."/tag:painting"?>>Paintings</a>
          </li>
          <li>
            <a href=<?php echo $p->url()."/tag:photographs"?>>Photographs</a>
          </li>
          <li>
            <a href=<?php echo $p->url()."/tag:video"?>>Video</a>
          </li>
          <li>
            <a href=<?php echo $p->url()."/tag:sound"?>>Sound</a>
          </li>                                        
        </ul>
      <?php } ?>  

      <?php if($p->title()->html() == "Exibithions") { ?>
        <ul class="submenu">          
          <li>
            <a href=<?php echo $p->url()."/tag:solo"?>>Solo</a>
          </li>
          <li>
            <a href=<?php echo $p->url()."/tag:group"?>>Group</a>
          </li>                                      
        </ul>
      <?php } ?> 

      <?php if($p->hasVisibleChildren()): ?>        
      <ul class="submenu">
        <?php foreach($p->children()->visible() as $p): ?>
        <li>
          <a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
        </li>
        <?php endforeach ?>
      </ul>
      <?php endif ?>

    </li>
    <?php endforeach ?>
  </ul>

</nav>
