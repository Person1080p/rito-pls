<?php

namespace App\Riot;

use RiotAPI\LeagueAPI\LeagueAPI;
use RiotAPI\Base\Definitions\Region;


class RiotClient {
    static function getSummoner($summonerName)
    {
                //  Initialize the library
        $api = new LeagueAPI([
            //  Your API key, you can get one at https://developer.riotgames.com/
            LeagueAPI::SET_KEY    => 'RGAPI-da64529b-ca79-4d1f-b08a-914432bb3050',
            //  Target region (you can change it during lifetime of the library instance)
            LeagueAPI::SET_REGION => Region::NORTH_AMERICA,
        ]);

        //  And now you are ready to rock!
        $summoner = $api->getSummonerByName($summonerName);

//         echo $summoner->id;             //  KnNZNuEVZ5rZry3I...
// echo $summoner->puuid;          //  rNmb6Rq8CQUqOHzM...
// echo $summoner->name;           //  I am TheKronnY
// echo $summoner->summonerLevel;  //  69

        return $summoner;
    }
}