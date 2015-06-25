Subastayar
==========

`Sistema de subastas web.`


Pasos para levantar la aplicacion.
----------------------------------

1. Clonar el repositorio

  ```bash
    git clone https://github.com/cam-ila/subastayar
  ```

2. Entrar a la carpeta de la aplicacion

  ```bash
    cd subastayar/app
  ```

3. Iniciar la maquina virtual

  ```bash
    homestead up
  ```

4. Ingresar a la maquina virtual

  ```bash
    homestead ssh
  ```

5. Instalar las dependencias

  ```bash
    composer install
  ```

6. Crear la base de datos

  ```bash
    mysql -uhomestead -psecret -e 'create database bestnid'
  ```

7. Hidratar la base de datos

  ```bash
    php artisan migrate --seed
  ```

