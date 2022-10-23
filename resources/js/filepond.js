import * as Filepond from 'filepond';
import 'filepond/dist/filepond.css';
import 'filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css';

// Import the Image Preview plugin
import FilePondPluginImagePreview from 'filepond-plugin-image-preview';

// Register the plugin with FilePond
Filepond.registerPlugin(FilePondPluginImagePreview);

// Get a file input reference
// const inputs = document.querySelectorAll('input[type="file"].filepond');

// // Create a FilePond instance
// inputs.forEach(input => Filepond.create(input, {
//     allowImagePreview: true,
//     labelIdle: input.dataset?.label || 'Drag & Drop your files or <span class="filepond--label-action"> Click here </span>'
// }))

window.Filepond = Filepond
