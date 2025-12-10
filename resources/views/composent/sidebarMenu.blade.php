 <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="navigation" aria-label="Main navigation"
     data-accordion="false" id="navigation">
     <li class="nav-item menu-open">
         <a href="{{ url('/TableaudeBord')}}" class="nav-link active">
             <i class="nav-icon bi bi-table"></i
             <p>
                 Tableau de Bord
                 <i class=""> </i>
             </p>
         </a>
         <ul class="nav nav-treeview">
             <li class="nav-item">
                 <a href="{{ url('/langues') }}" class="nav-link">
                     <i class="nav-icon bi bi-flag"></i>
                     <p>Langues</p>
                 </a>
             </li>
             <li class="nav-item">
                 <a href="{{ url('/regions')}}" class="nav-link">
                     <i class="nav-icon bi bi-geo-alt"></i>
                     <p>Region</p>
                 </a>
             </li>
             <li class="nav-item">
                 <a href="{{ url('/utilisateurs')}}" class="nav-link">
                     <i class="nav-icon bi bi-person"></i>
                     <p>Utlisateurs</p>
                 </a>
             </li>
             <li class="nav-item">
                 <a href="{{ url('/roles')}}" class="nav-link">
                     <i class="nav-icon bi bi-shield-lock"></i>
                     <p>Roles</p>
                 </a>
             </li>
             <li class="nav-item">
                 <a href="{{ url('/type-contenus')}}" class="nav-link">
                     <i class="nav-icon bi bi-file-earmark-text"></i>
                     <p>Type-contenu</p>
                 </a>
             </li>
             <li class="nav-item">
                 <a href="{{ url('/type-medias')}}" class="nav-link">
                     <i class="nav-icon bi bi-camera-video"></i>
                     <p>Type-media</p>
                 </a>
             </li>
             <li class="nav-item">
                 <a href="{{ url('/contenus')}}" class="nav-link">
                     <i class="nav-icon bi bi-journal-text"></i>
                     <p>Contenus</p>
                 </a>
             </li>
             <li class="nav-item">
                 <a href="{{ url('/commentaires')}}" class="nav-link">
                     <i class="nav-icon bi bi-chat-dots"></i>
                     <p>Commentaires</p>
                 </a>
             </li>
             <li class="nav-item">
                 <a href="{{ url('/parle')}}" class="nav-link">
                     <i class="nav-icon bi bi-mic"></i>
                     <p>Parler</p>
                 </a>
             </li>
             <li class="nav-item">
                 <a href="{{ url('/media')}}" class="nav-link">
                     <i class="nav-icon bi bi-collection-play"></i>
                     <p>Media</p>
                 </a>
             </li>
         </ul>
     </li>
 </ul>
