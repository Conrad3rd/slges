<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/bulma.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

  <title>Notizen</title>
  <style>
    .button {
      margin: 5px 5px 5px 5px;
    }
    th, td {
      padding: 2px 15px 2px 15px;
    }
  </style>
</head>
<body>
  <?php
    echo "<a href='/'><button type='button' class='button is-success'>Home</button></a>";

    if (isset($_GET['bild_id'])){
      $bild_id = $_GET['bild_id'];

      echo "<a href='01_viewer.php?id=$bild_id'><button type='button' class='button is-link'>zurück</button></a>";
    }

  ?>
  <br>
  <table>
    <tr>
      <th>-</th>
      <th>Nr</th>
      <th>-</th>
      <th>-</th>
    </tr>

    <tr>
      <td><i class="fa-regular fa-pen-to-square" style="color: #3273dd;"></i></td>
      <td>1</td>
      <td><a href="01_viewer.php?id=5858">5858</a></td>
      <td><a href="01_gallery.php?funk=filter_hash&hash_name=Gesamtansicht">Gesamtansicht?</a></td>
    </tr>

    <tr>
      <td><i class="fa-regular fa-pen-to-square" style="color: #3273dd;"></i></td>
      <td>2</td>
      <td><a href="01_gallery.php?funk=filter_hash&hash_name=Neger">Neger</a></td>
    </tr>

    <tr>
      <td><i class="fa-regular fa-pen-to-square" style="color: #3273dd;"></i></td>
      <td>3</td>
      <td><a href="01_gallery.php?funk=filter_hash&hash_name=Fenster">Fenster</a></td>
    </tr>

    <tr>
      <td><i class="fa-regular fa-pen-to-square" style="color: #3273dd;"></i></td>
      <td>4</td>
      <td><a href="01_gallery.php?funk=filter_hash&hash_name=Prachtwagen">Prachtwagen</a></td>
      <td>
        <a href="01_gallery.php?funk=filter_hash&hash_name=Festwagen">Festwagen</a>,
        <a href="01_gallery.php?funk=filter_hash&hash_name=Fest">Fest</a>
      </td>
    </tr>

    <tr>
      <td><i class="fa-regular fa-pen-to-square" style="color: #3273dd;"></i></td>
      <td>5</td>
      <td><a href="01_gallery.php?funk=filter_hash&hash_name=Boot">Boot</a></td>
      <td>wurde umbenannt in Wasserfahrzeug</td>
    </tr>

    <tr>
      <td><i class="fa-regular fa-pen-to-square" style="color: #3273dd;"></i></td>
      <td>6</td>
      <td><a href="01_gallery.php?funk=filter_hash&hash_name=Anawrahta Street">Anawrahta Street</a></td>
      <td><a style="text-decoration: line-through;" href="01_gallery.php?funk=filter_hash&hash_name=Anawrahta">Anawrahta</a></td>

    </tr>

    <tr>
      <td><i class="fa-regular fa-pen-to-square" style="color: #3273dd;"></i></td>
      <td>7</td>
      <td><a href="01_gallery.php?funk=filter_hash&hash_name=Wasserfahrzeug">Wasserfahrzeug</a></td>
      <td>
        Unterbegriffe:
        <a href="01_gallery.php?funk=filter_hash&hash_name=Schiff">Schiff</a>,
        <a href="01_gallery.php?funk=filter_hash&hash_name=Frachtschiff">Frachtschiff</a>
      </td>
    </tr>

    <tr>
      <td><i class="fa-regular fa-pen-to-square" style="color: #3273dd;"></i></td>
      <td>8</td>
      <td><a href="01_gallery.php?funk=filter_hash&hash_name=Tier">Tier</a></td>
      <td>
        Unterbegriff:
        <a href="01_gallery.php?funk=filter_hash&hash_name=Wasserbüffel">Wasserbüffel</a>
        keine <a href="01_gallery.php?funk=filter_hash&hash_name=Büffel">Büffel</a>
      </td>
    </tr>

    <tr>
      <td><i class="fa-regular fa-pen-to-square" style="color: #3273dd;"></i></td>
      <td>9</td>
      <td><a href="01_gallery.php?funk=filter_hash&hash_name=Merchant Rd.">Merchant Rd.</a></td>
      <td>Rd mit Punkt (
        <a href="01_gallery.php?funk=filter_hash&hash_name=Sule Pagoda Rd.">Sule Pagoda Rd.</a>
        )
      </td>
    </tr>

    <tr>
      <td><i class="fa-regular fa-pen-to-square" style="color: #3273dd;"></i></td>
      <td>10</td>
      <td><a href="01_gallery.php?funk=filter_hash&hash_name=High Court">High Court</a></td>
      <td>englisch Begriffe werden nicht übersetzt z. B. Mount, Road</td>
    </tr>

    <tr>
      <td><i class="fa-regular fa-pen-to-square" style="color: #3273dd;"></i></td>
      <td>11</td>
      <td>
        <a href="01_gallery.php?funk=filter_hash&hash_name=Pier">Pier</a>,
        <a href="01_gallery.php?funk=filter_hash&hash_name=Hafen">Hafen</a>
      </td>
      <td>Beide Begriffe können unabhängig existieren</td>
      <td></td>
    </tr>

    <tr>
      <td><i class="fa-regular fa-pen-to-square" style="color: #3273dd;"></i></td>
      <td>12</td>
      <td><a href="01_gallery.php?funk=filter_hash&hash_name=Markt">Markt</a></td>
      <td><a href="01_gallery.php?funk=filter_hash&hash_name=Marktszene">Marktszene</a> wird entfernt</td>
      <td></td>
    </tr>

    <tr>
      <td><i class="fa-regular fa-pen-to-square" style="color: #3273dd;"></i></td>
      <td>13</td>
      <td>
        <a href="01_gallery.php?funk=filter_hash&hash_name=Mt. Meru">Mt. Meru</a>,
        <a href="01_gallery.php?funk=filter_hash&hash_name=Mount Popa">Mount Popa</a>
      </td>
      <td>Der Sammelbegriff ist "Bekannter Berg"</td>
    </tr>

    <tr>
      <td><i class="fa-regular fa-pen-to-square" style="color: #3273dd;"></i></td>
      <td>14</td>
      <td>Mt. oder Mount?</td>
      <td>Mount wird ausgeschrieben</td>
    </tr>

    <tr>
      <td><i class="fa-regular fa-pen-to-square" style="color: #3273dd;"></i></td>
      <td>15</td>
      <td><a href="01_viewer.php?id=11601">11601</a></td>
      <td>Es wird alles "<a href="01_gallery.php?funk=filter_hash&hash_name=German Institute">German Institute</a>" gennant, da es verschieden gab und gibt und man es nicht genau diffenzieren kann.</td>
    </tr>

    <tr>
      <td><i class="fa-regular fa-pen-to-square" style="color: #3273dd;"></i></td>
      <td>16</td>
      <td><a href="01_viewer.php?id=11633">11633</a></td>
      <td>Straßenname? In arbeit...</td>
    </tr>

    <tr>
      <td><i class="fa-regular fa-pen-to-square" style="color: #3273dd;"></i></td>
      <td>17</td>
      <td><a href="01_viewer.php?id=376">376</a></td>
      <td>Wenn das Bild ausreichend benannt ist, kann der Hashtag <a href="01_gallery.php?funk=filter_hash&hash_name=Was ist das?">Was ist das?</a> entfernt werden?</td>
    </tr>

    <tr>
      <td><i class="fa-regular fa-pen-to-square" style="color: #3273dd;"></i></td>
      <td>18</td>
      <td><a href="01_viewer.php?id=390">390</a></td>
      <td><a href="https://de.wiktionary.org/wiki/Gespann">Gespann</a>, Ochsenkarren</td>
    </tr>

    <tr>
      <td><i class="fa-regular fa-pen-to-square" style="color: #3273dd;"></i></td>
      <td>19</td>
      <td>
        <a href="01_gallery.php?funk=filter_hash&hash_name=Wandgemälde">Wandgemälde</a>,
        <a href="01_gallery.php?funk=filter_hash&hash_name=Wandmalerei">Wandmalerei</a>
      </td>
      <td>Alles ist Wandmalerei und wenn es größer ist, ist es ein Wandgemälde</td>
    </tr>

    <tr>
      <td><i class="fa-regular fa-pen-to-square" style="color: #3273dd;"></i></td>
      <td>20</td>
      <td><a href="01_gallery.php?funk=filter_hash&hash_name=Musik">Musik</a> oder <a href="01_gallery.php?funk=filter_hash&hash_name=Musiker">Musiker</a>?</td>
      <td>Tanz oder Tänzer. Musik und Tanz ist zu bevorzugen</td>
    </tr>

    <tr>
      <td><i class="fa-regular fa-pen-to-square" style="color: #3273dd;"></i></td>
      <td>21</td>
      <td><a href="01_gallery.php?funk=filter_hash&hash_name=Krug">Krug</a> oder <a href="01_gallery.php?funk=filter_hash&hash_name=Wasserkrug">Wasserkrug</a>?</td>
      <td>Krug ist zu bevorzugen</td>
    </tr>

    <tr>
      <td><i class="fa-regular fa-pen-to-square" style="color: #3273dd;"></i></td>
      <td>22</td>
      <td><a href="01_gallery.php?funk=filter_hash&hash_name=Pavillon">Pavillon</a>?</td>
      <td>Ansicht aus dem inneren</td>
    </tr>

    <tr>
      <td><i class="fa-regular fa-pen-to-square" style="color: #3273dd;"></i></td>
      <td>23</td>
      <td><a href="01_gallery.php?funk=filter_hash&hash_name=Tanaka">Tanaka</a>?</td>
      <td>Thanaka</td>
    </tr>

    <tr>
      <td><i class="fa-regular fa-pen-to-square" style="color: #3273dd;"></i></td>
      <td>24</td>
      <td><a href="01_gallery.php?funk=filter_hash&hash_name=Schnitzerei">Schnitzerei</a>?</td>
      <td>Bildhauerei, Marmor</td>
    </tr>

    <tr>
      <td><i class="fa-solid fa-plus" style="color: #3273dd;"></i></td>
    </tr>

  </table>
</body>
</html>
