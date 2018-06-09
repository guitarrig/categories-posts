# For starting the project 

#####   - copy the repository to your computer:
   
    
    git clone https://github.com/guitarrig/categories-posts.git
#####  - import the database from "DB.sql" file;
 
#####  - in the copied directory rename ".env.example" file to ".env";
 
##### - in '.env' file change DB_USERNAME and DB_PASSWORD values according to your settings, if it`s necessary;
 
##### - install all dependencies ;
 

    composer install
 
##### - generate the app-key
 

    php artisan key:generate
 
##### - start the host
 

    php artisan serve
 
#### The project is avaliable at  'localhost:8000' in the browser
