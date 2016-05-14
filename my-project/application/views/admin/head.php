  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Administrator! - Fresh fruit | </title>

  <style type="text/css">
    .pagination{
      float: right; 
      display: block; 
      padding: 5px 10px; 
      margin: 30px auto auto; 
      text-align: center;
      width: auto;
    }
  </style>

  <!-- Bootstrap core CSS -->

  <link href="<?php echo public_url("admin") ?>/css/bootstrap.min.css" rel="stylesheet">

  <link href="<?php echo public_url("admin") ?>/fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo public_url("admin") ?>/css/animate.min.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="<?php echo public_url("admin") ?>/css/custom.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo public_url("admin") ?>/css/maps/jquery-jvectormap-2.0.3.css" />
  <link href="<?php echo public_url("admin") ?>/css/icheck/flat/green.css" rel="stylesheet" />
  <link href="<?php echo public_url("admin") ?>/css/floatexamples.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo public_url("admin") ?>/vendors/dropzone/dist/min/dropzone.min.css" rel="stylesheet" />

  <script src="<?php echo public_url("admin") ?>/js/jquery.min.js"></script>
  <script src="<?php echo public_url("admin") ?>/js/nprogress.js"></script>

  <script src="<?php echo public_url("admin") ?>/js/bootstrap.min.js"></script>

  <!-- gauge js -->
  <script type="text/javascript" src="<?php echo public_url("admin") ?>/js/gauge/gauge.min.js"></script>
  <script type="text/javascript" src="<?php echo public_url("admin") ?>/js/gauge/gauge_demo.js"></script>
  <!-- bootstrap progress js -->
  <script src="<?php echo public_url("admin") ?>/js/progressbar/bootstrap-progressbar.min.js"></script>
  <script src="<?php echo public_url("admin") ?>/js/nicescroll/jquery.nicescroll.min.js"></script>
  <!-- icheck -->
  <script src="<?php echo public_url("admin") ?>/js/icheck/icheck.min.js"></script>
  <!-- daterangepicker -->
  <script type="text/javascript" src="<?php echo public_url("admin") ?>/js/moment/moment.min.js"></script>
  <script type="text/javascript" src="<?php echo public_url("admin") ?>/js/datepicker/daterangepicker.js"></script>
  <!-- chart js -->
  <script src="<?php echo public_url("admin") ?>/js/chart<?php echo public_url("admin") ?>/js/chart.min.js"></script>

  <script src="<?php echo public_url("admin") ?>/js/custom.js"></script>

  <script type="text/javascript" src="<?php echo public_url("admin") ?>/js/flot/jquery.flot.js"></script>
  <script type="text/javascript" src="<?php echo public_url("admin") ?>/js/flot/jquery.flot.pie.js"></script>
  <script type="text/javascript" src="<?php echo public_url("admin") ?>/js/flot/jquery.flot.orderBars.js"></script>
  <script type="text/javascript" src="<?php echo public_url("admin") ?>/js/flot/jquery.flot.time.min.js"></script>
  <script type="text/javascript" src="<?php echo public_url("admin") ?>/js/flot/date.js"></script>
  <script type="text/javascript" src="<?php echo public_url("admin") ?>/js/flot/jquery.flot.spline.js"></script>
  <script type="text/javascript" src="<?php echo public_url("admin") ?>/js/flot/jquery.flot.stack.js"></script>
  <script type="text/javascript" src="<?php echo public_url("admin") ?>/js/flot/curvedLines.js"></script>
  <script type="text/javascript" src="<?php echo public_url("admin") ?>/js/flot/jquery.flot.resize.js"></script>
  <script type="text/javascript" src="<?php echo public_url("admin") ?>/vendors/fastclick/lib/fastclick.js"></script>
  <script type="text/javascript" src="<?php echo public_url("admin") ?>/vendors/nprogress/nprogress.js"></script>
  <script type="text/javascript" src="<?php echo public_url("admin") ?>/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
  <script type="text/javascript" src="<?php echo public_url("admin") ?>/vendors/dropzone/dist/min/dropzone.min.js"></script>

   <!-- jQuery Smart Wizard -->
    <script>
      $(document).ready(function() {
        $('#wizard').smartWizard();

        $('#wizard_verticle').smartWizard({
          transitionEffect: 'slide'
        });

        $('.buttonNext').addClass('btn btn-success');
        $('.buttonPrevious').addClass('btn btn-primary');
        $('.buttonFinish').addClass('btn btn-default');
        $('.buttonFinish').attr('type', 'submit');
      });
    </script>
    <!-- /jQuery Smart Wizard -->

 <!-- flot -->
  <script type="text/javascript">
    //define chart clolors ( you maybe add more colors if you want or flot will add it automatic )
    var chartColours = ['#96CA59', '#3F97EB', '#72c380', '#6f7a8a', '#f7cb38', '#5a8022', '#2c7282'];

    //generate random number for charts
    randNum = function() {
      return (Math.floor(Math.random() * (1 + 40 - 20))) + 20;
    }

    $(function() {
      var d1 = [];
      //var d2 = [];

      //here we generate data for chart
      for (var i = 0; i < 30; i++) {
        d1.push([new Date(Date.today().add(i).days()).getTime(), randNum() + i + i + 10]);
        //    d2.push([new Date(Date.today().add(i).days()).getTime(), randNum()]);
      }

      var chartMinDate = d1[0][0]; //first day
      var chartMaxDate = d1[20][0]; //last day

      var tickSize = [1, "day"];
      var tformat = "%d/%m/%y";

      //graph options
      var options = {
        grid: {
          show: true,
          aboveData: true,
          color: "#3f3f3f",
          labelMargin: 10,
          axisMargin: 0,
          borderWidth: 0,
          borderColor: null,
          minBorderMargin: 5,
          clickable: true,
          hoverable: true,
          autoHighlight: true,
          mouseActiveRadius: 100
        },
        series: {
          lines: {
            show: true,
            fill: true,
            lineWidth: 2,
            steps: false
          },
          points: {
            show: true,
            radius: 4.5,
            symbol: "circle",
            lineWidth: 3.0
          }
        },
        legend: {
          position: "ne",
          margin: [0, -25],
          noColumns: 0,
          labelBoxBorderColor: null,
          labelFormatter: function(label, series) {
            // just add some space to labes
            return label + '&nbsp;&nbsp;';
          },
          width: 40,
          height: 1
        },
        colors: chartColours,
        shadowSize: 0,
        tooltip: true, //activate tooltip
        tooltipOpts: {
          content: "%s: %y.0",
          xDateFormat: "%d/%m",
          shifts: {
            x: -30,
            y: -50
          },
          defaultTheme: false
        },
        yaxis: {
          min: 0
        },
        xaxis: {
          mode: "time",
          minTickSize: tickSize,
          timeformat: tformat,
          min: chartMinDate,
          max: chartMaxDate
        }
      };
      var plot = $.plot($("#placeholder33x"), [{
        label: "Doanh thu ngày",
        data: d1,
        lines: {
          fillColor: "rgba(150, 202, 89, 0.12)"
        }, //#96CA59 rgba(150, 202, 89, 0.42)
        points: {
          fillColor: "#fff"
        }
      }], options);
    });
  </script>
  <!-- /flot -->
  <!-- pace -->
  <script src="<?php echo public_url("admin") ?>/js/pace/pace.min.js"></script>
  <!-- skycons -->
  <script src="<?php echo public_url("admin") ?>/js/skycons/skycons.min.js"></script>
  <script>
    var icons = new Skycons({
        "color": "#73879C"
      }),
      list = [
        "clear-day", "clear-night", "partly-cloudy-day",
        "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
        "fog"
      ],
      i;

    for (i = list.length; i--;)
      icons.set(list[i], list[i]);

    icons.play();
  </script>

  <!-- dashbord linegraph -->
  <script>
    Chart.defaults.global.legend = {
      enabled: false
    };

    var data = {
      labels: [
        "Symbian",
        "Blackberry",
        "Other",
        "Android",
        "IOS"
      ],
      datasets: [{
        data: [15, 20, 30, 10, 30],
        backgroundColor: [
          "#BDC3C7",
          "#9B59B6",
          "#455C73",
          "#26B99A",
          "#3498DB"
        ],
        hoverBackgroundColor: [
          "#CFD4D8",
          "#B370CF",
          "#34495E",
          "#36CAAB",
          "#49A9EA"
        ]

      }]
    };

    var canvasDoughnut = new Chart(document.getElementById("canvas1"), {
      type: 'doughnut',
      tooltipFillColor: "rgba(51, 51, 51, 0.55)",
      data: data
    });
  </script>
  <!-- /dashbord linegraph -->
  <!-- datepicker -->
  <script type="text/javascript">
    $(document).ready(function() {

      var cb = function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        //alert("Callback has fired: [" + start.format('MMMM D, YYYY') + " to " + end.format('MMMM D, YYYY') + ", label = " + label + "]");
      }

      var optionSet1 = {
        startDate: moment().subtract(29, 'days'),
        endDate: moment(),
        minDate: '01/01/2012',
        maxDate: '12/31/2015',
        dateLimit: {
          days: 60
        },
        showDropdowns: true,
        showWeekNumbers: true,
        timePicker: false,
        timePickerIncrement: 1,
        timePicker12Hour: true,
        ranges: {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days': [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        opens: 'left',
        buttonClasses: ['btn btn-default'],
        applyClass: 'btn-small btn-primary',
        cancelClass: 'btn-small',
        format: 'MM/DD/YYYY',
        separator: ' to ',
        locale: {
          applyLabel: 'Submit',
          cancelLabel: 'Clear',
          fromLabel: 'From',
          toLabel: 'To',
          customRangeLabel: 'Custom',
          daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
          monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
          firstDay: 1
        }
      };
      $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
      $('#reportrange').daterangepicker(optionSet1, cb);
      $('#reportrange').on('show.daterangepicker', function() {
        console.log("show event fired");
      });
      $('#reportrange').on('hide.daterangepicker', function() {
        console.log("hide event fired");
      });
      $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
        console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
      });
      $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
        console.log("cancel event fired");
      });
      $('#options1').click(function() {
        $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
      });
      $('#options2').click(function() {
        $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
      });
      $('#destroy').click(function() {
        $('#reportrange').data('daterangepicker').remove();
      });
    });
  </script>
  <script>
    NProgress.done();
  </script>