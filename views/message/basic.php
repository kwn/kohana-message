<ul id="messages">
	<?php foreach ($messages as $message): ?>
		<li class="<?php echo $message->type ?>"<?php echo HTML::attributes($message->attributes) ?>>
			<p><?php echo $message->text ?></p>
		</li>
	<?php endforeach; ?>
</ul>
