![PHP Composer](https://github.com/JRobertEdwards/html5-blog/workflows/PHP%20Composer/badge.svg)

# HTML5-Up website

This is a small website that I've made using a <a href="https://html5up.net/">HTML5up</a> template and the Laravel framework.

# Requirements

To run this locally you should have docker installed
# How to setup

Copy or change the .env.example file to .env

Build the image and spin the container up:

`docker-compose up -d`

Exec into the container:

`docker exec -it laravel_app bash`

Install packages
`composer install`

You should be able to visit localhost and see the index page.
