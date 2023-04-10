# # Quiz Web Programming: Controller (Session 05)

Hi fellas! My name is Jefferson Johan. Now i'm at 5th Cawu Computer Science Bina Nusantara x PPTI BCA. This is my answer for Quiz Web Programming: Controller Laravel. My lecturer is **Anderies, B.Eng., S.Kom., M.Kom.**  Below is my data:

> NIM  : 2502041224
>Class : PPTI 12


# Technology in My Website
1. Laravel (PHP Framework)<br>
![Laravel Logo](https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/200px-Laravel.svg.png)
2. HTML, CSS
3. GitHub & Git

# How to install and run my project on your PC?

I want to share simplest way to run this website using Git Clone.

> Remember, make sure your computer already installed **Git** and already **configured your Git & GitHub**

 - First, you need to my project's url for cloning
 ![Step 1](https://github.com/jeffersonnjohan/website-portofolio-laravel/blob/main/public/img/clone1.png)
- Open your command prompt, cd your directory to the directory you want to run this project. Then type `git clone https://github.com/jeffersonnjohan/quiz-controller.git`

- Type `cd website-portofolio-laravel`
- Type `composer install`
- Type `copy .env.example .env`
- Type `php artisan key:generate`
- Open other terminal with same path, then type `php artisan serve`
- Done, open the link provided

# What's inside my website?
My website is very simple which contains 2 main pages. 
- Home Page
>This page contains all products available. There are 3 types of product's status. First product's status is 'S' which has silver background. Second product's status is 'SR' which has gold background, and the last product's status is 'SSR' which has red background.

![Introduction](https://github.com/jeffersonnjohan/quiz-controller/blob/main/public/img/home.png)
- Single Product Page
> This page only contains one single post. I use **blade templating engine** to accommodate this requirement. In `template.blade.php`, i have 3 yields: `title` for title in tag `<title>`, 	`description` for meta description SEO, and  `body` for detail description of one single product. 

![Academic](https://github.com/jeffersonnjohan/quiz-controller/blob/main/public/img/single.png)