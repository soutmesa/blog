
    @include('includes.header')

    @include('includes.sidebar')

    <!-- MAIN PANEL -->
    <div id="main" role="main">

      <!-- RIBBON -->
      <div id="ribbon">

        <span class="ribbon-button-alignment"> 
          <span id="refresh" class="btn btn-ribbon" data-action="resetWidgets" data-title="refresh"  rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings." data-html="true">
            <i class="fa fa-refresh"></i>
          </span> 
        </span>

        <!-- breadcrumb -->
        <ol class="breadcrumb">
          <li>Home</li><li>Dashboard</li>
        </ol>
        <!-- end breadcrumb -->

      </div>
      <!-- END RIBBON -->

      <!-- MAIN CONTENT -->
      <div id="content">

      </div>
      <!-- END MAIN CONTENT -->

    </div>
    <!-- END MAIN PANEL -->

    @include('includes.footer')