<?php
// ==========================================================================
// YUKT IT SOLUTIONS — Service Card Component (Linear / Stripe Style)
// ==========================================================================

function renderServiceCard($service, $extraClasses = '') {
    $accentColor = $service['accent'] ?? 'electric';
    
    // Clean, refined icon container styling
    $iconContainer = ($accentColor === 'orange')
        ? 'w-11 h-11 rounded-lg bg-brandOrange-50 text-brandOrange-600 flex items-center justify-center mb-5'
        : 'w-11 h-11 rounded-lg bg-electric-50 text-electric-600 flex items-center justify-center mb-5';

    $cardHoverBorder = ($accentColor === 'orange') ? 'hover:border-brandOrange-300' : 'hover:border-electric-300';
    $titleHoverColor = ($accentColor === 'orange') ? 'group-hover:text-brandOrange-600' : 'group-hover:text-electric-600';
    $linkTextColor = ($accentColor === 'orange') ? 'text-brandOrange-600 hover:text-brandOrange-700' : 'text-electric-600 hover:text-electric-700';

    $featuresHtml = '';
    if (!empty($service['features'])) {
        $featuresHtml .= '<ul class="space-y-2 mt-5 mb-6 text-sm text-navy-600">';
        // Show up to 3 core capabilities for optimal visual breathing room
        $slice = array_slice($service['features'], 0, 3);
        foreach ($slice as $feature) {
            $checkColor = ($accentColor === 'orange') ? 'text-brandOrange-500' : 'text-electric-600';
            $featuresHtml .= "<li class=\"flex items-center gap-2.5\">
                <svg class=\"w-4 h-4 $checkColor flex-shrink-0\" viewBox=\"0 0 20 20\" fill=\"currentColor\"><path fill-rule=\"evenodd\" d=\"M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z\" clip-rule=\"evenodd\"/></svg>
                <span class=\"leading-normal\">" . htmlspecialchars($feature) . "</span>
            </li>";
        }
        $featuresHtml .= '</ul>';
    }

    $iconSvg = getIconSvg($service['icon'], 'w-5 h-5');
    $arrowIcon = getIconSvg('arrow-right', 'w-4 h-4 transition-transform duration-150 group-hover:translate-x-1');
    $whatsAppIcon = getIconSvg('whatsapp', 'w-3.5 h-3.5 text-emerald-600');
    $badgeHtml = isset($service['badge']) ? "<span class=\"text-xs font-medium text-slate-400 bg-slate-50 border border-slate-200/60 px-2 py-0.5 rounded\">" . htmlspecialchars($service['badge']) . "</span>" : '';
    $whatsAppUrl = getWhatsAppUrl('Hi Yukt IT Solutions, I would like to scope a project in ' . $service['title'] . '.');

    return "
    <article class=\"group relative bg-white border border-canvas-border rounded-xl p-7 sm:p-8 $cardHoverBorder hover:shadow-card-hover hover:-translate-y-1 transition-all duration-200 ease-out flex flex-col justify-between $extraClasses\">
        <div>
            <div class=\"flex items-start justify-between\">
                <div class=\"$iconContainer\">
                    $iconSvg
                </div>
                $badgeHtml
            </div>
            <h3 class=\"text-xl font-bold text-navy-800 $titleHoverColor transition-colors duration-150\">
                <a href=\"{$service['url']}\" class=\"focus:outline-none focus:underline\">
                    " . htmlspecialchars($service['title']) . "
                </a>
            </h3>
            <p class=\"mt-2.5 text-sm sm:text-[15px] text-navy-500 leading-relaxed font-normal\">
                " . htmlspecialchars($service['desc']) . "
            </p>
            $featuresHtml
        </div>
        <div class=\"pt-4 border-t border-canvas-border flex items-center justify-between\">
            <a href=\"{$service['url']}\" class=\"inline-flex items-center gap-1.5 text-sm font-semibold $linkTextColor focus:outline-none\">
                <span>Explore Capabilities</span>
                $arrowIcon
            </a>
            <a href=\"{$whatsAppUrl}\" target=\"_blank\" rel=\"noopener noreferrer\" class=\"text-xs font-semibold text-emerald-700 hover:text-emerald-800 flex items-center gap-1 focus:outline-none\" title=\"Scope on WhatsApp\">
                {$whatsAppIcon}
                <span>WhatsApp</span>
            </a>
        </div>
    </article>
    ";
}
