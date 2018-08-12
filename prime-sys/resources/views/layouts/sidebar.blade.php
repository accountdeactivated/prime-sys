<ul class="nav">
                  <li class="nav-item {{{ (Request::is('home') ? 'active' : '') }}}">
                     <a class="nav-link" href="./home">
                        <i class="material-icons">dashboard</i>
                        <p>Dashboard</p>
                     </a>
                  </li>
                <li class="nav-item {{{ (Request::is('supplier') ? 'active' : '') }}}">
                    <a class="nav-link" href="./supplier">
                        <i class="material-icons">group</i>
                        <p>Suppliers</p>
                    </a>
                </li>
                <li class="nav-item {{{ (Request::is('order') ? 'active' : '') }}}">
                    <a class="nav-link" href="./Orders">
                        <i class="material-icons">file_copy</i>
                        <p>Supplier Order</p>
                    </a>
                </li>
                <li class="nav-item {{{ (Request::is('order') ? 'active' : '') }}}">
                    <a class="nav-link" href="./Orders">
                        <i class="material-icons">file_copy</i>
                        <p>Orders</p>
                    </a>
                </li>
                <li class="nav-item {{{ (Request::is('service') ? 'active' : '') }}}">
                    <a class="nav-link" href="./service">
                        <i class="material-icons">build</i>
                        <p>Services</p>
                    </a>
                </li>
                  <li class="nav-item {{{ (Request::is('reports') ? 'active' : '') }}}">
                     <a class="nav-link" href="./Reports_Controller">
                        <i class="material-icons">person</i>
                        <p>Reports</p>
                     </a>
                  </li>
                  <li class="nav-item {{{ (Request::is('account') ? 'active' : '') }}}">
                     <a class="nav-link" href="./Accounts_Controller">
                        <i class="material-icons">group</i>
                        <p>Accounts</p>
                     </a>
                  </li>
                  <li class="nav-item {{{ (Request::is('employees') ? 'active' : '') }}}">
                     <a class="nav-link" href="./Employee">
                        <i class="material-icons">group</i>
                        <p>Employees</p>
                     </a>
                  </li>
                  <li class="nav-item {{{ (Request::is('administrator') ? 'active' : '') }}}">
                     <a class="nav-link" href="./Add_Users_Controller">
                        <i class="material-icons">add_circle</i>
                        <p>Add Users</p>
                     </a>
                  </li>
                  <li class="nav-item {{{ (Request::is('restock') ? 'active' : '') }}}">
                     <a class="nav-link" href="./restockInventory_Controller">
                        <i class="material-icons">file_copy</i>
                        <p>Restock Inventory</p>
                     </a>
                  </li>
               </ul>
