<h1>Hello!</h1>
<p>Welcome to <?php echo $place ?>, <?php echo $name ?></p>

<p>Base:<?php echo URL::base(); ?></p>
<p>Current:<?php echo URL::current(); ?></p>
<p>Full:<?php echo URL::full(); ?></p>
<p>To:<?php echo URL::to('home/welcome'); ?></p>

<!-- <a href="<?php echo URL::to('home/welcome', array('trever','home')); ?>" > My Page</a> -->



