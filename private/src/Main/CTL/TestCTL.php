<?php
/**
 * Created by PhpStorm.
 * User: p2
 * Date: 7/15/14
 * Time: 11:27 AM
 */

namespace Main\CTL;


use Main\Context\Context;
use Main\Http\RequestInfo;
use Main\View\JsonView;


/**
 * @Restful
 * @uri /test
 */
class TestCTL extends BaseCTL {
    /**
     * @GET
     */
    public function getTest(){
        // if PHP under version 5.4 use return new JsonView(array("message"=> "test"));
        return new JsonView(["message"=> "test"]);
    }

    /**
     * @GET
     * @uri /[i:id]
     */
    public function getTestById(){
        $id = $this->reqInfo->urlParam("id");

        // if PHP under version 5.4 use return new JsonView(array("id"=> $id));
        return new JsonView(["id"=> $id]);
    }
}