<h3>Setup Procedure</h3>
<p><ol><li> Clone the Project.
    <li> Go to the aplication folder on your terminal and Run <code>composer install</code></li>
    <li> Make a copy of .env.example and save it as .env</li>
    <li> Create a database </li>
    <li>Give the database credentials in the .env file. and set APP_URL=http://localhost:8000</li>
    <li> Execute <code>php artisan key:generate</code></li>
    <li>Execute <code>php artisan migrate</code></li>
    <li>Execute <code>php artisan db:seed</code></li>
    <li>Create an admin user using the command <code>php artisan voyager:admin your@email.com --create</code> or convert an existing user into an admin using <code> php artisan voyager:admin your@email.com</code></li>
    <li>Execute <code>php artisan serve</code></li>
    <li>Go to your browser and go to http://localhost:8000 for guests and login user or  http://localhost:8000/admin for admin user </li>
    </ol>
    </p>
        
    
    
    
