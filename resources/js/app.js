import hljs from 'highlight.js/lib/core';
import php from 'highlight.js/lib/languages/php';
import shell from 'highlight.js/lib/languages/shell';
import bash from 'highlight.js/lib/languages/bash';
import json from 'highlight.js/lib/languages/json';
import diff from 'highlight.js/lib/languages/diff';

import 'alpinejs';
import { listen } from "quicklink";
import docsearch from '@docsearch/js';

import './clipboard';
import './nav';

// Configure Highlight.js
hljs.registerLanguage('php', php);
hljs.registerLanguage('shell', shell);
hljs.registerLanguage('bash', bash);
hljs.registerLanguage('json', json);
hljs.registerLanguage('diff', diff);
hljs.configure({
	classPrefix: 'hljs-'
});

// Configure DocSearch
docsearch({
	container: '#docsearch',
    apiKey: 'ac0bd380724d207df97763a999031e82',
    indexName: 'laravel-zero',
});

document.querySelectorAll('pre code').forEach((block) => {
	hljs.initHighlightingOnLoad();
});

window.addEventListener('load', () => {
	listen();
});
