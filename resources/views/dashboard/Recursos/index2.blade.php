<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <!--<title> Responsive Sidebar Menu  | CodingLab </title>-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">

    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="sidebar p-0">
        <div class="logo-details">
            <i class='bx bxl-ok-ru'></i>
            <div class="logo_name">ADMIN</div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav-list">
            <li>
                <i class='bx bx-search'></i>
                <input type="text" placeholder="Buscar...">
                <span class="tooltip">Buscar</span>
            </li>
            <li>
                <a href="{{ route('index') }}">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="{{ route('user.index') }}">
                    <i class='bx bx-user'></i>
                    <span class="links_name">Usuario</span>
                </a>
                <span class="tooltip">User</span>
            </li>
            <li>
                <a href="{{ route('proveedor.index') }}">
                    <i class='bx bx-group'></i>
                    <span class="links_name">Proveedor</span>
                </a>
                <span class="tooltip">Proveedor</span>
            </li>
            <li>
                <a href="{{ route('producto.index') }}">
                    <i class='bx bx-store'></i>
                    <span class="links_name">Productos</span>
                </a>
                <span class="tooltip">Productos</span>
            </li>
            <li>
                <a href="{{route('compra.index')}}">
                    <i class='bx bxl-shopify'></i>
                    <span class="links_name">Compras</span>
                </a>
                <span class="tooltip">Compras</span>
            </li>
            <li>
                <a href="{{ route('pedido.index') }}">
                    <i class='bx bxs-shopping-bags'></i>
                    <span class="links_name">Ventas</span>
                </a>
                <span class="tooltip">Ventas</span>
            </li>
            <li>
                <a href="{{ route('category.index') }}">
                    <i class='bx bx-category'></i>
                    <span class="links_name">Categoria</span>
                </a>
                <span class="tooltip">Categoria</span>
            </li>


            <li>
                <a href="#">
                    <i class='bx bx-cog'></i>
                    <span class="links_name">Setting</span>
                </a>
                <span class="tooltip">Setting</span>
            </li>
            <li class="profile">
                <div class="profile-details">
                    <!--<img src="profile.jpg" alt="profileImg">-->
                    <div class="name_job">
                        <div class="name">Lalishop</div>
                        <div class="job">Web administrador</div>
                    </div>
                </div>
                <form method="POST" action="{{ route('signOut') }}">
                    @csrf
                    <button type="submit">
                        <i class='bx bx-log-out' id="log_out"></i>
                    </button>
                </form>


            </li>
        </ul>
    </div>
    <section class="home-section p-5">
        @yield('content')
    </section>
    
    <script>
        let sidebar = document.querySelector(".sidebar");
        let closeBtn = document.querySelector("#btn");
        let searchBtn = document.querySelector(".bx-search");

        closeBtn.addEventListener("click", () => {
            sidebar.classList.toggle("open");
            menuBtnChange(); //calling the function(optional)
        });

        searchBtn.addEventListener("click", () => { // Sidebar open when you click on the search iocn
            sidebar.classList.toggle("open");
            menuBtnChange(); //calling the function(optional)
        });

        // following are the code to change sidebar button(optional)
        function menuBtnChange() {
            if (sidebar.classList.contains("open")) {
                closeBtn.classList.replace("bx-menu", "bx-menu-alt-right"); //replacing the iocns class
            } else {
                closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the iocns class
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>
