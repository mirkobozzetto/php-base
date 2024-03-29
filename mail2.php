<?php
$mailContent = '
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Email Template</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #012e40;
        color: #f1e4d5;
        margin: 0;
        padding: 0;
      }
      .email-container {
        max-width: 800px;
        margin: 10rem auto;
        padding: 5px;
        border: 1px solid #f1e4d5;
      }
      table {
        width: 100%;
        max-width: 800px;
        margin: auto;
        border: 1px solid #f1e4d5;
        border-collapse: collapse;
      }
      th {
        background-color: #012e40;
        color: #f1e4d5;
      }
      td {
        background-color: #012e40;
        color: #f1e4d5;
        border: 1px solid #f1e4d5;
        padding: 15px;
      }
      .header {
        background-color: #f1e4d5;
        color: #012e40;
        padding: 20px;
        text-align: center;
        font-size: 30px;
      }
      a {
        color: #f1e4d5;
        text-decoration: underline;
      }
    </style>
  </head>
  <body>
    <div class="email-container">
      <table>
        <tr>
          <th colspan="2" class="header">Coordonnées</th>
        </tr>
        <tr>
          <td>Nom</td>
          <td>Dickinson</td>
        </tr>
        <tr>
          <td>Prénom</td>
          <td>Elena-Alina</td>
        </tr>
        <tr>
          <td>Mail</td>
          <td><a href="mailto:elena@fj.be">elena@fj.be</a></td>
        </tr>
        <tr>
          <td>Formation</td>
          <td>Webdeveloper</td>
        </tr>
        <tr>
          <td>Code Postal</td>
          <td>1060</td>
        </tr>
        <tr>
          <td>Centre de formation</td>
          <td>FIJ Saint-Gilles</td>
        </tr>
        <tr>
          <td>Déjà inscrit ?</td>
          <td>Oui / Non</td>
        </tr>
        <tr>
        <td>Séance d\'information ?</td>
        <td>Oui / Non</td>
        </tr>
        <tr>
          <td>Tests réussis ?</td>
          <td>Oui / Non</td>
        </tr>
        <tr>
          <td>Demande</td>
          <td>
            Bonjour, Lorem, ipsum dolor sit, amet consectetur adipiscing elit.
            Laudantium asperiores distinctio, dolore cupiditate voluptatum!
            Voluptates voluptatum obcaecati aut quas, fuga similique porro autem
            dolorum reprehenderit quia expedita aliquid sequi debitis?
          </td>
        </tr>
      </table>
    </div>
  </body>
</html>
';
