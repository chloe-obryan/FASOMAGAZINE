<ul class="nav navbar-nav">
    <li><a href="{{ url('admin/article') }}">Articles</a></li>
    <li><a href="{{ url('admin/categories') }}">Categories</a></li>
    <li><a href="{{ url('admin/comments') }}">Commentaires</a></li>
    <li><a href="{{ url('admin/tags') }}">Type</a></li>

    @if (Auth::user()->is_admin)
        <li><a href="{{ url('admin/users') }}">Utilisateur</a></li>
    @endif
</ul>
