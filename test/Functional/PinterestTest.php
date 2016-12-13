<?php

namespace Test\Functional;
require_once(__DIR__ . '/../../src/Models/checkRequest.php');

class PinterestTest extends BaseTestCase {
    
    public function testPackage() {
        
        $routes = [
            'getUser',
            'getBoards',
            'getBoardsSuggestions',
            'getUserLikedPins',
            'getUserPins',
            'searchBoardNames',
            'searchPinDescriptions',
            'getFollowers',
            'getFollowedBoards',
            'getFollowedTopics',
            'getFollowings',
            'followBoard',
            'followUser',
            'unfollowBoard',
            'unfollowUser',
            'createBoard',
            'getSingleBoard',
            'updateSingleBoard',
            'deleteBoard',
            'createSinglePin',
            'updateSinglePin',
            'getSinglePin',
            'deleteSinglePin',
            'getBoardPins'
        ];
        foreach($routes as $file) {
        
            $var = '{
                        "args": {
                          "accessToken": "AejG7DImcLjoO9Eo6qGHS2xm6hlbFI99IDTBgDVDn-j5boA4sAAAAAA",
                          "board": "rapidapi/apis"
                        }
                    }';
            $post_data = json_decode($var, true);

            $response = $this->runApp('POST', '/api/Pinterest/'.$file, $post_data);

            $this->assertEquals(200, $response->getStatusCode(), 'Error in method: '.$file);
            
        }
    }

}
