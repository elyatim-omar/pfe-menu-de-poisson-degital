class SideBar extends React.Component {
    constructor(props) {
        super(props)
    }

    render() {

        return (
            <aside className="main-sidebar sidebar-light-primary elevation-4">
            {/* Brand Logo */}
            <a href="#" className="brand-link">
              SAMAK
              
            </a>
            {/* Sidebar */}
            <div className="sidebar">
              {/* Sidebar user (optional) */}
              <div className="user-panel mt-3 pb-3 mb-3 d-flex">
                <div className="image">
                  <img src="dist/img/said.png" className="img-circle elevation-2" alt="User Image" />
                </div>
                <div className="info">
                  <a href="#" className="d-block">Said hanatba</a>
                </div>
              </div>
              {/* Sidebar Menu */}
              <nav className="mt-2">
                <ul className="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  {/* Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library */}
                  <li className="nav-item">
                    <a href="includes/handlers/logout.php" className="nav-link">
                      <i className="fa fa-sign-out" aria-hidden="true"/>
                      <p>  logout</p>
                    </a>
                  </li>
                </ul>
              </nav>
              {/* /.sidebar-menu */}
            </div>
            {/* /.sidebar */}
          </aside>
          

        )
    }
}