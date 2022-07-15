@extends('layout.main')
@section('title', 'Github Name')
@section('content')


    <div class="container-display">
        
    </div>
    <div class="container-repos">

    </div>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script> <!-- Libreria axios -->
    <script>
        //Definicion de variables
        let dataHtml = "";

        let reposHtml = "";

        let repos = "";

        const content = document.querySelector('.container-display'); //Seleccionamos el contenedor de la vista
        const contentRepo = document.querySelector('.container-repos'); //Seleccionamos el contenedor de la vista
        

        var user = {!! json_encode($user->github_name) !!}; //Obtenemos el usuario de la vista display.blade.php

        let connection = axios("https://api.github.com/users/" + user); //Creamos la conexion con la API

        const htmlInsert = (avatar, login, name, bio) => { //Funcion para insertar los datos en el html
            return (`
                <div class="content-display">
                    <div class="container-info">
                        <h1><b>Nombre:</b> ${name} </h1>
                        <h2><b>Nombre de Usuario:</b> ${login} </h2>
                        <h3><b>Bio:</b> ${bio} </h3>
                    </div>
                    <div class="container-img">
                        <img  class="logo-display" src="${avatar}" alt="logo" title="User Logo">
                    </div>
                        </div>`);
        }


        const getUser = () => { //Funcion para obtener los datos del usuario de la API

            connection.then(res => {

                console.log(res.data); //Almacenar datos en variable
                avatar = (res.data.avatar_url);
                login = (res.data.login);
                name = (res.data.name);
                bio = (res.data.bio);
                repos = (res.data.repos_url);

                if (name == null) { //Si el usuario no tiene nombre, se le asigna el nombre de usuario
                    name = "No tiene nombre";
                }
                
                if (bio ==null) { //Verificación de la variable bio, en caso null se le asigna un valor por defecto

                    bio = "No existe una biografía";
                }


                dataHtml = htmlInsert(avatar, login, name, bio);

                content.innerHTML = dataHtml; //Insertamos los datos en el html en el contenedor de la vista

                axios(repos).then(res => {

                    res.data.forEach(
                    repo => { //Recorremos el array de repositorios y los insertamos en el html


                        if (repo.description == null) { //Verificación de la variable description, en caso null se le asigna un valor por defecto

                            repo.description = "No existe una descripción";
                        }
                        
                        reposHtml += `
                        <div class="repos-display">
                            <a href="${repo.html_url}" target="_blank">
                            <ul>
                                <li><b>Repositorio:</b>${repo.name}</li>
                                <p><b>Descripción:</b>${repo.description}</p>
                                <p><b>Lenguaje:</b>${repo.language}</p>
                                
                            </ul>
                            </a>
                            
                        </div>
                        `;
                    });
                    contentRepo.innerHTML += reposHtml;
                });

            }).catch(err => { //Manejo de errores
                dataHtml = htmlError(user);
                content.innerHTML = dataHtml;
            });
        }
        
        getUser();


        const htmlError = (user) => { //Funcion para insertar los datos en el html cuando existe un error
            return (`
                <div class="content-display-error">
                    <h1><b>Error!</b> <br>El usuario ${user} no existe </h1>
                </div>`);
        }
    </script>

@endsection()
