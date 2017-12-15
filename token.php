<?php

require "init.php";

echo($clientToken = Braintree_ClientToken::generate());