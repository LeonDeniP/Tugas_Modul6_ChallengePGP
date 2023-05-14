<!DOCTYPE html>
<html>
<head>
 <title>Club Profile</title>
 <style>
 body {
 font-family: 'Segoe UI', sans-serif;
 background-color: #f2f2f2;
 color: #333;
 margin: 0;
 padding: 0;
 }
 header {
 background-color: #265f7d;
 color: #fff;
 padding: 30px;
 text-align: center;
 box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
 }
 h1 {
 font-size: 36px;
 margin: 0;
 line-height: 1.2;
 text-shadow: 2px 2px #444;
 }
 h2 {
 font-size: 24px;
 margin-top: 5px;
 font-weight: normal;
 line-height: 1.2;
 text-shadow: 1px 1px #444;
 }
 table {
 margin: 20px auto;
 border-collapse: collapse;
 box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
 background-color: #fff;
 width: 80%;
 max-width: 600px;
 border-radius: 10px;
 overflow: hidden;
 }
 th, td {
 padding: 15px;
 text-align: left;
 border-bottom: 1px solid #ddd;
 font-size: 18px;
 font-weight: normal;
 color: #555;
 }
 th {
 background-color: #f2f2f2;
 font-size: 20px;
 color: #666;
 text-transform: uppercase;
 letter-spacing: 1px;
 font-weight: bold;
 }
 td {
 font-weight: 500;
 }
 .btn-container {
 display: flex;
 justify-content: center;
 margin-top: 30px;
 }
 .btn {
 display: inline-block;
 background-color: #265f7d;
 color: #fff;
 border: none;
 padding: 15px 30px;
 text-align: center;
 text-decoration: none;
 font-size: 18px;
 font-weight: bold;
 border-radius: 5px;
 box-shadow: 0 2px 5px rgba(0,0,0,0.3);
 transition: background-color 0.3s;
 margin: 10px;
 }
 .btn:hover {
 background-color: #00468b;
 }
 </style>
</head>
<body>
<header>
 <h1>Club Profile</h1>
 <?php
 require_once 'Player.php';
 require_once 'Club.php';
 $benzema = new Player();
 $benzema->setAge(35);
 $benzema->setPosition("Central-Forward");
 $benzema->setSalary("£15,000,000 per year");
 $benzema->setClub(new PremierLeagueClub("Real Madrid", "Madrid, Spanyol",
 "Santiago Bernabeu", "Carlo Ancelotti", 4, 63, 19, 6, 7));
 ?>
 <h2><?php echo $benzema->getClub()->getClubName(); 
?></h2>
</header>
<table>
 <tr>
 <th>Location</th>
 <td><?php echo $benzema->getClub()->getLocation(); 
?></td>
 </tr>
 <tr>
 <th>Stadium</th>
 <td><?php echo $benzema->getClub()->getStadium(); 
?></td>
 </tr>
 <tr>
 <th>Manager</th>
 <td><?php echo $benzema->getClub()->getManager(); 
?></td>
 </tr>
 <tr>
 <th>Description</th>
 <td><?php echo $benzema->getClub()->description(); 
?></td>
 </tr>
</table>
<div class="btn-container">
 <a href="ProfilePlayer.php" class="btn">Back</a>
 <a href="ClubMatch.php" class="btn">Current La Liga Result</a>
</div>
</body>
</html>