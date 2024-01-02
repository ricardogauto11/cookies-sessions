<?php
  setcookie(
    name: "settings",
    value: "This cookie is available in /settings",
    expires_or_options: time()+60*60*24,
    path: "/cookies/workcookies/settings",
    domain: "cookies-sessions.test",
    secure: false,
    httponly: false
  );

  echo "<pre>";
  var_dump($_COOKIE);
  echo "</pre>";
?>
