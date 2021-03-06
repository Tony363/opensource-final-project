# opensource-final-project

[features.md](doc/proj_description/features.md)

The Easy Blog site project is a simple PHP, CSS, and JavaScript project. Talking about the project, it has lots of features. A user can post news, blogs, photos. This project is a complete blogging site for the users where there are different categories. It contains a homepage from where users can check the latest news, from programmers and about upcoming programs. There’s a separate tab for blog posts where users can easily check all their news and blogs. The viewer can comment using their accounts. **Take note that this project is still in development so please report any kind of bug if you find.**

## About the System
Admin has full control of the system, he/she can compose news, views all news, add and view exco, create and list events, insert photos into the gallery, sliders. The other main feature is that admin can manage the site like editing  Welcome notes, about pages, programmes page. From the admin panel, he/she can edit the site settings which includes Site Name, Site Title, Site Email, Description, Keywords, Google Analytic Code, Address, Contact details, Facebook Page ID, Twitter Account and Instagram Account. He/she can also add new Admin for the site, delete and list all admins. A responsive dashboard is provided in admin panel for the easy management of the site.

In short, this site in PHP project is just like a WordPress site. This simple blog site in PHP helps a user to post blogs online easily just like using a WordPress site. Design of this project is pretty simple and responsive so that user won’t find it difficult to understand, use and navigate.

Design of this project is pretty simple so that the user won’t find any difficulties while working on it. To run this project you must have installed virtual server i.e [XAMPP](https://www.apachefriends.org/download_success.html) on your PC (for Windows). This System in PHP with source code is free to download, Use for educational purposes only! For the project demo, have a look at the [Video](https://youtu.be/zXab_1xVmhE ).


## Use Case Diagram
![diagram](doc/schema_design/use-case-diagram-of-blogging-system.png)


## Adhoc Entity Relational Diagram
![blog](doc/schema_design/erd.png)

## How to Run?
Assuming you are using a debian linux based operating system and have install [XAMPP](https://www.apachefriends.org/download_success.html) on your PC (for Windows)
1. Navigate to /opt/lampp/htdocs
2. run this command "git clone https://github.com/Tony363/opensource-final-project.git"
3. Open browser and go to URL “http://localhost/phpmyadmin/”
4. Then, click on databases tab
5. Create database naming “blog” and then click on import tab
6. Click on browse file and select “blog.sql” file which is inside “database” folder
7. Click on go.
8. click on this [link](http://localhost/opensource-final-project/)
9. you can now start playing with the blog from your localhost

## Feature Development Logs 
* Version 0.01 
  * Prioritizes project completion and feature delivery above all else.
  * Only necessary feature sophistication was delivered
  * Frontend bootstraped
  * HTML CSS copied & pasted from available resources
  * Spent minamal time on Entity relational diagram so as to not restrict development 
    * there are no scalability concerns for this project
    * there is complete neglect for database normalization or optimization of any kind. it works, it works.
  * Decided to separate key feature entities to its corresponding scripts
  * Explored CKeditor for more interactive development on the web browser. Ditched that as its time consuming
  * We also implemented an Admin only interface for the Adminstrator to manage the blog application via the blog application interface
  * Contact us messages can only been seen in database(message table)
  * Logout.php just session_start(), session_destroy() and print the logout message.
  * We made post buffer table and user buffer table just for testing purpose
  * Login rendering of html and new post form is hard coded!
  * Userlist is rendering of html is hard coded
  * Entire new post is imported from includes/new_post_frame

## Group members
* Tony363
* mp256cc
* k9202ky
