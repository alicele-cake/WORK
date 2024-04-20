<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text" aria-current="page" href="../../seller_center/screen/seller_center.php?id=0">賣家中心</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">下載</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">追蹤我們</a>
                </li>
                <li class="nav-item account">
                    <a class="nav-link" href="
                        <?php
                        include("../../public_area/php/show_account_link.php");
                        ?>
                    ">
                        <?php
                        include("../../public_area/php/show_account.php");
                        ?>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="
                        <?php
                        include("../../public_area/php/show_account_link2.php");
                        ?>
                    ">
                        <?php
                        include("../../public_area/php/show_account2.php");
                        ?>
                    </a>
                </li>
            </ul>
            <span class="navbar-text">
                no
            </span>
        </div>
    </div>
    <div class="container-fluid">

        <a class="navbar-brand link" href="../../store_php/screen/index.php">
            <img class="link_picture" src="../../photo/white_happy_marked_link.png">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="d-flex search">
                <input class="form-control me-2 input_area" type="search" placeholder="在 商城 中搜尋" aria-label="Search">
                <button class="btn btn-orange" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-search search_marked" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                </button>
            </form>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-cart shopping_cart" viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                        </svg>
                    </a>
                </li>
            </ul>
        </div>

    </div>
</nav>