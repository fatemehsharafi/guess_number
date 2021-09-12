## Guess Number

![preview](https://user-images.githubusercontent.com/47884463/132988306-a2b7694d-e314-4075-b26b-a5ab7f3e4d5d.png)

### Installing
```
git clone https://github.com/fatemehsharafi/guess_number.git
cd guess_number
composer install
cp .env.example .env
php artisan key:generate
php artisan serve
```
Now you can access to game on: localhost:8000

### Features
- Each player can guess number individually.
- You can create new game anytime.
- Game will give you tips.
- You can play on any devices that you want.
- You can authenticate your self with changing default player name.

### Technical
- DDD structure layout.
- Repository design pattern.
- SOLID & DRY principles.
- Laravel framework.
- Bootstrap CSS framework.

#### One Tip
You can add more players just inside code. It's too easy, just go inside `resources/views/index.blade.php` line 6.
Of course there are a lot of way to implement this feature dynamically 🤓

### Structure Tree
##### Views 
```
├── components
│   ├── guess-number
│   │   ├── card.blade.php
│   │   └── modal.blade.php
│   └── header.blade.php
├── index.blade.php
└── layouts
    └── main.blade.php
```
##### App
```
├── Http
│   ├── Controllers
│   │   ├── Controller.php
│   │   ├── GuessController.php
│   │   └── HomeController.php
│   └── Requests
│       └── GuessNumberRequest.php
├── Repositories
│   └── GuessNumber
│       ├── GuessNumberInterface.php
│       └── GussNumber.php
├── Traits
│   └── Serializer.php
├── Utils
│   └── NumberStorage.php
└── View
    └── Components
        ├── GuessNumber
        │   ├── Card.php
        │   └── Modal.php
        └── Header.php
```
