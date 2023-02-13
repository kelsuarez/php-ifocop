<?php

// les superglobales sont des variables qui stockent les informations dans des tableaux (utiliser syntaxe tableau)

// ce chemin sera utile, en local comme en logne pour pointer vers un fichier ou dossier. Chemin universel
// a l'indice DOCUMENT_ROOT, $_SERVER pointe vers notre projet

echo "<pre>"; print_r($_SERVER); echo "</pre>";