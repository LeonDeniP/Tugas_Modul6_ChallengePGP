<?php
class Player{
 private string $name;
 private int $age;
 private string $position;
 private string $salary;
 private Club $club;
 public function getName(): string
 {
 return $this->name;
 }
 public function setName(string $name): void
 {
 $this->name = $name;
 }
 public function getAge(): int
 {
 return $this->age;
 }
 public function setAge(int $age): void
 {
 $this->age = $age;
 }
 public function getPosition(): string
 {
 return $this->position;
 }
 public function setPosition(string $position): void
 {
 $this->position = $position;
 }
 public function getSalary(): string
 {
 return $this->salary;
 }
 public function setSalary(string $salary): void
 {
 $this->salary = $salary;
 }
 public function getClub(): Club
 {
 return $this->club;
 }
 public function setClub(Club $club): void
 {
 $this->club = $club;
 }
}
