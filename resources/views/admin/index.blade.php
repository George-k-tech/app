<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashbord</title>


    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
   
     <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/main.css'])
</head>

<body>

    <input type="checkbox" id="nav-toggle">

    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="lab la-accusoft"></span> <span>Admin</span></h2>
        </div>

        <div class="sidebar-menu">
            <ul>
                <li><a href="" class="active"><span class="las la-igloo"></span>
                        <span> Dashboard</span></a>
                </li>
                <li><a href=""><span class="las la-users"></span>
                        <span> Customers</span></a>
                </li>
                <li><a href=""><span class="las la-clipboard-list"></span>
                        <span>Projects</span></a>
                </li>
                <li><a href=""><span class="las la-shopping-bag"></span>
                        <span>Order</span></a>
                </li>
                <li><a href=""><span class="las la-receipt"></span>
                        <span>Inventory</span></a>
                </li>
                <li><a href=""><span class="las la-user-circle"></span>
                        <span>Accounts</span></a>
                </li>
                <li><a href=""><span class="las la-clipboard-list"></span>
                        <span>Task</span></a>
                </li>

            </ul>
        </div>
    </div>

    <div class="main-content">
        <header class="admin">
            <h2>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label>
                Dashboard
            </h2>
            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="search here">
            </div>

            <div class="user-wrapper">
                <img src="" width="30px" height="30px" alt="user">
                <div>
                    <h4>John Doe</h4>
                    <small>Super Admin</small>
                </div>
            </div>
        </header>

        <main class="admin-main">
            <div class="cards">
                <div class="card-single">
                    <div>
                        <h1>54</h1>
                        <span>Customers</span>
                    </div>
                    <div>
                        <span class="las la-users"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>79</h1>
                        <span>Projects</span>
                    </div>
                    <div>
                        <span class="las la-clipboard-list"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>124</h1>
                        <span>Orders</span>
                    </div>
                    <div>
                        <span class="las la-shopping-bag"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>$124</h1>
                        <span>Income</span>
                    </div>
                    <div>
                        <span class="lab la-google-wallet"></span>
                    </div>
                </div>

            </div>
        </main>

        <div class="recent-grid">
            <div class="projects">

                <div class="card">

                    <div class="card-header">
                        <h3>Recent projects</h3>
                        <button>see all <span class="las la-arrow-right"></span></button>
                    </div>

                    <div class="card-body">

                        <div class="table-responsive">
                            <table style="width:100%">
                                <thead>
                                    <tr>
                                        <td>Project Titles</td>
                                        <td>Department</td>
                                        <td>Status</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>UI design</td>
                                        <td>UI team</td>
                                        <td><span class="status pink"></span> passed</td>
                                    </tr>

                                    <tr>
                                        <td>UI design</td>
                                        <td>UI team</td>
                                        <td><span class="status purple"></span> review</td>
                                    </tr>

                                    <tr>
                                        <td>UI design</td>
                                        <td>UI team</td>
                                        <td><span class="status orange"></span> pending</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
            </div>

            <div class="customers">

                <div class="card">
                    <div class="card-header">
                        <h3>Customers</h3>
                        <button>see all<span class="las la-arrow-right"></span></button>
                    </div>

                    <div class="card-body">

                        <div class="customer">
                            <div class="info">
                                <img src="" alt="customer" width="40px" height="40px">
                                <div>
                                    <h4>George k kariuki</h4>
                                    <small> CEO excerpt</small>
                                </div>
                            </div>
                            <div class="contact">
                                <span class="las la-user-circle"></span>
                                <span class="las la-comment"></span>
                                <span class="las la-phone"></span>
                            </div>
                        </div>

                        <div class="customer">
                            <div class="info">
                                <img src="" alt="customer" width="40px" height="40px">
                                <div>
                                    <h4>George k kariuki</h4>
                                    <small> CEO excerpt</small>
                                </div>
                            </div>
                            <div class="contact">
                                <span class="las la-user-circle"></span>
                                <span class="las la-comment"></span>
                                <span class="las la-phone"></span>
                            </div>
                        </div>


                        <div class="customer">
                            <div class="info">
                                <img src="" alt="customer" width="40px" height="40px">
                                <div>
                                    <h4>George k kariuki</h4>
                                    <small> CEO excerpt</small>
                                </div>
                            </div>
                            <div class="contact">
                                <span class="las la-user-circle"></span>
                                <span class="las la-comment"></span>
                                <span class="las la-phone"></span>
                            </div>
                        </div>

                        <div class="customer">
                            <div class="info">
                                <img src="" alt="customer" width="40px" height="40px">
                                <div>
                                    <h4>George k kariuki</h4>
                                    <small> CEO excerpt</small>
                                </div>
                            </div>
                            <div class="contact">
                                <span class="las la-user-circle"></span>
                                <span class="las la-comment"></span>
                                <span class="las la-phone"></span>
                            </div>
                        </div>

                        <div class="customer">
                            <div class="info">
                                <img src="" alt="customer" width="40px" height="40px">
                                <div>
                                    <h4>George k kariuki</h4>
                                    <small> CEO excerpt</small>
                                </div>
                            </div>
                            <div class="contact">
                                <span class="las la-user-circle"></span>
                                <span class="las la-comment"></span>
                                <span class="las la-phone"></span>
                            </div>
                        </div>

                        <div class="customer">
                            <div class="info">
                                <img src="" alt="customer" width="40px" height="40px">
                                <div>
                                    <h4>George k kariuki</h4>
                                    <small> CEO excerpt</small>
                                </div>
                            </div>
                            <div class="contact">
                                <span class="las la-user-circle"></span>
                                <span class="las la-comment"></span>
                                <span class="las la-phone"></span>
                            </div>
                        </div>

                        <div class="customer">
                            <div class="info">
                                <img src="" alt="customer" width="40px" height="40px">
                                <div>
                                    <h4>George k kariuki</h4>
                                    <small> CEO excerpt</small>
                                </div>
                            </div>
                            <div class="contact">
                                <span class="las la-user-circle"></span>
                                <span class="las la-comment"></span>
                                <span class="las la-phone"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
