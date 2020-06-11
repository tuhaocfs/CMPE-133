# San Jose State University
## Software Engineering II - CMPE 133 / Spring 2020
## Authors: Dhirtitapa "Risha" Ray, Uyen Nguyen (Team Leader), Brian Albert Redoloza, Yenni Lam 

### Project Introduction:
Choose Your Own Adventure, or Secret Path Books, are book-based games where the player is the protagonist who chooses which game choice to progress the game. In 1969, a lawyer named Edward Packard came up with the concept as a way to tell stories to his children and created the first known Choose Your Own Adventure book called *Sugarcane Island*. It wasn't until a decade later when the book finally gained some traction and this genre of storytelling evolved from books to video games. Video Games such as "The Stanley Parable" and the "Life is Strange" franchise brought this niche genre into a different industry. Simple, text-based approaches are still prominent in web applications and can be found with a simple Google search. Our class project involves creating a web application for a Choose Your Own Adventure Game that allows the user to save their game data and create an account to do so.

### Our Expectations: 
#### Essential / Functional Requirements
* The user can create an account
* The user's account is recorded into a database. 
* The user can log in and log out of the game. 
* The user can save their status on the game and load it. 
* The user can play the game through the UI. 
#### Desired / Non-functional Requirements
* The game has at least two endings. 
* The game's story tells an engaging and interactive story. 
* The game is saved through a String approach via the database. 
* Front End: HTML, CSS, Javascript. 
* Backend: Java. 
* Database: MySQL.
#### Optional Requirements
* The user can choose from more than two options during the game. 
* The application can allow more than one game to be played. 
* The user can choose their avatars. 
* The user can create multiple save files. 

### What We Implemented: 
#### Essential / Functional Requirements
* The user can create an account
* The user's account is recorded into a database. 
* The user can log in and log out of the game. 
* The user can save their status on the game and load it. 
* The user can play the game through the UI. 
#### Desired / Non-functional Requirements
* The game has at least two endings. 
* The game's story tells an engaging and interactive story. 
* The game is saved using Twine instead. 
* Front End: HTML, CSS, Javascript. 
* Backend: PHP 
* Database: MySQL.
#### Optional Requirements
* The application can allow more than one game to be played. 
* The user can create multiple save files. 
##### More information regarding our requirements and documentation can be found under the folder project-slides

### Set-Up:
#### WAMP
1. Verify that WAMP can be run by your computer and other applications such as MySQL is installed. WAMP has a specific installation file that is used to create this project, which also includes the necessary files to run PHP and PHPMySQL. To download the installation, click here:  https://drive.google.com/file/d/1YxdX46Fg1r60G5W481L4OHzjEuB7mFrZ/view?usp=sharing. 
2. Run the WAMP server and place the chatroom folder from the repository into the wamp64/www directory. 
#### XAMPP
1. Verify that XAMPP can be run by your computer and other applications such as MySQL is installed, and select proper version of PHP
2. Start XAMPP, and start the stack services, which include ProFTPD, Apache, and MySQL. Under network, run the localhost server of your choice, but make sure it matches with the server you specify in your files. Mount the /opt/lampp data volume, and click on explore, where you have all the files. Place files within htdocs. 
3. Go to the local host either through your browser, or through clicking "Go to Application" on XAMPP.
### How To Run The Project:
1. Make sure the server is running. 
2. Make sure all all links in every file match your localhost name. The code is set up to have the localhost name "localhost" 
3. Go to http://{your localhost name}/chatroom/login.php to view the application. 
4. Go to http://{your localhost name}/phpmyadmin/ to view the MySQL database. To log into the root, see the credentials in the registration.php file. 
5. Once you are done running the application, simply shut down the server. 

### Application Features:
#### Register: 
      To access the web app, a user must have an account. New users can create their own personal accounts by entering their username, a valid email address, and a password. Once registered, the user's credentials are saved via MySQL Database and will allow the user to login at any time.
      
#### Login: 
      Existing users who have made accounts can log into the web app to access its features. Once a user is logged in, they are redirected to the homepage where they will be able to access to the chat-room.
      
#### Logout: 
      Users who are logged into the web app are given the option to log out. Logging out will save the current game until the next login via database. 

#### Gameplay: 
      Users who are logged into the web app are given the option to choose their game options during their game play. Choices are recorded and used to determine the appropriate ending. Two versions of gameplay exist: one uses Javascript (9 to 5) while the other uses Twine (The Three Little Pigs). 

#### Miscellaneous: 
	Additional features such as animation, slideshow, and an about page are implemented to provide more value and aesthetic to the application. 
  
### Built With: 
 - JQuery - A fast, small, and feature-rich JavaScript library.
 - Bootstrap - Responsive, mobile-first projects on the web with the world's most popular front-end component library
 - PHP: A general-purpose scripting language that is especially suited to web development. 

### Previous Works, Files, and Progresses:

To view our previous files that were initially used in our project, click here: https://drive.google.com/drive/folders/150cIXWHQSqnj5Ptbn8ynMikBeSiMd4JI?usp=sharing

## License

This project is licensed under the MIT License.
