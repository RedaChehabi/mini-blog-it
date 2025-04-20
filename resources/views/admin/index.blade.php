@extends('layouts.admin')

@section('title', 'Gestion des articles')

@section('header', 'Gestion des articles')

@section('content')
    <div class="container">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h2 class="mb-0">Gestion des articles</h2>
            </div>

            <div class="card-body">
                <div class="alert alert-info">
                    Cet espace est protégé par un middleware
                </div>

                <table class="table table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Titre</th>
                            <th>Auteur</th>
                            <th>Catégorie</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($articles as $article)
                            <tr>
                                <td>{{ $article['id'] }}</td>
                                <td>{{ $article['title'] }}</td>
                                <td>{{ $article['author'] }}</td>
                                <td>
                                    <span class="badge bg-primary">
                                        {{ $article['category'] }}
                                    </span>
                                </td>
                                <td>{{ date('d/m/Y', strtotime($article['published_at'])) }}</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="{{ route('admin.articles.show', $article['id']) }}"
                                            class="btn btn-sm btn-info">
                                            Voir
                                        </a>
                                        <a href="{{ route('admin.articles.edit', $article['id']) }}"
                                            class="btn btn-sm btn-warning">
                                            Modifier
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection