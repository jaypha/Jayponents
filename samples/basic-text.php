<?php
//----------------------------------------------------------------------------
//
//----------------------------------------------------------------------------

use Jaypha\Jayponents\Component;
use Jaypha\Jayponents\PhpTextAdaptor;

require "../vendor/autoload.php";

$textEngine = new PhpTextAdaptor();
$page = new Component();
$page->setTemplate('
<body>
<?php $content->display(); ?>
</body>
');
$page->setEngine($textEngine);
$page->set("title", "User Profile");

$content = new Component();
$content->setTemplate("profile.tpl");
$content->setVars([ "name" => "Jonathon", "word" => "ser&pity" ]);

$page->set("content", $content);
$page->display();

//echo $page;

//----------------------------------------------------------------------------
// Copyright (C) 2017 Jaypha.
// License: BSL-1.0
// Author: Jason den Dulk
//
