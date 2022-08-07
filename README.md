# Laravel Tutorial 2022 from scratch
[Youtube course](https://www.youtube.com/watch?v=MYyJ4PuL4pY)

![Alt text](/public/images/preview.png)

## Usage

### Database Setup
To use MySQL, make sure you install it, setup a database and then add your db credentials(database, username and password) to the .env.example file and rename it to .env

### Migrations
To create all the nessesary tables and columns, run the following
```
php artisan migrate
```

### Seeding The Database
To add the dummy listings with a single user, run the following
```
php artisan db:seed
```

### File Uploading
When uploading listing files, they go to "storage/app/public". Create a symlink with the following command to make them publicly accessible.
```
php artisan storage:link
```

### Running Then App
Upload the files to your document root, Valet folder or run 
```
php artisan serve
```

### CRUD confentions
Common Resource Routes:
- index - Show all listings
- show - Show single listing
- create - Show form to create new listing
- store - Store new listing
- edit - Show form to edit listing
- update - Update listing
- destroy - Delete listing