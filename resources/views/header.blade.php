<header id="header" style="margin-bottom: 10rem" class="full-header">
    <div id="header-wrap" class="">
        <div class="container">
            <div class="header-row">

                <div id="logo">
                    <a href="" class="standard-logo" data-dark-logo="{{asset('images/jurselogo.png')}}"><img
                            src="{{asset('images/jurselogo.png')}}" alt="Logo RSLab" style="height: 100px;"></a>
                    <a href="" class="retina-logo" data-dark-logo="{{asset('images/jurselogo.png')}}"><img
                            src="{{asset('images/jurselogo.png')}}" alt="Logo RSLab" style="height: 100px;"></a>
                </div>

                <div id="primary-menu-trigger">
                    <svg class="svg-trigger" viewBox="0 0 100 100">
                        <path
                            d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path>
                        <path d="m 30,50 h 40"></path>
                        <path
                            d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path>
                    </svg>
                </div>

                <nav class="primary-menu">

                    <ul class="menu-container">
                        <li class="menu-item">
                            <a class="menu-link" href="{{route('accueil')}}"
                               style="padding-top: 39px; padding-bottom: 39px;">
                                <div>Accueil</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="menu-link" href="{{route('date.index')}}"
                               style="padding-top: 39px; padding-bottom: 39px;">
                                <div>Dates</div>
                            </a>
                        </li>
                        <li class="menu-item sub-menu">

                            <a class="menu-link cursor-normal" style="">
                                <div>Participation<i class="icon-caret-down1"></i><i class="icon-angle-down"></i></div>
                            </a>
                            <ul class="sub-menu-container" style="display: none;">
                                <li class="menu-item" style="">
                                    <a class="menu-link" href="{{route('program.index')}}">
                                        <div>Program</div>
                                    </a>
                                </li>
                                <li class="menu-item" style="">
                                    <a class="menu-link" href="{{route('program.guidelines')}}">
                                        <div>Guidelines</div>
                                    </a>
                                </li>
                                <li class="menu-item" style="">
                                    <a class="menu-link" href="{{route('program.call-for-papers')}}">
                                        <div>Call for Papers</div>
                                    </a>
                                </li>

                                <li class="menu-item" style="">
                                    <a class="menu-link" href="{{route('program.registration')}}">
                                        <div>Enregistrement</div>
                                    </a>
                                </li>


                            </ul>
                            <button class="sub-menu-trigger icon-chevron-right"></button>
                        </li>
                        <li class="menu-item sub-menu">
                            <a class="menu-link cursor-normal" style="">
                                <div>Presentation<i class="icon-caret-down1"></i><i class="icon-angle-down"></i></div>
                            </a>
                            <ul class="sub-menu-container" style="display: none;">
                                <li class="menu-item" style="">
                                    <a class="menu-link" href="{{route('presentation.keynotes')}}">
                                        <div>Keynotes</div>
                                    </a>
                                </li>
                                <li class="menu-item" style="">
                                    <a class="menu-link" href="{{route('presentation.topics')}}">
                                        <div>Topics</div>
                                    </a>
                                </li>
                                <li class="menu-item sub-menu" style="">
                                    <a class="menu-link" href="{{route('presentation.special-sessions')}}">
                                        <div>Special Sessions<i class="icon-angle-down"></i></div>
                                    </a>

                                    <button class="sub-menu-trigger icon-chevron-right"></button>
                                </li>
                                <li class="menu-item" style="">
                                    <a class="menu-link" href="{{route('presentation.technical-tutorials')}}">
                                        <div>Technical Tutorials</div>
                                    </a>
                                </li>
                                <li class="menu-item" style="">
                                    <a class="menu-link" href="{{route('presentation.student-contest')}}">
                                        <div>Student Contest</div>
                                    </a>
                                </li>
                                <li class="menu-item" style="">
                                    <a class="menu-link" href="{{route('presentation.exhibitors')}}">
                                        <div>Exhibitors</div>
                                    </a>
                                </li>
                            </ul>
                            <button class="sub-menu-trigger icon-chevron-right"></button>
                        </li>
                        <li class="menu-item">
                            <a class="menu-link" href="videos-and-photos.html"
                               style="padding-top: 39px; padding-bottom: 39px;">
                                <div>Videos &amp; Photos</div>
                            </a>
                        </li>
                        @auth

                        @else
                            <li class="menu-item">
                                <a class="menu-link" href="{{route('register')}}"
                                   style="padding-top: 39px; padding-bottom: 39px;">
                                    <div>Inscription</div>
                                </a>
                            </li>
                        @endauth
                        <li class="menu-item">
                            <a class="menu-link" href="{{route('faq.index')}}"
                               style="padding-top: 39px; padding-bottom: 39px;">
                                <div>FAQ</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="menu-link" href="{{route('blog.index')}}"
                               style="padding-top: 39px; padding-bottom: 39px;">
                                <div>Blog</div>
                            </a>
                        </li>
                        @auth
                            @auth
                                @if(Auth::user()->isSuperAdmin())
                                    <li class="menu-item">
                                        <a class="menu-link" href="{{route('admin.index')}}"
                                           style="padding-top: 39px; padding-bottom: 39px;">
                                            <div>Administration</div>
                                        </a>
                                    </li>
                                @endif
                            @endauth
                        @endauth

                        @auth

                            <li class="menu-item">

                                <p>Bonjour, {{ Auth::user()->name }}!</p>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class=" menu-link btn btn-link">Déconnexion</button>
                                </form>

                            </li>
                        @endauth

                    </ul>

                </nav>
            </div>
        </div>
    </div>
</header>
