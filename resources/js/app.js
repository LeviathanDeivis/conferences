import 'bootstrap';

import { Calendar } from '@fullcalendar/core';
import dayGridPlugin from '@fullcalendar/daygrid';

window.Calendar = Calendar;
window.dayGridPlugin = dayGridPlugin;

import Swal from 'sweetalert2';

window.Swal = Swal;


document.querySelectorAll('.delete-btn').forEach(button => {

    button.addEventListener('click', function() {
     console.log('Ar veikia')
        Swal.fire({
            title: 'Confirm',
            text: "Are you sure you want to delete this conference?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            confirmButtonText: 'Delete'
        }).then((result) => {

            if (result.isConfirmed) {
                Swal.fire(
                    'Deleted!',
                    'Conference removed.',
                    'success'
                );
            };         
        });

    });
})