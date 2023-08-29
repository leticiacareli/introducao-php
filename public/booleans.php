<?php

$_SESSION['logged'] = true;

echo $_SESSION['logged'] ? 'usuário logado' : 'usuário deslogado';