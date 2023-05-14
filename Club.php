<?php
abstract class Club{
 private string $clubName;
 private string $location;
 private string $stadium;
 private string $manager;
 public function __construct(string $clubName, string 
$location, string $stadium, string $manager)
 {
 $this->clubName = $clubName;
 $this->location = $location;
 $this->stadium = $stadium;
 $this->manager = $manager;
 }
 public function getClubName(): string
 {
 return $this->clubName;
 }
 public function setClubName(string $clubName): void
 {
 $this->clubName = $clubName;
 }
 public function getLocation(): string
 {
 return $this->location;
 }
 public function setLocation(string $location): void
 {
 $this->location = $location;
 }
 public function getStadium(): string
 {
 return $this->stadium;
 }
 public function setStadium(string $stadium): void
 {
 $this->stadium = $stadium;
 }
 public function getManager(): string
 {
 return $this->manager;
 }
 public function setManager(string $manager): void
 {
 $this->manager = $manager;
 }
 public function description(): string
 {
 $desc = "{$this->getClubName()} is a football club 
based in {$this->getLocation()}. Their home stadium is the 
{$this->getStadium()} and their current manager is {$this->manager}.";
 return $desc;
 }
}
class PremierLeagueClub extends Club {
 private int $position;
 private int $points;
 private int $wins;
 private int $draw;
 private int $loses;
 public function __construct(string $clubName, string 
$location, string $stadium, string $manager, int $position, 
int $points, int $wins, int $draw, int $loses)
 {
 parent::__construct($clubName, $location, $stadium, 
$manager);
 $this->position = $position;
 $this->points = $points;
 $this->wins = $wins;
 $this->draw = $draw;
 $this->loses = $loses;
 }
 public function getPosition(): int
 {
 return $this->position;
 }
 public function setPosition(int $position): void
 {
 $this->position = $position;
 }
 public function getPoints(): int
 {
 return $this->points;
 }
 public function setPoints(int $points): void
 {
 $this->points = $points;
 }
 public function getWins(): int
 {
 return $this->wins;
 }
 public function setWins(int $wins): void
 {
 $this->wins = $wins;
 }
 public function getDraw(): int
 {
 return $this->draw;
 }
 public function setDraw(int $draw): void
 {
 $this->draw = $draw;
 }
 public function getLoses(): int
 {
 return $this->loses;
 }
 public function setLoses(int $loses): void
 {
 $this->loses = $loses;
 }
}