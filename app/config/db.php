<?php

  $connect = mysqli_connect(
    'db', # service name,
    'admin', # username
    'password', # password
    'simpl_forum' # db name
  );

  if(!$connect) {
    echo "Database connection failed";
  }