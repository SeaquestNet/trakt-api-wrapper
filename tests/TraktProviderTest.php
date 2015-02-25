<?php
use Wubs\Trakt\Provider\TraktProvider;

/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 22/02/15
 * Time: 13:13
 */
class TraktProviderTest extends PHPUnit_Framework_TestCase
{
    public function testProviderCanBeInitiated()
    {
        $provider = new TraktProvider(getenv("CLIENT_ID"), getenv("CLIENT_SECRET"), getenv("TRAKT_REDIRECT_URI"));

        $this->assertInstanceOf('Wubs\\Trakt\\Provider\\TraktProvider', $provider);
    }

    public function testGetTraktAuthorizationUrl()
    {
        $provider = new TraktProvider(getenv("CLIENT_ID"), getenv("CLIENT_SECRET"), getenv("TRAKT_REDIRECT_URI"));
        $authUrl = $provider->getAuthorizationUrl();

        $this->assertContains("https://trakt.tv/oauth/authorize", $authUrl);
        $this->assertContains(getenv('CLIENT_ID'), $authUrl);
    }
}
