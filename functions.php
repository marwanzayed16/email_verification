<?php
function dd($text)
{
  var_dump($text);
  die();
}
function create_sessions($name, $value)
{
  $_SESSION[$name] = $value;
}
function get_sessions($name)
{
  return $_SESSION[$name] ?? false;
}

function redirect($url)
{
  header('Location: ' . $url);
  die();
}
function isEmpty($text)
{
  return isset($text) && $text === '';
}
function createRandomCode()
{
  $chars = "abcdefghijkmnopqrstuvwxyz023456789";
  srand((float)microtime() * 1000000);
  $i = 0;
  $pass = '';
  while ($i < 6) {
    $num = rand() % 33;
    $tmp = substr($chars, $num, 1);
    $pass .= $tmp;
    $i++;
  }
  return $pass;
}
