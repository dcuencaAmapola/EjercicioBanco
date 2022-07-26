@extends('layout/header/layout')

@section('content')

    <h1 style="align: center">Usuarios</h1>
    <ul>
        <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Cedula</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @csrf
            @forelse($usuario as $usuariosItem)
            <tr>
                <td scope="row">{{$usuariosItem->idUsuario}}</td>
                <td>{{$usuariosItem->nombreUsuario}}</td>
                <td>{{$usuariosItem->apellidoUsuario}}</td>
                <td>{{$usuariosItem->cedulaUsuario}}</td>
                <td>
                    <a href="{{route ('prestaciones.index',$usuariosItem->idUsuario)}}">Nueva Prestacion</a>
                </td>
            </tr>
            @empty
                <li>No hay Usuarios para mostrar</li>
            @endforelse
        </tbody>
        </table>
    </ul>
