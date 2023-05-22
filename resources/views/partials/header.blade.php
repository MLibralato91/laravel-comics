<header class="d-flex align-items-center">
    <div class="container d-flex  ">
        <div class="logo w-25">
            <img class="img-fluid" src="../assets/images/dc-logo.png" alt="">
        </div>
        <div class="navLink w-75 d-flex flex-column justify-content-center ">
            <ul class="d-flex justify-content-between ">
                <li class="text-uppercase fw-bolder small">
                    <a href="/"> Home</a>
                </li>
                <li class="text-uppercase fw-bolder small">
                    <a href="/recipes">Comics</a>
                </li>
            </ul>
        </div>
    </div>
</header>

<style lang="scss" scoped>
    header {
        height: 80px;
        background-color: $white;
        color: $black;
    }

    img {
        width: 60px;
    }

    a {
        border-bottom: 2px solid rgba(0, 0, 0, 0);

        &.active,
        &:hover {
            color: rgb(13, 110, 253);
            border-bottom: 2px solid rgb(13, 110, 253);
        }
    }

    li {
        list-style: none;
    }

    ul {
        margin-bottom: -2px;
    }
</style>
