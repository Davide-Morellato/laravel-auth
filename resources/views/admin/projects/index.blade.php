@extends('layouts.app')

@section('content')
<section class="py-5">
    <div class="container p-2">
        <div class="row">
            <table class="table table-striped">
                <thead>
                    <tr class="text-center">
                        <th scope="col" class="p-2 text-danger">Name Project</th>
                        <th scope="col" class="p-2 text-danger">GitHub URL</th>
                        <th scope="col" class="p-1 text-danger">Details</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($projects as $project)
                    <tr>
                        <th scope="row" class="p-3 text-center">{{$project->name_project}}</th>
                        <td class="p-3">{{$project->url_github}}</td>
                        <td>
                        <a href="{{route('admin.projects.show', $project)}}" class="text-decoration-none text-warning fw-bold" style="line-height: 40px;">Details</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection