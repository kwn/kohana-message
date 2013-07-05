<div id="messages">
    <?php foreach ($messages as $message): ?>
        <div class="alert <?php echo $message->type ?>" <?php echo HTML::attributes($message->attributes) ?>>
            <?php echo $message->text ?>
        </div>
    <?php endforeach; ?>
</div>