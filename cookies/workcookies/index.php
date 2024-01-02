<?php

  if (!isset($_COOKIE['working_with_cookie'])) {
      setcookie(
        name: "working_with_cookie",
        value: "1000usd",
        expires_or_options: time()+60*60,
        path: "/",
        domain: "cookies-sessions.test",
        secure: false,
        httponly: true 
      );

      echo "Cookie creada";
  }

  echo "<pre>";
  var_dump($_COOKIE);
  echo "</pre>";

?>
