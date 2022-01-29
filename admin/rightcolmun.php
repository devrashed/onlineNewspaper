<style type="text/css">
 div.calendar {
        max-width: 275px;
        margin-left: auto;
        margin-right: auto;
      }
      div.calendar table {
        width: 100%;
      }
      div.dateField {
        width: 140px;
        padding: 6px;
        -webkit-border-radius: 6px;S
        -moz-border-radius: 6px;
        color: #555;
        background-color: white;
        margin-left: auto;
        margin-right: auto;
        text-align: center;
      }
      div#popupDateField:hover {
        background-color: #cde;
        cursor: pointer;
      }
</style>
 <script>
      function setupCalendars() {
        // Embedded Calendar
        Calendar.setup(
          {
            dateField: 'embeddedDateField',
            parentElement: 'embeddedCalendar'
          }
        )

        // Popup Calendar
        Calendar.setup(
          {
            dateField: 'popupDateField',
            triggerElement: 'popupDateField'
          }
        )
      }

      Event.observe(window, 'load', function() { setupCalendars() })
    </script>
    
    <div style="width:auto; padding:10px 7px; background:#090; color:#FFF;">Calender </div>
    <div id="embeddedCalendar" style="margin-left: auto; margin-right: auto">
          </div>