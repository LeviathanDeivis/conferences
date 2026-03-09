import 'bootstrap';

import { Calendar } from '@fullcalendar/core';
import dayGridPlugin from '@fullcalendar/daygrid';

window.Calendar = Calendar;
window.dayGridPlugin = dayGridPlugin;

import Swal from 'sweetalert2';

window.Swal = Swal;