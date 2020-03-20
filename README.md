# San Jose State University
## Software Engineering II - CMPE 133 / Spring 2020
## Authors: Dhirtitapa "Risha" Ray, Uyen Nguyen (Team Leader), Brian Albert Redoloza, Yenni Lam 
### Project Introduction
Choose Your Own Adventure, or Secret Path Books, are book-based games where the player is the protagonist who chooses which game choice to progress the game. In 1969, a lawyer named Edward Packard came up with the concept as a way to tell stories to his children and created the first known Choose Your Own Adventure book called *Sugarcane Island*. It wasn't until a decade later when the book finally gained some traction and this genre of storytelling evolved from books to video games. Video Games such as "The Stanley Parable" and the "Life is Strange" franchise brought this niche genre into a different industry. Simple, text-based approaches are still prominent in web applications and can be found with a simple Google search. Our project involves creating a web application for a Choose Your Own Adventure Game that allows the user to save their game data and create an account to do so. 
#### Functional Requirements
* Allow the user to login and logout of their account at any time
* Allow the user to create an account and store the credentials in a database
* Allow the user to play the game in its full potential
* Allow the user to save their progress at any time and load it at any time
#### Nonfunctional Requirements
* The frontend of the project is written in HTML/CSS and JavaScript. 
* The backend of the project is written in Java
* The database will be stored using MySQL
* The game's story is engaging for the user
#### More information regarding our requirements and documentation can be found under the folder project-slides
### Set-Up
1. Verify that tomcat can be run by your computer. The current folder for tomcat only works for windows. 
2. All HTML files are located under the chatroom directory (tomcat-windows\apache-tomcat-9.0.31\webapps\chatroom). 
3. For more details on how Tomcat works, click on https://www3.ntu.edu.sg/home/ehchua/programming/howto/Tomcat_HowTo.html. 
### How To Run The Project
1. Open up the terminal. 
2. Go into the bin directory of tomcat (tomcat-windows\apache-tomcat-9.0.31\bin) and run the command:
> startup
3. Go to http://localhost:9999/chatroom/homepage.html
4. Once you are done running the application, run the command: 
> shutdown
5. **Do not close the terminal right away. Wait for the application to shut down before exiting.** 
### Application Features
#### Register: 
      To access the web app, a user must have an account. New users can create their own personal accounts by entering their name, a valid email address, and a password. Once registered, the user's credentials are saved via MySQL Database and will allow the user to login at any time.
      
#### Login: 
      Existing users who have made accounts can log into the web app to access its features. Once a user is logged in, they are redirected to the homepage where they will be able to access to the chat-room.
      
#### Logout: 
      Users who are logged into the web app are given the option to log out. Logging out will save the current game until the next login via database. 
  
### Built With
 - Java : An interpreted, high-level, general-purpose programming language.
 - JQuery - A fast, small, and feature-rich JavaScript library.
 - Bootstrap - Responsive, mobile-first projects on the web with the world's most popular front-end component library

## License

This project is licensed under the MIT License.
