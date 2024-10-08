<!DOCTYPE html>
<html lang="en">
  <!-- index22:59-->
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=0"
    />
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="img/favicon.ico"
    />
    <title>Arogya Health Care</title>
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="css/font-awesome.min.css"
    />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="main-wrapper">
      <div class="header">
        <div class="header-left">
          <a href="dashboard.php" class="logo">
            <img src="img/logo.png" width="35" height="35" alt="" />
            <span>Arogya Health</span>
          </a>
        </div>
        <a id="toggle_btn" href="javascript:void(0);"
          ><i class="fa fa-bars"></i
        ></a>
        <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"
          ><i class="fa fa-bars"></i
        ></a>
        <ul class="nav user-menu float-right">
          <li class="nav-item dropdown d-none d-sm-block">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"
              ><i class="fa fa-bell-o"></i>
              <span class="badge badge-pill bg-danger float-right">3</span></a
            >
            <div class="dropdown-menu notifications">
              <div class="topnav-dropdown-header">
                <span>Notifications</span>
              </div>
              <div class="drop-scroll">
                <ul class="notification-list">
                  <li class="notification-message">
                    <a href="activities.php">
                      <div class="media">
                        <span class="avatar">
                          <img
                            alt="John Doe"
                            src="img/user.jpg"
                            class="img-fluid"
                          />
                        </span>
                        <div class="media-body">
                          <p class="noti-details">
                            <span class="noti-title">John Doe</span> added new
                            task
                            <span class="noti-title"
                              >Patient appointment booking</span
                            >
                          </p>
                          <p class="noti-time">
                            <span class="notification-time">4 mins ago</span>
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="notification-message">
                    <a href="activities.php">
                      <div class="media">
                        <span class="avatar">V</span>
                        <div class="media-body">
                          <p class="noti-details">
                            <span class="noti-title">Tarah Shropshire</span>
                            changed the task name
                            <span class="noti-title"
                              >Appointment booking with payment gateway</span
                            >
                          </p>
                          <p class="noti-time">
                            <span class="notification-time">6 mins ago</span>
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="notification-message">
                    <a href="activities.php">
                      <div class="media">
                        <span class="avatar">L</span>
                        <div class="media-body">
                          <p class="noti-details">
                            <span class="noti-title">Misty Tison</span> added
                            <span class="noti-title">Domenic Houston</span> and
                            <span class="noti-title">Claire Mapes</span> to
                            project
                            <span class="noti-title"
                              >Doctor available module</span
                            >
                          </p>
                          <p class="noti-time">
                            <span class="notification-time">8 mins ago</span>
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="notification-message">
                    <a href="activities.php">
                      <div class="media">
                        <span class="avatar">G</span>
                        <div class="media-body">
                          <p class="noti-details">
                            <span class="noti-title">Rolland Webber</span>
                            completed task
                            <span class="noti-title"
                              >Patient and Doctor video conferencing</span
                            >
                          </p>
                          <p class="noti-time">
                            <span class="notification-time">12 mins ago</span>
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="notification-message">
                    <a href="activities.php">
                      <div class="media">
                        <span class="avatar">V</span>
                        <div class="media-body">
                          <p class="noti-details">
                            <span class="noti-title">Bernardo Galaviz</span>
                            added new task
                            <span class="noti-title">Private chat module</span>
                          </p>
                          <p class="noti-time">
                            <span class="notification-time">2 days ago</span>
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="topnav-dropdown-footer">
                <a href="activities.php">View all Notifications</a>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown d-none d-sm-block">
            <a
              href="javascript:void(0);"
              id="open_msg_box"
              class="hasnotifications nav-link"
              ><i class="fa fa-comment-o"></i>
              <span class="badge badge-pill bg-danger float-right">8</span></a
            >
          </li>
          <li class="nav-item dropdown has-arrow">
            <a
              href="#"
              class="dropdown-toggle nav-link user-link"
              data-toggle="dropdown"
            >
              <span class="user-img">
                <img
                  class="rounded-circle"
                  src="img/user.jpg"
                  width="24"
                  alt="Admin"
                />
                <span class="status online"></span>
              </span>
              <span>Admin</span>
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="profile.php">My Profile</a>
              <a class="dropdown-item" href="edit-profile.php">Edit Profile</a>
              <a class="dropdown-item" href="settings.php">Settings</a>
              <a class="dropdown-item" href="login.php">Logout</a>
            </div>
          </li>
        </ul>
        <div class="dropdown mobile-user-menu float-right">
          <a
            href="#"
            class="dropdown-toggle"
            data-toggle="dropdown"
            aria-expanded="false"
            ><i class="fa fa-ellipsis-v"></i
          ></a>
          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="profile.php">My Profile</a>
            <a class="dropdown-item" href="edit-profile.php">Edit Profile</a>
            <a class="dropdown-item" href="settings.php">Settings</a>
            <a class="dropdown-item" href="login.php">Logout</a>
          </div>
        </div>
      </div>
      <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
          <div id="sidebar-menu" class="sidebar-menu">
            <ul>
              <li class="menu-title">Main</li>
              <li class="active">
                <a href="dashboard.php"
                  ><i class="fa fa-dashboard"></i> <span>Dashboard</span></a
                >
              </li>
              <li>
                <a href="doctors.php"
                  ><i class="fa fa-user-md"></i> <span>Doctors</span></a
                >
              </li>
              <li>
                <a href="patients.php"
                  ><i class="fa fa-wheelchair"></i> <span>Patients</span></a
                >
              </li>
              <li>
                <a href="appointments.php"
                  ><i class="fa fa-calendar"></i> <span>Appointments</span></a
                >
              </li>
              <li>
                <a href="schedule.php"
                  ><i class="fa fa-calendar-check-o"></i>
                  <span>Doctor Schedule</span></a
                >
              </li>
              <li>
                <a href="departments.php"
                  ><i class="fa fa-hospital-o"></i> <span>Departments</span></a
                >
              </li>
              <li class="submenu">
                <a href="#"
                  ><i class="fa fa-user"></i> <span> Employees </span>
                  <span class="menu-arrow"></span
                ></a>
                <ul style="display: none">
                  <li><a href="employees.php">Employees List</a></li>
                  <li><a href="leaves.php">Leaves</a></li>
                  <li><a href="holidays.php">Holidays</a></li>
                  <li><a href="attendance.php">Attendance</a></li>
                </ul>
              </li>
              <li class="submenu">
                <a href="#"
                  ><i class="fa fa-money"></i> <span> Accounts </span>
                  <span class="menu-arrow"></span
                ></a>
                <ul style="display: none">
                  <li><a href="invoices.php">Invoices</a></li>
                  <li><a href="payments.php">Payments</a></li>
                  <li><a href="expenses.php">Expenses</a></li>
                  <li><a href="taxes.php">Taxes</a></li>
                  <li><a href="provident-fund.php">Provident Fund</a></li>
                </ul>
              </li>
              <li class="submenu">
                <a href="#"
                  ><i class="fa fa-book"></i> <span> Payroll </span>
                  <span class="menu-arrow"></span
                ></a>
                <ul style="display: none">
                  <li><a href="salary.php"> Employee Salary </a></li>
                  <li><a href="salary-view.php"> Payslip </a></li>
                </ul>
              </li>
              <li>
                <a href="chat.php"
                  ><i class="fa fa-comments"></i> <span>Chat</span>
                  <span class="badge badge-pill bg-primary float-right"
                    >5</span
                  ></a
                >
              </li>
              <li class="submenu">
                <a href="#"
                  ><i class="fa fa-video-camera camera"></i>
                  <span> Calls</span> <span class="menu-arrow"></span
                ></a>
                <ul style="display: none">
                  <li><a href="voice-call.php">Voice Call</a></li>
                  <li><a href="video-call.php">Video Call</a></li>
                  <li><a href="incoming-call.php">Incoming Call</a></li>
                </ul>
              </li>
              <li class="submenu">
                <a href="#"
                  ><i class="fa fa-envelope"></i> <span> Email</span>
                  <span class="menu-arrow"></span
                ></a>
                <ul style="display: none">
                  <li><a href="compose.php">Compose Mail</a></li>
                  <li><a href="inbox.php">Inbox</a></li>
                  <li><a href="mail-view.php">Mail View</a></li>
                </ul>
              </li>
              <li class="submenu">
                <a href="#"
                  ><i class="fa fa-commenting-o"></i> <span> Blog</span>
                  <span class="menu-arrow"></span
                ></a>
                <ul style="display: none">
                  <li><a href="blog.php">Blog</a></li>
                  <li><a href="blog-details.php">Blog View</a></li>
                  <li><a href="add-blog.php">Add Blog</a></li>
                  <li><a href="edit-blog.php">Edit Blog</a></li>
                </ul>
              </li>
              <li>
                <a href="assets.php"
                  ><i class="fa fa-cube"></i> <span>Assets</span></a
                >
              </li>
              <li>
                <a href="activities.php"
                  ><i class="fa fa-bell-o"></i> <span>Activities</span></a
                >
              </li>
              <li class="submenu">
                <a href="#"
                  ><i class="fa fa-flag-o"></i> <span> Reports </span>
                  <span class="menu-arrow"></span
                ></a>
                <ul style="display: none">
                  <li><a href="expense-reports.php"> Expense Report </a></li>
                  <li><a href="invoice-reports.php"> Invoice Report </a></li>
                </ul>
              </li>
              <li>
                <a href="settings.php"
                  ><i class="fa fa-cog"></i> <span>Settings</span></a
                >
              </li>
              <!-- <li class="menu-title">UI Elements</li>
              <li class="submenu">
                <a href="#"
                  ><i class="fa fa-laptop"></i> <span> Components</span>
                  <span class="menu-arrow"></span
                ></a>
                <ul style="display: none">
                  <li><a href="uikit.php">UI Kit</a></li>
                  <li><a href="typography.php">Typography</a></li>
                  <li><a href="tabs.php">Tabs</a></li>
                </ul>
              </li> -->
              <!-- <li class="submenu">
                <a href="#"
                  ><i class="fa fa-edit"></i> <span> Forms</span>
                  <span class="menu-arrow"></span
                ></a>
                <ul style="display: none">
                  <li><a href="form-basic-inputs.php">Basic Inputs</a></li>
                  <li><a href="form-input-groups.php">Input Groups</a></li>
                  <li><a href="form-horizontal.php">Horizontal Form</a></li>
                  <li><a href="form-vertical.php">Vertical Form</a></li>
                </ul>
              </li> -->
              <!-- <li class="submenu">
                <a href="#"
                  ><i class="fa fa-table"></i> <span> Tables</span>
                  <span class="menu-arrow"></span
                ></a>
                <ul style="display: none">
                  <li><a href="tables-basic.php">Basic Tables</a></li>
                  <li><a href="tables-datatables.php">Data Table</a></li>
                </ul>
              </li>
              <li>
                <a href="calendar.php"
                  ><i class="fa fa-calendar"></i> <span>Calendar</span></a
                >
              </li> -->
              <!-- <li class="menu-title">Extras</li>
              <li class="submenu">
                <a href="#"
                  ><i class="fa fa-columns"></i> <span>Pages</span>
                  <span class="menu-arrow"></span
                ></a>
                <ul style="display: none">
                  <li><a href="login.php"> Login </a></li>
                  <li><a href="register.php"> Register </a></li>
                  <li><a href="forgot-password.php"> Forgot Password </a></li>
                  <li><a href="change-password2.php"> Change Password </a></li>
                  <li><a href="lock-screen.php"> Lock Screen </a></li>
                  <li><a href="profile.php"> Profile </a></li>
                  <li><a href="gallery.php"> Gallery </a></li>
                  <li><a href="error-404.php">404 Error </a></li>
                  <li><a href="error-500.php">500 Error </a></li>
                  <li><a href="blank-page.php"> Blank Page </a></li>
                </ul>
              </li>
              <li class="submenu">
                <a href="javascript:void(0);"
                  ><i class="fa fa-share-alt"></i> <span>Multi Level</span>
                  <span class="menu-arrow"></span
                ></a>
                <ul style="display: none">
                  <li class="submenu">
                    <a href="javascript:void(0);"
                      ><span>Level 1</span> <span class="menu-arrow"></span
                    ></a>
                    <ul style="display: none">
                      <li>
                        <a href="javascript:void(0);"><span>Level 2</span></a>
                      </li>
                      <li class="submenu">
                        <a href="javascript:void(0);">
                          <span> Level 2</span> <span class="menu-arrow"></span
                        ></a>
                        <ul style="display: none">
                          <li><a href="javascript:void(0);">Level 3</a></li>
                          <li><a href="javascript:void(0);">Level 3</a></li>
                        </ul>
                      </li>
                      <li>
                        <a href="javascript:void(0);"><span>Level 2</span></a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="javascript:void(0);"><span>Level 1</span></a>
                  </li>
                </ul>
              </li> -->
            </ul>
          </div>
        </div>
      </div>