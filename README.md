Please clone the project from github repositor : https://github.com/najmulcse/demo-project-authetication-profile-update

Follow the below instruction to run this project.

1. After clone the project run 'composer install'
2. Make .env file and set the mail configuration(mailtrap test mail service can use) and create a database
      MAIL_MAILER=smtp
      MAIL_HOST=smtp.mailtrap.io
      MAIL_PORT=465
      MAIL_USERNAME=xxxxxxxxxxx
      MAIL_PASSWORD=xxxxxxxxxxx
      MAIL_ENCRYPTION=
      MAIL_FROM_ADDRESS=null
      MAIL_FROM_NAME="${APP_NAME}"
      SAND_EMAIL="noreply@demo.com"

3. run php artisan migrate
4. run php artisan passport:install ( For API authentication)
5. Import collection into postman and import env also for the collection
   * Located in folder: public/API Collection/
6. run php artisan serve

Test the rest of the APIS
