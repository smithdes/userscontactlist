# userscontactlist
users contact list in laravel
Start of application for users and its contact list.
1)	Install the laravel using the composer I have created a laravel with the name contactapp
2)	Connect the database connection in env file under contactapp folder
3)	After installation first we have to run the auth. For that use the command “php artisan make:auth”
4) The auth command will create the user module with registration, login etc..
5) Create a migration for contact table with this command "php artisan make:migration create_contacts_table --create=contacts"
6)	Then run the command for creating user, contacts table, “php artisan migrate”
7) Basic configuration of laravel is set. You can run the with the path eg: localhost/contactapp/public
8) Do the registration and login.
9) I have uploaded the files where we need to do the changes to make the contact app working
10) First we need to add route in laravel. There is file name web.php which will be under contactapp/routes/web.php. here you will find all the necessary routing require for acheiving our goal
11) When we run auth command there is a Controller created by laravel it will be HomeController.php. that file will be under contactapp/app/Http/Controllers/HomeController.php. in the attached file there are all related functions for running the application
12) Now we see the views part. for creating the navigation for going to contact. We need to add a contact menu in app.blade.php.
 the path of this file will be in contactapp/resources/views/layouts/app.blade.php. all the changes are done in this file.
13) Now just add the other view files under contactapp/resources/views/contact.blade.php, contactapp/resources/views/add_contact.blade.php,contactapp/resources/views/edit_contact.blade.php. all the require changes are done on this files.

Note: I have also compressed all the files in zip folder and uplodaed above.
