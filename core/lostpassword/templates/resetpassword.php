<form action="<?php echo OC_Helper::linkToRoute('core_lostpassword_reset', $_['args']) ?>" method="post">
	<fieldset>
		<?php if($_['success']): ?>
			<h1><?php echo $l->t('Your password was reset'); ?></h1>
			<p><a href="<?php echo OC_Helper::linkTo('', 'index.php') ?>/"><?php echo $l->t('To login page'); ?></a></p>
		<?php else: ?>
			<p>
				<input type="password" name="password" id="password"
					placeholder="<?php echo $l->t( 'New password' ); ?>"
					required
				/>
			</p>
			
			<input type="submit" id="submit" value="<?php echo $l->t('Reset password'); ?>" />
		<?php endif; ?>
	</fieldset>
</form>
