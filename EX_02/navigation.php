<div class="navigation">
        <ul>
<?php
if ($navigation == 'accueil'):?>
<li> <a style="color:#17C1FF" href="vitrine-accueil.php">Accueil</a></li>
<?php else: ?>
    <li><a href="vitrine-accueil.php">Accueil</a></li>
<?php endif; ?>

<?php
if ($navigation=='programme'): ?>
<li><a style="color:#17C1FF" href="vitrine-programme.php">Programme</a></li>
<?php else: ?>
    <li><a href="vitrine-programme.php">Programme</a></li>
<?php endif; ?>

<?php
if ($navigation=='contacts'):?>
<li><a style="color:#17C1FF" href="vitrine-contacts.php">Contacts</a></li>
<?php else: ?>
<li><a href="vitrine-contacts.php">Contacts</a></li>
<?php endif; ?>

    </ul>
</div>