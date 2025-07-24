<?php
session_start();
if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}
?>

<?php
if (isset($_GET['deleted'])) {
    echo "<p style='color: green;'>✅ Menu item deleted successfully!</p>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Menu | Secret Spoon</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Pristina&display=swap" rel="stylesheet">

    <title>Secret Spoon Menu</title>
    <style>
        body { font-family: Nunito; margin: 20px; }
        h2 { color: brown; border-bottom: 2px solid #ccc; padding-bottom: 5px; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
        th, td { padding: 8px; border: 1px solid #ccc; }
        .bestseller { color: sagegreen; font-weight: Nunito; }
    </style>
</head>
<body>
  <header>
    <h1>𝐓𝐡𝐞 𝐒𝐞𝐜𝐫𝐞𝐭 𝐒𝐩𝐨𝐨𝐧</h1>
    <h1>𝙷𝚘𝚖𝚎 𝚘𝚏 𝚝𝚑𝚎 𝙱𝚎𝚜𝚝 𝙿𝚒𝚗𝚘𝚢-𝙰𝚖𝚎𝚛𝚒𝚌𝚊𝚗 𝙲𝚘𝚖𝚏𝚘𝚛𝚝 𝙵𝚘𝚘𝚍</h1>
  </header>

   <section id="appetizer">
    <h2>⭐ 𝐀𝐩𝐩𝐞𝐭𝐢𝐳𝐞𝐫𝐬</h2>
    <table>
      <tr><th>Dish</th><th>Name</th><th>Price</th></tr>
      <tr><td><img src="calamari.png" alt="\calamari" width="130" /></td><td>Crispy Calamari (Bestseller)</td><td>₱280</td></tr>
      <tr><td><img src="shanghai.png" alt="\shanghai" width="130" /></td><td>Lumpiang Shanghai Bites</td><td>₱220</td></tr>
      <tr><td><img src="buffalo.png" alt="\buffalo" width="130" /></td><td>Buffalo Chicken Wings (Bestseller)</td><td>₱350</td></tr>
      <tr><td><img src="nachos.png" alt="\nachos" width="130" /></td><td>Cheesy Nachos Overload</td><td>₱320</td></tr>
      <tr><td><img src="mozzarella.png" alt="\mozzarella" width="130" /></td><td>Fried Mozzarella Sticks</td><td>₱260</td></tr>
    </table>

  </section>

   <section id="𝐒𝐢𝐝𝐞 𝐃𝐢𝐬𝐡𝐞𝐬">
    <h2>🍟 𝐒𝐢𝐝𝐞 𝐃𝐢𝐬𝐡𝐞𝐬</h2>
    <table>
      <tr><th>Dish</th><th>Name</th><th>Ingredients</th><th>Price</th></tr>
      <tr><td><img src="fries.png" alt="\fries" width="130" /></td><td>Garlic Fries (Bestseller)</td><td>Potato fries, garlic butter, parmesan</td><td>₱180</td></tr>
      <tr><td><img src="corn.png" alt="\corn" width="130" /></td><td>Buttered Corn</td><td>Sweet corn, butter, pepper</td><td>₱150</td></tr>
      <tr><td><img src="wadges.png" alt="\wadges" width="130" /></td><td>Potato Wedges</td><td>Spiced wedges, aioli dip</td><td>₱180</td></tr>
      <tr><td><img src="rings.png" alt="\rings" width="130" /></td><td>Onion Rings</td><td>Onion, seasoned batter, ranch dip</td><td>₱190</td></tr>
        <tr><td><img src="coleslaw.png" alt="\coleslaw" width="130" /></td><td>Coleslaw</td><td>Cabbage, carrots, mayo dressing</td><td>₱120</td></tr>
    </table>

  </section>

   <section id="𝐒𝐨𝐮𝐩𝐬">
    <h2>🍲 𝐒𝐨𝐮𝐩𝐬</h2>
    <table>
      <tr><th>Dish</th><th>Name</th><th>Ingredients</th><th>Price</th></tr>
      <tr><td><img src="bulalo.jpg" alt="\Bulalo" width="130" /></td><td>Bulalo (Bestseller)</td><td>Beef shank, bone marrow, corn, veggies</td><td>₱380</td></tr>
      <tr><td><img src="sopas.jpg" alt="\sopas" width="130" /></td><td>Chicken Sopas</td><td>Chicken, macaroni, milk, veggies</td><td>₱260</td></tr>
      <tr><td><img src="clam.jpg" alt="\clam" width="130" /></td><td>Clam Chowder</td><td>Clams, cream soup, potatoes</td><td>₱280</td></tr>
      <tr><td><img src="hotsour.jpg" alt="\hotsour" width="130" /></td><td>Hot & Sour Soup</td><td>Tofu, mushrooms, bamboo shoots</td><td>₱250</td></tr>
    </table>

  </section>

  <section id="𝐇𝐞𝐚𝐥𝐭𝐡𝐲 𝐌𝐞𝐚𝐥𝐬">
    <h2>🥗 𝐇𝐞𝐚𝐥𝐭𝐡𝐲 𝐌𝐞𝐚𝐥𝐬</h2>
    <table>
      <tr><th>Dish</th><th>Name</th><th>Ingredients</th><th>Price</th></tr>
      <tr><td><img src="chicsalad.png" alt="\chicsalad" width="130" /></td><td>Grilled Chicken Salad Bowl (Bestseller)</td><td>Grilled chicken, greens, vinaigrette</td><td>₱280</td></tr>
      <tr><td><img src="fillet.png" alt="\fillet" width="130" /></td><td>Steamed Fish Fillet & Veggies</td><td>Fish, steamed mixed vegetables</td><td>₱320</td></tr>
      <tr><td><img src="wraps.png" alt="\wrap" width="130" /></td><td>Vegetable Wraps</td><td>Lettuce, tomato, grilled veggies, wrap</td><td>₱260</td></tr>
      <tr><td><img src="salad.png" alt="\salad" width="130" /></td><td>Quinoa Salad Bowl</td><td>Quinoa, mixed greens, grilled tofu</td><td>₱320</td></tr>
    </table>

  </section>

     <section id="𝐕𝐞𝐠𝐞𝐭𝐚𝐛𝐥𝐞𝐬 & 𝐒𝐚𝐥𝐚𝐝𝐬">
    <h2>🥗 𝐕𝐞𝐠𝐞𝐭𝐚𝐛𝐥𝐞𝐬 & 𝐒𝐚𝐥𝐚𝐝𝐬</h2>
    <table>
      <tr><th>Dish</th><th>Name</th><th>Price</th></tr>
      <tr><td><img src="pakbet.jpg" alt="\pakbet" width="130" /></td><td>Pinakbet (Bestseller)</td><td>₱260</td></tr>
      <tr><td><img src="chopsuy.jpg" alt="\chopsuy" width="130" /></td><td>Chopsuey</td><td>₱280</td></tr>
      <tr><td><img src="vegetable.jpg" alt="\vegetable" width="130" /></td><td>Grilled Vegetable Salad</td><td>₱250</td></tr>
      <tr><td><img src="caesar.jpg" alt="\caesar" width="130" /></td><td>Caesar Salad</td><td>₱280</td></tr>
    </table>

  </section>

  <section id="rice-meals">
    <h2>🍛 𝐑𝐢𝐜𝐞 𝐌𝐞𝐚𝐥𝐬</h2>
    <table>
      <tr><th>Dish</th><th>Name</th><th>Ingredients</th><th>Price</th></tr>
      <tr><td><img src="tapsilog.png" alt="\tapsilog" width="130" /></td><td>Tapsilog (Bestseller)</td><td>Beef tapa, garlic rice, egg</td><td>₱240</td></tr>
      <tr><td><img src="adobo.png" alt="\adobo" width="130" /></td><td>Adobo Rice Bowl</td><td>Pork adobo chunks, adobo rice, egg</td><td>₱220</td></tr>
      <tr><td><img src="liempo.png" alt="\liempo" width="130" /></td><td>Grilled Liempo Silog</td><td>Marinated pork belly, garlic rice, egg</td><td>₱260</td></tr>
      <tr><td><img src="chicken.png" alt="\chicken" width="130" /></td><td>BBQ Chicken Rice Meal</td><td>BBQ chicken thigh, java rice</td><td>₱250</td></tr>
      <tr><td><img src="steak.png" alt="\steak" width="130" /></td><td>Beef Burger Steak w/ Rice</td><td>Beef patty, mushroom gravy, steamed rice</td><td>₱230</td></tr>
    </table>
  </section>

    <section id="𝐁𝐞𝐞𝐟 & 𝐏𝐨𝐫𝐤 𝐃𝐢𝐬𝐡𝐞𝐬">
    <h2>🐖 𝐁𝐞𝐞𝐟 & 𝐏𝐨𝐫𝐤 𝐃𝐢𝐬𝐡𝐞𝐬</h2>
    <table>
      <tr><th>Dish</th><th>Name</th><th>Ingredients</th><th>Price</th></tr>
      <tr><td><img src="kare.png" alt="\kare" width="130" /></td><td>Kare-Kare (Bestseller)</td><td>Oxtail, peanut sauce, bagoong</td><td>₱450</td></tr>
      <tr><td><img src="pata.png" alt="\pata" width="130" /></td><td>Crispy Pata</td><td>Deep-fried pork leg, vinegar sauce</td><td>₱850</td></tr>
      <tr><td><img src="tapa.png" alt="\tapa" width="130" /></td><td>Beef Tapa Plate</td><td>Beef strips, garlic rice, egg</td><td>₱240</td></tr>
      <tr><td><img src="sisig.png" alt="\sisig" width="130" /></td><td>Pork Sisig</td><td>Chopped pork, onions, egg</td><td>₱320</td></tr>
      <tr><td><img src="belly.png" alt="\belly" width="130" /></td><td>Grilled Pork Belly</td><td>Marinated pork belly</td><td>₱260</td></tr>
    </table>
  </section>

    <section id="𝐂𝐡𝐢𝐜𝐤𝐞𝐧 𝐃𝐢𝐬𝐡𝐞𝐬">
    <h2>🍗 𝐂𝐡𝐢𝐜𝐤𝐞𝐧 𝐃𝐢𝐬𝐡𝐞𝐬</h2>
    <table>
      <tr><th>Dish</th><th>Name</th><th>Ingredients</th><th>Price</th></tr>
      <tr><td><img src="inasal.png" alt="\inasal" width="130" /></td><td>Chicken Inasal (Bestseller)</td><td>Marinated grilled chicken, atchara</td><td>₱280</td></tr>
      <tr><td><img src="fried.png" alt="\fried" width="130" /></td><td>Fried Chicken Basket</td><td>Classic crispy chicken</td><td>₱650</td></tr>
      <tr><td><img src="buffalowings.png" alt="\buffalowings" width="130" /></td><td>Buffalo Wings</td><td>Spicy wings, bleu cheese dip</td><td>₱350</td></tr>
      <tr><td><img src="honey.png" alt="\honey" width="130" /></td><td>Honey Garlic Chicken</td><td>Chicken thighs, honey garlic glaze</td><td>₱300
    </table>
  </section>

  <section id="noodles">
    <h2>🍜 𝐍𝐨𝐨𝐝𝐥𝐞𝐬</h2>
    <table>
      <tr><th>Dish</th><th>Name</th><th>Ingredients</th><th>Price</th></tr>
      <tr><td><img src="pancit.png" alt="\pancit" width="130" /></td><td>Pancit Canton (Bestseller)</td><td>Egg noodles, pork, shrimp, vegetables</td><td>₱250</td></tr>
      <tr><td><img src="spag.png" alt="\spag" width="130" /></td><td>Filipino Spaghetti</td><td>Sweet-style sauce, hotdog, ground pork, cheese</td><td>₱220</td></tr>
      <tr><td><img src="carb.png" alt="\carb" width="130" /></td><td>Carbonara Filipino Style</td><td>Cream sauce, bacon, egg, spaghetti</td><td>₱260</td></tr>
      <tr><td><img src="garlic.png" alt="\garlic" width="130" /></td><td>Garlic Butter Shrimp Pasta</td><td>Shrimp, garlic butter sauce, spaghetti</td><td>₱320</td></tr>
      <tr><td><img src="beef.png" alt="\beef" width="130" /></td><td>Beef Stroganoff Pasta</td><td>Creamy mushroom sauce, beef strips, fettuccine</td><td>₱310</td></tr>
    </table>
  </section>

  <section id="desserts">
    <h2>🍰 𝐃𝐞𝐬𝐬𝐞𝐫𝐭𝐬</h2>
    <table>
      <tr><th>Dish</th><th>Name</th><th>Ingredients</th><th>Price</th></tr>
      <tr><td><img src="halo.png" alt="\halo" width="130" /></td><td>Halo-Halo Supreme (Bestseller)</td><td>Mixed sweet beans, leche flan, ube, crushed ice</td><td>₱180</td></tr>
      <tr><td><img src="leche.png" alt="\leche" width="130" /></td><td>Classic Leche Flan</td><td>Egg yolk, condensed milk, caramel</td><td>₱150</td></tr>
      <tr><td><img src="banana.png" alt="\banana" width="130" /></td><td>Banana Split Sundae</td><td>Banana, ice cream, chocolate syrup</td><td>₱220</td></tr>
      <tr><td><img src="brown.png" alt="\brown" width="130" /></td><td>Brownie Ala Mode</td><td>Chocolate brownie, vanilla ice cream</td><td>₱200</td></tr>
      <tr><td><img src="mango.png" alt="\mango" width="130" /></td><td>Mango Float Cup</td><td>Graham, mangoes, cream</td><td>₱180</td></tr>
    </table>
  </section>

  <section id="drinks">
    <h2>🥤 𝐃𝐫𝐢𝐧𝐤𝐬</h2>
    <table>
      <tr><th>Drink</th><th>Name</th><th>Price</th></tr>
      <tr><td><img src="tea.png" alt="\tea" width="130" /></td><td>House Iced Tea (Bestseller)</td><td>₱80</td></tr>
      <tr><td><img src="soft.png" alt="\soft" width="130" /></td><td>Soft Drinks (Coke, Sprite, Royal)</td><td>₱70</td></tr>
      <tr><td><img src="coffee.png" alt="\coffee" width="130" /></td><td>Brewed Coffee</td><td>₱90</td></tr>
      <tr><td><img src="hot.png" alt="\hot" width="130" /></td><td>Hot Tea</td><td>₱80</td></tr>
      <tr><td><img src="water.jpg" alt="\water" width="130" /></td><td>Bottled Water</td><td>₱50</td></tr>
    </table>
  </section>

   <section id="𝐇𝐞𝐚𝐥𝐭𝐡𝐲 𝐃𝐫𝐢𝐧𝐤𝐬">
    <h2>🧃 𝐇𝐞𝐚𝐥𝐭𝐡𝐲 𝐃𝐫𝐢𝐧𝐤𝐬</h2>
    <table>
      <tr><th>Dish</th><th>Name</th><th>Ingredients</th><th>Price</th></tr>
      <tr><td><img src="calamansi.png" alt="\calamansi" width="130" /></td><td>Fresh Calamansi Juice (Bestseller)</td><td>Fresh calamansi, honey</td><td>₱120</td></tr>
      <tr><td><img src="cucumber.png" alt="\cucumber" width="130" /></td><td>Cucumber Lemon Detox Water</td><td>Cucumber, lemon, mint</td><td>₱310</td></tr>
      <tr><td><img src="green.png" alt="\green" width="130" /></td><td>Green Smoothie</td><td>Spinach, apple, banana</td><td>₱160</td></tr>
      <tr><td><img src="ginger.png" alt="\ginger" width="130" /></td><td>Ginger Honey Tea (Hot/Cold)</td><td>Fresh ginger, honey</td><td>₱120</td></tr>
    </table>

  </section>

  <section id="𝐒𝐦𝐨𝐨𝐭𝐡𝐢𝐞𝐬">
    <h2>🍓 𝐒𝐦𝐨𝐨𝐭𝐡𝐢𝐞𝐬</h2>
    <table>
      <tr><th>Drink</th><th>Name</th><th>Price</th></tr>
      <tr><td><img src="mango.png" alt="\mango" width="130" /></td><td>Mango Smoothie (Bestseller)</td><td>₱160</td></tr>
      <tr><td><img src="strawbanana.png" alt="\strawbanana" width="130" /></td><td>Banana Strawberry Smoothie</td><td>₱170</td></tr>
      <tr><td><img src="avocado.jpg" alt="\avocado" width="130" /></td><td>Avocado Smoothie</td><td>₱180</td></tr>
      <tr><td><img src="watermelon.jpg" alt="\watermelon" width="130" /></td><td>Watermelon Slush</td><td>₱150</td></tr>
      <tr><td><img src="mixed.png" alt="\Mixed" width="130" /></td><td>Mixed Berries Smoothie</td><td>₱190</td></tr>
    </table>

  </section>

    <section id="𝐀𝐥𝐜𝐨𝐡𝐨𝐥">
    <h2>🍻 𝐁𝐞𝐞𝐫 & 𝐀𝐥𝐜𝐨𝐡𝐨𝐥 (𝐀𝐝𝐮𝐥𝐭𝐬 𝐚𝐫𝐞 𝐨𝐧𝐥𝐲 𝐚𝐥𝐥𝐨𝐰𝐞𝐝)</h2>
    <table>
      <tr><th>Drink</th><th>Name</th><th>Price</th></tr>
      <tr><td><img src="pilsen.jpg" alt="\pilsen" width="130" /></td><td>San Miguel Pale Pilsen</td><td>₱90</td></tr>
      <tr><td><img src="red.jpg" alt="\red" width="130" /></td><td>Red Horse</td><td>₱90</td></tr>
      <tr><td><img src="heineken.jpg" alt="\heineken" width="130" /></td><td>Heineken</td><td>₱150</td></tr>
      <tr><td><img src="soju.jpg" alt="\soju" width="130" /></td><td>Soju (Bestseller)</td><td>₱200</td></tr>
      <tr><td><img src="margarita.png" alt="\margarita" width="130" /></td><td>Classic Margarita</td><td>₱250</td></tr>
        <tr><td><img src="mojito.png" alt="\mojito" width="130" /></td><td>Mojito</td><td>₱250</td></tr>
      <tr><td><img src="cocktails.png" alt="\cocktails" width="130" /></td><td>Signature cocktails</td><td>₱220</td></tr>
    </table>
  </section>

  <section id="family">
    <h2>👨‍👩‍👧‍👦 𝐅𝐚𝐦𝐢𝐥𝐲-𝐒𝐢𝐳𝐞 𝐌𝐞𝐚𝐥𝐬</h2>
    <table>
      <tr><th>Dish</th><th>Name</th><th>Serving</th><th>Price</th></tr>
      <tr><td><img src="bilao.jpg" alt="\bilao" width="130" /></td><td>Bilao Pancit Canton (Bestseller)</td><td>Good for 5–6</td><td>₱850</td></tr>
      <tr><td><img src="chic.jpg" alt="\chic" width="130" /></td><td>Chicken BBQ Platter</td><td>10 pcs</td><td>₱950</td></tr>
      <tr><td><img src="bbq.jpg" alt="\bbq" width="130" /></td><td>Pork BBQ Party Set</td><td>12 sticks</td><td>₱780</td></tr>
      <tr><td><img src="fiesta.jpg" alt="\fiesta" width="130" /></td><td>Fiesta Fried Chicken</td><td>8 pcs</td><td>₱880</td></tr>
      <tr><td><img src="caldereta.jpg" alt="\caldereta" width="130" /></td><td>Beef Caldereta Tray</td><td>Family tray</td><td>₱1,200</td></tr>
    </table>
  </section>

</body>
</html>
