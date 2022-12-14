@extends('layouts.app')

@section('content')

<div class="container text-center">
    <h1 class="mb-5 mt-5">Panel del profesor</h1>
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="grid-card">
                <a href="{{ route('teacher.courses.index') }}">
                    <div class="menu-admin-opt p-4">
                        <i class="bi bi-clipboard-check"></i> Cursos
                    </div>
                </a>  
                <a href="{{ route('admin.courses.index') }}">
                    <div class="menu-admin-opt p-4">
                        <i class="bi bi-book"></i> Asignaturas
                    </div>
                </a>  
                <a href="{{ route('teacher.works.index') }}">
                    <div class="menu-admin-opt p-4">
                        <i class="bi bi-journal-bookmark-fill"></i> Trabajos
                    </div>
                </a>  
                <a href="{{ route('teacher.exams.index') }}">
                    <div class="menu-admin-opt p-4">
                        <i class="bi bi-ui-checks"></i> Exámenes
                    </div>
                </a>  
                <a href="{{ route('teacher.users.index') }}">
                    <div class="menu-admin-opt p-4">
                        <i class="bi bi-mortarboard-fill"></i> Alumnos
                    </div>
                </a>      


            </div>
        </div>
    </div>
</div>



@endsection


