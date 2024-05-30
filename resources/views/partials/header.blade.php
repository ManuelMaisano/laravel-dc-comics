<header>
        <div id="header" class="container ">

            <div class="p-3">
                <img class="img-fluid" src="{{ Vite::asset('resources/img/dc-logo.png')}}" alt="Logo">
            </div>
            <div id="nav" class="p-3">
                <ul>
                    <li><a href="&">CHARCATERS</a></li>
                    <li><a href="&">COMICS</a></li>
                    <li><a href="&">MOVIES</a></li>
                    <li><a href="&">TV</a></li>
                    <li><a href="&">GAMES</a></li>
                    <li><a href="&">COOLECTIBLES</a></li>
                    <li><a href="&">VIDEOS</a></li>
                    <li><a href="&">FANS</a></li>
                    <li><a href="&">NEWS</a></li>
                    <li><a href="&">SHOP</a></li>
                </ul>
            </div>

        </div>
    </header>
    <style lang="scss" scoped>
img {
    padding: 10px;
}


#header {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

ul {
    display: flex;
    align-items: center;
    margin: auto;
}

li {
    list-style: none;
    margin: 10px;
}


a {
            text-decoration: none;
            text-transform: uppercase;
            color: black;
            font-weight: bold;

            &:hover {
              color: #0282f9;
            }

            &:after {
              content: '';
              display: block;
              height: 5px;
              width: 100%;
              margin: 0 auto;             
              background-color: transparent;
              position: relative ;
              top: 53px;
            }
            &.active:after,
            &:hover:after {
              background-color: #0282f9;
            }
        }
</style>
