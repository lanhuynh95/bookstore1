@extends('admin')
@section('content')

<div class="col-lg-12">
    <h2 class="title-1 m-b-25">Product</h2>
    <div class="table-responsive table--no-card m-b-40">
        <table class="table table-borderless table-striped table-earning">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Intro</th>
                    <th class="text-right">price</th>
                    <th class="text-right">Category</th>
                    <th class="text-right">Images</th>
                    <th>Status</th>
                    <th>Vote</th>
                    <th colspan="2">Orther</th>
                </tr>
            </thead>
            <tbody>
                @foreach($news as $new)
                <tr>
                    <td>{{$new->title}}</td>
                    <td>{{$new->author}}</td>
                    <td>{{$new->intro}}</td>
                    <td class="text-right">{{$new->price}}</td>
                    <td class="text-right">{{ $new->category_id}}</td>
                    <td><img src="{{ asset('uploads/'.$new->images) }}" alt="{{$new->title}}" style="width: 60px;height: 90px"></td>
                    <td class="text-right">{{$new->status}}</td>
                    <td class="text-right">{{$new->vote}}</td>
                    <td class="text-right"><i class="fa fa-fw fa-edit">Edit</i></td>
                    <td class="text-right"><i class="fa fa-fw fa-trash">Delete</i></td>
                </tr>
                @endforeach 
            </tbody>
        </table>
    </div>
</div>

@endsection