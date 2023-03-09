<div class="one-line-container"> <!--container riga blu in alto -->

</div>
<div class="navbar-container d-flex"> <!--container principale header -->
    <div class="logo-container">

    </div>
    <div class="menu-container d-flex justify-content-between">
        <div>
            <ul>
                @foreach($menu as $itemMenu)
                <li>
                   <a href="#"> {{ $itemMenu }} </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="search-container">

    </div>
</div>