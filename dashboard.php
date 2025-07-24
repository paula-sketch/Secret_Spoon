<?php
session_start();

if (!isset($_SESSION["username"])) {
    // Redirect to login page if not logged in
    header("Location: login_customers.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard | Secret Spoon</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: body { #ede0d4; 
        }
        
        }
        .dashboard {
            max-width: 1700px;
            margin: auto;
            padding: 20px;
            background-color: #ffffffff;
            border-radius: 20px;
            box-shadow: none;
            text-align: center;
        }
        h1 {
            font-family: 'Pristina', cursive;
            font-size: 48px;
            color: #b08968;
        }
        p {
            font-size: 20px;
            margin-bottom: 30px;
        }
        .nav-buttons a {
            display: inline-block;
            margin: 10px;
            padding: 12px 24px;
            background-color: #ffccbc;
            color: #372e23;
            text-decoration: none;
            border-radius: 10px;
            transition: 0.3s;
        }
        .nav-buttons a:hover {
            background-color: #ffab91;
        }
    </style>
</head>
<body>

<div class="dashboard">
    <h1>Welcome to Secret Spoon</h1>
    <h2>Welcome, <?php echo htmlspecialchars($_SESSION["username"]); ?>!</h2>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>The Secret Spoon</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: body { #ddb892; 
      color: #333;
      margin: 0;
      padding: 0;
    }
    header {
      background-color: #e6ccb2;
      color: #8b5e3c;
      padding: 20px;
      text-align: center;
    }
    nav {
      background-color: #ddb892;
      display: flex;
      justify-content: center;
      gap: 20px;
      padding: 10px 0;
      font-weight: bold;
    }
    nav a {
      text-decoration: 'Segoe UI', sans-serif;
      color: #8b5e3c;
      font-size: 15px;
    }
    nav a:hover {
      text-decoration: underline;
    }
    section {
      padding: 40px 20px;
      max-width: 1200px;
      margin: auto;
    }
    h2 {
      color: #8b5e3c;
      border-bottom: 4px solid #e6ccb2;
      padding-bottom: 5px;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 30px;
    }
    th, td {
      border: 1px solid #ccc;
      padding: 5px;
      text-align: left;
    }
    th {
      background-color: #e6ccb2;
    }
    tr:nth-child(even) {
      background-color: #faedcd;
    }
    footer {
      background-color: #e6ccb2;
      color: white;
      text-align: center;
      padding: 20px;
      margin-top: 40px;
    }
  </style>
