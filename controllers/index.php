<?php

$tasks = $db->selectAll('todos');

require 'views/index.view.php';