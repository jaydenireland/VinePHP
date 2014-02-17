Vine PHP API
==========

A php library that allows for easy access to the Vine private API. Based off of https://github.com/VineAPI/VineAPI/.

# Documentation (WIP...)
## Initialize the class
```PHP
require_once("path/to/your/main.php");
$vine = new Vine("email", "password");
```
## If login is succesful
```PHP
if ($vine->success) {
    echo "Succesfully logged in!";
} else {
    echo "That username and password didn't work";
}
```
## Return authenticated user info
```PHP
$info = $vine->userinfo();
print_r($info);
/* Returns
Array
(
    [name] => 
    [key] => 
    [userid] => 
)
*/
```
The wrapper returns the json decoded response in an array, so some debugging should be in place but most responses look like this before parsed by json_decode
```JSON
{"code": "", "data": {}, "success": true, "error": ""}
```
### Here are all the functions you can call at the moment
```PHP
logout();
userinfo();
endpoint($endpoint, $key, $method, $data);
self_profile();
user_profile($id);
update_profile($description=null, $location=null, $locale=null, $private=null, $phoneNumber=null);
set_sensitive(bool);
follow($userID);
unfollow($userID);
block($userID);
unblock($userID);
notificationsCount();
notifications();
getFollowers();
getFollowing();
like($postID);
unlike($postID);
comment($postID, $comment);
uncomment($postID, $commentID);
revine($postID);
unrevine($postID, $revineID);
report($postID);
getPost($postID);
getUser($userID);
getUserLikes($userID);
getTag($tag);
mainTimeline();
popularTimeline();
onTheRiseTimeline();
editorsPickTimeline();
channelTimeline();
channelRecentTimeline();
venueTimeline();
trendingTags();
featuredChannels();
searchUsers($query);
searchTags($query);
```
