
<head>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('xd.jpeg')}}" />
</head>
<ul class="nav">
    <li class="nav-item {{{ (Request::is('home') ? 'active' : '') }}}">
        <a class="nav-link" href="http://127.0.0.1:8000/home">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
        </a>
    </li>
    <li class="nav-item {{{ (Request::is('schedule') ? 'active' : '') }}}">
        <a class="nav-link" href="http://127.0.0.1:8000/schedule">
            <i class="material-icons">calendar_today</i>
            <p>Calendar of Schedule</p>
        </a>
    </li>
    @if(Auth::user()->user_access==1)
        <li class="nav-item {{{ (Request::is('supplierOrder') ? 'active' : '') }}}">
            <a class="nav-link" href="http://127.0.0.1:8000/supplierOrder">
                <i class="material-icons">class</i>
                <p>Supplier Orders</p>
            </a>
        </li>
        <li class="nav-item {{{ (Request::is('repairOrder') ? 'active' : '') }}}">
        <a class="nav-link" href="http://127.0.0.1:8000/repairOrder">
            <i class="material-icons">receipt</i>
            <p>Repair Orders</p>
        </a>
    </li>
    @elseif(Auth::user()->user_access==2)
        <li class="nav-item {{{ (Request::is('supplierOrder') ? 'active' : '') }}}">
            <a class="nav-link" href="http://127.0.0.1:8000/supplierOrder">
                <i class="material-icons">class</i>
                <p>Supplier Orders</p>
            </a>
        </li>
        <li class="nav-item {{{ (Request::is('repairOrder') ? 'active' : '') }}}">
            <a class="nav-link" href="http://127.0.0.1:8000/repairOrder">
                <i class="material-icons">receipt</i>
                <p>Repair Orders</p>
            </a>
        </li>
        <li class="nav-item {{{ (Request::is('service') ? 'active' : '') }}}">
            <a class="nav-link" href="http://127.0.0.1:8000/service">
                <i class="material-icons">build</i>
                <p>Services</p>
            </a>
        </li>
        <li class="nav-item {{{ (Request::is('supplier') ? 'active' : '') }}}">
            <a class="nav-link" href="http://127.0.0.1:8000/supplier">
                <i class="material-icons">gavel</i>
                <p>Suppliers</p>
            </a>
        </li>
        <li class="nav-item {{{ (Request::is('materials') ? 'active' : '') }}}">
            <a class="nav-link" href="http://127.0.0.1:8000/materials">
                <i class="material-icons">format_paint</i>
                <p>Materials</p>
            </a>
        </li>
        <li class="nav-item {{{ (Request::is('reports') ? 'active' : '') }}}">
            <a class="nav-link" href="http://127.0.0.1:8000/reports">
                <i class="material-icons">poll</i>
                <p>Reports</p>
            </a>
        </li>
        <li class="nav-item {{{ (Request::is('car') ? 'active' : '') }}}">
            <a class="nav-link" href="http://127.0.0.1:8000/car">
                <i class="material-icons">gavel</i>
                <p>Cars</p>
            </a>
        </li>
        <li class="nav-item {{{ (Request::is('carmaker') ? 'active' : '') }}}">
            <a class="nav-link" href="http://127.0.0.1:8000/carmaker">
                <i class="material-icons">gavel</i>
                <p>Car Makers</p>
            </a>
        </li>
    @else
        <li class="nav-item {{{ (Request::is('reports') ? 'active' : '') }}}">
        <a class="nav-link" href="http://127.0.0.1:8000/schedule">
            <i class="material-icons">poll</i>
            <p>Reports</p>
        </a>
        </li>
    @endif
    <li class="nav-item {{{ (Request::is('clients') ? 'active' : '') }}}">
        <a class="nav-link" href="http://127.0.0.1:8000/clients">
            <i class="material-icons">group</i>
            <p>Clients</p>
        </a>
    </li>
    <!--


                <li class="nav-item {{{ (Request::is('porder') ? 'active' : '') }}}">
                    <a class="nav-link" href="http://127.0.0.1:8000/porder">
                        <i class="material-icons">class</i>
                        <p>Purchase Orders</p>
                    </a>
                </li>
                <li class="nav-item {{{ (Request::is('sorder') ? 'active' : '') }}}">
                    <a class="nav-link" href="http://127.0.0.1:8000/sorder">
                        <i class="material-icons">receipt</i>
                        <p>Sales Orders</p>
                    </a>
                </li>
                <li class="nav-item {{{ (Request::is('service') ? 'active' : '') }}}">
                    <a class="nav-link" href="http://127.0.0.1:8000/service">
                        <i class="material-icons">build</i>
                        <p>Services</p>
                    </a>
                </li>
                <li class="nav-item {{{ (Request::is('supplier') ? 'active' : '') }}}">
                    <a class="nav-link" href="http://127.0.0.1:8000/supplier">
                        <i class="material-icons">gavel</i>
                        <p>Suppliers</p>
                    </a>
                </li>
                <li class="nav-item {{{ (Request::is('materials') ? 'active' : '') }}}">
                    <a class="nav-link" href="http://127.0.0.1:8000/materials">
                        <i class="material-icons">format_paint</i>
                        <p>Materials</p>
                    </a>
                </li>
                <li class="nav-item {{{ (Request::is('reports') ? 'active' : '') }}}">
                     <a class="nav-link" href="http://127.0.0.1:8000/reports">
                        <i class="material-icons">poll</i>
                        <p>Reports</p>
                     </a>
                  </li>
            to cancel nalang muna ksi time constraint? unless jeremy does this or clyde
                  <li class="nav-item {{{ (Request::is('account') ? 'active' : '') }}}">
                     <a class="nav-link" href="http://127.0.0.1:8000/">
                        <i class="material-icons">group</i>
                        <p>Accounts</p>
                     </a>
                  </li>
                  <li class="nav-item {{{ (Request::is('administrator') ? 'active' : '') }}}">
                     <a class="nav-link" href="http://127.0.0.1:8000/Add_Users_Controller">
                        <i class="material-icons">add_circle</i>
                        <p>Add Users</p>
                     </a>
                  </li>
   -->
                  <li class="nav-item {{{ (Request::is('logout') ? 'active' : '') }}}">
                     <a class="nav-link" href="http://127.0.0.1:8000/logout">
                        <i class="material-icons">exit_to_app</i>
                        <p>Logout</p>
                     </a>
                  </li>
               </ul>
