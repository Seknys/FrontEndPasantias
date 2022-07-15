

#Ejercicios Pasantías (Front-End)




## Introduccion
Los ejercicios fueron realizados principalmente en el framework de Laravel, utilizando los lenguajes de programación Html, Css, JavaScript y Php. Se utilizo le estructura Modelo-Vista-Controlador (MVC) para los dos ejercicios.

## Instalacion de herramientas

Para las herramientas tenemos las siguientes:

- [NodeJs link descarga](https://nodejs.org/en/).
    Seguir los pasos de instalacion sugeridos por el desarrollador.
    Para verificar la correcta instalacion de node ejecutamos el siguiente comando en la terminal
     ```sh
    node -v
    ```


- [XAMPP link descarga](https://www.apachefriends.org/es/index.html).
    Seguir los pasos de instalacion sugeridos por el desarrollador.
    
    

- [Composer link descarga](https://getcomposer.org/download/) 
    Para verificar la correcta instalacion de composer ejecutamos el siguiente comando en la terminal
     ```sh
    composer -v
    ```
    
- Laravel.
    Para la instalacion de laravel ejecutar el siguiente comando.
     ```sh
    composer global require laravel/installer
    ```





## Preparar el entorno para el programa

Una vez installadas todas las herramientas necesarias se procede a clonar el repositorio mediante el comando.

```sh
git init
```


```sh
git clone https://github.com/Seknys/FrontEndPasantias.git
```

Cuando termine la descarga del repositorio se procede a entrar al directorio del proyecto.

```sh
cd FrontEndPasantias
```


Una vez en el respectivo directorio ejecutamos el siguiente comando para abrir visual studio code. ( O lo puede hacer manualmente)

```sh
code .
```



Por ultimo ejecutar el comando para iniciar el servidor

```sh
php artisan serve
```

## Ejecución del ejercicio 

Si todos los pasos fueron ejecutados correctamente no se presentara ningun problema y deberia abrirse una nueva pantalla con un estilo similar al de la imagen.(Nota: el servidor siempre debe estar habilitado para que cualquier funcion pueda ejercutarse)


- El programa permite ingresar un nombre de usuario  y buscarlo mediante el Api de github. (Nota: el nombre de usuario es el que se encuentra mas opaco y mas pequeño en este caso Seknys).

- Despues la pagina redirigira a otra en la que se presentara los datos del usuario, la imagen de perfil y todos los repositorios que este tenga con una descripcion y nombre de cada uno.

-En el caso de no encontrar el usuario se mostrara un mensaje de error.




Gracias👍.

###### Aspectos importantes.

Este programa cuenta con:

- Responsive Design.
- Manejo de errores.
- Validacion de campos (input).
- Comentarios en funciones para hacerlas mas entendibles.

En el caso de querer revisar las funciones principales y sus respectivas funciones con comentarios porfavor acceder a las siguientes rutas en las carpetas del proyecto.

**App/Http/Controllers/displayController.php y homeController.php** Programación de los controladores.

**Routes/web.php** Las rutas que se utilizan para acceder a las diferentes vistas creadas.

**Resources/Views** Todas las visatas generadas para el proyecto (HTML y Javascript).

**Public/Css/App.css** El estilo que se utiliza para todo el proyecto.