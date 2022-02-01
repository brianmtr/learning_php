<?php
function creneaux_html (array $creneaux) {
$phrases = [];
if (count($creneaux) === 0) {
    return 'fermé';
}

foreach ($creneaux as $creneau) {

    $phrases[] = "Ouvert de <strong>{$creneau[0]}h</strong> à <strong>{$creneau[1]}h</strong>";
}
return implode (' et ', $phrases);
}

function in_creneaux (int $heure, array $creneaux): void {
    
}