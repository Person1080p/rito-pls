<?php

echo "ndkfgnmdfg";

//  Include all required files (installation via Composer is required)
require_once __DIR__  . "/vendor/autoload.php";

use RiotAPI\LeagueAPI\LeagueAPI;
use RiotAPI\Base\Definitions\Region;

//  Initialize the library
$api = new LeagueAPI([
	//  Your API key, you can get one at https://developer.riotgames.com/
	LeagueAPI::SET_KEY    => 'RGAPI-da64529b-ca79-4d1f-b08a-914432bb3050',
	//  Target region (you can change it during lifetime of the library instance)
	LeagueAPI::SET_REGION => Region::NORTH_AMERICA,
]);

//  And now you are ready to rock!
$summoner = $api->getSummonerByName("NotVechs");
echo $summoner->id;             //  KnNZNuEVZ5rZry3I...
echo $summoner->puuid;          //  rNmb6Rq8CQUqOHzM...
echo $summoner->name;           //  I am TheKronnY
echo $summoner->summonerLevel;  //  69

print_r($summoner->getData());  //  Or array of all the data

?>