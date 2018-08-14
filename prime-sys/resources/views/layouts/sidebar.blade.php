<ul class="nav">



    <li class="nav-item {{{ (Request::is('home') ? 'active' : '') }}}">
        <a class="nav-link" href="./home">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
        </a>
    </li>

    @if(Auth::user()->user_access==1)
        <li class="nav-item {{{ (Request::is('porder') ? 'active' : '') }}}">
            <a class="nav-link" href="./porder">
                <i class="material-icons">class</i>
                <p>Purchase Orders</p>
            </a>
        </li>
        <li class="nav-item {{{ (Request::is('sorder') ? 'active' : '') }}}">
        <a class="nav-link" href="./sorder">
            <i class="material-icons">receipt</i>
            <p>Sales Orders</p>
        </a>
    </li>
    @elseif(Auth::user()->user_access==2)
        <li class="nav-item {{{ (Request::is('sorder') ? 'active' : '') }}}">
            <a class="nav-link" href="./sorder">
                <i class="material-icons">class</i>
                <p>Supplier Orders</p>
            </a>
        </li>
        <li class="nav-item {{{ (Request::is('rorder') ? 'active' : '') }}}">
            <a class="nav-link" href="./rorder">
                <i class="material-icons">receipt</i>
                <p>Repair Orders</p>
            </a>
        </li>
        <li class="nav-item {{{ (Request::is('service') ? 'active' : '') }}}">
            <a class="nav-link" href="./service">
                <i class="material-icons">build</i>
                <p>Services</p>
            </a>
        </li>
        <li class="nav-item {{{ (Request::is('supplier') ? 'active' : '') }}}">
            <a class="nav-link" href="./supplier">
                <i class="material-icons">gavel</i>
                <p>Suppliers</p>
            </a>
        </li>
        <li class="nav-item {{{ (Request::is('materials') ? 'active' : '') }}}">
            <a class="nav-link" href="./materials">
                <i class="material-icons">format_paint</i>
                <p>Materials</p>
            </a>
        </li>
        <li class="nav-item {{{ (Request::is('reports') ? 'active' : '') }}}">
            <a class="nav-link" href="./reports">
                <i class="material-icons">poll</i>
                <p>Reports</p>
            </a>
        </li>
    @else
        <li class="nav-item {{{ (Request::is('reports') ? 'active' : '') }}}">
        <a class="nav-link" href="./reports">
            <i class="material-icons">poll</i>
            <p>Reports</p>
        </a>
    </li>
    @endif
    <!--


                <li class="nav-item {{{ (Request::is('porder') ? 'active' : '') }}}">
                    <a class="nav-link" href="./porder">
                        <i class="material-icons">class</i>
                        <p>Purchase Orders</p>
                    </a>
                </li>
                <li class="nav-item {{{ (Request::is('sorder') ? 'active' : '') }}}">
                    <a class="nav-link" href="./sorder">
                        <i class="material-icons">receipt</i>
                        <p>Sales Orders</p>
                    </a>
                </li>
                <li class="nav-item {{{ (Request::is('service') ? 'active' : '') }}}">
                    <a class="nav-link" href="./service">
                        <i class="material-icons">build</i>
                        <p>Services</p>
                    </a>
                </li>
                <li class="nav-item {{{ (Request::is('supplier') ? 'active' : '') }}}">
                    <a class="nav-link" href="./supplier">
                        <i class="material-icons">gavel</i>
                        <p>Suppliers</p>
                    </a>
                </li>
                <li class="nav-item {{{ (Request::is('materials') ? 'active' : '') }}}">
                    <a class="nav-link" href="./materials">
                        <i class="material-icons">format_paint</i>
                        <p>Materials</p>
                    </a>
                </li>
                <li class="nav-item {{{ (Request::is('reports') ? 'active' : '') }}}">
                     <a class="nav-link" href="./reports">
                        <i class="material-icons">poll</i>
                        <p>Reports</p>
                     </a>
                  </li>
            to cancel nalang muna ksi time constraint? unless jeremy does this or clyde
                  <li class="nav-item {{{ (Request::is('account') ? 'active' : '') }}}">
                     <a class="nav-link" href="./">
                        <i class="material-icons">group</i>
                        <p>Accounts</p>
                     </a>
                  </li>
                  <li class="nav-item {{{ (Request::is('administrator') ? 'active' : '') }}}">
                     <a class="nav-link" href="./Add_Users_Controller">
                        <i class="material-icons">add_circle</i>
                        <p>Add Users</p>
                     </a>
                  </li>
   -->
                  <li class="nav-item {{{ (Request::is('logout') ? 'active' : '') }}}">
                     <a class="nav-link" href="./logout">
                        <i class="material-icons">exit_to_app</i>
                        <p>Logout</p>
                     </a>
                  </li>
               </ul>
