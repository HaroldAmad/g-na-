<?php

declare(strict_types=1);

function create_user_description(object $pdo, int $user_id, string $profile_text) 
{
    set_description($pdo, $user_id, $profile_text);
}
?>
