<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Brainware Student's Corner</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="assets/dist/css/skins/_all-skins.min.css">

    <link rel="stylesheet" href="assets/css/common.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>

<body class="hold-transition skin-blue fixed sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

        <script language="javascript">
            function delete_confirm(url)
            if (result = confirm("This record will be deleted."))
                location.href = url + "&action=delete";


            function save_confirm(url) {
                if (result = confirm("This record will be saved."))
                    location.href = url + "&action=save";
            }

            function getkey(e) {
                if (window.event)
                    return window.event.keyCode;
                else if (e)
                    return e.which;
                else
                    return null;
            }

            function goodfloat(e) {
                var key, keychar;
                key = getkey(e);
                if (key == null) return true;
                // get character
                keychar = String.fromCharCode(key);
                keychar = keychar.toLowerCase();
                goods = '0123456789.';
                // check goodkeys
                if (goods.indexOf(keychar) != -1)
                    return true;
                // control keys
                if (key == null || key == 0 || key == 8 || key == 9 || key == 13 || key == 27)
                    return true;
                // else return false
                return false;
            }

            function goodint(e) {
                var key, keychar;
                key = getkey(e);
                if (key == null) return true;
                // get character
                keychar = String.fromCharCode(key);
                keychar = keychar.toLowerCase();
                goods = '0123456789';
                // check goodkeys
                if (goods.indexOf(keychar) != -1)
                    return true;
                // control keys
                if (key == null || key == 0 || key == 8 || key == 9 || key == 13 || key == 27)
                    return true;
                // else return false
                return false;
            }

            function goodalpha(e) {
                var key, keychar;
                key = getkey(e);
                if (key == null) return true;
                // get character
                keychar = String.fromCharCode(key);
                keychar = keychar.toLowerCase();
                goods = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz. ';
                // check goodkeys
                if (goods.indexOf(keychar) != -1)
                    return true;
                // control keys
                if (key == null || key == 0 || key == 8 || key == 9 || key == 13 || key == 27)
                    return true;
                // else return false
                return false;
            }

            function goodchars() {
                return true;
            }

            function open_report_window() {
                var w = window.open('', 'report_window', 'left=0, top=0, scrollbars=yes, resizable=yes, width=1000, height=700');
                return w;
            }

            function display_help(helptext) {
                var help_window = window.open('', 'help_window', 'left=0, top=0, scrollbars=yes, resizable=yes, width=500, height=500');
                help_window.document.write('<link href="style.css" rel="stylesheet" type="text/css" />');
                help_window.document.write('<table align="center" border="0" width="80%" cellspacing="0" cellpadding="5"><tr><td>');
                if (helptext.length == 0)
                    help_window.document.write('No help information is provided for this page');
                else
                    help_window.document.write(helptext);
                help_window.document.write('</td></tr></table>');
                help_window.document.close();
            }

            function openWindowBrochure(fileName) {



                window.open(fileName, 'Octane8', 'left=0,top=0, scrollbars=yes, width=780, height=600');
                return false;

            }
        </script>

        <!-- for automatic logout after 5 minutes of inactive session -->
        <script language="javascript">
            var timer = 0;

            function set_interval() {
                // the interval 'timer' is set as soon as the page loads
                timer = setInterval("auto_logout()", 300000);

                // the figure '10000' above indicates how many milliseconds the timer be set to.
                // Eg: to set it to 5 mins, calculate 5min = 5x60 = 300 sec = 300,000 millisec.
                // So set it to 300000
            }

            function reset_interval() {
                //resets the timer. The timer is reset on each of the below events:
                // 1. mousemove   2. mouseclick   3. key press 4. scroliing
                //first step: clear the existing timer
                if (timer != 0) {
                    clearInterval(timer);
                    timer = 0;
                    // second step: implement the timer again
                    timer = setInterval("auto_logout()", 300000);
                    // completed the reset of the timer
                }

            }

            function auto_logout() {
                // this function will redirect the user to the logout script

                window.location = "index.php?action=logout";
            }
        </script>

        <header class="main-header">
            <!-- Logo -->
            <a href="student-how-to-use.php" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><img src="images/logo-small.png" style="width:93%;padding:3px 0 0 3px;" class="img-responsive"></span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg">
                    <p>Brainware University</p>
                </span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">

                        <!-- <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <ul class="menu">
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="images/avatar.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>-->



                        <!-- <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>-->



                        <!-- <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
              
              
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <ul class="menu">
                  <li>
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>-->





                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <!-- <img src="/home/web/public_html//univ_student/photo_upload/BTS23262.jpeg" class="user-image" alt="image">-->
                                <img src="../univ_student/photo_upload/BTS23262.jpeg" class="user-image" alt="image">
                                <span class="hidden-xs">KAMALESH SARKAR</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="../univ_student/photo_upload/BTS23262.jpeg" class="img-circle" alt="Student Image">

                                    <p>
                                        KAMALESH SARKAR <br> BWU/BTS/23/262 <small>Barasat</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <!--                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>-->
                                    <!-- /.row -->
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">

                                    <div class="pull-left">
                                        <a href="centre-student-profile-modify.php" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="index.php?action=logout" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- Control Sidebar Toggle Button -->
                        <!--<li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>-->
                    </ul>
                </div>
            </nav>
        </header>

        <!-- Left side column. contains the sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="../univ_student/photo_upload/BTS23262.jpeg" class="img-circle" alt="User Image" style="width:40px;height:40px;">
                    </div>
                    <div class="pull-left info">
                        <p style="font-weight:bold;font-size:12px;">KAMALESH SARKAR</p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                <ul class="sidebar-menu" data-widget="tree">

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-th"></i> <span>Self Service</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>

                        <ul class="treeview-menu">
                            <li><a href="centre-student-profile-modify.php"><i class="fa fa-user"></i> <span>Profile</span></a></li>

                            <!-- check paper exist in assign paper or not for class test -->
                            <!-- end here -->

                            <!-- check for class test re-schedule time-->
                            <!-- end here -->


                            <li><a href="centre-student-online-examination-attendance-details.php"><i class="fa fa-fw fa-hand-o-right"></i> <span>Attendance of Assessment</span></a></li>



                            <li><a href="centre-student-payment.php?opt=show&type=n"><i class="fa fa-user"></i><span>Payment</span></a></li>
                            <li><a href="centre-student-money-receipt.php?opt=show&type=n"><i class="fa fa-user"></i><span>Online Money Receipt</span></a></li>
                            <li><a href="centre-student-online-additional-fee.php?type=n"><i class="fa fa-user"></i><span>Additional Fee Payment</span></a></li>
                            <li class="treeview">
                                <a href="#"><i class="fa fa-fw fa-book"></i> <span>Marks</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="centre-student-marks.php"><i class="fa fa-circle-o"></i> <span>Class Test And Unit Test <br>And Aptitude Test</span></a></li>
                                    <li><a href="centre-student-online-original-grade-card.php"><i class="fa fa-circle-o"></i> <span>Semester / Year End Result</span></a></li>


                                    <li><a href="centre-student-online-original-backlog-grade-card.php"><i class="fa fa-circle-o"></i> <span>Semester / Year End Result <br>( Backlog )</span></a></li>


                                    <li><a href="centre-student-online-review-grade-card.php"><i class="fa fa-circle-o"></i> <span>Semester / Year End Result <br>(Review)</span></a></li>
                                    <li><a href="centre-student-online-original-supplementary-grade-card.php"><i class="fa fa-circle-o"></i> <span>Semester / Year End Result <br>(Special Supplementary)</span></a></li>
                                </ul>
                            </li>
                            <li><a href="centre-student-exam-appearance-form.php"><i class="fa fa-fw fa-eye"></i> <span>Examination Form Print</span></a></li> <!--<li><a href="centre-student-special-examination-form.php"><i class="fa fa-fw fa-eye"></i> <span>Special Exam Form Print <br>Re-appearing (Regular & Backlog)</span></a></li>-->
                            <li><a href="centre-student-backlog-application-form.php"><i class="fa fa-fw fa-eye"></i> <span>Backlog Form Print</span></a></li>
                            <li class="treeview">
                                <a href="#"><i class="fa fa-fw fa-book"></i> <span>Admit Card</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="centre-student-admit-card.php"><i class="fa fa-fw fa-eye"></i> <span>Admit Card Print</span></a></li>
                                </ul>
                            </li>
                            <li><a href="centre-report-batch-attendance-status.php"><i class="fa fa-fw fa-eye"></i> <span>Attendance</span></a></li>
                            <li><a href="centre-report-batch-wise-paper-wise-lecture-count.php"><i class="fa fa-fw fa-hand-o-right"></i> <span>Syllabus Completion Status</span></a></li>
                            <li><a href="centre-student-event-wise-details.php"><i class="fa fa-fw fa-hand-o-right"></i> <span>Activity Point</span></a></li>

                            <li><a href="images/bwu-caution-deposit-form.pdf" target="_blank"><i class="fa fa-fw fa-hand-o-right"></i> <span>Download Caution Refund Form</span></a></li>


                            <li><a href="images/Hostel-Rule-Book-2023-24.pdf" target="_blank"><i class="fa fa-fw fa-download"></i><span>Download Hostel Rule Book</span></a></li>




                            <li><a href="student-change-password.php"><i class="fa fa-fw fa-lock"></i> <span>Change Password</span></a></li>
                        </ul>



                    </li>

                    <!-- separe drop down for admission documents -->
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-file"></i> <span>Admission Documents</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>

                        <ul class="treeview-menu">

                            <li><a href=images/Student-Rule-Book-2023-24.pdf target="_blank"><i class="fa fa-download"></i> <span>University Rule Book</span></a></li>
                            <li><a href=images/Anti-Ragging-Handbook-2023-24.pdf target="_blank"><i class="fa fa-download"></i> <span>Anti Ragging Rule Book</span></a></li>
                            <!--<li><a href="images/BWU_Rule Book_2018.pdf" target="_blank"><i class="fa fa-fw fa-download"></i> <span>University Rule Book</span></a></li>
						<li><a href="images/BWU_Anti ragging booklet_2022_new.pdf" target="_blank"><i class="fa fa-fw fa-download"></i> <span>Anti Ragging Rule Book</span></a></li>-->



                            <li><a href=applicant-details-print.php target="_blank"><i class="fa fa-download"></i> <span>Download Admission Form</span></a></li>
                            <li><a target="_blank" href="student-admission-offer-letter-print.php"><i class="fa fa-download"></i> <span>Download Admission Letter</span></a></li>
                            <li><a href="centre-student-id-card-print-new.php" target="_blank"><i class="fa fa-fw fa-hand-o-right"></i> <span>Download ID Card</span></a></li>


                            <li><a class='navmenu' href='get_file_content.php?type=student_receipt_submission&original_certificate_name=BWU-BTS-23-262.pdf&attachmentid=24791&certificateid='><i class='fa fa-user'></i><span>Download Fee Structure</span></a></li>

                            <li><a href="images/BWU-Hostel-Fee-2023-2024.pdf" target="_blank"><i class="fa fa-fw fa-hand-o-right" aria-hidden="true"></i> <span>Hostel Fee Information</span></a></li>


                            <li><a href="centre-student-registration-certificate-withbg-print.php" target="_blank"><i class="fa fa-fw fa-hand-o-right"></i> <span>Download Regd. Certificate</span></a></li>


                        </ul>



                    </li>

                    <!-- End menu for admission documents -->









                    <li><a href="student-student-forum-new.php"><i class="fa fa-fw fa-users"></i> <span>Students' Forum</span></a></li>
                    <li><a href="student-feeback.php"><i class="fa fa-fw fa-users"></i> <span>Feedback</span></a></li>




                    <li><a href="index.php?action=logout"><i class="fa fa-fw fa-lock"></i> <span>Logout</span></a></li>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- =============================================== -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1 style="text-align:center;">
                    Students' Forum
                    <!--<small>Student Details</small>-->
                </h1>
                <ol class="breadcrumb">
                    <li><a href="student-how-to-use.php"><i class="fa fa-home"></i> Dashboard</a></li>
                    <li><a href="student-student-forum-new.php">Student's Forum</a></li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">



                <script language="javascript">
                    function moderate(url) {
                        if (result = confirm("This post will be available for public view."))
                            location.href = url;
                    }

                    function delete_topic(url) {
                        if (result = confirm("This entire topic will be deleted."))
                            location.href = url;
                    }

                    function delete_post(url) {
                        if (result = confirm("This post will be deleted."))
                            location.href = url;
                    }
                </script>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box box-solid">
                            <div class="box-header with-border text-center">
                                <!--<i class="fa fa-text-width"></i>-->
                                <h3 class="box-title"><a href="/studentselfservice/student-student-forum-new.php?type=boardlist">Students' Forum Home</a></h3>
                            </div>
                            <div class="box-body"></div>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <!--<div class="box-header">
              <h3 class="box-title">Responsive Hover Table</h3>
          </div>-->
                            <!-- /.box-header -->
                            <div class="box-body table-responsive no-padding">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <td align="center" class="table-heading">Board</td>
                                            <td align="center" class="table-heading">Count</td>
                                            <td align="center" class="table-heading">Last Post</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td align='left' nowrap='nowrap' style='color:#0000FF;'>Students' Forum</td>
                                            <td align='center'>&nbsp;</td>
                                            <td align='center'>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td align='left' nowrap='nowrap'><img src='images/corner-dots.gif' width='16' height='16' border='0'><a href='/studentselfservice/student-student-forum-new.php?type=topiclist&boardid=29' class='navmenu'><strong style='color:#ff3480;''>General Announcement</strong></a></td><td align=' center'>96 Topic(s)<br>100 Post(s)</td>
                                            <td align='center'>Registrar Office</br>Registrar Office</br>05-Jan-2024 16:35:06</td>
                                        </tr>
                                        <tr>
                                            <td align='left' nowrap='nowrap'><img src='images/corner-dots.gif' width='16' height='16' border='0'><a href='/studentselfservice/student-student-forum-new.php?type=topiclist&boardid=49' class='navmenu'><strong style='color:#ff3480;''>Examination Notice & Announcements</strong></a></td><td align=' center'>9 Topic(s)<br>9 Post(s)</td>
                                            <td align='center'>Dr. Swaraj Kumar Sarkar</br>Controller of Examinations</br>30-Dec-2023 19:48:22</td>
                                        </tr>
                                        <tr>
                                            <td align='left' nowrap='nowrap'><img src='images/corner-dots.gif' width='16' height='16' border='0'><a href='/studentselfservice/student-student-forum-new.php?type=topiclist&boardid=168' class='navmenu'><strong style='color:#ff3480;''>Notice  from Accounts Department</strong></a></td><td align=' center'>1 Topic(s)<br>1 Post(s)</td>
                                            <td align='center'>Finance Officer</br>Finance Officer</br>21-Dec-2023 13:24:57</td>
                                        </tr>
                                        <tr>
                                            <td align='left' nowrap='nowrap'><img src='images/corner-dots.gif' width='16' height='16' border='0'><a href='/studentselfservice/student-student-forum-new.php?type=topiclist&boardid=50' class='navmenu'><strong style='color:#ff3480;'>Placement</strong></a></td>
                                            <td align='center'></td>
                                            <td align='center'>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td align='left' nowrap='nowrap'>&nbsp;&nbsp;&nbsp;<img src='images/corner-dots.gif' width='16' height='16' border='0'><a href='/studentselfservice/student-student-forum-new.php?type=topiclist&boardid=142' class='navmenu'><strong style='color:#e8776a;''>Resources</strong></a></td><td align=' center'></td>
                                            <td align='center'>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td align='left' nowrap='nowrap'>&nbsp;&nbsp;&nbsp;<img src='images/corner-dots.gif' width='16' height='16' border='0'><a href='/studentselfservice/student-student-forum-new.php?type=topiclist&boardid=51' class='navmenu'><strong style='color:#e8776a;''>Notice</strong></a></td><td align=' center'></td>
                                            <td align='center'>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td align='left' nowrap='nowrap'>&nbsp;&nbsp;&nbsp;<img src='images/corner-dots.gif' width='16' height='16' border='0'><a href='/studentselfservice/student-student-forum-new.php?type=topiclist&boardid=52' class='navmenu'><strong style='color:#e8776a;''>I have a query</strong></a></td><td align=' center'></td>
                                            <td align='center'>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td align='left' nowrap='nowrap'><img src='images/corner-dots.gif' width='16' height='16' border='0'><a href='/studentselfservice/student-student-forum-new.php?type=topiclist&boardid=94' class='navmenu'><strong style='color:#ff3480;'>Department of Computer Science & Engineering</strong></a></td>
                                            <td align='center'>1 Topic(s)<br>1 Post(s)</td>
                                            <td align='center'>Registrar Office</br>Registrar Office</br>11-Aug-2023 15:43:34</td>
                                        </tr>
                                        <tr>
                                            <td align='left' nowrap='nowrap'>&nbsp;&nbsp;&nbsp;<img src='images/corner-dots.gif' width='16' height='16' border='0'><a href='/studentselfservice/student-student-forum-new.php?type=topiclist&boardid=95' class='navmenu'><strong style='color:#e8776a;''>Academic Resource</strong></a></td><td align=' center'>21 Topic(s)<br>55 Post(s)</td>
                                            <td align='center'>KAUSTAV ROY</br>Teacher</br>01-Jan-2024 21:34:51</td>
                                        </tr>
                                        <tr>
                                            <td align='left' nowrap='nowrap'>&nbsp;&nbsp;&nbsp;<img src='images/corner-dots.gif' width='16' height='16' border='0'><a href='/studentselfservice/student-student-forum-new.php?type=topiclist&boardid=152' class='navmenu'><strong style='color:#e8776a;''>Backlog Candidates - Practice Set</strong></a></td><td align=' center'></td>
                                            <td align='center'>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td align='left' nowrap='nowrap'>&nbsp;&nbsp;&nbsp;<img src='images/corner-dots.gif' width='16' height='16' border='0'><a href='/studentselfservice/student-student-forum-new.php?type=topiclist&boardid=96' class='navmenu'><strong style='color:#e8776a;''>Notice & Announcement</strong></a></td><td align=' center'>17 Topic(s)<br>22 Post(s)</td>
                                            <td align='center'>HOD, Dept. of Mathematics</br>Head of the Department</br>11-Dec-2023 17:09:54</td>
                                        </tr>
                                        <tr>
                                            <td align='left' nowrap='nowrap'>&nbsp;&nbsp;&nbsp;<img src='images/corner-dots.gif' width='16' height='16' border='0'><a href='/studentselfservice/student-student-forum-new.php?type=topiclist&boardid=97' class='navmenu'><strong style='color:#e8776a;''>I have a query / I have a problem / I have a suggestion</strong></a></td><td align=' center'></td>
                                            <td align='center'>&nbsp;</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                </div>


                <br>
                <table class="table table-border">
                    <tr>
                        <td align="center" width="100%">
                            <a href="/studentselfservice/student-student-forum-new.php?type=forumrule" class="navmenu btn btn-info">Forum Rules</a> |
                            <a href="/studentselfservice/student-student-forum-new.php?type=howtouse" class="navmenu btn btn-info">How to Use</a>
                        </td>
                    <tr>
                    <tr>
                </table>
            </section>
            <!-- /.content -->
        </div>āāāāā
        <!-- /.content-wrapper -->
        <!-- <footer class="main-footer">
    <strong>Copyright &copy; 2016-2019 <a href="http://brainwareuniversity.ac.in/">Brainware University</a>.</strong> All rights
    reserved.
  </footer> -->

        <div class="control-sidebar-bg"></div>
    </div>

    <script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="assets/bower_components/fastclick/lib/fastclick.js"></script>
    <script src="assets/dist/js/adminlte.min.js"></script>āāāāā

    <!-- Plugin for editor-->
    <script language="JavaScript" type="text/javascript" src="openwysiwyg/scripts/wysiwyg.js"></script>
    <script language="JavaScript" type="text/javascript" src="openwysiwyg/scripts/wysiwyg-settings.js"></script>


    <script language="JavaScript">
        // attach the editor to the textarea with the identifier 'textarea1'.
        var x = ``;
        if (x == 'topic') {
            WYSIWYG.attach('message', full);
        }
    </script>

    <script>
        $(document).ready(function() {
            $('.sidebar-menu').tree();
            //Menu active and deactive
            var url = window.location;
            alert(url);
            $('ul.sidebar-menu a').filter(function() {
                return this.href == url;
            }).parent().siblings().removeClass('active').end().addClass('active');
            // for treeview which is like a submenu
            $('ul.treeview-menu a').filter(function() {
                return this.href == url;
            }).parentsUntil(".sidebar-menu > .treeview-menu").siblings().removeClass('active menu-open').end().addClass('active menu-open');
        });
    </script>

</body>

</html>