</head>
<body>
  <header>
    <td><img src="images/logo.png" width="100" ></td>
    <h1>𝐓𝐡𝐞 𝐒𝐞𝐜𝐫𝐞𝐭 𝐒𝐩𝐨𝐨𝐧</h1>
    <p>𝙷𝚘𝚖𝚎 𝚘𝚏 𝚝𝚑𝚎 𝙱𝚎𝚜𝚝 𝙿𝚒𝚗𝚘𝚢-𝙰𝚖𝚎𝚛𝚒𝚌𝚊𝚗 𝙲𝚘𝚖𝚏𝚘𝚛𝚝 𝙵𝚘𝚘𝚍</p>
  </header>
    <section id="about-us">
  <h2>👋 𝐀𝐁𝐎𝐔𝐓 𝐔𝐒</h2>
  <p>
 𝙾𝚞𝚛 𝚛𝚎𝚜𝚝𝚊𝚞𝚛𝚊𝚗𝚝 𝚒𝚜 𝚊 𝚌𝚊𝚜𝚞𝚊𝚕 𝚍𝚒𝚗𝚒𝚗𝚐 𝚜𝚙𝚘𝚝 𝚝𝚑𝚊𝚝 𝚋𝚛𝚒𝚗𝚐𝚜 𝚝𝚘𝚐𝚎𝚝𝚑𝚎𝚛 𝚝𝚑𝚎 𝚑𝚎𝚊𝚛𝚝𝚠𝚊𝚛𝚖𝚒𝚗𝚐 𝚏𝚕𝚊𝚟𝚘𝚛𝚜 𝚘𝚏 𝙵𝚒𝚕𝚒𝚙𝚒𝚗𝚘 𝚏𝚊𝚟𝚘𝚛𝚒𝚝𝚎𝚜 𝚊𝚗𝚍 𝚝𝚑𝚎 𝚋𝚘𝚕𝚍 𝚝𝚊𝚜𝚝𝚎 𝚘𝚏 𝙰𝚖𝚎𝚛𝚒𝚌𝚊𝚗 𝚌𝚘𝚖𝚏𝚘𝚛𝚝 𝚏𝚘𝚘𝚍. 𝚆𝚑𝚎𝚝𝚑𝚎𝚛 𝚢𝚘𝚞’𝚛𝚎 𝚑𝚎𝚛𝚎 𝚏𝚘𝚛 𝚊 𝚚𝚞𝚒𝚌𝚔 𝚋𝚒𝚝𝚎, 𝚊 𝚏𝚊𝚖𝚒𝚕𝚢 𝚖𝚎𝚊𝚕, 𝚘𝚛 𝚊 𝚌𝚑𝚒𝚕𝚕 𝚗𝚒𝚐𝚑𝚝 𝚘𝚞𝚝, 𝚠𝚎’𝚟𝚎 𝚐𝚘𝚝 𝚜𝚘𝚖𝚎𝚝𝚑𝚒𝚗𝚐 𝚏𝚘𝚛 𝚎𝚟𝚎𝚛𝚢𝚘𝚗𝚎.
  </p>
  <p>
    𝚆𝚎 𝚜𝚎𝚛𝚟𝚎 𝚊 𝚠𝚒𝚍𝚎 𝚟𝚊𝚛𝚒𝚎𝚝𝚢 𝚘𝚏 𝚍𝚒𝚜𝚑𝚎𝚜 — 𝚏𝚛𝚘𝚖 𝚌𝚕𝚊𝚜𝚜𝚒𝚌 𝚝𝚊𝚙𝚜𝚒𝚕𝚘𝚐, 𝚙𝚊𝚗𝚌𝚒𝚝 𝚌𝚊𝚗𝚝𝚘𝚗, 𝚊𝚗𝚍 𝚔𝚊𝚛𝚎-𝚔𝚊𝚛𝚎 𝚝𝚘 𝚋𝚞𝚛𝚐𝚎𝚛𝚜, 𝚙𝚊𝚜𝚝𝚊, 𝚊𝚗𝚍 𝚋𝚞𝚏𝚏𝚊𝚕𝚘 𝚠𝚒𝚗𝚐𝚜. 𝚆𝚎 𝚊𝚕𝚜𝚘 𝚘𝚏𝚏𝚎𝚛 𝚑𝚎𝚊𝚕𝚝𝚑𝚢 𝚘𝚙𝚝𝚒𝚘𝚗𝚜, 𝚊𝚕𝚕𝚎𝚛𝚐𝚎𝚗-𝚏𝚛𝚒𝚎𝚗𝚍𝚕𝚢 𝚖𝚎𝚊𝚕𝚜, 𝚏𝚊𝚖𝚒𝚕𝚢-𝚜𝚒𝚣𝚎 𝚏𝚘𝚘𝚍 𝚝𝚛𝚊𝚢𝚜, 𝚛𝚎𝚏𝚛𝚎𝚜𝚑𝚒𝚗𝚐 𝚜𝚖𝚘𝚘𝚝𝚑𝚒𝚎𝚜, 𝚊𝚗𝚍 𝚜𝚒𝚐𝚗𝚊𝚝𝚞𝚛𝚎 𝚌𝚘𝚌𝚔𝚝𝚊𝚒𝚕𝚜.
  </p>
  <ul style="margin-top: 20px;">
    <li>✅ 𝐖𝐢𝐝𝐞 𝐬𝐞𝐥𝐞𝐜𝐭𝐢𝐨𝐧 𝐨𝐟 𝐅𝐢𝐥𝐢𝐩𝐢𝐧𝐨 & 𝐀𝐦𝐞𝐫𝐢𝐜𝐚𝐧 𝐝𝐢𝐬𝐡𝐞𝐬</li>
    <li>✅ 𝐅𝐚𝐦𝐢𝐥𝐲-𝐟𝐫𝐢𝐞𝐧𝐝𝐥𝐲 & 𝐜𝐚𝐬𝐮𝐚𝐥 𝐯𝐢𝐛𝐞</li>
    <li>✅ 𝐆𝐫𝐨𝐮𝐩 𝐩𝐥𝐚𝐭𝐭𝐞𝐫𝐬 & 𝐩𝐚𝐫𝐭𝐲 𝐭𝐫𝐚𝐲𝐬</li>
    <li>✅ 𝐇𝐞𝐚𝐥𝐭𝐡𝐲 & 𝐚𝐥𝐥𝐞𝐫𝐠𝐲-𝐟𝐫𝐢𝐞𝐧𝐝𝐥𝐲 𝐨𝐩𝐭𝐢𝐨𝐧𝐬 (𝐰𝐢𝐭𝐡 𝐝𝐢𝐬𝐜𝐨𝐮𝐧𝐭𝐬!)</li>
    <li>✅ 𝐁𝐞𝐬𝐭𝐬𝐞𝐥𝐥𝐞𝐫𝐬 & 𝐜𝐫𝐨𝐰𝐝 𝐟𝐚𝐯𝐨𝐫𝐢𝐭𝐞𝐬 𝐦𝐚𝐫𝐤𝐞𝐝 𝐨𝐧 𝐭𝐡𝐞 𝐦𝐞𝐧𝐮</li>
    <li>✅ 𝐀𝐟𝐟𝐨𝐫𝐝𝐚𝐛𝐥𝐞 𝐩𝐫𝐢𝐜𝐞𝐬 — 𝐦𝐨𝐬𝐭 𝐦𝐞𝐚𝐥𝐬 𝐮𝐧𝐝𝐞𝐫 ₱𝟑𝟎𝟎</li>
    <li>✅ 𝐒𝐦𝐨𝐨𝐭𝐡𝐢𝐞𝐬, 𝐬𝐢𝐠𝐧𝐚𝐭𝐮𝐫𝐞 𝐝𝐫𝐢𝐧𝐤𝐬, 𝐚𝐧𝐝 𝐥𝐨𝐜𝐚𝐥 𝐛𝐞𝐞𝐫𝐬 𝐚𝐯𝐚𝐢𝐥𝐚𝐛𝐥𝐞</li>
  </ul>
