# Symfony GraphQL Project

## Overview
A Symfony 7.2 application with GraphQL integration using OverblogGraphQLBundle.

## Requirements
- PHP 8.1 or higher
- Composer
- Required PHP extensions:
  - ctype
  - iconv

## Installation

1. Clone the repository
```bash 
  git clone <repository-url>
  cd <project-directory>
```
2. Install dependencies

```bash 
composer install
```
3. Configure environment

## Copy the environment file

```bash 
cp .env .env.local
```

## Configure your environment variables in .env.local

```bash
php bin/console cache:clear
php bin/console cache:warmup
```

## Start the server

```bash
php -S localhost:888 -t public
```
