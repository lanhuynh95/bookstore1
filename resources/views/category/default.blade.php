@extends('admin')
@section('content')

<div class="col-lg-12">
    <h2 class="title-1 m-b-25">Category</h2>
    <div class="table-responsive table--no-card m-b-40">
        <table class="table table-borderless table-striped table-earning">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Intro</th>
                    <th colspan="2">Orther</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <td>{{$category->name}}</td>
                    <td>{{$category->intro}}</td>
                    <td class="text-right"><i class="fa fa-fw fa-edit">Edit</i></td>
                    <td class="text-right"><i class="fa fa-fw fa-trash">Delete</i></td>
                </tr>
                @endforeach 
            </tbody>
        </table>
    </div>
</div>

@endsection