<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Admin - {{ $title }}</title>

  <!-- Favicons -->
  <link href="{{ asset('dashio/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('dashio/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('dashio/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <!--external css-->
  <link href="{{ asset('dashio/lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
  <link href="{{ asset('dashio/lib/advanced-datatable/css/demo_page.css') }}" rel="stylesheet" />
  <link href="{{ asset('dashio/lib/advanced-datatable/css/demo_table.css') }}" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('dashio/lib/advanced-datatable/css/DT_bootstrap.css') }}" />
  <!-- Custom styles for this template -->
  <link href="{{ asset('dashio/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('dashio/css/style-responsive.css') }}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('dashio/css/zabuto_calendar.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('dashio/lib/gritter/css/jquery.gritter.css') }}"/>
  <script src="{{ asset('dashio/lib/chart-master/Chart.js') }}"></script>

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>Info<span>kelasku</span></b></a>
      <!--logo end-->
     {{-- tombol log out --}}
     <div class="top-menu">
      <ul class="nav pull-right top-menu">
        <li> 
          <form class="logout">
        <x-jet-responsive-nav-link style="color: black" href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
          {{ __('Profile') }}
      </x-jet-responsive-nav-link>
    
      @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
          <x-jet-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
              {{ __('API Tokens') }}
          </x-jet-responsive-nav-link>
      @endif
          </form>
          </li>
        <li><form class="logout" method="POST" action="{{ route('logout') }}">
          @csrf
          <x-jet-responsive-nav-link style="color: black" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                          this.closest('form').submit();">
              {{ __('Log Out') }}
          </x-jet-responsive-nav-link>
      </form></li>
      </ul>
    </div>
    {{-- end tombol log out --}}
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="dashio/img/ui-sam.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered">Sam Soffes</h5>
          <li class="mt">
            <a href="/dashboard">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Pelajaran</span>
              </a>
            <ul class="sub">
              <li><a href="/admin/materimanage">Materi Kelas</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
     
              <i class="fa fa-th"></i>
              <span>Data Tables</span>
              </a>
            <ul class="sub">
              <li><a href="/admin/usermanage">User Management</a></li>
              <li><a href="/admin/kelasmanage">Kelas Management</a></li>
             
            </ul>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    @yield('content')
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
          Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
        </div>
        <a href="advanced_table.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="{{ asset('dashio/lib/jquery/jquery.min.js') }}"></script>
  <script type="text/javascript" language="javascript" src="{{ asset('dashio/lib/advanced-datatable/js/jquery.js') }}"></script>
  <script src="{{ asset('dashio/lib/bootstrap/js/bootstrap.min.js') }}"></script>
  <script class="include" type="text/javascript" src="{{ asset('dashio/lib/jquery.dcjqaccordion.2.7.js') }}"></script>
  <script src="{{ asset('dashio/lib/jquery.scrollTo.min.js') }}"></script>
  <script src="{{ asset('dashio/lib/jquery.nicescroll.js') }}" type="text/javascript"></script>
  <script type="text/javascript" language="javascript" src="{{ asset('dashio/lib/advanced-datatable/js/jquery.dataTables.js') }}"></script>
  <script type="text/javascript" src="{{ asset('dashio/lib/advanced-datatable/js/DT_bootstrap.js') }}"></script>
  <!--common script for all pages-->
  <script src="{{ asset('dashio/lib/common-scripts.js') }}"></script>
  <!--script for this page-->
  <link rel="stylesheet" type="text/css" href="{{ asset('dashio/css/zabuto_calendar.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('dashio/lib/gritter/css/jquery.gritter.css') }}" />
  <script src="{{ asset('dashio/lib/chart-master/Chart.js') }}"></script>
  <script src="{{ asset('dashio/lib/jquery.sparkline.js') }}"></script>
  <script type="text/javascript" src="{{ asset('dashio/lib/gritter/js/jquery.gritter.js') }}"></script>
  <script type="text/javascript" src="{{ asset('dashio/lib/gritter-conf.js') }}"></script>
  <script src="{{ asset('dashio/lib/sparkline-chart.js') }}"></script>
  <script type="text/javascript">
    /* Formating function for row details */


    $(document).ready(function() {
      /*
       * Insert a 'details' column to the table
       */
      var nCloneTh = document.createElement('th');
      var nCloneTd = document.createElement('td');
      nCloneTd.innerHTML = '<img src="{{ asset('dashio/lib/advanced-datatable/images/details_open.png') }}">';
      nCloneTd.className = "center";

      $('#hidden-table-info thead tr').each(function() {
        this.insertBefore(nCloneTh, this.childNodes[0]);
      });

      $('#hidden-table-info tbody tr').each(function() {
        this.insertBefore(nCloneTd.cloneNode(true), this.childNodes[0]);
      });

      /*
       * Initialse DataTables, with no sorting on the 'details' column
       */
      var oTable = $('#hidden-table-info').dataTable({
        "aoColumnDefs": [{
          "bSortable": false,
          "aTargets": [0]
        }],
        "aaSorting": [
          [1, 'asc']
        ]
      });

      /* Add event listener for opening and closing details
       * Note that the indicator for showing which row is open is not controlled by DataTables,
       * rather it is done here
       */
      $('#hidden-table-info tbody td img').live('click', function() {
        var nTr = $(this).parents('tr')[0];
        if (oTable.fnIsOpen(nTr)) {
          /* This row is already open - close it */
          this.src = "{{ asset('dashio/lib/advanced-datatable/media/images/details_open.png') }}";
          oTable.fnClose(nTr);
        } else {
          /* Open this row */
          this.src = "{{ asset('dashio/lib/advanced-datatable/images/details_close.png') }}";
          oTable.fnOpen(nTr, fnFormatDetails(oTable, nTr), 'details');
        }
      });
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function() {
      var unique_id = $.gritter.add({
        // (string | mandatory) the heading of the notification
        title: 'Welcome to Dashio!',
        // (string | mandatory) the text inside the notification
        text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo.',
        // (string | optional) the image to display on the left
        image: '{{ ('dashio/img/ui-sam.jpg') }}',
        // (bool | optional) if you want it to fade out on its own or just sit there
        sticky: false,
        // (int | optional) the time you want it to be alive for before fading out
        time: 8000,
        // (string | optional) the class name you want to apply to that specific message
        class_name: 'my-sticky-class'
      });

      return false;
    });
  </script>
  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>
</body>

</html>
