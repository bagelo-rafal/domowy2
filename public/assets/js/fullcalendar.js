document.addEventListener('DOMContentLoaded', function() {
  var freeSlots = {
    backgroundColor: '#2dbc66',
    borderColor: '#2dbc66',
    events: [
      {
        start: '2020-10-16T12:30',
        end: '2020-10-16T12:50',
        title: 'Wolny'
      },
      {
        start: '2020-10-16T13:00',
        end: '2020-10-16T13:20',
        title: 'Wolny'
      },
    ]
  };
  var visits = {
    backgroundColor: '#0081ea',
    borderColor: '#0081ea',
    events: [
      {
        start: '2020-10-16T13:30',
        end: '2020-10-16T13:50',
        title: 'E-wizyta'
      },
      {
        start: '2020-10-16T14:00',
        end: '2020-10-16T14:20',
        title: 'E-wizyta'
      },
    ]
  };


      var calendarEl = document.getElementById('calendar');
      var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'timeGridWeek',
        locale: 'pl',
        eventSources: [
          freeSlots, visits
        ]
      });
      calendar.render();
    });
