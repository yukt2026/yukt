<?php
// ==========================================================================
// YUKT IT SOLUTIONS — Badge & Micro-Tag Component
// ==========================================================================

function renderBadge($text, $color = 'blue', $icon = null, $extraClasses = '') {
    $colorClasses = [
        'blue' => 'bg-electric-50 text-electric-700 border border-electric-200',
        'orange' => 'bg-brandOrange-50 text-brandOrange-700 border border-brandOrange-200',
        'navy' => 'bg-navy-100 text-navy-800 border border-navy-200',
        'emerald' => 'bg-emerald-50 text-emerald-700 border border-emerald-200',
        'slate' => 'bg-slate-100 text-slate-700 border border-slate-200',
    ][$color] ?? 'bg-electric-50 text-electric-700 border border-electric-200';

    $iconHtml = '';
    if ($icon) {
        $iconHtml = getIconSvg($icon, 'w-3 h-3');
    }

    return "<span class=\"inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-badge text-xs font-semibold $colorClasses $extraClasses\">$iconHtml<span>" . htmlspecialchars($text) . "</span></span>";
}
