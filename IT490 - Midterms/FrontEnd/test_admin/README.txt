These are all of the required files needed for admin/user logon functionality. Differentiation between both user and admin is done by
checking user_type within the mySQL database. If user_type is equal to admin, user gets logged in as admin. If user_type is equal to user,
login as user.

Users are redirected to index.php after logging in.
-index.php is a test page and contains no features.

Admins are redirected to home.php after logging in. 
-home.php gives admins a few of all current users in the database as well as the ability to add new users/admins.
