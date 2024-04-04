# premoza

## Pre-requisites
- Install Node.js
- Install PHP Laravel

## Getting started
- fork the repository https://github.com/premoza/premoza
- clone the fork repository
  ```
  _> using https
  git clone https://github.com/<your-username>/premoza

  _> using ssh
  git clone git@github.com:<your-username>/premoza
  ```
- install dependecies
  ```
  composer install
  npm install
  ```
- database migration
  ```
  php artisan migrate:refresh
  ```

## Run
- start vite first
  ```
  npm run dev
  ```
- start laravel
  ```
  php artisan serve
  ```

## Squashing migration
```
  php artisan schema:dump --prune
```