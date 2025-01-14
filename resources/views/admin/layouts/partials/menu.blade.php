<li class="sub-category">
    <h3>Main</h3>
</li>
<li class="slide">
    <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{route('admin.dashboard')}}"><i
            class="side-menu__icon fe fe-home"></i><span
            class="side-menu__label">Dashboard</span></a>
</li>
<li class="sub-category">
    <h3>UI Kit</h3>
</li>
<li class="slide">
    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
            class="side-menu__icon fe fe-slack"></i><span
            class="side-menu__label">User Management</span><i
            class="angle fe fe-chevron-right"></i>
    </a>
    <ul class="slide-menu">
        <li class="panel sidetab-menu">
            <div class="tab-menu-heading p-0 pb-2 border-0">
                <div class="tabs-menu ">
                    <!-- Tabs -->
                    <ul class="nav panel-tabs">
                        <li><a href="#side1" class="d-flex active" data-bs-toggle="tab"><i class="fe fe-monitor me-2"></i><p>Home</p></a></li>
                        <li><a href="#side2" data-bs-toggle="tab" class="d-flex"><i class="fe fe-message-square me-2"></i><p>Chat</p></a></li>
                    </ul>
                </div>
            </div>
            <div class="panel-body tabs-menu-body p-0 border-0">
                <div class="tab-content">
                    <div class="tab-pane active" id="side1">
                        <ul class="sidemenu-list">
                            <li class="side-menu-label1"><a href="javascript:void(0)">Apps</a></li>
                            <li><a href="{{route('users.index')}}" class="slide-item">Users</a></li>
                            <li><a href="{{route('roles.index')}}" class="slide-item">Roles</a></li>
                            <li><a href="{{route('permissions.index')}}" class="slide-item">Permissions</a></li>

                        </ul>
                        <div class="menutabs-content mt-5 p-0">
                            <div class="Annoucement_card">
                                <div class="text-center">
                                    <div>
                                        <h5 class="title mt-0 mb-1 ms-2 font-weight-bold tx-12"> Go for Premium Account </h5>
                                        <div class="bg-layer">
                                            <img src="../assets/images/media/37.png" alt="img" class="text-center mx-auto">
                                        </div>
                                        <p class="subtext mt-0 mb-0 ms-2 fs-13 text-center my-2"> $399.9 /Monthly</p>
                                    </div>
                                </div>
                                <button class="btn btn-block btn-primary mt-4 fs-14"> Upgrade</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </li>
    </ul>
</li>


