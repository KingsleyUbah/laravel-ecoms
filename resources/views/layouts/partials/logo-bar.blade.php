<div class="bottom-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="">
                                <img src="img/logo.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="search">
                            <input type="text" placeholder="Search">
                            <button><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <div class="col-md-3">
                        @auth
                        <div class="user">
                            <a href="" class="btn wishlist">
                                <i class="fa fa-heart"></i>
                                <span>(0)</span>
                            </a>
                            <cart />
                        </div>
                        @endauth
                    </div>
                </div>
            </div>
        </div>