@extends('layouts.app')

@section('content')
<section class="py-5">
    <div class="container p-2">
        <div class="row">
            <table class="table table-striped">
                <thead>
                    <tr class="text-center">
                        <th scope="col" class="p-2 text-primary">Name Project</th>
                        <th scope="col" class="p-2 text-primary">GitHub URL</th>
                        <th scope="col" class="p-2 text-primary">Description</th>
                        <th scope="col" class="p-2 text-primary">Edit</th>
                        <th scope="col" class="p-2 text-primary">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row" class="p-3">{{$project->name_project}}</th>
                        <td class="p-3">{{$project->url_github}}</td>
                        <td class="p-3">{{$project->description}}</td>
                        <td class="p-3">Qui Edit</td>
                        <td class="p-3">Qui Delete</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center py-5">
            <a href="{{route('admin.projects.index', $project)}}" class="text-decoration-none text-danger fw-bold">Go Back</a>
        </div>
    </div>
</section>

@endsection