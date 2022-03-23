const action = $('.pumpcontrol').attr('action');
var _token = $('meta[name=csrf-token]').attr('content');

$(function () {
  "use strict";
  $('.fromTime').bootstrapMaterialDatePicker({
    format: 'YYYY-MM-DD HH:mm'
  });
  $('.untilTime').bootstrapMaterialDatePicker({
    format: 'YYYY-MM-DD HH:mm'
  });
});

$('#phUp').click(function (e) {
  if ($("#phUp").hasClass('btn-success')) {
    $.ajax({
      url: action,
      type: 'POST',
      data: {
        _token: _token,
        gpio: 19,
        state: 1,
      },
      success: function () {
        $('#phUp').removeClass('btn-success')
        $('#phUp').addClass('btn-danger')
      }
    })
  } else {
    $.ajax({
      url: action,
      type: 'POST',
      data: {
        _token: _token,
        gpio: 19,
        state: 0,
      },
      success: function () {
        $('#phUp').removeClass('btn-danger')
        $('#phUp').addClass('btn-success')
      }
    })
  }
  e.preventDefault();
})

$('#phDown').click(function (e) {
  if ($(this).hasClass('btn-success')) {
    $.ajax({
      url: action,
      type: 'POST',
      data: {
        _token: _token,
        gpio: 15,
        state: 1,
      },
      success: function (data) {
        $('#phDown').removeClass('btn-success')
        $('#phDown').addClass('btn-danger')
      }
    })
  } else {
    $.ajax({
      url: action,
      type: 'POST',
      data: {
        _token: _token,
        gpio: 15,
        state: 0,
      },
      success: function (data) {
        $('#phDown').removeClass('btn-danger')
        $('#phDown').addClass('btn-success')
      }
    })
  }
  e.preventDefault();
})

$('#nutrisiA').click(function (e) {
  if ($(this).hasClass('btn-success')) {
    $.ajax({
      url: action,
      type: 'POST',
      data: {
        _token: _token,
        gpio: 18,
        state: 1,
      },
      success: function (data) {
        $('#nutrisiA').removeClass('btn-success')
        $('#nutrisiA').addClass('btn-danger')
      }
    })
  } else {
    $.ajax({
      url: action,
      type: 'POST',
      data: {
        _token: _token,
        gpio: 18,
        state: 0,
      },
      success: function (data) {
        $('#nutrisiA').removeClass('btn-danger')
        $('#nutrisiA').addClass('btn-success')
      }
    })
  }
  e.preventDefault();
})

var ctx1 = document.getElementById("pHChart");
const pHChart = new Chart(ctx1, {
  type: 'line',
  data: {
    labels: [],
    datasets: [{
      label: 'pH',
      data: [],
      borderWidth: 1,
      borderColor: '#198754',
      backgroundColor: '#198754',
    }]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true
      },
      x: {
        reverse: true
      }
    }
  }
});

var ctx2 = document.getElementById("ECChart");
const ECChart = new Chart(ctx2, {
  type: 'line',
  data: {
    labels: [],
    datasets: [{
      label: 'EC',
      data: [],
      borderWidth: 1,
      borderColor: '#dc3545',
      backgroundColor: '#dc3545',
    }]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true
      },
      x: {
        reverse: true
      }
    }
  }
});

var ctx3 = document.getElementById("LevelChart");
const LevelChart = new Chart(ctx3, {
  type: 'line',
  data: {
    labels: [],
    datasets: [{
      label: 'Level',
      data: [],
      borderWidth: 1,
      borderColor: '#0d6efd',
      backgroundColor: '#0d6efd',
    }]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true
      },
      x: {
        reverse: true
      }
    }
  }
});

var ctx4 = document.getElementById("VoltageChart");
const VoltageChart = new Chart(ctx4, {
  type: 'line',
  data: {
    labels: [],
    datasets: [{
      label: 'Voltage',
      data: [],
      borderWidth: 1,
      borderColor: '#198754',
      backgroundColor: '#198754',
    }]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true
      },
      x: {
        reverse: true
      }
    }
  }
});

var ctx5 = document.getElementById("CurrentChart");
const CurrentChart = new Chart(ctx5, {
  type: 'line',
  data: {
    labels: [],
    datasets: [{
      label: 'Current',
      data: [],
      borderWidth: 1,
      borderColor: '#dc3545',
      backgroundColor: '#dc3545',
    }]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true
      },
      x: {
        reverse: true
      }
    }
  }
});

