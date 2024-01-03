<?php

session_start();

$users = [
  array(
    "username" => "ryszard",
    "email" => "ryszard@mail.com"
  ),

  array(
    "username" => "sophie",
    "email" => "sophie.3t@mail.com"
  ),

  array(
    "username" => "rossie",
    "email" => "rossie.ab@mail.com"
  )
];

$user = $_GET["user"] ?? "";

$_SESSION["id"] = $user;
$_SESSION["username"] = $users[$user]["username"];
$_SESSION["email"] = $users[$user]["email"];
