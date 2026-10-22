<?php
// ==========================================================================
// YUKT IT SOLUTIONS — Section Header Component
// ==========================================================================

function renderSectionHeader($eyebrow, $title, $description = '', $centered = true, $eyebrowColor = 'blue', $extraClasses = '') {
    $alignClass = $centered ? 'text-center mx-auto' : 'text-left';
    $descAlignClass = $centered ? 'mx-auto' : '';

    $eyebrowClasses = ($eyebrowColor === 'orange')
        ? 'inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold tracking-wide uppercase bg-brandOrange-50 text-brandOrange-700 border border-brandOrange-200 mb-2.5'
        : 'inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold tracking-wide uppercase bg-electric-50 text-electric-700 border border-electric-200 mb-2.5';

    $html = "<div class=\"max-w-3xl mb-8 sm:mb-10 $alignClass $extraClasses reveal-on-scroll\">";
    if ($eyebrow) {
        $dotColor = ($eyebrowColor === 'orange') ? 'bg-brandOrange-500' : 'bg-electric-600';
        $html .= "<div class=\"$eyebrowClasses\"><span class=\"w-1.5 h-1.5 rounded-full $dotColor\"></span>" . htmlspecialchars($eyebrow) . "</div>";
    }
    $html .= "<h2 class=\"text-3xl sm:text-4xl font-bold text-navy-800 tracking-tight leading-tight\">$title</h2>";
    if ($description) {
        $html .= "<p class=\"text-base sm:text-lg text-navy-500 mt-2.5 sm:mt-3 font-normal leading-relaxed $descAlignClass\">" . htmlspecialchars($description) . "</p>";
    }
    $html .= "</div>";

    return $html;
}
