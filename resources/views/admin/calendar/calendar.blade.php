@extends('layouts.admin')
@section('content')
    <h3 class="page-title">{{ trans('global.systemCalendar') }}</h3>
    <div class="card">
        <div class="card-header">
            {{ trans('global.systemCalendar') }}
        </div>

        <div class="card-body">
            <link rel='stylesheet'
                  href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css'/>

            <div id='calendar'></div>


        </div>
    </div>
@endsection

@section('scripts')
    @parent
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
    <script>
      $(document).ready(function () {
        // page is now ready, initialize the calendar...
        events ={!! json_encode($events) !!};
        $('#calendar').fullCalendar({
          editable: true,
          height: 600,
		eventLimit: true,
    eventLimitText: "More", //sets the text for more events
		header: {
			left: 'prev,next today',
			center: 'title',
			right: 'month,agendaWeek,agendaDay,agenda'
		},
    plugins: ["dayGrid", "interaction"],
          // put your options and callbacks here
          events: events,

          eventRender: function (event, element, view) {
              console.log(event);
              var date = new Date();
              if (event.start >= date)
                $(element).css("backgroundColor", "#FD1414")

              let day = moment(event.start).format('MM-DD-YYYY');
              let start = moment(event.start).format('hh:mm a');
              let end = moment(event.finish).format('hh:mm a');

              $(element).popover({
                title: event.title,
                content: `<div class="container">
                            <div class="events-date"><span>${day}</span><span> ${start}</span> - <span>${end}</span></div>
                            <div class="event-name"><span class="event-name-title"> Title :</span> ${event.title}</div>
                            <div class="event-name"><span class="event-name-title"> Note :</span> ${event.comments}</div>
                          </div>`,
                html: true,
                trigger: 'hover',
                placement: 'top',
                delay: {
                  "hide": 100
                }
              });
            },
          defaultView: 'agendaWeek'
        })
      })
    </script>
@stop