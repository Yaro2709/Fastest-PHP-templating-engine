{*Старт: время выполнения*}
{nocache}
{$start_timestamp = microtime(true)}
{/nocache}
{*Старт: время выполнения*}

{*Сам код, который явялется условной еденицой измерения*}
{foreach $data as $message}
<p>{$message->code} : {$message->message}</p>
{/foreach}
{*Сам код, который явялется условной еденицой измерения*}