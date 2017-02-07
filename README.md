[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/Pinterest/functions?utm_source=RapidAPIGitHub_PinterestFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)


# Pinterest Package
Add pins, follow and display options to your app.
* Domain: pinterest.com
* Credentials: clientId, clientSecret

## How to get credentials: 
0. You’ll need to be logged in to your Pinterest account to create an app. If you don’t have a Pinterest account, [create one now](https://www.pinterest.com/). 
1. To create new app go to [Apps](https://developers.pinterest.com/apps/)
2. Agree to our terms and policies and click *Create app.*
3. Choose a name and description for your app. Be careful, you won’t be able to change the name of your app later. Click *Create.*
4. After creation your app you will see Client Id and Client Secret
 
## Pinterest.getAccessToken
This endpoint allows to get back a access token.

| Field       | Type       | Description
|-------------|------------|----------
| clientId    | credentials| The Client ID obtained from Pinterest.
| clientSecret| credentials| The Client Secret obtained from Pinterest.
| code        | String     | The access code you received from your redirect URI.

## Pinterest.getUser
This endpoint allows to fetch user data.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| The valid access token.

## Pinterest.getBoards
This endpoint returns a list of the authenticated user’s public boards, including the URL, ID and name.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| The valid access token.

## Pinterest.getBoardsSuggestions
This endpoint returns the boards that Pinterest would suggest to the authenticated user if they were to save the specified Pin. The default response returns the ID, URL and name of the boards.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| The valid access token.
| pinId      | String| The pin_id that you want to return board suggestions for.

## Pinterest.getUserLikedPins
This endpoint returns the ID, link, URL and description of the Pins the authenticated user has liked.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| The valid access token.
| cursor     | String| Pass the cursor value in your next request to receive the next 25 items in the list.

## Pinterest.getUserPins
This endpoint returns the ID, link, URL and descriptions of the authenticated user’s Pins.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| The valid access token.
| cursor     | String| Pass the cursor value in your next request to receive the next 25 items in the list.

## Pinterest.searchBoardNames
Searches the authenticated user’s board names (but not Pins on boards). An empty response indicates that nothing was found that matched your search terms. The default response returns the ID, name and URL of boards matching your query.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| The valid access token.
| query      | String| What you want to search for.
| cursor     | String| Pass the cursor value in your next request to receive the next 25 items in the list.

## Pinterest.searchPinDescriptions
Searches the authenticated user’s Pin descriptions. An empty response indicates that nothing was found that matched your search terms. The default response returns the ID, link, URL and description of Pins matching your query.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| The valid access token.
| query      | String| What you want to search for.
| cursor     | String| Pass the cursor value in your next request to receive the next 25 items in the list.

## Pinterest.getFollowers
Returns the users who follow the authenticated user. The default response returns the first and last name, ID and URL of the users.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| The valid access token.
| cursor     | String| Pass the cursor value in your next request to receive the next 25 items in the list.

## Pinterest.getFollowedBoards
Returns the boards that the authenticated user follows. The default response returns the ID, name and URL of the board.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| The valid access token.
| cursor     | String| Pass the cursor value in your next request to receive the next 25 items in the list.

## Pinterest.getFollowedTopics
Returns the topics (e.g, modern architecture, Sherlock) that the authenticated user follows. The default response returns the ID and name of the topic.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| The valid access token.
| cursor     | String| Pass the cursor value in your next request to receive the next 25 items in the list.

## Pinterest.getFollowings
Returns the users that the authenticated user follows. The default response returns the first and last name, ID and URL of the users.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| The valid access token.
| cursor     | String| Pass the cursor value in your next request to receive the next 25 items in the list.

## Pinterest.followBoard
Makes the authenticated user follow the specified board.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| The valid access token.
| board      | String| The board you want to follow in the format <username>/<board_name>. For example: designboom/technology

## Pinterest.followUser
Makes the authenticated user follow the specified user.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| The valid access token.
| user       | String| The username of the user that you want to follow. For example: designboom

## Pinterest.unfollowBoard
Makes the authenticated user unfollow the specified board.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| The valid access token.
| board      | String| The board you want to unfollow in the format <username>/<board_name>. For example: designboom/technology

## Pinterest.unfollowUser
Makes the authenticated user unfollow the specified user.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| The valid access token.
| user       | String| The username or user ID of the user you want to unfollow. For example: designboom

## Pinterest.createBoard
Creates a board for the authenticated user. The default response returns the ID, URL and name of the created board.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| The valid access token.
| name       | String| The name of the new board.
| description| String| The new board’s description.

## Pinterest.getSingleBoard
The default response returns the ID, URL and name of the specified board.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| The valid access token.
| board      | String| The board you want to fetch in the format <username>/<board_name>. For example: designboom/technology

## Pinterest.updateSingleBoard
Changes the chosen board’s name and/or description. The default response returns the ID, URL and name of the edited board.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| The valid access token.
| board      | String| The board you want to edit in the format <username>/<board_name>. For example: designboom/technology
| name       | String| The new board name.
| description| String| The new board description.

## Pinterest.deleteBoard
Deletes the specified board. This action is permanent and cannot be undone.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| The valid access token.
| board      | String| The board you want to delete in the format <username>/<board_name>. For example: designboom/technology

## Pinterest.createSinglePin
Creates a Pin for the authenticated user. The default response returns the note, URL, link and ID of the created Pin.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| The valid access token.
| board      | String| The board you want the new Pin to be on. In the format <username>/<board_name>. For example: designboom/technology
| note       | String| The Pin’s description.
| image      | File  | Upload the image you want to pin
| link       | String| The URL the Pin will link to when you click through.

## Pinterest.updateSinglePin
Changes the board, description and/or link of the Pin.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| The valid access token.
| pin        | String| The ID (unique string of numbers and letters) of the Pin you want to edit.
| board      | String| The board you want to move the Pin to, in the format <username>/<board_name>. For example: designboom/technology
| note       | String| The new Pin description.
| link       | String| The new Pin link.

## Pinterest.getSinglePin
The default response returns the ID, link, URL and description of the Pin.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| The valid access token.
| pin        | String| The ID (unique string of numbers and letters) of the Pin you want information about.

## Pinterest.deleteSinglePin
Deletes the specified Pin. This action is permanent and cannot be undone.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| The valid access token.
| pin        | String| The ID (unique string of numbers and letters) of the Pin you want to delete.

## Pinterest.getBoardPins
The default response returns a list of Pins on the board with their ID, URL, link and description.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| The valid access token.
| board      | String| The board you want to fetch in the format <username>/<board_name>. For example: designboom/technology
| cursor     | String| Pass the cursor value in your next request to receive the next 25 items in the list.

