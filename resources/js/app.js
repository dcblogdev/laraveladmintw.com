import Alpine from 'alpinejs'
window.Alpine = Alpine
Alpine.start()

import 'flatpickr';

import * as FilePond from 'filepond';
window.FilePond = FilePond;

// Navigation scroll
import SmoothScroll from 'smooth-scroll';
new SmoothScroll('a[href*="#"]');

import Prism from 'prismjs';
require('prismjs/plugins/normalize-whitespace/prism-normalize-whitespace');
import 'prismjs/themes/prism-tomorrow.css'; // see other themes in the prism docs
import 'prismjs/components/prism-markup-templating';
import 'prismjs/components/prism-php';
import 'prismjs/components/prism-css';
import 'prismjs/components/prism-javascript';
Prism.plugins.NormalizeWhitespace.setDefaults({
	'remove-trailing': true,
	'remove-indent': true,
	'left-trim': true,
	'right-trim': true
});
Prism.highlightAll();