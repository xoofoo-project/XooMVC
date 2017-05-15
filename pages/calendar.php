<link href="assets/vendor/fullcalendar/fullcalendar.min.css" rel="stylesheet" />
<script src="assets/vendor/fullcalendar/moment.min.js"></script>
<script src="assets/vendor/fullcalendar/fullcalendar.min.js"></script>
<script src="assets/vendor/fullcalendar/lang/fr.js"></script>
<style>#calendar {max-width: 900px;margin: 40px auto;padding: 0 10px;}</style>
<script>
$(document).ready(function() {
	var currentLangCode = 'fr';
	$('#calendar').fullCalendar({
		header: {
			left: 'prev,next today',
			center: 'title',
			right: 'month,agendaWeek,agendaDay'
		},
		//defaultDate: '2016-06-12',
		//editable: true,
		//businessHours: true,
		businessHours: {start :'08:30', end :'18:30', dow :[1,2,3,4,5,6,7]},
		lang: currentLangCode,
		eventLimit: true, // allow "more" link when too many events
		events: [
			{
				title: 'All Day Event',
				start: '2016-06-01'
			},
			{
				title: 'Long Event',
				start: '2016-06-07',
				end: '2016-06-10'
			},
			{
				id: 999,
				title: 'Repeating Event',
				start: '2016-06-09T16:00:00'
			},
			{
				id: 999,
				title: 'Repeating Event',
				start: '2016-06-16T16:00:00'
			},
			{
				title: 'Conference',
				start: '2016-06-11',
				end: '2016-06-13'
			},
			{
				title: 'Meeting',
				start: '2016-06-12T10:30:00',
				end: '2016-06-12T12:30:00'
			},
			{
				title: 'Lunch',
				start: '2016-06-12T12:00:00'
			},
			{
				title: 'Meeting',
				start: '2016-06-12T14:30:00'
			},
			{
				title: 'Happy Hour',
				start: '2016-06-12T17:30:00'
			},
			{
				title: 'Dinner',
				start: '2016-06-12T20:00:00'
			},
			{
				title: 'Birthday Party',
				start: '2016-06-13T07:00:00'
			},
			{
				title: 'Click for Google',
				url: 'http://google.com/',
				start: '2016-06-28'
			}
		]
	});
});
</script>
<section class="fullcalendar margtop">
	<div class="row">
		<div class="large-12 columns">
			<div id="calendar"></div>
		</div>
	</div>
</section>