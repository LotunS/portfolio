import './bootstrap';

import Alpine from 'alpinejs';
import Swal from 'sweetalert2';
import { createIcons, icons } from 'lucide';

window.Alpine = Alpine;
window.Swal = Swal;

Alpine.start();

createIcons({ icons });

const successMessage = document.body.dataset.successMessage;

if (successMessage) {
    Swal.fire({
        icon: 'success',
        title: 'Success',
        text: successMessage,
        confirmButtonText: 'OK',
    });
}
