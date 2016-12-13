<?php
$routes = [
    'getAccessToken',
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
    'getBoardPins',
    'metadata'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

