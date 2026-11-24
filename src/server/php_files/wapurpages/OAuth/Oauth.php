<?php

$Redirect = "https://discord.com/oauth2/authorize?client_id=1212475406834208788&response_type=code&redirect_uri=http%3A%2F%2Flocalhost%3A8000%2Fsrc%2Fserver%2Fphp_files%2Fwapurpages%2FOAuth%2FProcess-Oauth.php&scope=identify+guilds";
header("Location: $Redirect");
exit();

?>