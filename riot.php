<?php


//  Include all required files (installation via Composer is required)
require_once __DIR__  . "/../vendor/autoload.php";

use RiotAPI\LeagueAPI\LeagueAPI;
use RiotAPI\Base\Definitions\Region;


// class RiotClient {
//     static function getSummoner($summonerName)
//     {
//                 //  Initialize the library
//         $api = new LeagueAPI([
//             //  Your API key, you can get one at https://developer.riotgames.com/
//             LeagueAPI::SET_KEY    => '',
//             //  Target region (you can change it during lifetime of the library instance)
//             LeagueAPI::SET_REGION => Region::NORTH_AMERICA,
//         ]);

//         //  And now you are ready to rock!
//         $summoner = $api->getSummonerByName($summonerName);

// //         echo $summoner->id;             //  KnNZNuEVZ5rZry3I...
// // echo $summoner->puuid;          //  rNmb6Rq8CQUqOHzM...
// // echo $summoner->name;           //  I am TheKronnY
// // echo $summoner->summonerLevel;  //  69

//         return $summoner;
//     }
// }

//  Initialize the library
$api = new LeagueAPI([
	//  Your API key, you can get one at https://developer.riotgames.com/
	LeagueAPI::SET_KEY    => '',
	//  Target region (you can change it during lifetime of the library instance)
	LeagueAPI::SET_REGION => Region::NORTH_AMERICA,
]);
print_r($api);
//  And now you are ready to rock!
$summoner = $api->getSummonerByName("NotVechs");
echo $summoner->id;             //  KnNZNuEVZ5rZry3I...
echo $summoner->puuid;          //  rNmb6Rq8CQUqOHzM...
echo $summoner->name;           //  I am TheKronnY
echo $summoner->summonerLevel;  //  69

$league= $api-getSummonerByName("NotVechs");
echo $summoner->tier;
echo $summoner->rank;