</section>

  <nav>
    <a href="#appetizer">𝐀𝐩𝐩𝐞𝐭𝐢𝐳𝐞𝐫𝐬</a>
    <a href="#𝐒𝐢𝐝𝐞 𝐃𝐢𝐬𝐡𝐞𝐬">𝐒𝐢𝐝𝐞 𝐃𝐢𝐬𝐡𝐞𝐬</a>
    <a href="#𝐒𝐨𝐮𝐩𝐬">𝐒𝐨𝐮𝐩𝐬</a>
    <a href="#𝐇𝐞𝐚𝐥𝐭𝐡𝐲 𝐌𝐞𝐚𝐥𝐬">𝐇𝐞𝐚𝐥𝐭𝐡𝐲 𝐌𝐞𝐚𝐥𝐬</a>
    <a href="#𝐕𝐞𝐠𝐞𝐭𝐚𝐛𝐥𝐞𝐬 & 𝐒𝐚𝐥𝐚𝐝𝐬">𝐕𝐞𝐠𝐞𝐭𝐚𝐛𝐥𝐞𝐬 & 𝐒𝐚𝐥𝐚𝐝𝐬</a>
    <a href="#rice-meals">𝐑𝐢𝐜𝐞 𝐌𝐞𝐚𝐥𝐬</a>
    <a href="#𝐁𝐞𝐞𝐟 & 𝐏𝐨𝐫𝐤 𝐃𝐢𝐬𝐡𝐞𝐬">𝐁𝐞𝐞𝐟 & 𝐏𝐨𝐫𝐤 𝐃𝐢𝐬𝐡𝐞𝐬</a>
    <a href="#𝐂𝐡𝐢𝐜𝐤𝐞𝐧 𝐃𝐢𝐬𝐡𝐞𝐬">𝐂𝐡𝐢𝐜𝐤𝐞𝐧 𝐃𝐢𝐬𝐡𝐞𝐬</a>
    <a href="#noodles">𝐍𝐨𝐨𝐝𝐥𝐞𝐬</a>
    <a href="#desserts">𝐃𝐞𝐬𝐬𝐞𝐫𝐭𝐬</a>
    <a href="#drinks">𝐃𝐫𝐢𝐧𝐤𝐬</a>
    <a href="#𝐇𝐞𝐚𝐥𝐭𝐡𝐲 𝐃𝐫𝐢𝐧𝐤𝐬">𝐇𝐞𝐚𝐥𝐭𝐡𝐲 𝐃𝐫𝐢𝐧𝐤𝐬</a>
    <a href="#𝐒𝐦𝐨𝐨𝐭𝐡𝐢𝐞𝐬">𝐒𝐦𝐨𝐨𝐭𝐡𝐢𝐞𝐬</a>
    <a href="#𝐀𝐥𝐜𝐨𝐡𝐨𝐥">𝐀𝐥𝐜𝐨𝐡𝐨𝐥</a>
    <a href="#family">𝐅𝐚𝐦𝐢𝐥𝐲-𝐒𝐢𝐳𝐞 𝐌𝐞𝐚𝐥𝐬</a>
  </nav>

   <section id="appetizer">
    <h2>⭐ 𝐀𝐩𝐩𝐞𝐭𝐢𝐳𝐞𝐫𝐬</h2>
    <table>
      <tr><th>Dish</th><th>Name</th><th>Price</th></tr>
      <tr><td><img src="images/calamari.png" alt="\calamari" width="130" /></td><td>Crispy Calamari (Bestseller)</td><td>₱280</td></tr>
      <tr><td><img src="images/shanghai.png" alt="\shanghai" width="130" /></td><td>Lumpiang Shanghai Bites</td><td>₱220</td></tr>
      <tr><td><img src="images/buffalo.png" alt="\buffalo" width="130" /></td><td>Buffalo Chicken Wings (Bestseller)</td><td>₱350</td></tr>
      <tr><td><img src="images/nachos.png" alt="\nachos" width="130" /></td><td>Cheesy Nachos Overload</td><td>₱320</td></tr>
      <tr><td><img src="images/mozzarella.png" alt="\mozzarella" width="130" /></td><td>Fried Mozzarella Sticks</td><td>₱260</td></tr>
    </table>

  </section>

   <section id="𝐒𝐢𝐝𝐞 𝐃𝐢𝐬𝐡𝐞𝐬">
    <h2>🍟 𝐒𝐢𝐝𝐞 𝐃𝐢𝐬𝐡𝐞𝐬</h2>
    <table>
      <tr><th>Dish</th><th>Name</th><th>Ingredients</th><th>Price</th></tr>
      <tr><td><img src="images/fries.png" alt="\fries" width="130" /></td><td>Garlic Fries (Bestseller)</td><td>Potato fries, garlic butter, parmesan</td><td>₱180</td></tr>
      <tr><td><img src="images/corn.png" alt="\corn" width="130" /></td><td>Buttered Corn</td><td>Sweet corn, butter, pepper</td><td>₱150</td></tr>
      <tr><td><img src="images/wadges.png" alt="\wadges" width="130" /></td><td>Potato Wedges</td><td>Spiced wedges, aioli dip</td><td>₱180</td></tr>
      <tr><td><img src="images/rings.png" alt="\rings" width="130" /></td><td>Onion Rings</td><td>Onion, seasoned batter, ranch dip</td><td>₱190</td></tr>
        <tr><td><img src="images/coleslaw.png" alt="\coleslaw" width="130" /></td><td>Coleslaw</td><td>Cabbage, carrots, mayo dressing</td><td>₱120</td></tr>
    </table>

  </section>

   <section id="𝐒𝐨𝐮𝐩𝐬">
    <h2>🍲 𝐒𝐨𝐮𝐩𝐬</h2>
    <table>
      <tr><th>Dish</th><th>Name</th><th>Ingredients</th><th>Price</th></tr>
      <tr><td><img src="images/bulalo.jpg" alt="\Bulalo" width="130" /></td><td>Bulalo (Bestseller)</td><td>Beef shank, bone marrow, corn, veggies</td><td>₱380</td></tr>
      <tr><td><img src="images/sopas.jpg" alt="\sopas" width="130" /></td><td>Chicken Sopas</td><td>Chicken, macaroni, milk, veggies</td><td>₱260</td></tr>
      <tr><td><img src="images/clam.jpg" alt="\clam" width="130" /></td><td>Clam Chowder</td><td>Clams, cream soup, potatoes</td><td>₱280</td></tr>
      <tr><td><img src="images/hotsour.jpg" alt="\hotsour" width="130" /></td><td>Hot & Sour Soup</td><td>Tofu, mushrooms, bamboo shoots</td><td>₱250</td></tr>
    </table>

  </section>

  <section id="𝐇𝐞𝐚𝐥𝐭𝐡𝐲 𝐌𝐞𝐚𝐥𝐬">
    <h2>🥗 𝐇𝐞𝐚𝐥𝐭𝐡𝐲 𝐌𝐞𝐚𝐥𝐬</h2>
    <table>
      <tr><th>Dish</th><th>Name</th><th>Ingredients</th><th>Price</th></tr>
      <tr><td><img src="images/chicsalad.png" alt="\chicsalad" width="130" /></td><td>Grilled Chicken Salad Bowl (Bestseller)</td><td>Grilled chicken, greens, vinaigrette</td><td>₱280</td></tr>
      <tr><td><img src="images/fillet.png" alt="\fillet" width="130" /></td><td>Steamed Fish Fillet & Veggies</td><td>Fish, steamed mixed vegetables</td><td>₱320</td></tr>
      <tr><td><img src="images/wraps.png" alt="\wrap" width="130" /></td><td>Vegetable Wraps</td><td>Lettuce, tomato, grilled veggies, wrap</td><td>₱260</td></tr>
      <tr><td><img src="images/salad.png" alt="\salad" width="130" /></td><td>Quinoa Salad Bowl</td><td>Quinoa, mixed greens, grilled tofu</td><td>₱320</td></tr>
    </table>

  </section>

     <section id="𝐕𝐞𝐠𝐞𝐭𝐚𝐛𝐥𝐞𝐬 & 𝐒𝐚𝐥𝐚𝐝𝐬">
    <h2>🥗 𝐕𝐞𝐠𝐞𝐭𝐚𝐛𝐥𝐞𝐬 & 𝐒𝐚𝐥𝐚𝐝𝐬</h2>
    <table>
      <tr><th>Dish</th><th>Name</th><th>Price</th></tr>
      <tr><td><img src="images/pakbet.jpg" alt="\pakbet" width="130" /></td><td>Pinakbet (Bestseller)</td><td>₱260</td></tr>
      <tr><td><img src="images/chopsuy.jpg" alt="\chopsuy" width="130" /></td><td>Chopsuey</td><td>₱280</td></tr>
      <tr><td><img src="images/vegetable.jpg" alt="\vegetable" width="130" /></td><td>Grilled Vegetable Salad</td><td>₱250</td></tr>
      <tr><td><img src="images/caesar.jpg" alt="\caesar" width="130" /></td><td>Caesar Salad</td><td>₱280</td></tr>
    </table>

  </section>

  <section id="rice-meals">
    <h2>🍛 𝐑𝐢𝐜𝐞 𝐌𝐞𝐚𝐥𝐬</h2>
    <table>
      <tr><th>Dish</th><th>Name</th><th>Ingredients</th><th>Price</th></tr>
      <tr><td><img src="images/tapsilog.png" alt="\tapsilog" width="130" /></td><td>Tapsilog (Bestseller)</td><td>Beef tapa, garlic rice, egg</td><td>₱240</td></tr>
      <tr><td><img src="images/adobo.png" alt="\adobo" width="130" /></td><td>Adobo Rice Bowl</td><td>Pork adobo chunks, adobo rice, egg</td><td>₱220</td></tr>
      <tr><td><img src="images/liempo.png" alt="\liempo" width="130" /></td><td>Grilled Liempo Silog</td><td>Marinated pork belly, garlic rice, egg</td><td>₱260</td></tr>
      <tr><td><img src="images/chicken.png" alt="\chicken" width="130" /></td><td>BBQ Chicken Rice Meal</td><td>BBQ chicken thigh, java rice</td><td>₱250</td></tr>
      <tr><td><img src="images/steak.png" alt="\steak" width="130" /></td><td>Beef Burger Steak w/ Rice</td><td>Beef patty, mushroom gravy, steamed rice</td><td>₱230</td></tr>
    </table>
  </section>

    <section id="𝐁𝐞𝐞𝐟 & 𝐏𝐨𝐫𝐤 𝐃𝐢𝐬𝐡𝐞𝐬">
    <h2>🐖 𝐁𝐞𝐞𝐟 & 𝐏𝐨𝐫𝐤 𝐃𝐢𝐬𝐡𝐞𝐬</h2>
    <table>
      <tr><th>Dish</th><th>Name</th><th>Ingredients</th><th>Price</th></tr>
      <tr><td><img src="images/kare.png" alt="\kare" width="130" /></td><td>Kare-Kare (Bestseller)</td><td>Oxtail, peanut sauce, bagoong</td><td>₱450</td></tr>
      <tr><td><img src="images/pata.png" alt="\pata" width="130" /></td><td>Crispy Pata</td><td>Deep-fried pork leg, vinegar sauce</td><td>₱850</td></tr>
      <tr><td><img src="images/tapa.png" alt="\tapa" width="130" /></td><td>Beef Tapa Plate</td><td>Beef strips, garlic rice, egg</td><td>₱240</td></tr>
      <tr><td><img src="images/sisig.png" alt="\sisig" width="130" /></td><td>Pork Sisig</td><td>Chopped pork, onions, egg</td><td>₱320</td></tr>
      <tr><td><img src="images/belly.png" alt="\belly" width="130" /></td><td>Grilled Pork Belly</td><td>Marinated pork belly</td><td>₱260</td></tr>
    </table>
  </section>

    <section id="𝐂𝐡𝐢𝐜𝐤𝐞𝐧 𝐃𝐢𝐬𝐡𝐞𝐬">
    <h2>🍗 𝐂𝐡𝐢𝐜𝐤𝐞𝐧 𝐃𝐢𝐬𝐡𝐞𝐬</h2>
    <table>
      <tr><th>Dish</th><th>Name</th><th>Ingredients</th><th>Price</th></tr>
      <tr><td><img src="images/inasal.png" alt="\inasal" width="130" /></td><td>Chicken Inasal (Bestseller)</td><td>Marinated grilled chicken, atchara</td><td>₱280</td></tr>
      <tr><td><img src="images/fried.png" alt="\fried" width="130" /></td><td>Fried Chicken Basket</td><td>Classic crispy chicken</td><td>₱650</td></tr>
      <tr><td><img src="images/buffalowings.png" alt="\buffalowings" width="130" /></td><td>Buffalo Wings</td><td>Spicy wings, bleu cheese dip</td><td>₱350</td></tr>
      <tr><td><img src="images/honey.png" alt="\honey" width="130" /></td><td>Honey Garlic Chicken</td><td>Chicken thighs, honey garlic glaze</td><td>₱300
    </table>
  </section>

  <section id="noodles">
    <h2>🍜 𝐍𝐨𝐨𝐝𝐥𝐞𝐬</h2>
    <table>
      <tr><th>Dish</th><th>Name</th><th>Ingredients</th><th>Price</th></tr>
      <tr><td><img src="images/pancit.png" alt="\pancit" width="130" /></td><td>Pancit Canton (Bestseller)</td><td>Egg noodles, pork, shrimp, vegetables</td><td>₱250</td></tr>
      <tr><td><img src="images/spag.png" alt="\spag" width="130" /></td><td>Filipino Spaghetti</td><td>Sweet-style sauce, hotdog, ground pork, cheese</td><td>₱220</td></tr>
      <tr><td><img src="images/carb.png" alt="\carb" width="130" /></td><td>Carbonara Filipino Style</td><td>Cream sauce, bacon, egg, spaghetti</td><td>₱260</td></tr>
      <tr><td><img src="images/garlic.png" alt="\garlic" width="130" /></td><td>Garlic Butter Shrimp Pasta</td><td>Shrimp, garlic butter sauce, spaghetti</td><td>₱320</td></tr>
      <tr><td><img src="images/beef.png" alt="\beef" width="130" /></td><td>Beef Stroganoff Pasta</td><td>Creamy mushroom sauce, beef strips, fettuccine</td><td>₱310</td></tr>
    </table>
  </section>

  <section id="desserts">
    <h2>🍰 𝐃𝐞𝐬𝐬𝐞𝐫𝐭𝐬</h2>
    <table>
      <tr><th>Dish</th><th>Name</th><th>Ingredients</th><th>Price</th></tr>
      <tr><td><img src="images/halo.png" alt="\halo" width="130" /></td><td>Halo-Halo Supreme (Bestseller)</td><td>Mixed sweet beans, leche flan, ube, crushed ice</td><td>₱180</td></tr>
      <tr><td><img src="images/leche.png" alt="\leche" width="130" /></td><td>Classic Leche Flan</td><td>Egg yolk, condensed milk, caramel</td><td>₱150</td></tr>
      <tr><td><img src="images/banana.png" alt="\banana" width="130" /></td><td>Banana Split Sundae</td><td>Banana, ice cream, chocolate syrup</td><td>₱220</td></tr>
      <tr><td><img src="images/brown.png" alt="\brown" width="130" /></td><td>Brownie Ala Mode</td><td>Chocolate brownie, vanilla ice cream</td><td>₱200</td></tr>
      <tr><td><img src="images/manggo.png" alt="\mango" width="130" /></td><td>Mango Float Cup</td><td>Graham, mangoes, cream</td><td>₱180</td></tr>
    </table>
  </section>

  <section id="drinks">
    <h2>🥤 𝐃𝐫𝐢𝐧𝐤𝐬</h2>
    <table>
      <tr><th>Drink</th><th>Name</th><th>Price</th></tr>
      <tr><td><img src="images/tea.png" alt="\tea" width="130" /></td><td>House Iced Tea (Bestseller)</td><td>₱80</td></tr>
      <tr><td><img src="images/soft.png" alt="\soft" width="130" /></td><td>Soft Drinks (Coke, Sprite, Royal)</td><td>₱70</td></tr>
      <tr><td><img src="images/coffee.png" alt="\coffee" width="130" /></td><td>Brewed Coffee</td><td>₱90</td></tr>
      <tr><td><img src="images/hot.png" alt="\hot" width="130" /></td><td>Hot Tea</td><td>₱80</td></tr>
      <tr><td><img src="images/water.jpg" alt="\water" width="130" /></td><td>Bottled Water</td><td>₱50</td></tr>
    </table>
  </section>

   <section id="𝐇𝐞𝐚𝐥𝐭𝐡𝐲 𝐃𝐫𝐢𝐧𝐤𝐬">
    <h2>🧃 𝐇𝐞𝐚𝐥𝐭𝐡𝐲 𝐃𝐫𝐢𝐧𝐤𝐬</h2>
    <table>
      <tr><th>Dish</th><th>Name</th><th>Ingredients</th><th>Price</th></tr>
      <tr><td><img src="images/calamansi.png" alt="\calamansi" width="130" /></td><td>Fresh Calamansi Juice (Bestseller)</td><td>Fresh calamansi, honey</td><td>₱120</td></tr>
      <tr><td><img src="images/cucumber.png" alt="\cucumber" width="130" /></td><td>Cucumber Lemon Detox Water</td><td>Cucumber, lemon, mint</td><td>₱310</td></tr>
      <tr><td><img src="images/green.png" alt="\green" width="130" /></td><td>Green Smoothie</td><td>Spinach, apple, banana</td><td>₱160</td></tr>
      <tr><td><img src="images/ginger.png" alt="\ginger" width="130" /></td><td>Ginger Honey Tea (Hot/Cold)</td><td>Fresh ginger, honey</td><td>₱120</td></tr>
    </table>

  </section>

  <section id="𝐒𝐦𝐨𝐨𝐭𝐡𝐢𝐞𝐬">
    <h2>🍓 𝐒𝐦𝐨𝐨𝐭𝐡𝐢𝐞𝐬</h2>
    <table>
      <tr><th>Drink</th><th>Name</th><th>Price</th></tr>
      <tr><td><img src="images/mango.png" alt="\mango" width="130" /></td><td>Mango Smoothie (Bestseller)</td><td>₱160</td></tr>
      <tr><td><img src="images/strawbanana.png" alt="\strawbanana" width="130" /></td><td>Banana Strawberry Smoothie</td><td>₱170</td></tr>
      <tr><td><img src="images/avocado.jpg" alt="\avocado" width="130" /></td><td>Avocado Smoothie</td><td>₱180</td></tr>
      <tr><td><img src="images/watermelon.jpg" alt="\watermelon" width="130" /></td><td>Watermelon Slush</td><td>₱150</td></tr>
      <tr><td><img src="images/mixed.png" alt="\Mixed" width="130" /></td><td>Mixed Berries Smoothie</td><td>₱190</td></tr>
    </table>

  </section>

    <section id="𝐀𝐥𝐜𝐨𝐡𝐨𝐥">
    <h2>🍻 𝐁𝐞𝐞𝐫 & 𝐀𝐥𝐜𝐨𝐡𝐨𝐥 (𝐀𝐝𝐮𝐥𝐭𝐬 𝐚𝐫𝐞 𝐨𝐧𝐥𝐲 𝐚𝐥𝐥𝐨𝐰𝐞𝐝)</h2>
    <table>
      <tr><th>Drink</th><th>Name</th><th>Price</th></tr>
      <tr><td><img src="images/pilsen.jpg" alt="\pilsen" width="130" /></td><td>San Miguel Pale Pilsen</td><td>₱90</td></tr>
      <tr><td><img src="images/red.jpg" alt="\red" width="130" /></td><td>Red Horse</td><td>₱90</td></tr>
      <tr><td><img src="images/heineken.jpg" alt="\heineken" width="130" /></td><td>Heineken</td><td>₱150</td></tr>
      <tr><td><img src="images/soju.jpg" alt="\soju" width="130" /></td><td>Soju (Bestseller)</td><td>₱200</td></tr>
      <tr><td><img src="images/margarita.png" alt="\margarita" width="130" /></td><td>Classic Margarita</td><td>₱250</td></tr>
        <tr><td><img src="images/mojito.png" alt="\mojito" width="130" /></td><td>Mojito</td><td>₱250</td></tr>
      <tr><td><img src="images/cocktails.png" alt="\cocktails" width="130" /></td><td>Signature cocktails</td><td>₱220</td></tr>
    </table>
  </section>

  <section id="family">
    <h2>👨‍👩‍👧‍👦 𝐅𝐚𝐦𝐢𝐥𝐲-𝐒𝐢𝐳𝐞 𝐌𝐞𝐚𝐥𝐬</h2>
    <table>
      <tr><th>Dish</th><th>Name</th><th>Serving</th><th>Price</th></tr>
      <tr><td><img src="images/bilao.jpg" alt="\bilao" width="130" /></td><td>Bilao Pancit Canton (Bestseller)</td><td>Good for 5–6</td><td>₱850</td></tr>
      <tr><td><img src="images/chic.jpg" alt="\chic" width="130" /></td><td>Chicken BBQ Platter</td><td>10 pcs</td><td>₱950</td></tr>
      <tr><td><img src="images/bbq.jpg" alt="\bbq" width="130" /></td><td>Pork BBQ Party Set</td><td>12 sticks</td><td>₱780</td></tr>
      <tr><td><img src="images/fiesta.jpg" alt="\fiesta" width="130" /></td><td>Fiesta Fried Chicken</td><td>8 pcs</td><td>₱880</td></tr>
      <tr><td><img src="images/caldereta.jpg" alt="\caldereta" width="130" /></td><td>Beef Caldereta Tray</td><td>Family tray</td><td>₱1,200</td></tr>
    </table>
  </section>

  <footer>
    <p>📍 Visit us at San Pablo City | Angeles City | 📞 123-456 | SecretSpoonRestaurant@gmail.com | </p> 🕒 Opening Hours:
Monday – Sunday |  8 AM – 10 PM
    <p>© 2025 The Secret Spoon. All Rights Reserved</p>
  </footer>
</body>
</html>

