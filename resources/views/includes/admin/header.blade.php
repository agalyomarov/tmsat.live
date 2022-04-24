<header class="p-2 bg-dark text-white">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start" style="padding-left: 10%;padding-right: 10%;">
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="{{ route('admin.users') }}" class="nav-link px-2 text-white">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Пользoватели</font>
                    </font>
                </a></li>
            <li><a href="{{ route('admin.packet.index') }}" class="nav-link px-2 text-white">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Пакеты</font>
                    </font>
                </a></li>
            <li><a href="{{ route('admin.news.index') }}" class="nav-link px-2 text-white">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Новости</font>
                    </font>
                </a></li>
        </ul>
        <div class="text-end">
            <button type="button" class="btn btn-warning">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Выйти</font>
                </font>
            </button>
        </div>
    </div>
</header>
