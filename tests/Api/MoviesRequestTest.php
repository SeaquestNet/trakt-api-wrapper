<?php


use Wubs\Trakt\Api;
use Wubs\Trakt\Trakt;

class MoviesRequestTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Api
     */
    protected $trakt;

    protected $id = "tron-legacy-2010";

    protected function setUp()
    {
        parent::setUp();
    }

    public function tearDown()
    {
        Mockery::close();
    }

    public function testAliases()
    {
        $client = Mockery::mock(stdClass::class . ", " . ClientInterface::class);
        $request = Mockery::mock(stdClass::class . ", " . RequestInterface::class);
        $response = Mockery::mock(stdClass::class . ", " . ResponseInterface::class);

        $client->shouldReceive("createRequest")->once()->andReturn($request);
        $response->shouldReceive("json")->once()->andReturn([]);
        $trakt = new Trakt(getenv("CLIENT_ID"), $client);

        $aliases = $trakt->movies->aliases($this->id);

        $this->assertInternalType("array", $aliases);
    }

    public function testComments()
    {
        $client = Mockery::mock(stdClass::class . ", " . ClientInterface::class);
        $request = Mockery::mock(stdClass::class . ", " . RequestInterface::class);
        $response = Mockery::mock(stdClass::class . ", " . ResponseInterface::class);

        $client->shouldReceive("createRequest")->once()->andReturn($request);
        $response->shouldReceive("json")->once()->andReturn([]);
        $trakt = new Trakt(getenv("CLIENT_ID"), $client);

        $comments = $trakt->movies->comments($this->id, get_token());

        $this->assertInternalType("array", $comments);
    }

    public function testPeople()
    {
        $client = Mockery::mock(stdClass::class . ", " . ClientInterface::class);
        $request = Mockery::mock(stdClass::class . ", " . RequestInterface::class);
        $response = Mockery::mock(stdClass::class . ", " . ResponseInterface::class);

        $client->shouldReceive("createRequest")->once()->andReturn($request);
        $response->shouldReceive("json")->once()->andReturn([]);
        $trakt = new Trakt(getenv("CLIENT_ID"), $client);

        $people = $trakt->movies->people($this->id);

        $this->assertInternalType("object", $people);
    }

    public function testPopular()
    {
        $client = Mockery::mock(stdClass::class . ", " . ClientInterface::class);
        $request = Mockery::mock(stdClass::class . ", " . RequestInterface::class);
        $response = Mockery::mock(stdClass::class . ", " . ResponseInterface::class);

        $client->shouldReceive("createRequest")->once()->andReturn($request);
        $response->shouldReceive("json")->once()->andReturn([]);
        $trakt = new Trakt(getenv("CLIENT_ID"), $client);

        $popular = $trakt->movies->popular();

        $this->assertInternalType("array", $popular);
    }

    public function testRatings()
    {
        $client = Mockery::mock(stdClass::class . ", " . ClientInterface::class);
        $request = Mockery::mock(stdClass::class . ", " . RequestInterface::class);
        $response = Mockery::mock(stdClass::class . ", " . ResponseInterface::class);

        $client->shouldReceive("createRequest")->once()->andReturn($request);
        $response->shouldReceive("json")->once()->andReturn([]);
        $trakt = new Trakt(getenv("CLIENT_ID"), $client);

        $ratings = $trakt->movies->ratings($this->id);

        $this->assertInternalType("object", $ratings);
    }

    public function testReleases()
    {
        $client = Mockery::mock(stdClass::class . ", " . ClientInterface::class);
        $request = Mockery::mock(stdClass::class . ", " . RequestInterface::class);
        $response = Mockery::mock(stdClass::class . ", " . ResponseInterface::class);

        $client->shouldReceive("createRequest")->once()->andReturn($request);
        $response->shouldReceive("json")->once()->andReturn([]);
        $trakt = new Trakt(getenv("CLIENT_ID"), $client);

        $ratings = $trakt->movies->releases($this->id, "NL");

        $this->assertInternalType("array", $ratings);
    }

    public function testRelated()
    {
        $client = Mockery::mock(stdClass::class . ", " . ClientInterface::class);
        $request = Mockery::mock(stdClass::class . ", " . RequestInterface::class);
        $response = Mockery::mock(stdClass::class . ", " . ResponseInterface::class);

        $client->shouldReceive("createRequest")->once()->andReturn($request);
        $response->shouldReceive("json")->once()->andReturn([]);
        $trakt = new Trakt(getenv("CLIENT_ID"), $client);

        $res = $trakt->movies->related($this->id);

        $this->assertInternalType("array", $res);
    }

    public function testStats()
    {
        $client = Mockery::mock(stdClass::class . ", " . ClientInterface::class);
        $request = Mockery::mock(stdClass::class . ", " . RequestInterface::class);
        $response = Mockery::mock(stdClass::class . ", " . ResponseInterface::class);

        $client->shouldReceive("createRequest")->once()->andReturn($request);
        $response->shouldReceive("json")->once()->andReturn([]);
        $trakt = new Trakt(getenv("CLIENT_ID"), $client);

        $stats = $trakt->movies->stats($this->id);

        $this->assertInternalType("object", $stats);
    }

    public function testSummary()
    {
        $client = Mockery::mock(stdClass::class . ", " . ClientInterface::class);
        $request = Mockery::mock(stdClass::class . ", " . RequestInterface::class);
        $response = Mockery::mock(stdClass::class . ", " . ResponseInterface::class);

        $client->shouldReceive("createRequest")->once()->andReturn($request);
        $response->shouldReceive("json")->once()->andReturn([]);
        $trakt = new Trakt(getenv("CLIENT_ID"), $client);

        $res = $trakt->movies->summary($this->id);

        $this->assertInternalType("object", $res);
    }

    public function testTranslations()
    {
        $client = Mockery::mock(stdClass::class . ", " . ClientInterface::class);
        $request = Mockery::mock(stdClass::class . ", " . RequestInterface::class);
        $response = Mockery::mock(stdClass::class . ", " . ResponseInterface::class);

        $client->shouldReceive("createRequest")->once()->andReturn($request);
        $response->shouldReceive("json")->once()->andReturn([]);
        $trakt = new Trakt(getenv("CLIENT_ID"), $client);

        $res = $trakt->movies->translations($this->id, "NL");

        $this->assertInternalType("array", $res);
    }

    public function testTrending()
    {
        $client = Mockery::mock(stdClass::class . ", " . ClientInterface::class);
        $request = Mockery::mock(stdClass::class . ", " . RequestInterface::class);
        $response = Mockery::mock(stdClass::class . ", " . ResponseInterface::class);

        $client->shouldReceive("createRequest")->once()->andReturn($request);
        $response->shouldReceive("json")->once()->andReturn([]);
        $trakt = new Trakt(getenv("CLIENT_ID"), $client);

        $res = $trakt->movies->trending(get_token());

        $this->assertInternalType("array", $res);
    }

    public function testWatching()
    {
        $client = Mockery::mock(stdClass::class . ", " . ClientInterface::class);
        $request = Mockery::mock(stdClass::class . ", " . RequestInterface::class);
        $response = Mockery::mock(stdClass::class . ", " . ResponseInterface::class);

        $client->shouldReceive("createRequest")->once()->andReturn($request);
        $response->shouldReceive("json")->once()->andReturn([]);
        $trakt = new Trakt(getenv("CLIENT_ID"), $client);

        $res = $trakt->movies->watching($this->id);

        $this->assertInternalType("array", $res);
    }
}