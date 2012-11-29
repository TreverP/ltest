<h1>Hello!</h1>
<p>Welcome to <?php echo $place ?>, <?php echo $name ?></p>

<p>Base:<?php echo URL::base(); ?></p>
<p>Current:<?php echo URL::current(); ?></p>
<p>Full:<?php echo URL::full(); ?></p>
<p>To:<?php echo URL::to('home/welcome'); ?></p>


		<!-- This link will take user to ltest.dev/account  -->
<a href="<?php echo URL::to('/account'); ?>">My Page</a>


<div>
<a href="<?php echo URL::to('/admin'); ?>">Admin Page</a>
</div>





