# Nginx-PHP-MySQL Docker Setup

This repository contains a Docker setup for running a web application stack consisting of Nginx, PHP, MySQL, and Nginx Proxy Manager. It's designed to be easily deployable using Docker Compose.

## Features

- Nginx for serving web requests.
- PHP-FPM for processing PHP code.
- MySQL for database storage.
- Nginx Proxy Manager for managing reverse proxy configurations.

## Prerequisites

Make sure you have Docker and Docker Compose installed on your system.

## Usage

1. Clone this repository:

   ```bash
   git clone https://github.com/Abrar-Akbar/Nginx-PHP-MySQL-Docker-Setup.git
   ```

2. Navigate to the project directory:

   ```bash
   cd nginx-php-mysql
   ```

3. Start the services using Docker Compose:

   ```bash
   docker-compose up -d
   ```

4. Access your application in a web browser at `http://localhost:8080`/ `http://serverIP:8080`.

## Configuration

- `docker-compose.yml`: Contains the configuration for Docker Compose, including services for Nginx, PHP, MySQL, and Nginx Proxy Manager.
- `nginx/default.conf`: Nginx configuration file.
- `nginx/Dockerfile`: Dockerfile for building custom Nginx images.
- `www/html`: Directory for your PHP application code.

## Directory Structure

- `data`: Data directory for Nginx Proxy Manager.
- `letsencrypt`: Directory for Let's Encrypt SSL certificates.
- `mysql`: Directory containing MySQL configuration and secrets.
- `nginx`: Directory containing Nginx configuration files and Dockerfile.
- `www/html`: Directory for your PHP application code.

## Nginx Proxy Manager

- Nginx Proxy Manager is included as a service in the `docker-compose.yml` file.
- It is used for managing reverse proxy configurations and SSL certificates.
- Access the Nginx Proxy Manager dashboard in a web browser at `http://localhost:81` / `https://serverIP:81` after starting the services.

## Secrets (Confidential)

Secrets for MySQL credentials are stored in the `mysql` directory (Don't be pushed on GitHub publically)

## Additional Notes

- Make sure to adjust configurations according to your application requirements.
- For SSL certificates, Nginx Proxy Manager is configured to use Let's Encrypt. You can customize SSL configurations as needed.

## Credits

This project setup is inspired by [docker-compose.yml] provided by [Abrar Akbar](https://github.com/Abrar-Akbar).

