![PHP Composer](https://github.com/JRobertEdwards/html5-blog/workflows/PHP%20Composer/badge.svg)

# HTML5-Up website

This is a small website that I've made using a <a href="https://html5up.net/">HTML5up</a> template and the Laravel framework.

# How to setup

Once you've git cloned you should be able to run the following commands to setup once you've entered db credentials in the .env file:

`composer install`

`php artisan migrate`

## Storage setup
In order to allow the Work page to display correctly you need to create a folder structure in the /public/storage directory called json. In this folder add a projects.json file with the following content:

{
    "Projects": [
        {
            "name": "AWS API Gateway / OpenAPI Spec 3.0 / S3 Bucket",
            "description": "As part of a  research team dedicated to looking at next-gen technologies and services, we partnered with a company implementing AWS API Gateway and mobile SDK as an Identity as a Service prototype using OpenAPISpec 3.0."
        },
        {
            "name": "Vue.js / CI/CD ",
            "description": "A front-end rebuild project to switch the old PHP front-end to a new Vue.js implementation. Presented features implemented alongside front-end changes to the customer directly."
        },
        {
            "name": "Docker / PHP / CI/CD",
            "description": "Monolith legacy software that was to be maintained and have features implemented. Notable features were an extensive auto-recover piece as well as a PHP upgrade from 5.6 to 7.3 alongside containerising it with Docker. On completion of Docker and PHP upgrade install time went down from ~3 weeks to 2 hours."
        },
        {
            "name": "Laravel-Zero / CI/CD / Docker",
            "description": "A personal project that evolved into a fully-fledged production deployed CLI tool. Laravel-Zero app that interacts with the Smartcleanse application database to allow for encryption, reading, re-encryption of sensitive credentials for all the Smartcleanse external API calls. Dockerised and full CI/CD integration using GitLab pipelines."
        },
        {
            "name": "Presentation",
            "description": "During my time at LNRS I have been involved in numerous onboarding presentations to new starters, introducing the Technology team and what they do and answering questions they have. I’ve presented to the wider business multiple times with key stakeholders from senior management as well as directly talking with customers."
        },
        {
            "name": "Python  / PRAW Reddit API wrapper / Google Sheets API",
            "description": "A personal project involving ingesting data from a google sheets document and then updating Reddit users with subreddit flairs based on specific details from the google sheets document."
        },
        {
            "name": "Python 2.7 / Scikit-learn", 
            "description": "For my dissertation I used machine-learning to see if it is possible to predict the sequence of a DNA strand using chunking methods to split the data into various sizes before modelling."
        },
        {
            "name": "Laravel",
            "description": "This website has been built with Laravel using the HTML5-Up as a template for the front-end. This page is being generated using the Laravel Storage symlink to pull in a json object, bind the data to a View and serve the content using a View Composer. The PC Specs table you see in the About page is generated using the same View Composer but pulling the data from the DB and binding it that way."
        }
    ]
}

This could have been deployed with a static page display, I opted to serve the json object through the Storage Laravel class as an experiment.

Now just run:

`php artisan serve`
