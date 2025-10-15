# EWT - 06

**PREVIOUSLY**
- Exam

**TODAY**
- PHP Basic concepts
- PHP execution with REPL, CLI and dev server
- PHP variables, printing, conditionals, loops


## PHP?

- The idea behind this module is **Expanding our horizons**
    - You now know the fundamentals and you can *pivot* easily
    - You do not have to do only what we teach in the course
    - You have the skills to quickly grasp new concepts and techs
    - Don't stop here and apply just for React/Node/Express/Postgres jobs
        - Ruby on Rails developer
        - Python/Django web developer
        - Accessibility consultant
        - Web testing engineer
        - PHP Developer

    - Don't apply just for web dev jobs either!
        - Junior software specialist
        - Junior application specialist
        - Junior automation engineer
        - Junior data analyst
        - Tech support specialist
        - CMS administrator


- Don't limit yourself
    - If a job requires `MongoDB` - you can learn that!
    - If a job requires `Redis` - you can learn that!
    - If a job requires `Redux` - you can learn that!
    - If a job requires `Angular` - you can learn that!
    - If a job requires `Ruby on Rails` - you can learn that!
    - You absolutely can and **should** apply for jobs like these, including PHP


## Moving towards independence and realism

> Story time
>
> After graduation, I landed my first job after grinding for ~6 months
> My job was to remake a program made in `Delphi` (programming language)
> I converted it from a desktop program to a web application
> I made the new web app based on `C#` (programming language)
> I had never worked with `Delphi` before
> I had never worked with `C#` before
> And it was fine. I figured it out.
> You can too!
>
> Joel, DCI web dev nerd responsible for course content

- When you will join a company, you will use a lot of tech
- It's almost guaranteed you won't just use the tech from this course
- During this module, we will cover some new tech quickly
- And you will actually take charge of learning a lot by yourself
- You will learn by doing, reading, watching, experimenting
- We will start with a more guided approach still
- But soon it will be very independent work
- VERY similar to how you would work in a new company


## PHP

- PHP is truly a web dev classic

- A **massive** amount of websites run PHP
    - https://w3techs.com/technologies/overview/programming_language
    - https://w3techs.com/technologies/overview/content_management


- Not only wordpress pages
    - But really, a **lot** of those
    - For example https://digitalcareerinstitute.org/
    - For example https://sorbasshoes.com/

- Large websites as well
    - Wikipedia
    - Etsy

- Many large German pages run on PHP
    - https://toom.de
    - https://www.l.de
    - https://www.lufthansagroup.com

- PHP has a large and stable ecosystem; top 3:
    - Wordpress (powers >40% of the web)
    - Laravel (they just raised $57 million in funding)
    - Typo3 (suuuuuper popular in Germany)

- PHP is

    - Easy to learn and fairly simple
    - Great for career starting
    - Great for freelancers

## PHP Basic concepts
- Server-side / backend only language
    - Can be used for pure CLI scripts
    - Normally run with a http server; Apache and Nginx are very common
- Weakly typed, like JavaScript

    ```php
    $thing = "Hello, World!";       // $thing is now a string
    $thing = 42;                    // $thing is now an integer
    $thing = ["Der", "Die", "Das"]; // $thing is now an array of strings
    ```

- Optional type declarations for functions, like TypeScript
    ```php
    function add(int $a, int $b): int {
        return $a + $b;
    }

    echo add(1, 2); // Outputs: 3
    ```



## PHP Installation and execution

- You naturally could use Docker, but PHP is so easy to install
- And just like Node and Bun, PHP can be nice to run directly

- `$ sudo apt install php php-cli` - Install
- `$ php -a` - Start the PHP REPL
- `$ php index.php` - Execute a file directly

- PHP has built-in dev server if you install locally
    - `php -S localhost:3333 index.php`


## Wrap-up

- PHP is a web dev classic
- PHP is super popular in Germany and, well, everywhere
- PHP has optional type declarations
- PHP can be run in a REPL, CLI or by a dev server

## Exercise
- https://classroom.github.com/a/NfMNCBpv

## Self-study prompts

- https://www.youtube.com/shorts/82Iax6iZglw
- https://www.youtube.com/watch?v=2VvWM6gdDlk


