<?php
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Carbon\Carbon;
use Respect\Validation\Validator;
use Dta\Firstcomposer\Domain\Team;

include 'vendor/autoload.php';

$team = new Team('FC Barcelone');

// Create the logger
$logger = new Logger('my_logger');

// Now add some handlers
$logger->pushHandler(new StreamHandler(__DIR__.'/firstcomposer.log', Logger::INFO));


// You can now use your logger
$logger->debug('My logger is getting warm');
$logger->info('My logger is now ready');

$dt = Carbon::create(1978, 8, 25, 3, 0, 0);
$now = Carbon::now();

$strToValidate = "23";
$isValidStr = Validator::numeric()->positive()->max(100)->validate($strToValidate);
?>
<html>
    <body>
    	<h1>Hello PHP with logs and composer !</h1>
    	<h2>My favourite team is <?= $team->name ?></h2>
    	<h2>I was born on <?= $dt->format('Y-m-d H:i:s') ?></h2>
    	<h2>It is exactly <?= $now->diffInSeconds($dt) ?> seconds from now !</h2>
    	<h3>Input is valid : <?= $isValidStr ? 'True' : 'False' ?></h3>
    </body>
</html>