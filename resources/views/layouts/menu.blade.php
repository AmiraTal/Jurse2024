<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>
<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-link"></i>
        <p>
            Links
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('admin.links.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Voir les liens</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.links.create') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Ajouter un lien</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-file"></i>
        <p>
            Pages
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('admin.pages.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Voir les pages</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.pages.create') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Ajouter une page</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
        <i class="fab fa-twitter"></i>
        <p>
            Tweets
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('admin.tweets.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Voir les tweets</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.tweets.create') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Ajouter un tweet</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-users"></i>
        <p>
            Organisateurs
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('admin.organizers.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Voir les organisateurs</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.organizers.create') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Ajouter un organisateur</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-handshake"></i>
        <p>
            Sponsors
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('admin.sponsors.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Voir les sponsors</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.sponsors.create') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Ajouter un sponsor</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-microphone"></i>
        <p>
            Conférenciers
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('admin.keynotespeakers.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Voir les conférenciers</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.keynotespeakers.create') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Ajouter un conférencier</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-users"></i> <!-- Icône modifiée pour les utilisateurs -->
        <p>
            Utilisateurs
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('admin.user.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Voir les utilisateurs</p> <!-- Texte modifié -->
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.user.create') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Ajouter un utilisateur</p> <!-- Texte modifié -->
            </a>
        </li>
    </ul>
</li>
<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-feather-alt"></i> <!-- Icône représentative pour les auteurs -->
        <p>
            Auteurs
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('admin.authors.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Voir les auteurs</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.authors.create') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Ajouter un auteur</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-chalkboard-teacher"></i> <!-- Icône pour les sessions spéciales -->
        <p>
            Sessions Spéciales
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('admin.specialsessions.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Voir les sessions</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.specialsessions.create') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Ajouter une session</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-video"></i> <!-- Icône pour les vidéos -->
        <p>
            Vidéos
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('admin.videos.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Voir les vidéos</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.videos.create') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Ajouter une vidéo</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-camera"></i> <!-- Icône représentative pour les photos -->
        <p>
            Photos
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('admin.photos.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Voir les photos</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.photos.create') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Ajouter une photo</p>
            </a>
        </li>
    </ul>
</li>

