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
                    <div class="col-md-3" style="display: flex; justify-content: flex-end;">
                        @auth
                        <div class="user">
                            <cart />
                        </div>

                        <div class="user">
                            <wishlist />
                        </div>
                        @endauth
                    </div>
                </div>
            </div>
        </div>