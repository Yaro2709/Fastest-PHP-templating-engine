<html><head></head><body>
    <?php foreach($data as $message): ?>
        <p>
            <?=$this->e($message->code)?> : <?=$this->e($message->message)?>
        </p>
    <?php endforeach ?>
</body></html>