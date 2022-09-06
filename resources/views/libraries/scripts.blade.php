<script>
    (function(a, s, y, n, c, h, i, d, e) {
      s.className += ' ' + y;
      h.start = 1 * new Date;
      h.end = i = function() {
        s.className = s.className.replace(RegExp(' ?' + y), '')
      };
      (a[n] = a[n] || []).hide = h;
      setTimeout(function() {
        i();
        h.end = null
      }, c);
      h.timeout = c;
    })(window, document.documentElement, 'async-hide', 'dataLayer', 4000, {
      'GTM-K9BGS8K': true
    });
  </script>

<script>
    (function(i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r;
      i[r] = i[r] || function() {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date();
      a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-46172202-22', 'auto', {
      allowLinker: true
    });
    ga('set', 'anonymizeIp', true);
    ga('require', 'GTM-K9BGS8K');
    ga('require', 'displayfeatures');
    ga('require', 'linker');
    ga('linker:autoLink', ["2checkout.com", "avangate.com"]);
  </script>


<script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-NKDMSK6');
  </script>

  <script src="../../assets/js/core/popper.min.js"></script>
<script src="../../assets/js/core/bootstrap.min.js"></script>
<script src="../../assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="../../assets/js/plugins/smooth-scrollbar.min.js"></script>
<script src="../../assets/js/plugins/choices.min.js"></script>

<script src="../../assets/js/plugins/dragula/dragula.min.js"></script>
<script src="../../assets/js/plugins/jkanban/jkanban.js"></script>
<script src="../../assets/js/plugins/countup.min.js"></script>
<script src="../../assets/js/plugins/chartjs.min.js"></script>
<script src="../../assets/js/plugins/round-slider.min.js"></script>
<script>
    // Rounded slider
    const setValue = function(value, active) {
      document.querySelectorAll("round-slider").forEach(function(el) {
        if (el.value === undefined) return;
        el.value = value;
      });
      const span = document.querySelector("#value");
      span.innerHTML = value;
      if (active)
        span.style.color = 'red';
      else
        span.style.color = 'black';
    }

    document.querySelectorAll("round-slider").forEach(function(el) {
      el.addEventListener('value-changed', function(ev) {
        if (ev.detail.value !== undefined)
          setValue(ev.detail.value, false);
        else if (ev.detail.low !== undefined)
          setLow(ev.detail.low, false);
        else if (ev.detail.high !== undefined)
          setHigh(ev.detail.high, false);
      });

      el.addEventListener('value-changing', function(ev) {
        if (ev.detail.value !== undefined)
          setValue(ev.detail.value, true);
        else if (ev.detail.low !== undefined)
          setLow(ev.detail.low, true);
        else if (ev.detail.high !== undefined)
          setHigh(ev.detail.high, true);
      });
    });

    // Count To
    if (document.getElementById('status1')) {
      const countUp = new CountUp('status1', document.getElementById("status1").getAttribute("countTo"));
      if (!countUp.error) {
        countUp.start();
      } else {
        console.error(countUp.error);
      }
    }
    if (document.getElementById('status2')) {
      const countUp = new CountUp('status2', document.getElementById("status2").getAttribute("countTo"));
      if (!countUp.error) {
        countUp.start();
      } else {
        console.error(countUp.error);
      }
    }
    if (document.getElementById('status3')) {
      const countUp = new CountUp('status3', document.getElementById("status3").getAttribute("countTo"));
      if (!countUp.error) {
        countUp.start();
      } else {
        console.error(countUp.error);
      }
    }
    if (document.getElementById('status4')) {
      const countUp = new CountUp('status4', document.getElementById("status4").getAttribute("countTo"));
      if (!countUp.error) {
        countUp.start();
      } else {
        console.error(countUp.error);
      }
    }
    if (document.getElementById('status5')) {
      const countUp = new CountUp('status5', document.getElementById("status5").getAttribute("countTo"));
      if (!countUp.error) {
        countUp.start();
      } else {
        console.error(countUp.error);
      }
    }
    if (document.getElementById('status6')) {
      const countUp = new CountUp('status6', document.getElementById("status6").getAttribute("countTo"));
      if (!countUp.error) {
        countUp.start();
      } else {
        console.error(countUp.error);
      }
    }

    // Chart Doughnut Consumption by room
    var ctx1 = document.getElementById("chart-consumption").getContext("2d");

    var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
    gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

    new Chart(ctx1, {
      type: "doughnut",
      data: {
        labels: ['Living Room', 'Kitchen', 'Attic', 'Garage', 'Basement'],
        datasets: [{
          label: "Consumption",
          weight: 9,
          cutout: 90,
          tension: 0.9,
          pointRadius: 2,
          borderWidth: 2,
          backgroundColor: ['#5e72e4', '#8392ab', '#11cdef', '#2dce89', '#fb6340'],
          data: [15, 20, 13, 32, 20],
          fill: false
        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
            },
            ticks: {
              display: false
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
            },
            ticks: {
              display: false,
            }
          },
        },
      },
    });

    // Chart Consumption by day
    var ctx = document.getElementById("chart-cons-week").getContext("2d");

    new Chart(ctx, {
      type: "bar",
      data: {
        labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
        datasets: [{
          label: "Watts",
          tension: 0.4,
          borderWidth: 0,
          borderRadius: 4,
          borderSkipped: false,
          backgroundColor: "#3A416F",
          data: [150, 230, 380, 220, 420, 200, 70],
          maxBarThickness: 6
        }, ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
            },
            ticks: {
              display: false
            },
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false
            },
            ticks: {
              beginAtZero: true,
              font: {
                size: 12,
                family: "Open Sans",
                style: 'normal',
              },
              color: "#9ca2b7"
            },
          },
          y: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#9ca2b7'
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#9ca2b7'
            }
          },
        },
      },
    });
  </script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>

<script async defer src="https://buttons.github.io/buttons.js"></script>

<script src="../../assets/js/argon-dashboard.min.js?v=2.0.5"></script>