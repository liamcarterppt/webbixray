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
                    </div>

                </div>
            </div>
        </li>
    </ul>
</li>
<li class="slide">
    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
            class="side-menu__icon fe fe-slack"></i><span
            class="side-menu__label">Wallet Management</span><i
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

                            <li><a href="{{route('admin.wallets.index')}}" class="slide-item">Wallet List</a></li>
                            <li><a href="{{route('admin.mywallet')}}" class="slide-item"> My Wallet</a></li>
                            <li><a href="{{route('admin.transactions')}}" class="slide-item"> Transaction </a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </li>
    </ul>
</li>

<li class="slide">
    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
            class="side-menu__icon fe fe-slack"></i><span
            class="side-menu__label">Product Management</span><i
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

                            <li><a href="" class="slide-item">Add Product</a></li>

                        </ul>
                    </div>

                </div>
            </div>
        </li>
    </ul>
</li>

<li>
    <a class="side-menu__item has-link" href="{{route('admin.settings.index')}}" >
        <i class="side-menu__icon fe fe-zap"></i>
        <span class="side-menu__label">Settings</span>
    </a>
</li>


