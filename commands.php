<?php
include("geshi.php");

// Масив с терминални команди
$code = <<<EOC
\$ sudo awaken
\$ man root
\$ man sacred
\$ exit sacred
\$ sudo start animation
\$ sudo stop animation
\$ start matrix
\$ stop matrix
\$ play music
\$ stop music
\$ open manual
\$ gti
\$ help
\$ echo \$HOME
\$ whoami
\$ ls ~/
\$ fortune
\$ clear
EOC;

// GeSHi инициализация
$geshi = new GeSHi($code, 'bash');
$geshi->enable_classes(); // Позволява стилове с CSS
$geshi->set_header_type(GESHI_HEADER_NONE);
$highlighted_code = $geshi->parse_code();
?>

<!DOCTYPE html>
<html lang="bg">
<head>
  <meta charset="UTF-8">
  <title>Терминални Команди – Светилище за Линукс</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://fonts.googleapis.com/css2?family=Fira+Code&display=swap" rel="stylesheet">

  <style>
    body {
      background-color: #000;
      color: #0f0;
      font-family: 'Fira Code', monospace;
      padding: 2rem;
    }
    h1 {
      text-align: center;
      color: #0f0;
      font-size: 2rem;
      margin-bottom: 1.5rem;
    }

    /* GeSHi Styling (можеш да го донастроиш) */
    .bash .co { color: #0f0; font-style: italic; }  /* коментари */
    .bash .kw1 { color: #7fff00; }  /* ключови думи */
    .bash .sy0 { color: #00ff7f; }  /* символи */
    .bash .st0 { color: #00fa9a; }  /* низове */
    .bash .re0 { color: #ff0; }     /* регекс */

    pre {
      background: #111;
      border: 1px solid #0f0;
      padding: 1rem;
      overflow-x: auto;
      border-radius: 8px;
    }

    .back-link {
      margin-top: 2rem;
      text-align: center;
    }

    .back-link a {
      color: #0f0;
      text-decoration: underline;
    }

  </style>
</head>
<body>

  <h1>📜 Терминални Команди</h1>

  <pre><?php echo $highlighted_code; ?></pre>

  <div class="back-link">
    <a href="index.html">&larr; Назад към Светилището</a>
  </div>

</body>
</html>
