<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> Kepengurusan | HMTCalendar </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="<?php echo base_url() ?>css/vendor.css">
        <!-- Theme initialization -->
        <script>
            var themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) :
            {};
            var themeName = themeSettings.themeName || '';
            if (themeName)
            {
                document.write('<link rel="stylesheet" id="theme-style" href="<?php echo base_url() ?>css/app-' + themeName + '.css">');
            }
            else
            {
                document.write('<link rel="stylesheet" id="theme-style" href="<?php echo base_url() ?>css/app.css">');
            }
        </script>
        <style type="text/css">
            #table-right{
                margin-left: 10px;
                margin-right: 10px;
            }

            th {
                text-align: center;
            }

            #dropdown-right{
                margin-left: 15px;
                margin-right: 15px;
            }
        </style>
    </head>

    <body>
        <div class="main-wrapper">
            <div class="app" id="app">
                <header class="header">
                    <div class="header-block header-block-collapse hidden-lg-up"> <button class="collapse-btn" id="sidebar-collapse-btn">
    			<i class="fa fa-bars"></i>
    		</button> </div>
                    <div class="header-block header-block-search hidden-sm-down">
                        <form role="search">
                            <div class="input-container"> <i class="fa fa-search"></i> <input type="search" placeholder="Search">
                                <div class="underline"></div>
                            </div>
                        </form>
                    </div>
                    <div class="header-block header-block-buttons">
                    </div>
                    <div class="header-block header-block-nav">
                        <ul class="nav-profile">
                            <li class="profile dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    <div class="img" style="background-image: url('https://avatars3.githubusercontent.com/u/3959008?v=3&s=40')"> </div> <span class="name">
                      Admin
                    </span> </a>
                                <div class="dropdown-menu profile-dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <a class="dropdown-item" href="login.html"> <i class="fa fa-power-off icon"></i> Logout </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </header>
                <aside class="sidebar">
                    <div class="sidebar-container">
                        <div class="sidebar-header">
                            <div class="brand">
                                <div class="logo"> <span class="l l1"></span> <span class="l l2"></span> <span class="l l3"></span> <span class="l l4"></span> <span class="l l5"></span> </div> SI HMTCalendar </div>
                        </div>
                        <nav class="menu">
                            <ul class="nav metismenu" id="sidebar-menu">
                                <li>
                                    <a href="<?php echo base_url(); ?>user"> <i class="fa fa-home"></i> Dashboard </a>
                                </li>
                                <li class="active">
                                    <a href="<?php echo base_url(); ?>list_kepengurusan"> <i class="fa fa-group"></i> Kepengurusan <i class="fa arrow"></i> </a>
                                    <ul>
                                        <li class="active"> <a href="">
                                            Lihat Kepengurusan
                                        </a> </li>
                                        <li> <a href="">
                                            Tambah Kepengurusan
                                        </a> </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>list_departemen"> <i class="fa fa-flag"></i> Departemen <i class="fa arrow"></i> </a>
                                    <ul>
                                        <li> <a href="">
                                            Lihat Departemen
                                        </a> </li>
                                        <li class="active"> <a href="">
                                            Tambah Departemen
                                        </a> </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>list_anggota"> <i class="fa fa-user"></i> Anggota <i class="fa arrow"></i> </a>
                                    <ul>
                                        <li> <a href="">
                                            Lihat Anggota
                                        </a> </li>
                                        <li> <a href="">
                                            Tambah Anggota
                                        </a> </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href=""> <i class="fa fa-picture-o"></i> Gallery <i class="fa arrow"></i> </a>
                                    <ul>
                                        <li> <a href="<?php echo base_url(); ?>gallery">
                                    Lihat Foto
                                </a> </li>
                                        <li> <a href="static-tables.html">
                                    Tambah Foto
                                </a> </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href=""> <i class="fa fa-calendar"></i> Event <i class="fa arrow"></i> </a>
                                    <ul>
                                        <li> <a href="">
                                            Lihat Event
                                        </a> </li>
                                        <li> <a href="">
                                            Tambah Event
                                        </a> </li>
                                        <li> <a href="cards.html">
                                            Penilaian Event
                                        </a> </li>
                                        <li> <a href="typography.html">
                                            Tambah Penilaian
                                        </a> </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <footer class="sidebar-footer">
                        <ul class="nav metismenu" id="customize-menu">
                            <li>
                                <ul>
                                    <li class="customize">
                                        <div class="customize-item">
                                            <div class="row customize-header">
                                                <div class="col-xs-4"> </div>
                                                <div class="col-xs-4"> <label class="title">fixed</label> </div>
                                                <div class="col-xs-4"> <label class="title">static</label> </div>
                                            </div>
                                            <div class="row hidden-md-down">
                                                <div class="col-xs-4"> <label class="title">Sidebar:</label> </div>
                                                <div class="col-xs-4"> <label>
    				                        <input class="radio" type="radio" name="sidebarPosition" value="sidebar-fixed" >
    				                        <span></span>
    				                    </label> </div>
                                                <div class="col-xs-4"> <label>
    				                        <input class="radio" type="radio" name="sidebarPosition" value="">
    				                        <span></span>
    				                    </label> </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-4"> <label class="title">Header:</label> </div>
                                                <div class="col-xs-4"> <label>
    				                        <input class="radio" type="radio" name="headerPosition" value="header-fixed">
    				                        <span></span>
    				                    </label> </div>
                                                <div class="col-xs-4"> <label>
    				                        <input class="radio" type="radio" name="headerPosition" value="">
    				                        <span></span>
    				                    </label> </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-4"> <label class="title">Footer:</label> </div>
                                                <div class="col-xs-4"> <label>
    				                        <input class="radio" type="radio" name="footerPosition" value="footer-fixed">
    				                        <span></span>
    				                    </label> </div>
                                                <div class="col-xs-4"> <label>
    				                        <input class="radio" type="radio" name="footerPosition" value="">
    				                        <span></span>
    				                    </label> </div>
                                            </div>
                                        </div>
                                        <div class="customize-item">
                                            <ul class="customize-colors">
                                                <li> <span class="color-item color-red" data-theme="red"></span> </li>
                                                <li> <span class="color-item color-orange" data-theme="orange"></span> </li>
                                                <li> <span class="color-item color-green active" data-theme=""></span> </li>
                                                <li> <span class="color-item color-seagreen" data-theme="seagreen"></span> </li>
                                                <li> <span class="color-item color-blue" data-theme="blue"></span> </li>
                                                <li> <span class="color-item color-purple" data-theme="purple"></span> </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                                <a href=""> <i class="fa fa-cog"></i> Customize </a>
                            </li>
                        </ul>
                    </footer>
                </aside>
                <div class="sidebar-overlay" id="sidebar-overlay"></div>
                <article class="content static-tables-page">
                    <div class="title-block">
                        <h1 class="title"> Kepengurusan </h1>
                    </div>
            <section class="section">
                        <div class="row sameheight-container">
                            <div class="col-md-6">
                                <div class="card card-block sameheight-item">
                                    <div class="title-block">
                                        <h3 class="title"> Tambah Kepengurusan </h3>
                                    </div>

                                   <!-- <form> -->
                                        <?php echo form_open('kepengurusan_controller/input_kepengurusan'); ?>
                                        <div class="form-group"> 
                                            <label class="control-label">Nama Kepengurusan</label> 
                                            <input name="nama_kepengurusan" type="text" class="form-control boxed" value=""> 
                                        </div>
                                        <div class="form-inline">
                                              <label>Tahun Mulai</label><br>
                                              <input name="tahun_mulai" type="number" min="1900" max="2099" value="" class="form-control"/>
                                        </div>
                                        <div class="form-inline">
                                              <label>Tahun Berakhir</label><br>
                                              <input name="tahun_berakhir" type="number" min="1900" max="2099" value="" class="form-control"/>
                                        </div>
                                        <br>
                                        <div class="form-group row">
                                            <div class="col-sm-10 col-sm-offset-2"> 
                                            <!-- <button type="submit" class="btn btn-primary">Tambah</button> -->
                                            <?php echo form_submit('submit', 'Tambah', array('class'=> 'btn btn-primary') ); ?> 

                                            </div> 

                                        </div>
                                        <?php echo form_close(''); ?>
                                    <!-- </form> -->

                                </div>
                            </div>
                        </div>
                    </section>
                </article>   
                <footer class="footer">
                    <div class="footer-block buttons"> <iframe class="footer-github-btn" src="https://ghbtns.com/github-btn.html?user=modularcode&repo=modular-admin-html&type=star&count=true" frameborder="0" scrolling="0" width="140px" height="20px"></iframe> </div>
                    <div class="footer-block author">
                        <ul>
                            <li> created by <a href="https://github.com/modularcode">ModularCode</a> </li>
                            <li> <a href="https://github.com/modularcode/modular-admin-html#get-in-touch">get in touch</a> </li>
                        </ul>
                    </div>
                </footer>
                <div class="modal fade" id="modal-media">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
    					<span class="sr-only">Close</span>
    				</button>
                                <h4 class="modal-title">Media Library</h4>
                            </div>
                            <div class="modal-body modal-tab-container">
                                <ul class="nav nav-tabs modal-tabs" role="tablist">
                                    <li class="nav-item"> <a class="nav-link" href="#gallery" data-toggle="tab" role="tab">Gallery</a> </li>
                                    <li class="nav-item"> <a class="nav-link active" href="#upload" data-toggle="tab" role="tab">Upload</a> </li>
                                </ul>
                                <div class="tab-content modal-tab-content">
                                    <div class="tab-pane fade" id="gallery" role="tabpanel">
                                        <div class="images-container">
                                            <div class="row"> </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade active in" id="upload" role="tabpanel">
                                        <div class="upload-container">
                                            <div id="dropzone">
                                                <form action="/" method="POST" enctype="multipart/form-data" class="dropzone needsclick dz-clickable" id="demo-upload">
                                                    <div class="dz-message-block">
                                                        <div class="dz-message needsclick"> Drop files here or click to upload. </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer"> <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> <button type="button" class="btn btn-primary">Insert Selected</button> </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
                <div class="modal fade" id="confirm-modal">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
    				</button>
                                <h4 class="modal-title"><i class="fa fa-warning"></i> Alert</h4>
                            </div>
                            <div class="modal-body">
                                <p>Are you sure want to do this?</p>
                            </div>
                            <div class="modal-footer"> <button type="button" class="btn btn-primary" data-dismiss="modal">Yes</button> <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button> </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
            </div>
        </div>
        <!-- Reference block for JS -->
        <div class="ref" id="ref">
            <div class="color-primary"></div>
            <div class="chart">
                <div class="color-primary"></div>
                <div class="color-secondary"></div>
            </div>
        </div>
        <script>
            (function(i, s, o, g, r, a, m)
            {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function()
                {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-80463319-2', 'auto');
            ga('send', 'pageview');
        </script>
        <script src="<?php echo base_url() ?>js/vendor.js"></script>
        <script src="<?php echo base_url() ?>js/app.js"></script>
        <script type="text/javascript">
		  var dt = new Date();
		  document.getElementById("datetime").innerHTML = dt.toLocaleDateString();
		</script> <!-- Show Current Date -->

    </body>

</html>