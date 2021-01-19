<?php

use CourtagePro\Entity\User;
use Orpheus\InputController\HTTPController\HTTPRequest;
use Orpheus\InputController\HTTPController\HTTPRoute;
use Orpheus\Rendering\HTMLRendering;
use Orpheus\Rendering\Menu\MenuItem;
use Sowapps\Controller\Admin\AbstractAdminController;

/**
 * @var HTMLRendering $rendering
 * @var AbstractAdminController $Controller
 * @var HTTPRequest $Request
 * @var HTTPRoute $Route
 *
 * @var string $menu
 * @var MenuItem[] $items
 */

$invertedStyle = $Controller->getOption('invertedStyle', 1);
$user = User::getLoggedUser();

?>
<div id="layoutSidenav_nav">
	<nav class="sb-sidenav accordion <?php echo $invertedStyle ? 'sb-sidenav-dark' : 'sb-sidenav-light'; ?>" id="sidenavAccordion">
		<div class="sb-sidenav-menu">
			
			<div class="nav menu <?php echo $menu; ?>">
				<div class="sb-sidenav-menu-heading"><?php echo t($menu); ?></div>
				<?php
				foreach( $items as $item ) {
					?>
					<a class="nav-link menu-item<?php echo (isset($item->route) ? ' ' . $item->route : '') . (!empty($item->current) ? ' active' : ''); ?>" href="<?php echo $item->link; ?>">
						<?php echo $item->label; ?>
					</a>
					<?php
				}
				?>
			</div>
		
		</div>
		<div class="sb-sidenav-footer">
			<?php
			if( $user ) {
				?>
				<div class="small">Connecté en tant que:</div>
				<?php echo $user; ?> (#<?php echo $user->id(); ?>)
				<div class="small">Adresse IP:</div>
				<?php echo clientIP();
			}
			?>
		</div>
	</nav>
</div>
