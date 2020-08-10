@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>
                         article

                            <a href="{{ url('admin/article/create') }}" class="btn btn-default pull-right">Nouveau</a>
                        </h2>
                    </div>

                    <div class="panel-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Titre</th>
                                    <th>Contenu</th>
                                    <th>Auteur</th>
                                    <th>Categorie</th>
                                    <th>Type</th>
                                    <th>Publier</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($posts as $post)
                                    <tr>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ str_limit($post->body, 600) }}</td>
                                        <td>{{ $post->user->name }}</td>
                                        <td>{{ $post->category->name }}</td>
                                        <td>{{ $post->tags->implode('name', ', ') }}</td>
                                        <td><img src="{{asset('storage').'/'.$post->photo}}" style="width:50px;height:50px;" class="bf5 border rounded-circle"></td>
                                        <td>{{ $post->published }}</td>
                                        <td>
                                            @if (Auth::user()->is_admin)
                                                @php
                                                    if($post->published == 'Yes') {
                                                        $label = 'Arrêter';
                                                    } else {
                                                        $label = 'Publier';
                                                    }
                                                @endphp
                                                <a href="{{ url("/admin/article/{$post->id}/publish") }}" data-method="PUT" data-token="{{ csrf_token() }}" data-confirm="Etes vous sûr?" class="btn btn-xs btn-warning">{{ $label }}</a>
                                            @endif
                                            <a href="{{ url("/admin/article/{$post->id}") }}" class="btn btn-xs btn-success">voir</a>
                                            <a href="{{ url("/admin/article/{$post->id}/edit") }}" class="btn btn-xs btn-info">Editer</a>
                                            <a href="{{ url("/admin/article/{$post->id}") }}" data-method="DELETE" data-token="{{ csrf_token() }}" data-confirm="Ete vous sûr?" class="btn btn-xs btn-danger">Supprimer</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5">pas d'Article.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                        {!! $posts->links() !!}

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
