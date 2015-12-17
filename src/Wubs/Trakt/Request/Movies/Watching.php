<?php
/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 21/03/15
 * Time: 09:48
 */

namespace Wubs\Trakt\Request\Movies;


use Wubs\Trakt\Request\AbstractRequest;
use Wubs\Trakt\Request\Parameters\MediaIdTrait;
use Wubs\Trakt\Request\RequestType;

class Watching extends AbstractRequest
{

    use MediaIdTrait;

    /**
     * @param $id
     */
    public function __construct($id)
    {
        parent::__construct();
        $this->id = $id;
    }


    public function getRequestType()
    {
        return RequestType::GET;
    }

    public function getUri()
    {
        return "movies/:id/watching";
    }
}