<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

$frasi = [
    'generale' => [
        'passato' => [
            "Vedo che negli scorsi anni sei stata una persona spesso triste.",
            "Sento che a volte hai pensato di non farcela.",
            "Sento che hai avuto molte delusioni in passato."
        ],
        'presente' => [
            "Sei una persona estroversa, ma non mancano momenti in cui vuoi stare per conto tuo.",
            "Sei una persona simpatica, generosa e buona.",
            "Sento che attualmente manca qualcosa nella tua vita."
        ],
        'futuro' => [
            "In futuro vedo grandi cose per te!",
            "In futuro avrai molte soddisfazioni!",
            "Il futuro sarà per te roseo."
        ]
    ],
    'amore' => [
        'passato' => [
            "In amore hai sofferto molto in passato.",
            "Ultimamente alcuni rapporti non sono andati come credevi.",
            "Con la sfera dei sentimenti hai avuto problemi ma non sono mancati i momenti di felicità."
        ],
        'presente' => [
            "Sento che attualmente non sei una persona che è soddisfatta pienamente della sua vita sentimentale.",
            "Sei una persona bisognosa di affetto.",
            "Con gli altri sei disponibile e per questo ti apprezzano."
        ],
        'futuro' => [
            "Vedo che in futuro sarai molto più felice.",
            "Sento che realizzerai i tuoi desideri sentimentali con la persona giusta.",
            "Sento che in futuro la tua sfera dei sentimenti sarà più ricca e avrai più soddisfazioni."
        ]
    ],
    'salute' => [
        'passato' => [
            "In passato hai avuto qualche problema di salute.",
            "Sento che quando eri giovane ti ammalavi più frequentemente rispetto ad ora.",
            "Sento che in passato hai avuto a che fare con dei medici."
        ],
        'presente' => [
            "Attualmente hai qualche preoccupazione che riguarda una persona che conosci.",
            "Spesso vorresti essere più in salute di come sei ora.",
            "Sento che hai paura delle malattie."
        ],
        'futuro' => [
            "In futuro starai meglio di adesso.",
            "Il tuo ultimo giorno i tuoi familiari saranno accanto a te e non soffrirai.",
            "Sento che in futuro andrai in un ospedale, ma non sarà niente di grave."
        ]
    ],
    'lavoro' => [
        'passato' => [
            "Sento che in passato hai avuto problemi economici.",
            "In passato la tua vita lavorativa ti ha dato problemi.",
            "Ci sono stati dei momenti in cui per te lavorare non era così importante."
        ],
        'presente' => [
            "Non sei una persona che è completamente soddisfatta del suo mondo lavorativo.",
            "Sento che nel tuo lavoro non ti apprezzano come meriteresti.",
            "Il lavoro per te è una cosa importante."
        ],
        'futuro' => [
            "Sento che col passare del tempo di stimeranno e apprezzeranno ogni giorno di più.",
            "Il tuo futuro lavorativo sarà roseo.",
            "Sento che in futuro avrai grandi soddisfazioni lavorative."
        ]
    ]
];

/**
 * Ottiene una frase casuale da una categoria specifica.
 *
 * @param string $tipo Il tipo di frase (es: 'generale', 'amore').
 * @param string $categoria La categoria di frase (es: 'passato', 'presente').
 * @param array $frasi L'array contenente le frasi.
 * @return string La frase casuale, oppure un messaggio di errore se la categoria è vuota.
 */
function getFrase(string $tipo, string $categoria, array $frasi): string
{
    if (empty($frasi[$tipo][$categoria])) {
        return "Nessuna frase disponibile per questo tipo.";
    }
    $indice = array_rand($frasi[$tipo][$categoria]);
    return $frasi[$tipo][$categoria][$indice];
}

?>
