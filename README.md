# blog
## Welcome on board!
This is my first OOP blog, the 5th project of my OpenClassRooms cursus.

According to project's instructions, this blog is collaborative: anyone can add/update/delete a blogpost, a tag, add and validate or reject a comment. There is no admin authentication.

**Dependencies**

This website uses some libraries:
- Twig
- PHPMailer
- CKEditor

All those libraries are included by Composer (if not already installed on your machine https://getcomposer.org/download/).

This website also uses some "front" libraries:

- Gulp
- Sass

All those libraries are included by NPM (if not already installed on your machine https://www.npmjs.com/get-npm).

**How to install?**
1. Clone this repository on your local machine.
2. Import `config/blog.sql` to create your database (MySQL currently used).
3. In project folder open a new terminal window and execute command line `composer install`.
4. (You may skip this step if you don't want to use NPM dependencies to edit CSS) Execute command line `npm install` to install all front dependencies.
5. Edit `config/ini.php` with:
	* your database login
	* your `base_url` (root)
	* your `picture_repository`, where you want to store blogposts' uploaded pictures
	* the `allowed_extensions` you want to allow
	* your mail datas (SMTP, mail to)
	* enable/disable `debug` mode (will catch Exceptions or user feedback)
6. Your website is ready to be used and customized :)

Have fun!