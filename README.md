# Gestión Interna - Laravel

Sistema interno desarrollado en Laravel para la gestión de clientes,
enfocado en control de acceso, buenas prácticas y estructura empresarial.

## Características
- Autenticación de usuarios
- Gestión de clientes (CRUD)
- Control de acceso mediante Policies
- Roles (Administrador / Operador)
- Soft Deletes
- Validación con Form Requests

## Stack
- PHP 8.2
- Laravel 12
- MySQL
- Blade

## Instalación
1. Clonar repositorio
2. `composer install`
3. Copiar `.env.example` a `.env`
4. Configurar base de datos
5. `php artisan migrate --seed`
6. `php artisan serve`

## Roles
- **Administrador**: acceso total
- **Operador**: acceso solo a sus registros

## Notas
Proyecto desarrollado con fines de aprendizaje y práctica profesional.
