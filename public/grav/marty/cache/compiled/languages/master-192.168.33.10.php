<?php
return [
    '@class' => 'Grav\\Common\\Config\\CompiledLanguages',
    'timestamp' => 1459633240,
    'checksum' => 'b43f9c8055a9fea3d64c28b1f4fc020e',
    'files' => [
        'system/languages' => [
            'cs' => [
                'file' => 'system/languages/cs.yaml',
                'modified' => 1456428046
            ],
            'de' => [
                'file' => 'system/languages/de.yaml',
                'modified' => 1456428046
            ],
            'el' => [
                'file' => 'system/languages/el.yaml',
                'modified' => 1456428046
            ],
            'en' => [
                'file' => 'system/languages/en.yaml',
                'modified' => 1456428046
            ],
            'es' => [
                'file' => 'system/languages/es.yaml',
                'modified' => 1456428046
            ],
            'fr' => [
                'file' => 'system/languages/fr.yaml',
                'modified' => 1456428046
            ],
            'hr' => [
                'file' => 'system/languages/hr.yaml',
                'modified' => 1456428046
            ],
            'hu' => [
                'file' => 'system/languages/hu.yaml',
                'modified' => 1456428046
            ],
            'it' => [
                'file' => 'system/languages/it.yaml',
                'modified' => 1456428046
            ],
            'ja' => [
                'file' => 'system/languages/ja.yaml',
                'modified' => 1456428046
            ],
            'lt' => [
                'file' => 'system/languages/lt.yaml',
                'modified' => 1456428046
            ],
            'nb' => [
                'file' => 'system/languages/nb.yaml',
                'modified' => 1456428046
            ],
            'nl' => [
                'file' => 'system/languages/nl.yaml',
                'modified' => 1456428046
            ],
            'no' => [
                'file' => 'system/languages/no.yaml',
                'modified' => 1456428046
            ],
            'pl' => [
                'file' => 'system/languages/pl.yaml',
                'modified' => 1456428046
            ],
            'pt' => [
                'file' => 'system/languages/pt.yaml',
                'modified' => 1456428046
            ],
            'ro' => [
                'file' => 'system/languages/ro.yaml',
                'modified' => 1456428046
            ],
            'ru' => [
                'file' => 'system/languages/ru.yaml',
                'modified' => 1456428046
            ],
            'sv' => [
                'file' => 'system/languages/sv.yaml',
                'modified' => 1456428046
            ],
            'tr' => [
                'file' => 'system/languages/tr.yaml',
                'modified' => 1456428046
            ]
        ],
        'user/plugins' => [
            'plugins/comments' => [
                'file' => 'user/plugins/comments/languages.yaml',
                'modified' => 1456428048
            ],
            'plugins/email' => [
                'file' => 'user/plugins/email/languages.yaml',
                'modified' => 1456428048
            ],
            'plugins/form' => [
                'file' => 'user/plugins/form/languages.yaml',
                'modified' => 1456428050
            ],
            'plugins/relatedpages' => [
                'file' => 'user/plugins/relatedpages/languages.yaml',
                'modified' => 1456428052
            ]
        ]
    ],
    'data' => [
        'en' => [
            'PLUGIN_COMMENTS' => [
                'ADD_COMMENT' => 'Add a comment',
                'COMMENTS' => 'Comments',
                'EMAIL_NOT_CONFIGURED' => 'Email not configured',
                'NEW_COMMENT_EMAIL_SUBJECT' => 'New comment on %1$s',
                'NEW_COMMENT_EMAIL_BODY' => '<p>A new comment was made on %1$s by %3$s (%4$s).</p><p>Page: %2$s</p><p>Text: %5$s</p>',
                'EMAIL_FOOTER' => '',
                'NAME' => 'Name:',
                'EMAIL' => 'Email:',
                'WRITTEN_ON' => 'Written on',
                'BY' => 'by'
            ],
            'PLUGIN_EMAIL' => [
                'PLEASE_CONFIGURE_A_TO_ADDRESS' => 'Please configure a \'to\' address in the Email Plugin settings, or in the form',
                'PLEASE_CONFIGURE_A_FROM_ADDRESS' => 'Please configure a \'from\' address in the Email Plugin settings, or in the form'
            ],
            'PLUGIN_FORM' => [
                'NOT_VALIDATED' => 'Form not validated. One or more required fields are missing.',
                'NONCE_NOT_VALIDATED' => 'Oops there was a problem, please check your input and submit the form again.',
                'FILES' => 'Files Upload',
                'ALLOW_MULTIPLE' => 'Allow More than one file',
                'ALLOW_MULTIPLE_HELP' => 'Allows to select more than one file for upload.',
                'DESTINATION' => 'Destination',
                'DESTINATION_HELP' => 'The location where the files should be uploaded to',
                'ACCEPT' => 'Allowed MIME Types',
                'ACCEPT_HELP' => 'A list of MIME Types that are allowed for upload',
                'ERROR_VALIDATING_CAPTCHA' => 'Error validating the Captcha'
            ],
            'PLUGIN_REL_PAGES' => [
                'PLUGIN_STATUS' => 'Plugin status',
                'BASICS' => 'Basic Settings',
                'LIMIT' => 'Limit',
                'LIMIT_HELP' => 'The number of related pages to display',
                'ORDER' => 'Order',
                'ORDER_BY' => 'Ordery by',
                'SHOW_SCORE' => 'Show score',
                'SHOW_SCORE_HELP' => 'Toggle to determine if scores should be displayed in output',
                'ITEMS' => 'Items',
                'ITEMS_HELP' => 'Supports `@self`, `@page`, and `@taxonomy` based collections',
                'PAGE_IN_FILTER' => 'Page \'in\' filter',
                'PAGE_IN_FILTER_HELP' => 'Enabled if the current page must be in the filtered collection',
                'EXPLICIT_PROCESS' => 'Process explicit pages',
                'EXPLICIT_PROCESS_HELP' => 'Enable this explicit page matching',
                'EXPLICIT_SCORE' => 'Explicit page score',
                'EXPLICIT_SCORE_HELP' => 'A score ranging from (0 - 100) to give explicit pages a weight',
                'TAXONOMY_MATCH' => 'Taxonomy Type Matching',
                'TAXONOMY' => 'Taxonomy',
                'TAXONOMY_HELP' => 'Which taxonomy type to use for page matching',
                'TAXONOMY_TAXONOMY_PROCESS' => 'Taxonomy-taxonomy',
                'TAXONOMY_TAXONOMY_PROCESS_HELP' => 'Enable taxonomy to taxonomy matching',
                'TAXONOMY_CONTENT_PROCESS' => 'Taxonomy-content',
                'TAXONOMY_CONTENT_PROCESS_HELP' => 'Enable taxonomy to Content matching',
                'CONTENT_MATCH' => 'Content Type Matching',
                'CONTENT_PROCESS' => 'Content-content',
                'CONTENT_PROCESS_HELP' => 'Enable content to content matching (NOTE: Disable if you have lots of content)',
                'ADVANCED' => 'Advanced',
                'TAXONOMY_SCORE_SCALE' => 'Taxonomy-taxonomy score scale',
                'CONTENT_SCORE_SCALE' => 'Taxonomy-content score scale'
            ],
            'FRONTMATTER_ERROR_PAGE' => '---
title: %1$s
---

# Error: Invalid Frontmatter

Path: `%2$s`

**%3$s**

```
%4$s
```',
            'INFLECTOR_PLURALS' => [
                '/(quiz)$/i' => '\\1zes',
                '/^(ox)$/i' => '\\1en',
                '/([m|l])ouse$/i' => '\\1ice',
                '/(matr|vert|ind)ix|ex$/i' => '\\1ices',
                '/(x|ch|ss|sh)$/i' => '\\1es',
                '/([^aeiouy]|qu)ies$/i' => '\\1y',
                '/([^aeiouy]|qu)y$/i' => '\\1ies',
                '/(hive)$/i' => '\\1s',
                '/(?:([^f])fe|([lr])f)$/i' => '\\1\\2ves',
                '/sis$/i' => 'ses',
                '/([ti])um$/i' => '\\1a',
                '/(buffal|tomat)o$/i' => '\\1oes',
                '/(bu)s$/i' => '\\1ses',
                '/(alias|status)/i' => '\\1es',
                '/(octop|vir)us$/i' => '\\1i',
                '/(ax|test)is$/i' => '\\1es',
                '/s$/i' => 's',
                '/$/' => 's'
            ],
            'INFLECTOR_SINGULAR' => [
                '/(quiz)zes$/i' => '\\1',
                '/(matr)ices$/i' => '\\1ix',
                '/(vert|ind)ices$/i' => '\\1ex',
                '/^(ox)en/i' => '\\1',
                '/(alias|status)es$/i' => '\\1',
                '/([octop|vir])i$/i' => '\\1us',
                '/(cris|ax|test)es$/i' => '\\1is',
                '/(shoe)s$/i' => '\\1',
                '/(o)es$/i' => '\\1',
                '/(bus)es$/i' => '\\1',
                '/([m|l])ice$/i' => '\\1ouse',
                '/(x|ch|ss|sh)es$/i' => '\\1',
                '/(m)ovies$/i' => '\\1ovie',
                '/(s)eries$/i' => '\\1eries',
                '/([^aeiouy]|qu)ies$/i' => '\\1y',
                '/([lr])ves$/i' => '\\1f',
                '/(tive)s$/i' => '\\1',
                '/(hive)s$/i' => '\\1',
                '/([^f])ves$/i' => '\\1fe',
                '/(^analy)ses$/i' => '\\1sis',
                '/((a)naly|(b)a|(d)iagno|(p)arenthe|(p)rogno|(s)ynop|(t)he)ses$/i' => '\\1\\2sis',
                '/([ti])a$/i' => '\\1um',
                '/(n)ews$/i' => '\\1ews',
                '/s$/i' => ''
            ],
            'INFLECTOR_UNCOUNTABLE' => [
                0 => 'equipment',
                1 => 'information',
                2 => 'rice',
                3 => 'money',
                4 => 'species',
                5 => 'series',
                6 => 'fish',
                7 => 'sheep'
            ],
            'INFLECTOR_IRREGULAR' => [
                'person' => 'people',
                'man' => 'men',
                'child' => 'children',
                'sex' => 'sexes',
                'move' => 'moves'
            ],
            'INFLECTOR_ORDINALS' => [
                'default' => 'th',
                'first' => 'st',
                'second' => 'nd',
                'third' => 'rd'
            ],
            'NICETIME' => [
                'NO_DATE_PROVIDED' => 'No date provided',
                'BAD_DATE' => 'Bad date',
                'AGO' => 'ago',
                'FROM_NOW' => 'from now',
                'SECOND' => 'second',
                'MINUTE' => 'minute',
                'HOUR' => 'hour',
                'DAY' => 'day',
                'WEEK' => 'week',
                'MONTH' => 'month',
                'YEAR' => 'year',
                'DECADE' => 'decade',
                'SEC' => 'sec',
                'MIN' => 'min',
                'HR' => 'hr',
                'WK' => 'wk',
                'MO' => 'mo',
                'YR' => 'yr',
                'DEC' => 'dec',
                'SECOND_PLURAL' => 'seconds',
                'MINUTE_PLURAL' => 'minutes',
                'HOUR_PLURAL' => 'hours',
                'DAY_PLURAL' => 'days',
                'WEEK_PLURAL' => 'weeks',
                'MONTH_PLURAL' => 'months',
                'YEAR_PLURAL' => 'years',
                'DECADE_PLURAL' => 'decades',
                'SEC_PLURAL' => 'secs',
                'MIN_PLURAL' => 'mins',
                'HR_PLURAL' => 'hrs',
                'WK_PLURAL' => 'wks',
                'MO_PLURAL' => 'mos',
                'YR_PLURAL' => 'yrs',
                'DEC_PLURAL' => 'decs'
            ],
            'FORM' => [
                'VALIDATION_FAIL' => '<b>Validation failed:</b>',
                'INVALID_INPUT' => 'Invalid input in',
                'MISSING_REQUIRED_FIELD' => 'Missing required field:'
            ],
            'MONTHS_OF_THE_YEAR' => [
                0 => 'January',
                1 => 'February',
                2 => 'March',
                3 => 'April',
                4 => 'May',
                5 => 'June',
                6 => 'July',
                7 => 'August',
                8 => 'September',
                9 => 'October',
                10 => 'November',
                11 => 'December'
            ],
            'DAYS_OF_THE_WEEK' => [
                0 => 'Monday',
                1 => 'Tuesday',
                2 => 'Wednesday',
                3 => 'Thursday',
                4 => 'Friday',
                5 => 'Saturday',
                6 => 'Sunday'
            ]
        ],
        'fr' => [
            'PLUGIN_COMMENTS' => [
                'ADD_COMMENT' => 'Ajouter un commentaire',
                'COMMENTS' => 'Commentaires',
                'EMAIL_NOT_CONFIGURED' => 'Email non configurée',
                'NEW_COMMENT_EMAIL_SUBJECT' => 'Nouveau commentaire sur %1$s',
                'NEW_COMMENT_EMAIL_BODY' => '<p>Un nouveau commentaire a été posté sur %1$s par %3$s (%4$s).</p><p>Page: %2$s</p><p>Texte: %5$s</p>',
                'EMAIL_FOOTER' => '',
                'NAME' => 'Nom:',
                'EMAIL' => 'Email:',
                'WRITTEN_ON' => 'Ecrit le',
                'BY' => 'par'
            ],
            'PLUGIN_EMAIL' => [
                'PLEASE_CONFIGURE_A_TO_ADDRESS' => 'Veuillez configurer une adresse de \'destinataire\' dans les paramètres du Plugin ou dans le formulaire.',
                'PLEASE_CONFIGURE_A_FROM_ADDRESS' => 'Veuillez configurer une adresse \'d\'expéditeur\' dans les paramètres du Plugin ou dans le formulaire.'
            ],
            'PLUGIN_FORM' => [
                'NOT_VALIDATED' => 'Formulaire non validé. Un ou plusieurs champs obligatoires sont manquants.',
                'NONCE_NOT_VALIDATED' => 'Oups, un problème est survenu. Veuillez vérifier votre saisie et soumettre à nouveau le formulaire.',
                'FILES' => 'Fichiers chargés',
                'ALLOW_MULTIPLE' => 'Autoriser plus d\'un fichier',
                'ALLOW_MULTIPLE_HELP' => 'Permet la sélection de plusieurs fichiers pour chargement.',
                'DESTINATION' => 'Destination',
                'DESTINATION_HELP' => 'L\'emplacement où les fichiers doivent être chargés.',
                'ACCEPT' => 'Autoriser les Types MIME',
                'ACCEPT_HELP' => 'Liste des Types MIME autorisés au chargement',
                'ERROR_VALIDATING_CAPTCHA' => 'Erreur lors de la validation du Captcha'
            ],
            'FRONTMATTER_ERROR_PAGE' => '---
title: %1$s
---

# Erreur : Frontmatter invalide

Path: `%2$s`

**%3$s**

```
%4$s
```
',
            'INFLECTOR_PLURALS' => [
                '/(quiz)$/i' => '\\1zes',
                '/^(ox)$/i' => '\\1en',
                '/([m|l])ouse$/i' => '\\1ice',
                '/(matr|vert|ind)ix|ex$/i' => '\\1ices',
                '/(x|ch|ss|sh)$/i' => '\\1es',
                '/([^aeiouy]|qu)ies$/i' => '\\1y',
                '/([^aeiouy]|qu)y$/i' => '\\1ies',
                '/(hive)$/i' => '\\1s',
                '/(?:([^f])fe|([lr])f)$/i' => '\\1\\2ves',
                '/sis$/i' => 'ses',
                '/([ti])um$/i' => '\\1a',
                '/(buffal|tomat)o$/i' => '\\1oes',
                '/(bu)s$/i' => '\\1ses',
                '/(alias|status)/i' => '\\1es',
                '/(octop|vir)us$/i' => '\\1i',
                '/(ax|test)is$/i' => '\\1es',
                '/s$/i' => 's',
                '/$/' => 's'
            ],
            'INFLECTOR_SINGULAR' => [
                '/(quiz)zes$/i' => '\\1',
                '/(matr)ices$/i' => '\\1ix',
                '/(vert|ind)ices$/i' => '\\1ex',
                '/^(ox)en/i' => '\\1',
                '/(alias|status)es$/i' => '\\1',
                '/([octop|vir])i$/i' => '\\1us',
                '/(cris|ax|test)es$/i' => '\\1is',
                '/(shoe)s$/i' => '\\1',
                '/(o)es$/i' => '\\1',
                '/(bus)es$/i' => '\\1',
                '/([m|l])ice$/i' => '\\1ouse',
                '/(x|ch|ss|sh)es$/i' => '\\1',
                '/(m)ovies$/i' => '\\1ovie',
                '/(s)eries$/i' => '\\1eries',
                '/([^aeiouy]|qu)ies$/i' => '\\1y',
                '/([lr])ves$/i' => '\\1f',
                '/(tive)s$/i' => '\\1',
                '/(hive)s$/i' => '\\1',
                '/([^f])ves$/i' => '\\1fe',
                '/(^analy)ses$/i' => '\\1sis',
                '/((a)naly|(b)a|(d)iagno|(p)arenthe|(p)rogno|(s)ynop|(t)he)ses$/i' => '\\1\\2sis',
                '/([ti])a$/i' => '\\1um',
                '/(n)ews$/i' => '\\1ews'
            ],
            'INFLECTOR_UNCOUNTABLE' => [
                0 => 'équipement',
                1 => 'informations',
                2 => 'riz',
                3 => 'argent',
                4 => 'espèces',
                5 => 'séries',
                6 => 'poisson',
                7 => 'mouton'
            ],
            'INFLECTOR_IRREGULAR' => [
                'person' => 'personnes',
                'man' => 'hommes',
                'child' => 'enfants',
                'sex' => 'sexes',
                'move' => 'déplacements'
            ],
            'INFLECTOR_ORDINALS' => [
                'default' => 'ème',
                'first' => 'er',
                'second' => 'ème',
                'third' => 'ème'
            ],
            'NICETIME' => [
                'NO_DATE_PROVIDED' => 'Aucune date fournie',
                'BAD_DATE' => 'Date erronée',
                'AGO' => 'plus tôt',
                'FROM_NOW' => 'à partir de maintenant',
                'SECOND' => 'seconde',
                'MINUTE' => 'minute',
                'HOUR' => 'heure',
                'DAY' => 'jour',
                'WEEK' => 'semaine',
                'MONTH' => 'mois',
                'YEAR' => 'année',
                'DECADE' => 'décennie',
                'SEC' => 's',
                'MIN' => 'm',
                'HR' => 'h',
                'WK' => 'sem',
                'MO' => 'm',
                'YR' => 'an',
                'DEC' => 'déc',
                'SECOND_PLURAL' => 'secondes',
                'MINUTE_PLURAL' => 'minutes',
                'HOUR_PLURAL' => 'heures',
                'DAY_PLURAL' => 'jours',
                'WEEK_PLURAL' => 'semaines',
                'MONTH_PLURAL' => 'mois',
                'YEAR_PLURAL' => 'années',
                'DECADE_PLURAL' => 'décennies',
                'SEC_PLURAL' => 's',
                'MIN_PLURAL' => 'm',
                'HR_PLURAL' => 'h',
                'WK_PLURAL' => 'sem',
                'MO_PLURAL' => 'mois',
                'YR_PLURAL' => 'a',
                'DEC_PLURAL' => 'décs'
            ],
            'FORM' => [
                'VALIDATION_FAIL' => '<b>La validation a échoué :</b>',
                'INVALID_INPUT' => 'Saisie non valide',
                'MISSING_REQUIRED_FIELD' => 'Champ obligatoire manquant :'
            ],
            'MONTHS_OF_THE_YEAR' => [
                0 => 'Janvier',
                1 => 'Février',
                2 => 'Mars',
                3 => 'Avril',
                4 => 'Mai',
                5 => 'Juin',
                6 => 'Juillet',
                7 => 'Août',
                8 => 'Septembre',
                9 => 'Octobre',
                10 => 'Novembre',
                11 => 'Décembre'
            ],
            'DAYS_OF_THE_WEEK' => [
                0 => 'Lundi',
                1 => 'Mardi',
                2 => 'Mercredi',
                3 => 'Jeudi',
                4 => 'Vendredi',
                5 => 'Samedi',
                6 => 'Dimanche'
            ]
        ],
        'it' => [
            'PLUGIN_COMMENTS' => [
                'ADD_COMMENT' => 'Aggiungi un commento',
                'COMMENTS' => 'Commenti',
                'EMAIL_NOT_CONFIGURED' => 'Email non configurata',
                'NEW_COMMENT_EMAIL_SUBJECT' => 'Nuovo commento su %1$s',
                'NEW_COMMENT_EMAIL_BODY' => '<p>Un nuovo commento è stato postato su %1$s da %3$s (%4$s).</p><p>Pagina: %2$s</p><p>Testo: %5$s</p>',
                'EMAIL_FOOTER' => '',
                'NAME' => 'Nome:',
                'EMAIL' => 'Email:',
                'WRITTEN_ON' => 'Scritto il',
                'BY' => 'da'
            ],
            'PLUGIN_FORM' => [
                'NOT_VALIDATED' => 'Il Form risulta invalido. Uno o più campi risultano omessi.',
                'NONCE_NOT_VALIDATED' => 'Oops è stato riscontrato un errore, si prega di ricontrollare i dati inseriti e provare di nuovo.',
                'FILES' => 'Invio dei Files',
                'ALLOW_MULTIPLE' => 'Consenti più di un file',
                'ALLOW_MULTIPLE_HELP' => 'Permette la selezione di più di un file per l\'upload',
                'DESTINATION' => 'Destinazione',
                'DESTINATION_HELP' => 'La destinazione dove i files vengono uploadati',
                'ACCEPT' => 'Tipi di MIME Concessi',
                'ACCEPT_HELP' => 'Una lista di tipi di MIME che sono permessi per l\'upload',
                'ERROR_VALIDATING_CAPTCHA' => 'Errore durante la validazione del Captcha'
            ],
            'NICETIME' => [
                'NO_DATE_PROVIDED' => 'Nessuna data fornita',
                'BAD_DATE' => 'Data errata',
                'AGO' => 'fa',
                'FROM_NOW' => 'da adesso',
                'SECOND' => 'secondo',
                'MINUTE' => 'minuto',
                'HOUR' => 'ora',
                'DAY' => 'giorno',
                'WEEK' => 'settimana',
                'MONTH' => 'mese',
                'YEAR' => 'anno',
                'SECOND_PLURAL' => 'secondi',
                'MINUTE_PLURAL' => 'minuti',
                'HOUR_PLURAL' => 'ore',
                'DAY_PLURAL' => 'giorni',
                'WEEK_PLURAL' => 'settimane',
                'MONTH_PLURAL' => 'mesi',
                'YEAR_PLURAL' => 'anni',
                'DECADE_PLURAL' => 'decadi'
            ],
            'FORM' => [
                'VALIDATION_FAIL' => '<b>Validazione fallita:</b>',
                'INVALID_INPUT' => 'Input invalido in',
                'MISSING_REQUIRED_FIELD' => 'Campo richiesto mancante:'
            ],
            'MONTHS_OF_THE_YEAR' => [
                0 => 'Gennaio',
                1 => 'Febbraio',
                2 => 'Marzo',
                3 => 'Aprile',
                4 => 'Maggio',
                5 => 'Giugno',
                6 => 'Luglio',
                7 => 'Agosto',
                8 => 'Settembre',
                9 => 'Ottobre',
                10 => 'Novembre',
                11 => 'Dicembre'
            ],
            'DAYS_OF_THE_WEEK' => [
                0 => 'Lunedi',
                1 => 'Martedi',
                2 => 'Mercoledi',
                3 => 'Giovedi',
                4 => 'Venerdi',
                5 => 'Sabato',
                6 => 'Domenica'
            ]
        ],
        'ru' => [
            'PLUGIN_COMMENTS' => [
                'ADD_COMMENT' => 'Добавить комментарий',
                'COMMENTS' => 'Комментарии',
                'EMAIL_NOT_CONFIGURED' => 'Email не настроен',
                'NEW_COMMENT_EMAIL_SUBJECT' => 'Новый комментарий к %1$s',
                'NEW_COMMENT_EMAIL_BODY' => '<p>Новый комментарий был сделан на %1$s by %3$s (%4$s).</p><p>Страница: %2$s</p><p>Текст: %5$s</p>',
                'EMAIL_FOOTER' => '',
                'NAME' => 'Имя:',
                'EMAIL' => 'Email:',
                'WRITTEN_ON' => 'Написан в',
                'BY' => 'от'
            ],
            'INFLECTOR_IRREGULAR' => [
                'person' => 'люди',
                'man' => 'человек',
                'child' => 'ребенок',
                'sex' => 'пол',
                'move' => 'движется'
            ],
            'NICETIME' => [
                'NO_DATE_PROVIDED' => 'Дата не указана',
                'BAD_DATE' => 'Неверная дата',
                'AGO' => 'назад',
                'FROM_NOW' => 'теперь',
                'SECOND' => 'секунда',
                'MINUTE' => 'минута',
                'HOUR' => 'час',
                'DAY' => 'д',
                'WEEK' => 'неделя',
                'MONTH' => 'месяц',
                'YEAR' => 'год',
                'DECADE' => 'десятилетие',
                'SEC' => 'с',
                'MIN' => 'мин',
                'HR' => 'ч',
                'WK' => 'нед',
                'MO' => 'мес',
                'YR' => 'г.',
                'DEC' => 'гг.',
                'SECOND_PLURAL' => 'секунды',
                'MINUTE_PLURAL' => 'минуты',
                'HOUR_PLURAL' => 'часы',
                'DAY_PLURAL' => 'д',
                'WEEK_PLURAL' => 'недели',
                'MONTH_PLURAL' => 'месяцы',
                'YEAR_PLURAL' => 'годы',
                'DECADE_PLURAL' => 'десятилетия',
                'SEC_PLURAL' => 'с',
                'MIN_PLURAL' => 'мин',
                'HR_PLURAL' => 'ч',
                'WK_PLURAL' => 'нед',
                'MO_PLURAL' => 'мес',
                'YR_PLURAL' => 'г.',
                'DEC_PLURAL' => 'гг.'
            ],
            'FORM' => [
                'VALIDATION_FAIL' => '<b>Проверка не удалась:</b>',
                'INVALID_INPUT' => 'Неверный ввод в',
                'MISSING_REQUIRED_FIELD' => 'Отсутствует необходимое поле:'
            ],
            'MONTHS_OF_THE_YEAR' => [
                0 => 'Январь',
                1 => 'Февраль',
                2 => 'Март',
                3 => 'Апрель',
                4 => 'Май',
                5 => 'Июнь',
                6 => 'Июль',
                7 => 'Август',
                8 => 'Сентябрь',
                9 => 'Октябрь',
                10 => 'Ноябрь',
                11 => 'Декабрь'
            ],
            'DAYS_OF_THE_WEEK' => [
                0 => 'Понедельник',
                1 => 'Вторник',
                2 => 'Среда',
                3 => 'Четверг',
                4 => 'Пятница',
                5 => 'Суббота',
                6 => 'Воскресенье'
            ]
        ],
        'pl' => [
            'PLUGIN_COMMENTS' => [
                'ADD_COMMENT' => 'Dodaj komentarz',
                'COMMENTS' => 'Komentarzy',
                'EMAIL_NOT_CONFIGURED' => 'Email jest nie skofigurowany',
                'NEW_COMMENT_EMAIL_SUBJECT' => 'Nowy komentarz %1$s',
                'NEW_COMMENT_EMAIL_BODY' => '<p>Pojawił się nowy komentarz, napisany %1$s przez %3$s (%4$s).</p><p>Strona: %2$s</p><p>Treść: %5$s</p>',
                'EMAIL_FOOTER' => '',
                'NAME' => 'Imię:',
                'EMAIL' => 'Email:',
                'WRITTEN_ON' => 'Napisany przez',
                'BY' => 'przez'
            ],
            'FRONTMATTER_ERROR_PAGE' => '---
title: %1$s
---

# Error: Nieprawidłowy Frontmatter

Path: `%2$s`

**%3$s**

```
%4$s
```
',
            'NICETIME' => [
                'NO_DATE_PROVIDED' => 'Nie podano daty',
                'BAD_DATE' => 'Zła data',
                'AGO' => 'temu',
                'FROM_NOW' => 'od teraz',
                'SECOND' => 'sekunda',
                'MINUTE' => 'minuta',
                'HOUR' => 'godzina',
                'DAY' => 'dzień',
                'WEEK' => 'tydzień',
                'MONTH' => 'miesiąc',
                'YEAR' => 'rok',
                'DECADE' => 'dekada',
                'SEC' => 'sek',
                'MIN' => 'min',
                'HR' => 'godz',
                'WK' => 'tydź',
                'MO' => 'mieś',
                'YR' => 'rok',
                'DEC' => 'dekada',
                'SECOND_PLURAL' => 'sekund',
                'MINUTE_PLURAL' => 'minut',
                'HOUR_PLURAL' => 'godzin',
                'DAY_PLURAL' => 'dni',
                'WEEK_PLURAL' => 'tygodnie',
                'MONTH_PLURAL' => 'miesięcy',
                'YEAR_PLURAL' => 'lat',
                'DECADE_PLURAL' => 'dekad',
                'SEC_PLURAL' => 'sekund',
                'MIN_PLURAL' => 'minut',
                'HR_PLURAL' => 'godz',
                'WK_PLURAL' => 'tyg',
                'MO_PLURAL' => 'mieś',
                'YR_PLURAL' => 'lat',
                'DEC_PLURAL' => 'dekad'
            ],
            'FORM' => [
                'VALIDATION_FAIL' => '<b>Weryfikacja nie powiodła się:</b>',
                'INVALID_INPUT' => 'Nieprawidłowe dane w',
                'MISSING_REQUIRED_FIELD' => 'Opuszczono wymagane pole:'
            ],
            'MONTHS_OF_THE_YEAR' => [
                0 => 'Styczeń',
                1 => 'Luty',
                2 => 'Marzec',
                3 => 'Kwiecień',
                4 => 'Maj',
                5 => 'Czerwiec',
                6 => 'Lipiec',
                7 => 'Sierpień',
                8 => 'Wrzesień',
                9 => 'Październik',
                10 => 'Listopad',
                11 => 'Grudzień'
            ],
            'DAYS_OF_THE_WEEK' => [
                0 => 'Poniedziałek',
                1 => 'Wtorek',
                2 => 'Środa',
                3 => 'Czwartek',
                4 => 'Piątek',
                5 => 'Sobota',
                6 => 'Niedziela'
            ]
        ],
        'de' => [
            'PLUGIN_COMMENTS' => [
                'ADD_COMMENT' => 'Kommentar hinzufügen',
                'COMMENTS' => 'Kommentare',
                'EMAIL_NOT_CONFIGURED' => 'Email nicht konfiguriert',
                'NEW_COMMENT_EMAIL_SUBJECT' => 'Neuer Kommentar für %1$s',
                'NEW_COMMENT_EMAIL_BODY' => '<p>Ein neuer Kommentar am %1$s von %3$s (%4$s).</p><p>Seite: %2$s</p><p>Text: %5$s</p>',
                'EMAIL_FOOTER' => '',
                'NAME' => 'Name:',
                'EMAIL' => 'Email:',
                'WRITTEN_ON' => 'geschrieben am',
                'BY' => 'von'
            ],
            'FRONTMATTER_ERROR_PAGE' => '---
title: %1$s
---
# Fehler: Frontmatter enthält Fehler

Pfad: `%2$s`

**%3$s **

```
%4$s
```
',
            'INFLECTOR_UNCOUNTABLE' => [
                1 => 'Informationen',
                2 => 'Reis',
                3 => 'Geld'
            ],
            'INFLECTOR_IRREGULAR' => [
                'person' => 'Personen',
                'man' => 'Menschen',
                'child' => 'Kinder',
                'sex' => 'Geschlecht',
                'move' => 'Züge'
            ],
            'NICETIME' => [
                'NO_DATE_PROVIDED' => 'Keine Daten vorhanden',
                'BAD_DATE' => 'Falsches Datum',
                'AGO' => 'her',
                'FROM_NOW' => 'ab jetzt',
                'SECOND' => 'Sekunde',
                'MINUTE' => 'Minute',
                'HOUR' => 'Stunde',
                'DAY' => 'Tag',
                'WEEK' => 'Woche',
                'MONTH' => 'Monat',
                'YEAR' => 'Jahr',
                'DECADE' => 'Dekade',
                'SEC' => 'sek',
                'MIN' => 'Min',
                'HR' => 'std',
                'WK' => 'wo',
                'YR' => 'yh',
                'DEC' => 'Jz',
                'SECOND_PLURAL' => 'Sekunden',
                'MINUTE_PLURAL' => 'Minuten',
                'HOUR_PLURAL' => 'Stunden',
                'DAY_PLURAL' => 'Tage',
                'WEEK_PLURAL' => 'Wochen',
                'MONTH_PLURAL' => 'Monate',
                'YEAR_PLURAL' => 'Jahre',
                'DECADE_PLURAL' => 'Dekaden',
                'SEC_PLURAL' => 'Sekunden',
                'MIN_PLURAL' => 'Minuten',
                'HR_PLURAL' => 'Stunden',
                'WK_PLURAL' => 'Wochen',
                'MO_PLURAL' => 'Monate',
                'YR_PLURAL' => 'Jahre',
                'DEC_PLURAL' => 'Dekaden'
            ],
            'FORM' => [
                'VALIDATION_FAIL' => '<b>Überprüfung fehlgeschlagen:</b>',
                'INVALID_INPUT' => 'Ungültige Eingabe in',
                'MISSING_REQUIRED_FIELD' => 'Erforderliches Feld fehlt:'
            ],
            'MONTHS_OF_THE_YEAR' => [
                0 => 'Januar',
                1 => 'Februar',
                2 => 'März',
                3 => 'April',
                4 => 'Mai',
                5 => 'Juni',
                6 => 'Juli',
                7 => 'August',
                8 => 'Semptember',
                9 => 'Oktober',
                10 => 'November',
                11 => 'Dezember'
            ],
            'DAYS_OF_THE_WEEK' => [
                0 => 'Montag',
                1 => 'Dienstag',
                2 => 'Mittwoch',
                3 => 'Donnerstag',
                4 => 'Freitag',
                5 => 'Samstag',
                6 => 'Sonntag'
            ]
        ],
        'es' => [
            'PLUGIN_FORM' => [
                'NOT_VALIDATED' => 'Falló la validación del formulario. Uno o más campos obligatorios no fueron capturados.',
                'NONCE_NOT_VALIDATED' => 'Oops, hay un problema, por favor revice la información capturada e intente enviar el formulario otra vez.'
            ],
            'INFLECTOR_UNCOUNTABLE' => [
                0 => 'equipo',
                1 => 'información',
                3 => 'dinero',
                5 => 'series',
                6 => 'pescado',
                7 => 'oveja'
            ],
            'INFLECTOR_IRREGULAR' => [
                'man' => 'hombres',
                'child' => 'niños',
                'sex' => 'sexos'
            ],
            'INFLECTOR_ORDINALS' => [
                'first' => 'ro',
                'second' => 'do',
                'third' => 'ro'
            ],
            'NICETIME' => [
                'NO_DATE_PROVIDED' => 'No se proporcionó fecha',
                'BAD_DATE' => 'Fecha erronea',
                'AGO' => 'antes',
                'FROM_NOW' => 'desde ahora',
                'SECOND' => 'segundo',
                'MINUTE' => 'minuto',
                'HOUR' => 'hora',
                'DAY' => 'día',
                'WEEK' => 'semana',
                'MONTH' => 'mes',
                'YEAR' => 'año',
                'DECADE' => 'década',
                'SEC' => 'seg',
                'MIN' => 'min',
                'HR' => 'h',
                'WK' => 'sem',
                'MO' => 'mes',
                'YR' => 'año',
                'DEC' => 'dec',
                'SECOND_PLURAL' => 'segundos',
                'MINUTE_PLURAL' => 'minutos',
                'HOUR_PLURAL' => 'horas',
                'DAY_PLURAL' => 'días',
                'WEEK_PLURAL' => 'semanas',
                'MONTH_PLURAL' => 'meses',
                'YEAR_PLURAL' => 'años',
                'DECADE_PLURAL' => 'décadas',
                'SEC_PLURAL' => 'segs',
                'MIN_PLURAL' => 'mins',
                'HR_PLURAL' => 'hs',
                'WK_PLURAL' => 'sem',
                'MO_PLURAL' => 'mes',
                'YR_PLURAL' => 'años',
                'DEC_PLURAL' => 'décadas'
            ],
            'FORM' => [
                'VALIDATION_FAIL' => '<b>Falló la validación. </b>',
                'INVALID_INPUT' => 'Dato inválido en: ',
                'MISSING_REQUIRED_FIELD' => 'Falta el campo requerido: '
            ],
            'MONTHS_OF_THE_YEAR' => [
                0 => 'Enero',
                1 => 'Febrero',
                2 => 'Marzo',
                3 => 'Abril',
                4 => 'Mayo',
                5 => 'Junio',
                6 => 'Julio',
                7 => 'Agosto',
                8 => 'Septiembre',
                9 => 'Octubre',
                10 => 'Noviembre',
                11 => 'Diciembre'
            ],
            'DAYS_OF_THE_WEEK' => [
                0 => 'Lunes',
                1 => 'Martes',
                2 => 'Miércoles',
                3 => 'Jueves',
                4 => 'Viernes',
                5 => 'Sábado',
                6 => 'Domingo'
            ]
        ],
        'hr' => [
            'PLUGIN_FORM' => [
                'NOT_VALIDATED' => 'Formular nije validiran. Jedan ili više traženih polja nedostaju.',
                'NONCE_NOT_VALIDATED' => 'Ups, došlo je do problema, molimo provjerite svoj unos i pokušajte opet.',
                'FILES' => 'Upload Fajlova',
                'ALLOW_MULTIPLE' => 'Dopusti više od jednog fajla',
                'DESTINATION' => 'Destinacija',
                'DESTINATION_HELP' => 'Lokacija gdje bi fajlovi trebali biti uploadani',
                'ACCEPT' => 'Dopušteni MIME Tipovi',
                'ACCEPT_HELP' => 'Lista dopuštenih MIME Tipova koji su dozvoljeni za upload',
                'ERROR_VALIDATING_CAPTCHA' => 'Greška pri validiranju Captcha'
            ],
            'INFLECTOR_UNCOUNTABLE' => [
                0 => 'oprema',
                1 => 'informacije',
                2 => 'riža',
                3 => 'novac',
                4 => 'vrsta',
                5 => 'serija',
                6 => 'riba',
                7 => 'ovca'
            ],
            'INFLECTOR_IRREGULAR' => [
                'person' => 'osobe',
                'man' => 'ljudi',
                'child' => 'djeca',
                'sex' => 'spolovi',
                'move' => 'Pomakni'
            ],
            'NICETIME' => [
                'NO_DATE_PROVIDED' => 'Datum nije upisan',
                'BAD_DATE' => 'Pogrešan datum',
                'AGO' => 'prije',
                'FROM_NOW' => 'od sada',
                'SECOND' => 'sekunda',
                'MINUTE' => 'minuta',
                'HOUR' => 'sat',
                'DAY' => 'dan',
                'WEEK' => 'tjedan',
                'MONTH' => 'mjesec',
                'YEAR' => 'godina',
                'DECADE' => 'desetljeće',
                'SEC' => 'sek',
                'HR' => 'sat',
                'WK' => 't',
                'MO' => 'm',
                'YR' => 'g',
                'DEC' => 'des',
                'SECOND_PLURAL' => 'sekundi',
                'MINUTE_PLURAL' => 'minuta',
                'HOUR_PLURAL' => 'sati',
                'DAY_PLURAL' => 'dan',
                'WEEK_PLURAL' => 'tjedana',
                'MONTH_PLURAL' => 'mjeseci',
                'YEAR_PLURAL' => 'godina',
                'DECADE_PLURAL' => 'desetljeća',
                'SEC_PLURAL' => 'sek',
                'MIN_PLURAL' => 'min',
                'HR_PLURAL' => 'sat',
                'WK_PLURAL' => 't',
                'MO_PLURAL' => 'm',
                'YR_PLURAL' => 'g',
                'DEC_PLURAL' => 'des'
            ],
            'FORM' => [
                'VALIDATION_FAIL' => '<b>Validacija nije uspjela:</b>',
                'INVALID_INPUT' => 'Pogrešan unos u',
                'MISSING_REQUIRED_FIELD' => 'Nedostaje obavezno polje:'
            ],
            'MONTHS_OF_THE_YEAR' => [
                0 => 'Siječanj',
                1 => 'Veljača',
                2 => 'Ožujak',
                3 => 'Travanj',
                4 => 'Svibanj',
                5 => 'Lipanj',
                6 => 'Srpanj',
                7 => 'Kolovoz',
                8 => 'Rujan',
                9 => 'Listopad',
                10 => 'Studeni',
                11 => 'Prosinac'
            ],
            'DAYS_OF_THE_WEEK' => [
                0 => 'Ponedjeljak',
                1 => 'Utorak',
                2 => 'Srijeda',
                3 => 'Četvrtak',
                4 => 'Petak',
                5 => 'Subota',
                6 => 'Nedjelja'
            ]
        ],
        'hu' => [
            'PLUGIN_FORM' => [
                'NOT_VALIDATED' => 'Érvénytelen az űrlap. Egy vagy több kötelező mező nincs kitöltve.',
                'NONCE_NOT_VALIDATED' => 'Upsz, van egy kis probléma, kérlek nézd át az űrlapot, majd küld el újra.',
                'FILES' => 'Fájlok Feltöltése',
                'ALLOW_MULTIPLE' => 'Több fájl feltöltése',
                'ALLOW_MULTIPLE_HELP' => 'Engedélyezi egyszerre több állomány felöltését.',
                'DESTINATION' => 'Feltöltés Helye',
                'DESTINATION_HELP' => 'Ide lesznek feltöltve az állományok',
                'ACCEPT' => 'Engedélyezett MIME-típusok',
                'ACCEPT_HELP' => 'A feltölthető állományok MIME-típusainak listája',
                'ERROR_VALIDATING_CAPTCHA' => 'Hiba lépett fel a Captcha validálása során'
            ],
            'FRONTMATTER_ERROR_PAGE' => '---
cím: %1$s
---

# Hiba: Érvénytelen Frontmatter

Elérési út: `%2$s`

**%3$s**

```
%4$s
```
',
            'INFLECTOR_IRREGULAR' => [
                'person' => 'személyek',
                'man' => 'férfiak',
                'child' => 'gyerekek',
                'sex' => 'nemek',
                'move' => 'lépések'
            ],
            'INFLECTOR_ORDINALS' => [
                'default' => '.',
                'first' => '.',
                'second' => '.',
                'third' => '.'
            ],
            'NICETIME' => [
                'NO_DATE_PROVIDED' => 'Nincs dátum megadva',
                'BAD_DATE' => 'Hibás dátum',
                'AGO' => 'elteltével',
                'FROM_NOW' => 'mostantól',
                'SECOND' => 'másodperc',
                'MINUTE' => 'perc',
                'HOUR' => 'óra',
                'DAY' => 'nap',
                'WEEK' => 'hét',
                'MONTH' => 'hónap',
                'YEAR' => 'év',
                'DECADE' => 'évtized',
                'SEC' => 'mp',
                'MIN' => 'p',
                'HR' => 'ó',
                'WK' => 'hét',
                'MO' => 'hó',
                'YR' => 'év',
                'DEC' => 'évt',
                'SECOND_PLURAL' => 'másodperc',
                'MINUTE_PLURAL' => 'perc',
                'HOUR_PLURAL' => 'óra',
                'DAY_PLURAL' => 'nap',
                'WEEK_PLURAL' => 'hét',
                'MONTH_PLURAL' => 'hónap',
                'YEAR_PLURAL' => 'év',
                'DECADE_PLURAL' => 'évtized',
                'SEC_PLURAL' => 'mp',
                'MIN_PLURAL' => 'perc',
                'HR_PLURAL' => 'ó',
                'WK_PLURAL' => 'hét',
                'MO_PLURAL' => 'hó',
                'YR_PLURAL' => 'év',
                'DEC_PLURAL' => 'évt'
            ],
            'FORM' => [
                'VALIDATION_FAIL' => '<b>A validáció hibát talált:</b>',
                'INVALID_INPUT' => 'Az itt megadott érték érvénytelen:',
                'MISSING_REQUIRED_FIELD' => 'Ez a kötelező mező nincs kitöltve:'
            ]
        ],
        'cs' => [
            'INFLECTOR_UNCOUNTABLE' => [
                0 => 'vybavení',
                1 => 'informace',
                2 => 'rýže',
                3 => 'peníze',
                4 => 'druhy',
                5 => 'série',
                6 => 'ryba',
                7 => 'ovce'
            ],
            'INFLECTOR_IRREGULAR' => [
                'person' => 'lidé',
                'man' => 'muži',
                'child' => 'děti',
                'sex' => 'pohlaví',
                'move' => 'pohyby'
            ],
            'INFLECTOR_ORDINALS' => [
                'default' => '.',
                'first' => '.',
                'second' => '.',
                'third' => '.'
            ],
            'NICETIME' => [
                'NO_DATE_PROVIDED' => 'Datum nebylo vloženo',
                'BAD_DATE' => 'Chybné datum',
                'AGO' => 'zpět',
                'FROM_NOW' => 'od teď',
                'SECOND' => 'sekunda',
                'MINUTE' => 'minuta',
                'HOUR' => 'hodina',
                'DAY' => 'den',
                'WEEK' => 'týden',
                'MONTH' => 'měsíc',
                'YEAR' => 'rok',
                'DECADE' => 'dekáda',
                'SEC' => 'sek',
                'MIN' => 'min',
                'HR' => 'hod',
                'WK' => 't',
                'MO' => 'm',
                'YR' => 'r',
                'DEC' => 'dek',
                'SECOND_PLURAL' => 'sekundy',
                'MINUTE_PLURAL' => 'minuty',
                'HOUR_PLURAL' => 'hodiny',
                'DAY_PLURAL' => 'dny',
                'WEEK_PLURAL' => 'týdny',
                'MONTH_PLURAL' => 'měsíce',
                'YEAR_PLURAL' => 'roky',
                'DECADE_PLURAL' => 'dekády',
                'SEC_PLURAL' => 'sek',
                'MIN_PLURAL' => 'min',
                'HR_PLURAL' => 'hod',
                'WK_PLURAL' => 't',
                'MO_PLURAL' => 'm',
                'YR_PLURAL' => 'r',
                'DEC_PLURAL' => 'dek'
            ],
            'FORM' => [
                'VALIDATION_FAIL' => '<b>Ověření se nezdařilo:</b>',
                'MISSING_REQUIRED_FIELD' => 'Chybí požadované pole:'
            ],
            'MONTHS_OF_THE_YEAR' => [
                0 => 'ledna',
                1 => 'února',
                2 => 'března',
                3 => 'dubna',
                4 => 'května',
                5 => 'června',
                6 => 'července',
                7 => 'srpna',
                8 => 'září',
                9 => 'října',
                10 => 'listopadu',
                11 => 'prosince'
            ],
            'DAYS_OF_THE_WEEK' => [
                0 => 'Pondělí',
                1 => 'Úterý',
                2 => 'Středa',
                3 => 'Čtvrtek',
                4 => 'Pátek',
                5 => 'Sobota',
                6 => 'Neděle'
            ]
        ],
        'el' => [
            'MONTHS_OF_THE_YEAR' => [
                0 => 'Ιανουάριος',
                1 => 'Φεβρουάριος',
                2 => 'Μάρτιος',
                3 => 'Απρίλιος',
                4 => 'Μάιος',
                5 => 'Ιούνιος',
                6 => 'Ιούλιος',
                7 => 'Αύγουστος',
                8 => 'Σεπτέμβριος',
                9 => 'Οκτώβριος',
                10 => 'Νοέμβριος',
                11 => 'Δεκέμβριος'
            ],
            'DAYS_OF_THE_WEEK' => [
                0 => 'Δευτέρα',
                1 => 'Τρλιτη',
                2 => 'Τετάρτη',
                3 => 'Πέμπτη',
                4 => 'Παρασκευή',
                5 => 'Σαββάτο',
                6 => 'Κυριακή'
            ]
        ],
        'ja' => [
            'FRONTMATTER_ERROR_PAGE' => '---
title: %1$s
---

# Error: Invalid Frontmatter

Path: `%2$s`

**%3$s**

```
%4$s
```',
            'INFLECTOR_PLURALS' => [
                
            ],
            'INFLECTOR_SINGULAR' => [
                
            ],
            'INFLECTOR_UNCOUNTABLE' => [
                
            ],
            'INFLECTOR_IRREGULAR' => [
                'person' => 'みんな',
                'man' => '人',
                'child' => '子供',
                'sex' => '性別',
                'move' => '移動'
            ],
            'INFLECTOR_ORDINALS' => [
                
            ],
            'NICETIME' => [
                'NO_DATE_PROVIDED' => '日付が設定されていません',
                'BAD_DATE' => '不正な日付',
                'AGO' => '前',
                'FROM_NOW' => 'from now',
                'SECOND' => '秒',
                'MINUTE' => '分',
                'HOUR' => '時',
                'DAY' => '日',
                'WEEK' => '週',
                'MONTH' => '月',
                'YEAR' => '年',
                'DECADE' => '10年',
                'SEC' => '秒',
                'MIN' => '分',
                'HR' => '時',
                'WK' => '週',
                'MO' => '月',
                'YR' => '年',
                'DEC' => 'dec',
                'SECOND_PLURAL' => '秒',
                'MINUTE_PLURAL' => '分',
                'HOUR_PLURAL' => '時',
                'DAY_PLURAL' => '日',
                'WEEK_PLURAL' => '週',
                'MONTH_PLURAL' => '月',
                'YEAR_PLURAL' => '年',
                'DECADE_PLURAL' => '10年',
                'SEC_PLURAL' => '秒',
                'MIN_PLURAL' => '分',
                'HR_PLURAL' => '時',
                'WK_PLURAL' => '週',
                'MO_PLURAL' => '月',
                'YR_PLURAL' => '年',
                'DEC_PLURAL' => '10年'
            ],
            'FORM' => [
                'VALIDATION_FAIL' => '<b>バリデーション失敗 :</b>',
                'INVALID_INPUT' => '不正な入力：',
                'MISSING_REQUIRED_FIELD' => '必須項目が入力されていません:'
            ],
            'MONTHS_OF_THE_YEAR' => [
                0 => '1月',
                1 => '2月',
                2 => '3月',
                3 => '4月',
                4 => '5月',
                5 => '6月',
                6 => '7月',
                7 => '8月',
                8 => '9月',
                9 => '10月',
                10 => '11月',
                11 => '12月'
            ],
            'DAYS_OF_THE_WEEK' => [
                0 => '月',
                1 => '火',
                2 => '水',
                3 => '木',
                4 => '金',
                5 => '土',
                6 => '日'
            ]
        ],
        'lt' => [
            'INFLECTOR_UNCOUNTABLE' => [
                2 => 'ryžiai',
                3 => 'pinigai',
                4 => 'prieskoniai',
                5 => 'serijos',
                6 => 'žuvis',
                7 => 'avis'
            ],
            'INFLECTOR_IRREGULAR' => [
                'person' => 'žmonės',
                'man' => 'žmogus',
                'child' => 'vaikai',
                'sex' => 'lytys',
                'move' => 'juda'
            ],
            'NICETIME' => [
                'NO_DATE_PROVIDED' => 'Nenurodyta data',
                'BAD_DATE' => 'Neteisinga data',
                'AGO' => 'prieš',
                'FROM_NOW' => 'nuo dabar',
                'SECOND' => 'sekundė',
                'MINUTE' => 'minutė',
                'HOUR' => 'valanda',
                'DAY' => 'diena',
                'WEEK' => 'savaitė',
                'MONTH' => 'mėnuo',
                'YEAR' => 'metai',
                'DECADE' => 'dešimtmetis',
                'SEC' => 'sek',
                'MIN' => 'min',
                'HR' => 'val',
                'WK' => 'sav',
                'MO' => 'mėn',
                'YR' => 'm',
                'MINUTE_PLURAL' => 'minutės',
                'HOUR_PLURAL' => 'valandos',
                'DAY_PLURAL' => 'dienos',
                'WEEK_PLURAL' => 'savaitės',
                'MONTH_PLURAL' => 'mėnesiai',
                'YEAR_PLURAL' => 'metai',
                'DECADE_PLURAL' => 'dešimtmečiai',
                'SEC_PLURAL' => 'sek',
                'MIN_PLURAL' => 'min',
                'HR_PLURAL' => 'val',
                'WK_PLURAL' => 'sav',
                'MO_PLURAL' => 'mėn',
                'YR_PLURAL' => 'm'
            ],
            'FORM' => [
                'MISSING_REQUIRED_FIELD' => 'Būtina užpildyti laukelį:'
            ],
            'MONTHS_OF_THE_YEAR' => [
                0 => 'Sausis',
                1 => 'Vasaris',
                2 => 'Kovas',
                3 => 'Balandis',
                4 => 'Gegužė',
                5 => 'Birželis',
                6 => 'Liepa',
                7 => 'Rugpjūtis',
                8 => 'Rugsėjis',
                9 => 'Spalis',
                10 => 'Lakpritis',
                11 => 'Gruodis'
            ],
            'DAYS_OF_THE_WEEK' => [
                0 => 'Pirmadienis',
                1 => 'Antradienis',
                2 => 'Trečiadienis',
                3 => 'Ketvirtadienis',
                4 => 'Penktadienis',
                5 => 'Šeštadienis',
                6 => 'Sekmadienis'
            ]
        ],
        'nb' => [
            'MONTHS_OF_THE_YEAR' => [
                0 => 'januar',
                1 => 'februar',
                2 => 'mars',
                3 => 'april',
                4 => 'mai',
                5 => 'juni',
                6 => 'juli',
                7 => 'august',
                8 => 'september',
                9 => 'oktober',
                10 => 'november',
                11 => 'desember'
            ],
            'DAYS_OF_THE_WEEK' => [
                0 => 'mandag',
                1 => 'tirsdag',
                2 => 'onsdag',
                3 => 'torsdag',
                4 => 'fredag',
                5 => 'lørdag',
                6 => 'søndag'
            ]
        ],
        'nl' => [
            'INFLECTOR_IRREGULAR' => [
                'person' => 'personen',
                'man' => 'mensen',
                'child' => 'kinderen',
                'sex' => 'geslacht',
                'move' => 'verplaatsen'
            ],
            'NICETIME' => [
                'NO_DATE_PROVIDED' => 'geen datum opgegeven',
                'BAD_DATE' => 'Datumformaat onjuist',
                'AGO' => 'geleden',
                'FROM_NOW' => 'vanaf nu',
                'SECOND' => 'seconde',
                'MINUTE' => 'minuut',
                'HOUR' => 'uur',
                'DAY' => 'dag',
                'MONTH' => 'maand',
                'YEAR' => 'jaar',
                'DECADE' => 'decenium',
                'MO' => 'ma',
                'SECOND_PLURAL' => 'seconden',
                'MINUTE_PLURAL' => 'minuten',
                'HOUR_PLURAL' => 'uren',
                'DAY_PLURAL' => 'dagen',
                'WEEK_PLURAL' => 'weken',
                'MONTH_PLURAL' => 'maanden',
                'YEAR_PLURAL' => 'jaren',
                'DECADE_PLURAL' => 'decennia',
                'SEC_PLURAL' => 'seconden',
                'MIN_PLURAL' => 'minuten',
                'HR_PLURAL' => 'uren',
                'WK_PLURAL' => 'weken',
                'MO_PLURAL' => 'maanden',
                'YR_PLURAL' => 'jaren'
            ],
            'MONTHS_OF_THE_YEAR' => [
                0 => 'Januari',
                1 => 'Februari',
                2 => 'Maart',
                4 => 'Mei',
                5 => 'Juni',
                6 => 'Juli',
                7 => 'Augustus',
                9 => 'Oktober'
            ],
            'DAYS_OF_THE_WEEK' => [
                0 => 'Maandag',
                1 => 'Dinsdag',
                2 => 'Woensdag',
                3 => 'Donderdag',
                4 => 'Vrijdag',
                5 => 'Zaterdag',
                6 => 'Zondag'
            ]
        ],
        'no' => [
            'FRONTMATTER_ERROR_PAGE' => '---
Tittel: %1$s
---

# Feilmelding: Ugyldig Frontmatter

Pane: \'%2$s\'

**%3$s **

```
%4$s
```
',
            'INFLECTOR_PLURALS' => [
                '/(quiz)$/i' => '\\1zes',
                '/^(ox)$/i' => '\\1en'
            ],
            'INFLECTOR_UNCOUNTABLE' => [
                0 => 'utstyr',
                1 => 'informasjon',
                2 => 'ris',
                3 => 'penger',
                4 => 'arter',
                5 => 'serier',
                6 => 'fisk',
                7 => 'sau'
            ],
            'INFLECTOR_IRREGULAR' => [
                'person' => 'folk',
                'man' => 'menn',
                'child' => 'barn',
                'sex' => 'kjønn',
                'move' => 'trekk'
            ],
            'NICETIME' => [
                'NO_DATE_PROVIDED' => 'Ingen dato gitt',
                'BAD_DATE' => 'Dårlig dato',
                'AGO' => 'siden',
                'FROM_NOW' => 'fra nå',
                'SECOND' => 'sekund',
                'MINUTE' => 'minutt',
                'HOUR' => 'time',
                'DAY' => 'dag',
                'WEEK' => 'uke',
                'MONTH' => 'måned',
                'YEAR' => 'år',
                'DECADE' => 'tiår',
                'SEC' => 'sek',
                'MIN' => 'min',
                'HR' => 't',
                'WK' => 'uke',
                'MO' => 'må',
                'YR' => 'år',
                'DEC' => 'des',
                'SECOND_PLURAL' => 'sekunder',
                'MINUTE_PLURAL' => 'minutter',
                'HOUR_PLURAL' => 'timer',
                'DAY_PLURAL' => 'dager',
                'WEEK_PLURAL' => 'uker',
                'MONTH_PLURAL' => 'måneder',
                'YEAR_PLURAL' => 'år',
                'DECADE_PLURAL' => 'tiår',
                'SEC_PLURAL' => 'sek',
                'MIN_PLURAL' => 'min',
                'HR_PLURAL' => 'timer',
                'WK_PLURAL' => 'uker',
                'YR_PLURAL' => 'år'
            ],
            'FORM' => [
                'VALIDATION_FAIL' => '<b>Validering mislyktes:</b>',
                'INVALID_INPUT' => 'Ugyldig innhold i',
                'MISSING_REQUIRED_FIELD' => 'Mangler påkrevd felt:'
            ],
            'MONTHS_OF_THE_YEAR' => [
                0 => 'januar',
                1 => 'februar',
                2 => 'mars',
                3 => 'april',
                4 => 'mai',
                5 => 'juni',
                6 => 'juli',
                7 => 'august',
                8 => 'september',
                9 => 'oktober',
                10 => 'november',
                11 => 'desember'
            ],
            'DAYS_OF_THE_WEEK' => [
                0 => 'mandag',
                1 => 'tirsdag',
                2 => 'onsdag',
                3 => 'torsdag',
                4 => 'fredag',
                5 => 'lørdag',
                6 => 'søndag'
            ]
        ],
        'pt' => [
            'INFLECTOR_UNCOUNTABLE' => [
                1 => 'informação',
                2 => 'arroz',
                3 => 'dinheiro'
            ],
            'INFLECTOR_IRREGULAR' => [
                'man' => 'homens',
                'sex' => 'sexos'
            ],
            'NICETIME' => [
                'SECOND' => 'segundo',
                'MINUTE' => 'minuto',
                'HOUR' => 'hora',
                'DAY' => 'dia',
                'WEEK' => 'semana',
                'MONTH' => 'mês',
                'YEAR' => 'ano',
                'DECADE' => 'década',
                'SEC' => 'seg',
                'MIN' => 'mín',
                'MO' => 'mês',
                'YR' => 'ano',
                'SECOND_PLURAL' => 'segundos',
                'MINUTE_PLURAL' => 'minutos',
                'HOUR_PLURAL' => 'horas',
                'DAY_PLURAL' => 'dias',
                'WEEK_PLURAL' => 'semanas',
                'MONTH_PLURAL' => 'meses',
                'YEAR_PLURAL' => 'anos',
                'DECADE_PLURAL' => 'décadas',
                'SEC_PLURAL' => 'seg',
                'MIN_PLURAL' => 'mins',
                'HR_PLURAL' => 'hrs',
                'YR_PLURAL' => 'anos'
            ],
            'FORM' => [
                'VALIDATION_FAIL' => '<b>Validação falhada: </b>'
            ],
            'MONTHS_OF_THE_YEAR' => [
                0 => 'Janeiro',
                1 => 'Fevereiro',
                2 => 'Março',
                3 => 'Abril',
                4 => 'Maio',
                5 => 'Junho',
                6 => 'Julho',
                7 => 'Agosto',
                8 => 'Setembro',
                9 => 'Outubro',
                10 => 'Novembro',
                11 => 'Dezembro'
            ],
            'DAYS_OF_THE_WEEK' => [
                0 => 'Segunda',
                1 => 'Terça',
                2 => 'Quarta',
                3 => 'Quinta',
                4 => 'Sexta',
                5 => 'Sábado',
                6 => 'Domingo'
            ]
        ],
        'ro' => [
            'MONTHS_OF_THE_YEAR' => [
                0 => 'Ianuarie',
                1 => 'Februarie',
                2 => 'Martie',
                3 => 'Aprilue',
                4 => 'Mai',
                5 => 'Iunie',
                6 => 'Iulie',
                8 => 'Septembrie',
                9 => 'Octombrie',
                10 => 'Noiembrie',
                11 => 'Decembrie'
            ],
            'DAYS_OF_THE_WEEK' => [
                0 => 'Luni',
                1 => 'Marti',
                2 => 'Miercuri',
                3 => 'Joi',
                4 => 'Vineri',
                5 => 'Sâmbătă',
                6 => 'Duminică'
            ]
        ],
        'sv' => [
            'NICETIME' => [
                'DAY' => 'dag'
            ]
        ],
        'tr' => [
            'NICETIME' => [
                'NO_DATE_PROVIDED' => 'Tarih yok',
                'BAD_DATE' => 'Yanlış tarih',
                'AGO' => 'önce',
                'FROM_NOW' => '(şimdiden)',
                'SECOND' => 'saniye',
                'MINUTE' => 'dakika',
                'HOUR' => 'saat',
                'DAY' => 'gün',
                'WEEK' => 'hafta',
                'MONTH' => 'ay',
                'YEAR' => 'yıl',
                'DECADE' => 'onyıl',
                'SEC' => 'sn',
                'MIN' => 'dk',
                'HR' => 'sa',
                'WK' => 'hft',
                'MO' => 'ay',
                'YR' => 'yl',
                'DEC' => 'onyl',
                'SECOND_PLURAL' => 'saniye',
                'MINUTE_PLURAL' => 'dakika',
                'HOUR_PLURAL' => 'saat',
                'DAY_PLURAL' => 'gün',
                'WEEK_PLURAL' => 'hafta',
                'MONTH_PLURAL' => 'ay',
                'YEAR_PLURAL' => 'yıl',
                'DECADE_PLURAL' => 'onyıl',
                'SEC_PLURAL' => 'sn',
                'MIN_PLURAL' => 'dk',
                'HR_PLURAL' => 'sa',
                'WK_PLURAL' => 'hft',
                'MO_PLURAL' => 'ay',
                'YR_PLURAL' => 'yl',
                'DEC_PLURAL' => 'onyl'
            ]
        ],
        'checksum' => 'b43f9c8055a9fea3d64c28b1f4fc020e'
    ]
];
