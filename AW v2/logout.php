<?php
  session_start();

  session_unset();

  session_destroy();

  header('Location: /Examen AW v2');
?>