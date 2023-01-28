# Atheneum De Ring | Zesdes

> **Warning** this app was my first interaction with the Laravel filesystem and Livewire, so there is a very high likelyhood that it contains lots of bugs!!! 

A simple website that allows users to upload their own pictures, after approval the picture appears on the gallery on the homepage.

## Stack
This website is built using Livewire, Laravel 8 and Jetstream

## Deployment

First you need to edit the .env to your needs. The default .env should be fine to use
```
cp .env.example .env
```

### Docker
> **Warning** you'll need to edit the docker-compose.json so the app runs on the right port.

Run the docker compose up -d command
```
sudo docker-compose up -d
```

Set the right file permissions
```
sudo chown -R www:www *
```

After this you'll need to install the composer depencencies
```
sudo docker exec <container_name> composer install --optimize-autoloader --no-dev
```

Generate an app key
```
sudo docker exec <container_name> php artisan key:generate
```

Link the storage driver to the public folder so images are publicly viewable
```
sudo docker exec <container_name> php artisan storage:link
```

Please refer to https://laravel.com/docs/8.x/deployment for further optimizations of the Laravel application

## Screenshots

### Home page with gallery
![image](https://user-images.githubusercontent.com/40402787/215271420-38027d4f-6c8c-46f7-b1ec-0ea8f4290324.png)

### Moderation dashboard
> Only accessible when the `is_mod` column is set to `1`
![image](https://user-images.githubusercontent.com/40402787/215271439-6fd6c221-0ee6-491a-b84a-b653db4e8169.png)

### Upload warning
![image](https://user-images.githubusercontent.com/40402787/215271363-ac41d8cb-b2b7-4c43-ab00-61c79c0f82fb.png)

### Upload page
![image](https://user-images.githubusercontent.com/40402787/215271387-878e7a09-9152-4998-bbfb-0101e362b47f.png)

### Picture queue with moderation status
![image](https://user-images.githubusercontent.com/40402787/215271413-96615409-d98c-42de-9c40-c9bbab7e3148.png)