var ctx6 = document.getElementById("PowerChart");
const PowerChart = new Chart(ctx6, {
  type: 'line',
  data: {
    labels: [],
    datasets: [{
      label: 'Power',
      data: [],
      borderWidth: 1,
      borderColor: '#0d6efd',
      backgroundColor: '#0d6efd',
    }]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true
      },
      x: {
        reverse: true
      }
    }
  }
});

var ctx7 = document.getElementById("EnergyChart");
const EnergyChart = new Chart(ctx7, {
  type: 'line',
  data: {
    labels: [],
    datasets: [{
      label: 'Energy',
      data: [],
      borderWidth: 1,
      borderColor: '#198754',
      backgroundColor: '#198754',
    }]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true
      },
      x: {
        reverse: true
      }
    }
  }
});

var ctx8 = document.getElementById("xAxis");
const xAxis = new Chart(ctx8, {
  type: 'line',
  data: {
    labels: [],
    datasets: [{
      label: 'X Axis',
      data: [],
      borderWidth: 1,
      borderColor: '#dc3545',
      backgroundColor: '#dc3545',
    }]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true,
        max: 180
      },
      x: {
        reverse: true
      }
    }
  }
});

var ctx9 = document.getElementById("yAxis");
const yAxis = new Chart(ctx9, {
  type: 'line',
  data: {
    labels: [],
    datasets: [{
      label: 'Y Axis',
      data: [],
      borderWidth: 1,
      borderColor: '#0d6efd',
      backgroundColor: '#0d6efd',
    }]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true,
        max: 180
      },
      x: {
        reverse: true
      }
    }
  }
});
var updateChart = function () {
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $.ajax({
    url: window.location.origin + '/datacontrol',
    type: 'GET',
    dataType: 'json',
    success: function (data) {
      pHChart.data.labels = data.timeSensor;
      pHChart.data.datasets[0].data = data.pHValue;
      pHChart.update();
      $('#pH').html(data.value_ph);

      ECChart.data.labels = data.timeSensor;
      ECChart.data.datasets[0].data = data.ECValue;
      ECChart.update();
      $('#EC').html(data.value_ec);

      LevelChart.data.labels = data.timeSensor;
      LevelChart.data.datasets[0].data = data.LevelValue;
      LevelChart.update();
      $('#Level').html(data.value_level);

      VoltageChart.data.labels = data.timeSensor;
      VoltageChart.data.datasets[0].data = data.VoltageValue;
      VoltageChart.update();
      $('#Voltage').html(data.value_voltage);

      CurrentChart.data.labels = data.timeSensor;
      CurrentChart.data.datasets[0].data = data.CurrentValue;
      CurrentChart.update();
      $('#Current').html(data.value_current);

      PowerChart.data.labels = data.timeSensor;
      PowerChart.data.datasets[0].data = data.PowerValue;
      PowerChart.update();
      $('#Power').html(data.value_power);

      EnergyChart.data.labels = data.timeSensor;
      EnergyChart.data.datasets[0].data = data.EnergyValue;
      EnergyChart.update();
      $('#Energy').html(data.value_energy);

      xAxis.data.labels = data.timeAngle;
      xAxis.data.datasets[0].data = data.xValue;
      xAxis.update();
      $('#xAngle').html(data.value_x);

      yAxis.data.labels = data.timeAngle;
      yAxis.data.datasets[0].data = data.yValue;
      yAxis.update();
      $('#yAngle').html(data.value_y);
    },
    error: function (data) {
      console.log(data)
    }
  });
}

updateChart();
setInterval(() => {
  updateChart();
}, 10000);

var updateData = function (value1, value2, value3, value4, value5, value6, value7, x, y) {
  $.ajax({
    url: window.location.origin + '/datainsert',
    type: 'POST',
    data: {
      _token: _token,
      value1: value1,
      value2: value2,
      value3: value3,
      value4: value4,
      value5: value5,
      value6: value6,
      value7: value7,
      value8: x,
      value9: y
    },
    // success: function (data) {
    //   console.log(data);
    // }
  })
}

// let i = 0;
// setInterval(() => {
//   var value1 = Math.floor(Math.random() * 100);
//   var value2 = Math.floor(Math.random() * 100);
//   var value3 = Math.floor(Math.random() * 100);
//   var value4 = Math.floor(Math.random() * 100);
//   var value5 = Math.floor(Math.random() * 100);
//   var value6 = Math.floor(Math.random() * 100);
//   var value7 = Math.floor(Math.random() * 100);

//   var x = Math.floor(Math.random() * 180);
//   var y = Math.floor(Math.random() * 180);
//   updateData(value1, value2, value3, value4, value5, value6, value7, x, y);
// }, 2000);