# aftermath

The idea here is to create a fully functional chat based RPG system for a game I created a lifetime ago.  Primarily Javascript, PHP, and MySQL based and running on XAMPP for testing before release. This is my first major project and to be honest I'm probably trying to tackle too much at once but if you're going to dream, dream big!  As of now:

I have the general front end layout established (will tweak more later for mobile)
Login and authentication mostly handled with PHP (having some issues using $_SESSION['id'], may have to switch to cookies)
DB currently has 2 tables: characters (for player chars), and users

TO DO:
-Figure out issues with $_SESSION so that character creation results can be tied to a specific username and index.php 
  shows current online users
-Create character creation page & ensure that each character built is tied to creating users username of unique ID
   ANTICIPATED ISSUES 
  -Skills array and skillRate array correlation
  -ability array
-Create character management page allowing experience spending for modification of skills, attributes, and purchasing abilities
-Create game chat system with each campaign listing: Campaign name, host user as GM, and active players 
   ANTICIPATED ISSUES 
  -Committing dice rolls (only need 3: Percentile, 2D10, and percentile based random hit chart) to chat input 
  -Recordkeeping of chat would be nice as well but have no idea what it entails
  -Possible automation on campaigns (chats) being set up by users following template?
  -Potentially setting up a request system for users to join campaign?
  
* FUNCTION BEFORE FORM! 
Once these basics are set up go live for testing, clean up styling, add some art and probably profile pics to users
