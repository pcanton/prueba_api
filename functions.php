<?php

declare(strict_types=1);

function render_template(string $template, array $data = [])
{
    extract($data);
    
    require "templates/$template.php";
}
function get_data($url): array
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Para devolver el resultado en vez de mostrarlo.
    $result = curl_exec($ch);
    curl_close($ch);

    $data = json_decode($result, true);
    return $data;
}

function get_until_message(int $days): string
{
    return  $outputDay = match (true) {
        $days < 0 => "Hoy se strena ",
        $days < 7  => "Se estrena esta semana ",
        $days < 30  => "Se estrena este mes",
        default => "$days para el estreno ",
    };
}
