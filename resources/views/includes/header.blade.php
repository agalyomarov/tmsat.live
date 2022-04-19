 <header>
     <div class="top_head">
         <div class="container clearfix">
             <button class="open_mob_menu"><span></span></button>
             <a href="{{ route('index') }}" class="logo">TM<span>SAT</span></a>
             <div class="row">
                 <div class="wrapp_menu">
                     <ul class="list_navi">
                         <li>
                             <a href="{{ route('index') }}" class="link {{ request()->is('/') ? 'active' : '' }}">Главная</a>
                         </li>
                         @auth
                             <li>
                                 <a href="{{ route('news') }}" class="link {{ request()->is('news') ? 'active' : '' }}">Новости</a>
                             </li>
                             <li>
                                 <a href="{{ route('profile') }}" class="link {{ request()->is('profile') ? 'active' : '' }}">Профиль</a>
                             </li>
                             <li>
                                 <a href="{{ route('pay_balance') }}" class="link {{ request()->is('pay_balance') ? 'active' : '' }}">Пополнить баланс</a>
                             </li>
                             <li>
                                 <a href="{{ route('diller') }}" class="link  {{ request()->is('diller') ? 'active' : '' }}">Диллерам</a>
                             </li>
                             <li>
                                 <a href="{{ route('paket') }}" class="link {{ request()->is('paket') ? 'active' : '' }}">Наши пакеты</a>
                             </li>
                             <li>
                                 <a href="{{ route('select_server') }}" class="link {{ request()->is('select_server') ? 'active' : '' }}">Выбрать сервер</a>
                             </li>
                             <li>
                                 <a href="{{ route('tools') }}" class="link {{ request()->is('tools') ? 'active' : '' }}">Настройки</a>
                             </li>
                             <li>
                                 <a href="{{ route('regulation') }}" class="link {{ request()->is('regulation') ? 'active' : '' }}">Правила пользования</a>
                             </li>
                             <li>
                                 <a href="{{ route('support') }}" class="link {{ request()->is('support') ? 'active' : '' }}">Тех поддержка</a>
                             </li>
                         @endauth
                     </ul>
                 </div>
             </div>
         </div>
     </div>
     </div>
 </header>
