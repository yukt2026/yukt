<?php
// ==========================================================================
// YUKT IT SOLUTIONS — Semantic SVG Icon Library
// ==========================================================================

function getIconSvg($name, $classes = 'w-5 h-5') {
    $strokeWidth = '1.75';
    
    switch ($name) {
        case 'globe':
            return '<svg class="'.$classes.'" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="'.$strokeWidth.'" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>';
        
        case 'cpu':
            return '<svg class="'.$classes.'" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="'.$strokeWidth.'" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="4" width="16" height="16" rx="2"></rect><rect x="9" y="9" width="6" height="6"></rect><line x1="9" y1="1" x2="9" y2="4"></line><line x1="15" y1="1" x2="15" y2="4"></line><line x1="9" y1="20" x2="9" y2="23"></line><line x1="15" y1="20" x2="15" y2="23"></line><line x1="20" y1="9" x2="23" y2="9"></line><line x1="20" y1="14" x2="23" y2="14"></line><line x1="1" y1="9" x2="4" y2="9"></line><line x1="1" y1="14" x2="4" y2="14"></line></svg>';

        case 'sparkles':
            return '<svg class="'.$classes.'" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="'.$strokeWidth.'" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3v3m0 12v3m9-9h-3m-12 0H3m14.85-6.85l-2.12 2.12m-9.46 9.46l-2.12 2.12m0-13.7l2.12 2.12m9.46 9.46l2.12 2.12"></path><circle cx="12" cy="12" r="3"></circle></svg>';

        case 'trending-up':
            return '<svg class="'.$classes.'" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="'.$strokeWidth.'" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>';

        case 'palette':
            return '<svg class="'.$classes.'" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="'.$strokeWidth.'" stroke-linecap="round" stroke-linejoin="round"><circle cx="13.5" cy="6.5" r=".5" fill="currentColor"></circle><circle cx="17.5" cy="10.5" r=".5" fill="currentColor"></circle><circle cx="8.5" cy="7.5" r=".5" fill="currentColor"></circle><circle cx="6.5" cy="12.5" r=".5" fill="currentColor"></circle><path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10c.926 0 1.648-.746 1.648-1.688 0-.437-.18-.835-.437-1.125-.29-.289-.438-.652-.438-1.125a1.64 1.64 0 0 1 1.668-1.668h1.996c3.051 0 5.563-2.512 5.563-5.563C22 6.5 17.5 2 12 2z"></path></svg>';

        case 'shield-check':
            return '<svg class="'.$classes.'" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="'.$strokeWidth.'" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><path d="m9 12 2 2 4-4"></path></svg>';

        case 'shopping-cart':
            return '<svg class="'.$classes.'" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="'.$strokeWidth.'" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>';

        case 'arrow-right':
            return '<svg class="'.$classes.'" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="'.$strokeWidth.'" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>';

        case 'check':
            return '<svg class="'.$classes.'" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>';

        case 'check-circle':
            return '<svg class="'.$classes.'" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="'.$strokeWidth.'" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>';

        case 'phone':
            return '<svg class="'.$classes.'" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="'.$strokeWidth.'" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>';

        case 'whatsapp':
            return '<svg class="'.$classes.'" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.44.79 3.06 1.2 4.72 1.2h.02c5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.82 9.82 0 0 0 12.04 2zm0 18.13h-.01c-1.47 0-2.91-.4-4.17-1.14l-.3-.18-3.12.82.83-3.04-.2-.31a8.15 8.15 0 0 1-1.25-4.37c0-4.51 3.67-8.18 8.19-8.18a8.13 8.13 0 0 1 5.78 2.4 8.13 8.13 0 0 1 2.4 5.79c0 4.51-3.68 8.18-8.15 8.18z"/></svg>';

        case 'mail':
            return '<svg class="'.$classes.'" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="'.$strokeWidth.'" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="16" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg>';

        case 'map-pin':
            return '<svg class="'.$classes.'" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="'.$strokeWidth.'" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>';

        case 'clock':
            return '<svg class="'.$classes.'" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="'.$strokeWidth.'" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>';

        case 'code':
            return '<svg class="'.$classes.'" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="'.$strokeWidth.'" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>';

        case 'zap':
            return '<svg class="'.$classes.'" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="'.$strokeWidth.'" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>';

        case 'lock':
            return '<svg class="'.$classes.'" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="'.$strokeWidth.'" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>';

        case 'users':
            return '<svg class="'.$classes.'" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="'.$strokeWidth.'" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>';

        case 'briefcase':
            return '<svg class="'.$classes.'" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="'.$strokeWidth.'" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>';

        case 'bot':
            return '<svg class="'.$classes.'" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="'.$strokeWidth.'" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="10" rx="2"></rect><circle cx="12" cy="5" r="2"></circle><path d="M12 7v4"></path><line x1="8" y1="16" x2="8" y2="16"></line><line x1="16" y1="16" x2="16" y2="16"></line></svg>';

        case 'layers':
            return '<svg class="'.$classes.'" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="'.$strokeWidth.'" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>';

        case 'video':
            return '<svg class="'.$classes.'" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="'.$strokeWidth.'" stroke-linecap="round" stroke-linejoin="round"><polygon points="23 7 16 12 23 17 23 7"></polygon><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect></svg>';

        case 'database':
            return '<svg class="'.$classes.'" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="'.$strokeWidth.'" stroke-linecap="round" stroke-linejoin="round"><ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path></svg>';

        case 'file-text':
            return '<svg class="'.$classes.'" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="'.$strokeWidth.'" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>';

        case 'chevron-down':
            return '<svg class="'.$classes.'" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>';

        case 'menu':
            return '<svg class="'.$classes.'" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>';

        case 'x':
            return '<svg class="'.$classes.'" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>';

        case 'star':
            return '<svg class="'.$classes.'" viewBox="0 0 24 24" fill="currentColor" stroke="none"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>';

        default:
            return '<svg class="'.$classes.'" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="'.$strokeWidth.'"><circle cx="12" cy="12" r="9"></circle></svg>';
    }
}
