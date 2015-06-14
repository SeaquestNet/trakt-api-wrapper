<?php
/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 01/03/15
 * Time: 22:52
 */

namespace Wubs\Trakt\Media;


use League\OAuth2\Client\Token\AccessToken;
use Wubs\Trakt\ClientId;

class Episode extends Media
{

    protected $standard = ["season", "number", "title", "ids"];

    /**
     * @var Show
     */
    protected $show;

    public function __construct($json, ClientId $clientClientId, AccessToken $token)
    {
        parent::__construct($json, $clientClientId, $token);
        $this->episode = $this->json->episode;
    }

    public function getTitle()
    {
        return $this->episode->title;
    }

    public function getIds()
    {
        return $this->episode->ids;
    }

    public function getShow()
    {
        return new Show($this->json->show, $this->id, $this->token);
    }

    public function getSeasonNumber()
    {
        return $this->episode->season;
    }

    public function getEpisodeNumber()
    {
        return $this->episode->number;
    }
}